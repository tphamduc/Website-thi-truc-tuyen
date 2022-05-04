<?php 
include 'KetNoi.php';

$get = "SELECT khoa_hoc.ten_khoa_hoc, khoa_hoc.mota,khoa_hoc.maKH,khoa_hoc.status FROM khoa_hoc";
$response = mysqli_query($conn,$get);

$get_count = "SELECT COUNT( maKH) FROM khoa_hoc";
$dem = mysqli_query($conn,$get_count);
?>