<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="cart.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<?php 
		include 'KetNoi.php';
		session_start();
	?>
	<title>Giỏ hàng</title>
</head>
<body>
	<form method="GET">
	<div class="menu">
			<ul>
				<li><a href="index.php">Trang chủ</a></li>
				<li><a href=" cart.php">Giỏ hàng</a></li>
				<li><a href="my_lecture.php">Các khóa học của tôi</a></li>
				<input type="submit" name="out" value="Đăng xuất">
			</ul>
	</div> 
	<?php 
	$gh = "";
	$cart = [];
	$err ="";
	if (!isset($_SESSION['add_cart'])) {
		$err = " Chưa có khóa học nào";
	}
	else{
	$maKH = $_SESSION['add_cart'];

	$getKH = "SELECT * FROM `khoa_hoc` WHERE maKH = '$maKH' ";
	$up = mysqli_query($conn,$getKH);

	$detail = mysqli_fetch_array($up);

	$loo = [
		'id' => $detail[0],
		'name' => $detail[1],
		'mota' => $detail[2],
	];

	$_SESSION['cart'][$maKH] = $loo;
	$cart = $_SESSION['cart'];
	}
	?>
	<div class="container">
		<div class="left">
			<h1>GIỎ HÀNG</h1>
			<table>
				<thead>
					<tr>
						<th>Mã khóa học</th>
						<th>Tên khóa học</th>
						<th>Mô tả</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($cart as $key => $value) { ?>
					<tr>
						<td><?php echo $value['id']; ?></td>
						<td><?php echo $value['name']; ?></td>
						<td><?php echo $value['mota']; ?></td>
						<td><a href="Xuly_cart.php?id=<?php echo $value['id']?>&action=delete">Xóa</a></td>
						<td><a href="Xuly_cart.php?id=<?php echo $value['id']?>&action=buy">Thanh Toán</a></td>
					</tr>
				<?php }  ?>
				</tbody>
			</table>
		</div>
		<div class="right">
			<h1>Welcome
			<?php 
				echo $_SESSION['user'];
			?>
			</h1>
			<div class="score_btn">
				<input type="submit" name="score" value="Xem điểm học tập">
			</div>
			<p><?php
				echo $err;
			 ?></p>
		</div>
	</div>
	</form>
</body>
</html>
<?php 
	if (isset($_GET['out'])) {
		unset($_SESSION['cart']);
		unset($_SESSION['add_cart']);
		unset($_SESSION['user']);
		header("location: login.php");
	}

	if (isset($_GET['score'])) {
		header("location: See_score.php");
	}
?>

