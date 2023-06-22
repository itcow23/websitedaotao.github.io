<?php 
    require "check_login.php";
    require "./admin/model/connect.php"; 
    $maKhoaHoc = $_GET['maKhoaHoc'];
    $maBaiHoc = $_GET['maBaiHoc'];
    $maNoiDung = $_GET['maNoiDung'];

    $sql1= "Select * from khoahoc where maKhoaHoc='$maKhoaHoc'";
    $khoahocs = (new Connection())->select($sql1);
    $khoahoc = mysqli_fetch_array($khoahocs);
    
        $sql3= "Select * from noidungkhoahoc where maKhoaHoc='$maKhoaHoc'";
        $noidungs = (new Connection())->select($sql3);
    
        $sql4= "Select * from baihoc where maKhoaHoc='$maKhoaHoc'";
        $baihocs = (new Connection())->select($sql4);

    $sql2= "Select * from baihoc where maKhoaHoc='$maKhoaHoc' and maBaiHoc='$maBaiHoc'";
    $baihocss = (new Connection())->select($sql2);
    $infobaihoc = mysqli_fetch_array($baihocss);

    $sql5= "Select * from noidungkhoahoc where maKhoaHoc='$maKhoaHoc' and maNoiDung='$maNoiDung'";
    $tennoidung = (new Connection())->select($sql5);
    $infonoidung = mysqli_fetch_array($tennoidung);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Lesson</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/examples.css" rel="stylesheet" />
    <link href="./assets/css/gsdk.css" rel="stylesheet" />
    <link href="./assets/css/paper-kit.css?v=2.1.0" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet">
</head>

<body class="ecommerce">
<nav class="navbar navbar-expand-lg fixed-top nav-down">
        <div class="container">
            <div class="navbar-translate">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Elearning</a>
                </div>
                <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
				</button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="course.php" data-scroll="true" href="javascript:void(0)">Khóa Học</a>
                    </li>
                    <li class="nav-item" style="<?php if($_SESSION['level']==2){ ?> display: none; <?php } ?>">
                        <a class="nav-link" href="register_course.php" data-scroll="true" href="javascript:void(0)">Đăng ký khóa học</a>
                    </li>
                    <li class="nav-item" style="<?php if($_SESSION['level']==1){ ?> display: none; <?php } ?>">
                        <a class="nav-link" href="manage_content_course.php" data-scroll="true" href="javascript:void(0)">Quản lý khóa học</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"><?php echo $_SESSION['hoTen'] ?></a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                            <a class="dropdown-item" href="account.php"><i class="nc-icon nc-bank"></i>&nbsp; Tài Khoản</a>
                            <a href="logout.php" class="dropdown-item"><i class="nc-icon nc-basket"></i>&nbsp; Đăng Xuất</a>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="section section-blog">
            <div class="container">
                <div class="row" style="padding-top: 40px;">
                    <div class="col-md-4">
                        <div class="product-details">
                            <a href="#">
                                <h3 class="title"><?php echo $khoahoc['tenKhoaHoc'] ?></h3>
                            </a>
                        </div>
                        <?php foreach($noidungs as $noidung): ?>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <?php echo $noidung['noiDungKhoaHoc'] ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <ul style="padding-left: 20px;">
                                            <?php foreach($baihocs as $baihoc): ?>
                                            <li style="list-style-position: outside;">
                                                <a href="lesson.php?maKhoaHoc=<?php echo $khoahoc['maKhoaHoc'] ?>&maBaiHoc=<?php echo $baihoc['maBaiHoc'] ?>&maNoiDung=<?php echo $baihoc['maNoiDung'] ?>">
                                                    <?php echo $baihoc['tenBaiHoc'] ?>
                                                </a>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <!-- Acordeon  -->
                    </div>
                    <div class="col-md-8">
                        <div class="product-details">
                                <h3 class="title"><?php echo $infonoidung['noiDungKhoaHoc'] ?></h3>
                                <span><?php echo $infobaihoc['moTa'] ?></span>
                            </div>
                            
                            <br>
                        <div>
                            <h4> Video bài giảng </h4>
                            <br>
                            <iframe 
                            width="560" height="315" 
                            src="<?php echo $infobaihoc['video'] ?>" 
                            title="<?php echo $infobaihoc['tieuDe'] ?>" 
                            frameborder="0" allow="accelerometer; 
                            autoplay; clipboard-write; encrypted-media; 
                            gyroscope; picture-in-picture; web-share" allowfullscreen>
                            </iframe>
                        </div>
                        <h3>
                            <a href='homework.php?maKhoaHoc=<?php echo $maKhoaHoc ?>&maBaiHoc=<?php echo $maBaiHoc ?>&maNoiDung=<?php echo $maNoiDung ?>'>Bài tập</a>
                        </h3>
                    </div>
                </div>

            </div>

          
        </div>
        <!-- wrapper -->

</body>

<!-- Core JS Files -->
<script src="./assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="./assets/js/popper.js" type="text/javascript"></script>
<script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Plugin for Switches -->
<script src="./assets/js/bootstrap-switch.min.js"></script>

<!--  Plugins for Slider -->
<script src="./assets/js/nouislider.js"></script>

<!--  Plugins for Select -->
<script src="./assets/js/bootstrap-select.js"></script>

<!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/paper-kit.js?v=2.1.0"></script>






</html>