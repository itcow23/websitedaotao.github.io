<?php
require  "check_login.php";
require "./admin/model/connect.php";

$maBaiHoc = $_GET['maBaiHoc'];
$maKhoaHoc = $_GET['maKhoaHoc'];
$maNoiDung = $_GET['maNoiDung'];
$maBinhLuan = $_POST['maBinhLuan'];
$noiDung =  $_POST['noiDung'];

$sql = "update binhluan set noiDung = '$noiDung' where maBinhLuan = '$maBinhLuan' ";
$result = (new Connection())->excute($sql);

header( "Location: homework.php?maKhoaHoc=$maKhoaHoc&maNoiDung=$maNoiDung&maBaiHoc=$maBaiHoc" );