<?php
require "check_login.php";
require "./admin/model/connect.php";

$maKH = $_POST["maKhoaHoc"];
$noiDung = $_POST[ "noiDungKhoaHoc" ];
$maNoiDung =  $_POST[ "maNoiDung" ];

$sql= "update noidungkhoahoc set  noiDungKhoaHoc='$noiDung', maKhoaHoc = '$maKH' where maNoiDung='$maNoiDung'";
$result = (new Connection())->excute($sql);

$_SESSION['code'] = "success";
$_SESSION['status'] = "Cập nhật nội dung khoa học thành công";
header( "location: manage_content_course.php" );