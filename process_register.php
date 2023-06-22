<?php
require  "check_login.php";
require "./admin/model/connect.php";

$maKhoaHoc = $_POST['maKhoaHoc'];
$maLop =  $_POST['maLop'];
$tenHV = $_POST['tenHV'];
$tenGV =  $_POST['tenGV'];
$maTK =  $_POST['maTK'];

$sql = "INSERT INTO dangkykhoahoc (maLop,maKhoaHoc,tenGV, tenHV,maTK ) VALUES ('$maLop', '$maKhoaHoc', '$tenGV', '$tenHV','$maTK')";
$result =  (new Connection())->excute($sql);

$_SESSION['success'] = "Đăng ký thành công";
header( "Location: register_course.php" );