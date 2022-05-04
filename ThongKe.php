<!DOCTYPE html>
<html>
<head>
	<title>Thống kê</title>
	<link rel="stylesheet" type="text/css" href="ThongKe.css">
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
			<?php
			if (isset($_POST['users'])) {
			?>
				<h1>Danh sách user</h1>
				<table>
					<th>User_id</th>
					<th>Họ tên</th>
					<th>Username</th>
				<?php 
				$list = "SELECT * FROM user WHERE level = '0' ";
				$do = mysqli_query($conn,$list);

				while ($row=mysqli_fetch_array($do)) {
				?>
					<tr>
						<td><?php echo $row[0]; ?></td>
						<td><?php echo $row[1]; ?></td>
						<td><?php echo $row[2]; ?></td>
					</tr>

			<?php } ?>
			</table>
			<?php
			}
			elseif (isset($_POST['users_sc'])) {
			 ?>
			 	<h1>Danh sách điểm user</h1>
			 	<table>
					<th>Họ tên</th>
					<th>Mã khóa học</th>
					<th>Điểm</th>
				<?php 
				$list_sc = "SELECT diem.diem,diem.maKH,user.ho_ten FROM diem INNER JOIN user ON user.user_id = diem.id_user";
				$do_sc = mysqli_query($conn,$list_sc);

				while ($row=mysqli_fetch_array($do_sc)) {
				?>
					<tr>
						<td><?php echo $row[2]; ?></td>
						<td><?php echo $row[1]; ?></td>
						<td><?php echo $row[0]; ?></td>
					</tr>

			<?php } ?>
			</table>
			<?php }
			else{
			?>
				<p>Click vào các tùy chọn thống kê để xem kết quả</p>
			<?php }?>
		</div>
		<div class="right">
			<h1>Welcome
			<?php 
				echo $_SESSION['user'];
			?>
			</h1>
			<h2>Tùy chọn thống kê</h2>
			<div class="users">
				<input type="submit" name="users" value="Danh sách user">
			</div>
			<div class="score">
				<input type="submit" name="users_sc" value="Danh sách điểm user">
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
?>
