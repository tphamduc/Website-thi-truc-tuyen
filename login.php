<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<?php 
		include "Xuly_form_DN.php";
	?>
</head>
<body>
	<form method="POST">
	<div class="container">
		<div class="background">
			
		</div>
		<div class="login_box">
			<div class="head">
				<h2>HỆ THỐNG THI VÀ HỌC TRỰC TUYẾN</h2>
			</div>
			<div class="err">
				<?php 
					echo "<p style='text-align: center; color: red; margin-top: 30px;'>$err</p>";
				?>
			</div>
			<div class="usname">
				<input type="text" name="username" placeholder="Username">				
			</div>
			<div class="pass">
				<input type="password" name="pass" placeholder="Password">
			</div>
			<div class="sub_btn">
				<input type="submit" name="login" value="ĐĂNG NHẬP">
			</div>
			<div class="dki">
				<p>Bạn chưa có tài khoản ? <a href="signin.php">Đăng ký ngay</a></p>
			</div>
		</div>
	</div>
	</form>
</body>
</html>