<?php 
include 'KetNoi.php';
?>
<?php 
	$err = ""; 	
	if (isset($_POST['dki'])) {
		if (($_POST['fname']) == "" && ($_POST['user']) == "" && ($_POST['pass1'])== "" && ($_POST['pass2'])== "") {
			$err = "Bạn cần nhập đầy đủ thông tin";
		}
		elseif (($_POST['fname']) != "" && ($_POST['user']) != "" && ($_POST['pass1']) !="" && ($_POST['pass2']) !="" ) {
			$hoten = $_POST['fname'];
			$user = $_POST['user'];

			if ($_POST['pass1'] == $_POST['pass2']) {
				$pass = $_POST['pass1'];

			$old = "SELECT * FROM user WHERE user.user_name= '$user'";
			$res = mysqli_query($conn,$old);

			if (mysqli_num_rows($res) > 0) {
				$err = "Tên đăng nhập đã tồn tại";
					}
			else{
			$sql = "INSERT INTO user (user_id, ho_ten, user_name, pass, level) VALUES (NULL, '$hoten', '$user', '$pass', '0')";

			$do=mysqli_query($conn,$sql);
			header("location: login.php"); 
				}
			}
			else{
				$err = "Mật khẩu không khớp";
			}
		
	}
}
?>