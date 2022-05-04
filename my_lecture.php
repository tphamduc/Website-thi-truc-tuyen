<!DOCTYPE html>
<html>
<head>
	<title>Khóa học của tôi</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<?php 
		include 'KetNoi.php';
		include 'KhoaHoc.php';
		session_start();
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
			<div>
				<h1>Các khóa học bạn đang có</h1>
			</div>
			<?php 
				$noti = "";
				$detail=[];
				$dem_KH = mysqli_fetch_array($dem);
				for ($i = 0; $i < $dem_KH[0]; $i++) {
					$row=mysqli_fetch_array($response);
					if ($row[3] == "1") {
						
			?>
			<div class="course" >
				<div class="main">
					<div style="width: 40%">
						<img src="img/anh1.jpg">
					</div>
					<div  style="width: 60%">
						<h3><?php echo $row[0]; ?></h3>
						<h5><?php echo $row[1]; ?></h5>
						<input type="submit" name="join<?php echo $i; ?>" value="Vào học"></input>	
					</div>
				</div>
			</div>	
			<?php }} ?>
		</div>
		<div class="right">
			<h1>Welcome
			<?php 
				echo $_SESSION['user'];
			?>
			</h1>
			<div class="profile">
				<input type="submit" name="score" value="Xem điểm học tập">
				<?php 
				for ($i = 0; $i < $dem_KH[0]; $i++) {
				if (isset($_POST['join'.$i])) {
					header("location: HTML_lecture.php");
					}
				}
				?>
				<p><?php echo "$noti";?></p>
			</div>
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

	if (isset($_POST['score'])) {
		header("location: See_score.php");
	}
?>