<?php 
	session_start();
	include 'KetNoi.php';
	$id= "";
	$action="";
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	
	$action ="";
	if (isset($_GET['action'])) {
		$action = $_GET['action'];
	}
	if ($action == "delete") {
		unset($_SESSION['cart'][$id]);
	}
	if ($action == "buy") {
		$sql = "UPDATE khoa_hoc SET status = '1' WHERE khoa_hoc.maKH = $id";
		$do = mysqli_query($conn,$sql);
		unset($_SESSION['cart'][$id]);
		header("location: my_lecture.php");
	}
	header("location:cart.php");
}
?>
