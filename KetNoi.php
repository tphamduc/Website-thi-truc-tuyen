<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>test database</title>
</head>
<body>
	<?php
	$conn= mysqli_connect('localhost','root','','k69_nhom6') or die("không thể kết nối cơ sở dữ liệu");
	if ($conn) {
		mysqli_query($conn,"SET NAMES 'utf8");
	}
	else{
		echo "Kết nối thất bại".mysqli_connect_erro();
	}
	?>
</body>
</html>