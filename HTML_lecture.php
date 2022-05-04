<!DOCTYPE html>
<html>
<head>
	<title>Khóa học HTML</title>
	<link rel="stylesheet" type="text/css" href="HTML_lecture.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<?php
	session_start();
		include 'KetNoi.php';
	 ?>
</head>
<body>
	<form method="POST">
	<div class="menu">
			<ul>
				<li><a href="index.php">Trang chủ</a></li>
				<li><a href=" cart.php">Giỏ hàng</a></li>
				<li><a href="my_lecture.php">Các khóa học của tôi</a></li>
				<input type="submit" name="out" value="Đăng xuất">
			</ul>
	</div>
	<div class="container">
		<div class="left">			
			<?php
			$count_ans_de = 0;
			$count_ans_tb = 0;
			$count_ans_kho = 0;
			$score_final= "";
			$get_quizz = "SELECT * FROM cau_hoi";
			$do = mysqli_query($conn,$get_quizz);

			//khai bao mang cau hoi
			$easy = array();
			$nor = array();
			$hard = array();
			$cut = array();
			?>

			 <?php
			 //khai bao class de lưu du lieu
			 class cau_hoi{
			 	public $noidung;
			 	public $luachon;
			 	public $dap_an;
			 	public $loai;
			 	public $dokho;
			 	public $id;

			 	function __construct($noidung,$luachon,$dap_an,$loai,$dokho,$id){
			 			$this->noidung = $noidung;
			 			$this->luachon = $luachon;
			 			$this->dap_an = $dap_an;
			 			$this->loai = $loai;
			 			$this->dokho = $dokho;
			 			$this->id = $id;
			 		}
			 	}
			  ?>

			 <?php 
			 //lay cau hoi tu db ve mang rieng biet
			 if (mysqli_num_rows($do)>0) {
			 	while ($data=mysqli_fetch_array($do)) {
			 		if ($data[6] == "easy") {
			 			$easy[] = new cau_hoi($data[1],$data[4],$data[5],$data[2],$data[6],$data[0]); 
			 		}
			 		elseif ($data[6] == "nor") {
			 			$nor[] = new cau_hoi($data[1],$data[4],$data[5],$data[2],$data[6],$data[0]); 
			 		}
			 		elseif ($data[6] == "hard") {
			 			$hard[] = new cau_hoi($data[1],$data[4],$data[5],$data[2],$data[6],$data[0]); 	
			 		}
			 	}
			 }
			 ?>

			 <?php
				// random cau hoi theo ty le
			 	$get_tile = "SELECT * FROM setup";
			 	$take_tile = mysqli_query($conn,$get_tile);

			 	$tile = mysqli_fetch_array($take_tile);

			 	$all_ques = array();

			 	$ques_easy = array_rand($easy,$tile[0]);
			 	$ques_normal = array_rand($nor,$tile[1]);
			 	$ques_hard = array_rand($hard,$tile[2]);

			 	for ($i=0; $i <count($ques_easy) ; $i++) { 
				  $all_ques[]= $easy[$ques_easy[$i]];
				}
				for ($i=0; $i <count($ques_normal) ; $i++) { 
				  $all_ques[]= $nor[$ques_normal[$i]];
				}
				for ($i=0; $i <count($ques_hard) ; $i++) { 
				  $all_ques[]= $hard[$ques_hard[$i]];
				}
			  ?>

			  <?php
			  //hien thi cau hoi 
			  if (!isset($_POST['create'])) {
			  ?>
			  	<div class="noti">
			  		<h2>CLICK TẠO ĐỀ THI ĐỂ BẮT ĐẦU LÀM BÀI</h2>
			  	</div>
			  	
			  <?php
			}else{
			  for ($i=0; $i < count($all_ques) ; $i++) { 
			  	// echo "Câu hỏi ".$i+1;
			  	if ($all_ques[$i]->loai == "sing") {
			  	?>
			  		<h3><?php echo $all_ques[$i]->noidung;?></h3>
			  		<?php
			  		 $cut = explode("::", $all_ques[$i]->luachon) ;
			  		 for ($g=0; $g < count($cut); $g++) { 
			  		 ?>
			  	<p><input type="radio" name="<?php echo 'ans'.$i; ?>" value ="<?php echo $cut[$g] ?>"><?php echo $cut[$g]; ?></p>
			  <?php 
			  	}
			  }
			  	elseif ($all_ques[$i]->loai == "multy") {
			  	?>
			  		<h3><?php echo $all_ques[$i]->noidung; ?></h3>
			  		<?php
			  		 $cut = explode("::", $all_ques[$i]->luachon) ;
			  		 for ($g=0; $g < count($cut); $g++) { 
			  		 ?>
			  		 <p><input type="checkbox" name="<?php echo 'ans'.$i.'[]'; ?>" value ="<?php echo $cut[$g] ?>"><?php echo $cut[$g]."."; ?></p>
			  	<?php
			  	}
			  }
			  	elseif ($all_ques[$i]->loai == "fill") {
			  	?>
			  		<h3><?php echo $all_ques[$i]->noidung; ?></h3>
			  		<input type="text" name="<?php echo 'ans'.$i; ?>">
			  	<?php
			  	}
				?>
				<input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $all_ques[$i]->id; ?>">
				<?php
			  }}
			   ?>
			   <div class="score_btn">
			   	<?php

			   // tinh diem
			   	if (isset($_POST['score'])) {
			   		for ($i=0; $i < count($all_ques); $i++) { 
			   			$id = $_POST['id'.$i];
			   			$gh = "SELECT dap_an FROM cau_hoi WHERE cau_hoi.id_quiz = $id";
			   			$take = mysqli_query($conn,$gh);
			   			$yay = mysqli_fetch_array($take);

			   			if ($all_ques[$i]->loai == "sing") {
			   				if (!isset($_POST['ans'.$i])) {
			   					$_POST['ans'.$i] = "";
			   				}
			   				elseif ($_POST['ans'.$i] == $yay[0]) {
			   					// $count_ans++;
			   					if ($all_ques[$i]->dokho == "easy") {
			   						$count_ans_de++;
			   					}
			   					elseif ($all_ques[$i]->dokho == "nor") {
			   						$count_ans_tb++;
			   					}
			   					elseif ($all_ques[$i]->dokho == "hard") {
			   						$count_ans_kho++;
			   					}
			   				}
			   			}
			   			elseif ($all_ques[$i]->loai == "fill") {
			   				if (!isset($_POST['ans'.$i])) {
			   					$_POST['ans'.$i] = "";
			   				}
			   				elseif ($_POST['ans'.$i] == $yay[0]) {
			   					// $count_ans++;
			   					if ($all_ques[$i]->dokho == "easy") {
			   						$count_ans_de++;
			   					}
			   					elseif ($all_ques[$i]->dokho == "nor") {
			   						$count_ans_tb++;
			   					}
			   					elseif ($all_ques[$i]->dokho == "hard") {
			   						$count_ans_kho++;
			   					}
			   				}
			   			}
			   		}
			   		// add_score(,$score_final);
			   		$x = $_SESSION['id'];
			   		$score_final = (($tile[4] / $tile[0])*$count_ans_de) + (($tile[5] / $tile[1] )*$count_ans_tb) + (($tile[6] / $tile[2])*$count_ans_kho);

			   		// $score_final = (($tile[4] / 4)*$tile[0]) + (($tile[5] / 4)*$tile[1]) + (($tile[6] / 4)*$tile[2]);
			   		
			   		$y = $score_final;
			   		$add = "INSERT INTO diem (id_user, maKH, diem, time) VALUES ('$x', '5', '$y', current_timestamp())";
					$run = mysqli_query($conn,$add);
			   	}
			   	?>
			   </div>
		</div>
		<div class="right">
			<h1>Welcome
			<?php 
				echo $_SESSION['user'];
			?>
			</h1>
			<div class="create">
				<input type="submit" name="create" value="TẠO ĐỀ THI">
			</div>

			<div class="nop_bai">
				<input type="submit" name="score" value="NỘP BÀI THI">
			</div>

			<div class="score_btn">
				<input type="submit" name="see_score_btn" value="XEM ĐIỂM HỌC TẬP">
			</div>

			<div class="noti">
				<h4><?php echo $score_final;?></h4>
			</div>

		</div>
	</div>
	</form>
</body>
</html>

<?php
	if (isset($_POST['see_score_btn'])) {
		header("location: See_score.php");
	}
 ?>
 <?php 
	if (isset($_POST['out'])) {
		unset($_SESSION['cart']);
		unset($_SESSION['add_cart']);
		unset($_SESSION['user']);
		header("location: login.php");
	}
?>

