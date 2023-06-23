<?php
require "check_login.php";
require "./admin/model/connect.php";

$maKH = $_POST["maKhoaHoc"];
$noiDung = $_POST[ "noiDungKhoaHoc" ];

$sql= "insert into  NoiDungKhoaHoc(maKhoaHoc, noiDungKhoaHoc) values('$maKH', '$noiDung')";
$result = (new Connection())->excute($sql);

$_SESSION['code'] = "success";
$_SESSION['status'] = "Thêm thành công";
header( "location: manage_content_course.php" );
