<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký</title>
	<link rel="stylesheet" type="text/css" href="signin.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<?php 
		include "KetNoi.php";
		include "Xuly_form_DK.php";
	?>
</head>
<body>
	<form method="post">
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
			<div class="Full_name">
				<input type="text" name="fname" placeholder="Full name">	
			</div>
			<div class="usname">
				<input type="text" name="user" placeholder="Username">		
			</div>
			<div class="pass">
				<input type="password" name="pass1" placeholder="Password">
			</div>
			<div class="pass_sec">
				<input type="password" name="pass2" placeholder="Nhập lại Password">
			</div>
			<div class="sub_btn">
				<input type="submit" name="dki" value="ĐĂNG KÝ">
			</div>
			<div class="dki">
				<p>Bạn đã có tài khoản ? <a href="login.php"><b>Đăng Nhập</b></a></p>
			</div>
		</div>
	</div>
	</form>
</body>
</html>