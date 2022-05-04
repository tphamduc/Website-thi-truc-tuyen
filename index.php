<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
				<li style="margin-left: -90%;"><p>
					<?php 
						if(isset($_SESSION['user'])){
							echo "Welcome  ".$_SESSION['user'];
						}else{
							header("location:login.php");
						}
					?>
				</p></li>
				<li><a href="index.php">Trang chủ</a></li>
				<li><a href=" cart.php">Giỏ hàng</a></li>
				<li><a href="my_lecture.php">Các khóa học của tôi</a></li>
				<input type="submit" name="out" value="Đăng xuất">
			</ul>
	</div>
	<div class="container">
		<div class="left">
			<div>
				<h1>Các khóa học có sẵn trên hệ thống</h1>
			</div>
			<?php 
				$noti = "";
				$detail=[];
				$dem_KH = mysqli_fetch_array($dem);
				for ($i = 0; $i < $dem_KH[0]; $i++) {
					$row=mysqli_fetch_array($response);
					if ($row[3] == "0") {
						
			?>
			<div class="course" >
				<div class="main">
					<div style="width: 40%">
						<img src="img/anh1.jpg">
					</div>
					<div  style="width: 60%">
						<h3><?php echo $row[0]; ?></h3>
						<h5><?php echo $row[1]; ?></h5>
						<input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row[2]; ?>">
						<input type="submit" name="add<?php echo $i; ?>" value="Thêm vào giỏ hàng"></input>	
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
				<input type="submit" name="profile" value="Xem điểm học tập">
				<?php 
				for ($i = 0; $i < $dem_KH[0]; $i++) {
				if (isset($_POST['add'.$i])) {
					if (isset($_POST['id'.$i])) {
						$noti = "Đã thêm khóa học vào giỏ hàng";
						$id = $_POST['id'.$i];
						$_SESSION['add_cart'] = $id;
						header("location:cart.php");
					}
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
	if (isset($_POST['profile'])) {
		header("location: See_score.php");
	}
?>
