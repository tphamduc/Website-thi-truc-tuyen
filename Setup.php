<!DOCTYPE html>
<html>
<head>
	<title>Cài đặt</title>
	<link rel="stylesheet" type="text/css" href="Setup.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<?php 
		include 'KetNoi.php';
		include 'KhoaHoc.php';
		session_start();
	?>
</head>
<body>
	<?php 
		$err="";
		$easy ="";
		$nor="";
		$hard="";
		$sum="";

	?>
	<form method="POST">
	<div class="menu">
			<ul>
				<li><a href="admin.php">Trang chủ</a></li>
				<li><a href="ThongKe.php">Thống kê</a></li>
				<li><a href="Setup.php">Cài đặt đề thi</a></li>
				<input type="submit" name="out" value="Đăng xuất">
			</ul>
	</div>
	<div class="container">
		<div class="left">
			<div class="easy">
				<input type="number" name="easy" value="<?php isset($_POST['easy']); echo $easy; ?>" placeholder="Số câu hỏi dễ">
				<input type="number" name="muc_easy" value="<?php isset($_POST['easy']); echo $easy; ?>" placeholder="mức độ điểm dễ">
			</div>
			<div class="nor">
				<input type="number" name="nor" value="<?php echo $nor ?>" placeholder="Số câu hỏi trung bình">
				<input type="number" name="muc_nor" value="<?php isset($_POST['easy']); echo $easy; ?>" placeholder="mức độ điểm trung bình">
			</div>
			<div class="hard">
				<input type="number" name="hard" value="<?php echo $hard ?>" placeholder="Số câu hỏi khó">
				<input type="number" name="muc_hard" value="<?php isset($_POST['easy']); echo $easy; ?>" placeholder="mức độ điểm khó">
			</div>
			<div class="sum">
				<input type="number" name="sum" value="<?php echo $sum ?>" placeholder="Tổng số câu hỏi">
			</div>
			<div class="sub_btn">
				<input type="submit" name="update" value="Cập nhật">
			</div>
		</div>
		<?php
			if (isset($_POST['update'])) {
				if ($_POST['easy'] =="" || $_POST['nor'] == "" || $_POST['hard'] == "" || $_POST['sum'] == "" || $_POST['muc_easy'] == "" || $_POST['muc_nor'] == "" || $_POST['muc_hard'] == "") {
					$err = "Bạn cần nhập thông tin";
				}
				else{
					$easy = $_POST['easy'];
					$nor = $_POST['nor'];
					$hard = $_POST['hard'];
					$sum = $_POST['sum'];
					$diem_easy = $_POST['muc_easy'];
					$diem_nor = $_POST['muc_nor'];
					$diem_hard = $_POST['muc_hard'];

					if ($sum != ($easy + $nor + $hard) && ($diem_easy + $diem_hard + $diem_nor) != 10) {
						$err = "Số câu hỏi hoặc tỉ lệ điểm không hợp lệ";
					}
					else{
						$sql = "UPDATE setup SET easy = $easy, nor='$nor',hard='$hard',sum='$sum',muc_easy='$diem_easy',muc_nor='$diem_nor',muc_hard='$diem_hard' WHERE 1";
						$do=mysqli_query($conn,$sql);
						$err = "thành công";

					}
					
				}
			}
		 ?>
		<div class="right">
			<h1>Welcome
			<?php 
				echo $_SESSION['user'];
			?>
			</h1>
			<p><?php echo $err; ?></p>
		</div>
	</div>
	</form>
</body>
</html>
<?php 
	if (isset($_POST['out'])) {
		unset($_SESSION['cart']);
		unset($_SESSION['add_cart']);
		unset($_SESSION['user']);
		header("location: login.php");
	}
?>