<?php 
include 'KetNoi.php';
session_start();
?>
<?php 
	$err = "";
	if (isset($_POST['login'])) {
		if (($_POST['username']) == "" || ($_POST['pass']) == "") {
			$err = "Bạn chưa nhập username hoặc password";
		}
		elseif (($_POST['username']) != "" && ($_POST['pass']) != "") {
			$user = $_POST['username'];
			$pass = $_POST['pass'];

			$sql = "SELECT level, ho_ten, user_id FROM user WHERE user_name = '$user' AND pass = '$pass' ";

			$do=mysqli_query($conn,$sql);

			if (mysqli_num_rows($do) > 0) {
				$level = mysqli_fetch_array($do);

				if ($level[0] == "0") {
					$_SESSION['user'] = "$level[1]";
					$_SESSION['id'] = "$level[2]";
					header("location: index.php");
				}
				elseif ($level[0] == "1") {
					$_SESSION['user'] = "$level[1]";
					$_SESSION['id'] = "$level[2]";
					header("location: admin.php");
				}
			}
			else{
				$err = "Sai tên hoặc mật khẩu";
			}
		}
	}

?>