<!DOCTYPE html>
<html>
<head>
	<title>Kết quả học tập</title>
	<link rel="stylesheet" type="text/css" href="score.css">
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
			<h2>ĐÂY LÀ KẾT QUẢ HỌC TẬP CỦA BẠN</h2>
			<div class="result">
				<?php

				$id_user = $_SESSION['id'];
				$sql = "SELECT * FROM diem WHERE id_user = '$id_user'";
				$do = mysqli_query($conn,$sql);
				?>
				<table>
					<tr align="center">
						<th>Khóa học</th>
						<th>Điểm</th>
						<th>Thời gian làm</th>
					</tr>
				<?php
				while ($row = mysqli_fetch_array($do)) {
				?>
					<tr align="center">
						<td><?php echo $row[2]; ?></td>
						<td><?php echo $row[3]; ?></td>
						<td><?php echo $row[4]; ?></td>
					</tr>
				<?php	
				}
				 ?>
				</table>
			</div>
		</div>
		<div class="right">
			<h1>Welcome
			<?php 
				echo $_SESSION['user'];
			?>
			</h1>
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
