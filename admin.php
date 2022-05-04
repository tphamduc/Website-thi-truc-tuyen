<!DOCTYPE html>
<html>
<head>
	<title>Trang quản trị</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
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
				<li><a href="admin.php">Trang chủ</a></li>
				<li><a href="ThongKe.php">Thống kê</a></li>
				<li><a href="Setup.php">Cài đặt đề thi</a></li>
				<input type="submit" name="out" value="Đăng xuất">
			</ul>
	</div>
	<div class="container">
		<div class="left">
			<div>
				<h1>Các khóa học có sẵn trên hệ thống</h1>
			</div>
			<?php 
				$err = "";
				$gh = [];
				while ($row=mysqli_fetch_array($response)) {
			?>
			<div class="course" >
				<div class="main">
					<div style="width: 40%">
						<img src="img/anh1.jpg">
					</div>
					<div  style="width: 60%">
						<h3><?php echo $row[2].".".$row[0]; ?></h3>
						<h5><?php echo $row[1]; ?></h5>
						<input type="hidden" name="id" value="<?php echo $row[2]; ?>">
					</div>
				</div>
			</div>	
			<?php } ?>
		</div>
		<div class="right">
			<h1>Welcome
			<?php 
				echo $_SESSION['user'];
			?>
			</h1>
			<div class="xoa">
				<h3>Xóa khóa học</h3>
				<input type="number" name="del" placeholder="ID khóa học">
				<input type="submit" name="del_btn" value="Xóa khóa học">
				<?php 
				// xoa khoa học
				if (isset($_POST['del_btn'])) {
					if ($_POST['del'] != "") {
						$id_khoa_hoc = $_POST['del'];
						$sql_d = "DELETE FROM khoa_hoc WHERE khoa_hoc.maKH = '$id_khoa_hoc'";
						$do_del = mysqli_query($conn,$sql_d);
						$err = "Xóa khóa học thành công";
						header("location: admin.php");
					}
					elseif ($_POST['del'] == ""){
						$err = "Mã khóa học trống hoặc không tồn tại";
					}
				}
				?>
			</div>
			<div class="them">
				<h3>Thêm khóa học</h3>
				<input type="text" name="topic" placeholder="Tên khóa học">
				<input type="text" name="content" placeholder="Nội dung khóa học">
				<input type="submit" name="add_btn" value="Thêm khóa học">
				<?php
				//thêm khóa học
				if (isset($_POST['add_btn'])) {
					if ($_POST['topic'] == "" && $_POST['content'] == "") {
						$err = "Tên khóa học và nội dung trống";
					}
					else{
						$topic = $_POST['topic'];
						$content = $_POST['content'];
						$sql_a = "INSERT INTO khoa_hoc (maKH, ten_khoa_hoc, mota, status) VALUES (NULL, '$topic' ,'$content' , '0')";
						$do_add = mysqli_query($conn,$sql_a);
						header("location: admin.php");
					}
				}
				 ?>
			</div>

			<div class="loi">
				<p><?php echo $err; ?></p>
			</div>
		</div>
	</div>
	</form>
</body>
</html>
<?php 
	if (isset($_POST['out'])) {
		unset($_SESSION['user']);
		header("location: login.php");
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

