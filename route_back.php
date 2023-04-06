<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Route Front-end</title>

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
                        <a class="nav-link" href="./index.html" data-scroll="true" href="javascript:void(0)">Components</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">List Course</a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                            <a class="dropdown-item" href="../sections.html#headers"><i class="nc-icon nc-tile-56"></i>&nbsp; HTML</a>
                            <a class="dropdown-item" href="../sections.html#features"><i class="nc-icon nc-settings"></i>&nbsp; CSS</a>
                            <a class="dropdown-item" href="../sections.html#blogs"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Javascript</a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Routes</a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                            <a class="dropdown-item" href="route_front.html"><i class="nc-icon nc-bank"></i>&nbsp; Front-end</a>
                            <a class="dropdown-item" href="route_back.html"><i class="nc-icon nc-basket"></i>&nbsp; Back-end</a>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-danger btn-round" data-toggle="modal" data-target="#loginModal">
                            Login
                        </button>
                        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="false">
                            <div class="modal-dialog modal-register">
                                <div class="modal-content">
                                    <div class="modal-header no-border-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h6 class="text-muted">Welcome</h6>
                                        <h3 class="modal-title text-center">Elearning</h3>
                                        <p>Log in to your account</p>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" value="" placeholder="Email" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" value="" placeholder="Password" class="form-control" />
                                        </div>
                                        <button class="btn btn-block btn-round"> Log in</button>
                                    </div>
                                    <div class="modal-footer no-border-footer">
                                        <span class="text-muted  text-center">Looking <a href="#paper-kit">create an account</a> ?</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="section section-blog">
            <div class="container">
                <div class="row" style="margin-top: 40px;">
                    <div class="col-md-12" style="margin-top: 40px;">
                        <div class="title">
                            <h3 class="text-dark font-weight-bold">Lộ trình học Back-end</h3>
                        </div>
                        <div class="content">
                            <p>
                                Hầu hết các websites hoặc ứng dụng di động đều có 2 phần là Front-end và Back-end. Front-end là phần giao diện người dùng nhìn thấy và có thể tương tác, đó chính là các ứng dụng mobile hay những website bạn đã từng sử dụng. Vì vậy, nhiệm vụ của lập trình
                                viên Front-end là xây dựng các giao diện đẹp, dễ sử dụng và tối ưu trải nghiệm người dùng.
                            </p>
                            <p>
                                Tại Việt Nam, lương trung bình cho lập trình viên front-end vào khoảng 16.000.000đ / tháng.
                            </p>
                            <p>
                                Dưới đây là các khóa học F8 đã tạo ra dành cho bất cứ ai theo đuổi sự nghiệp trở thành một lập trình viên Front-end.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h3 class="text-dark font-weight-bold " style="margin-bottom: 10px;">1. HTML</h3>
                            <p class="">
                                Để học web Front-end chúng ta luôn bắt đầu với ngôn ngữ HTML và CSS, đây là 2 ngôn ngữ có mặt trong mọi website trên internet. Trong khóa học này F8 sẽ chia sẻ từ những kiến thức cơ bản nhất. Sau khóa học này bạn sẽ tự làm được 2 giao diện websites là
                                The Band và Shopee.
                            </p>
                        </div>
                        <div class="content" style="display: flex;">
                            <div class="col-3">
                                <img src="./assets/img/html.png" alt="" style="max-width: 200px;">
                            </div>
                            <div class="col-9">
                                <a href="#">
                                    <h3 class="text-dark font-weight-bold">HTML</h3>
                                    <span class="text-danger font-weight-bold">Free</span>
                                </a>
                                <p>
                                    Từ cơ bản tới chuyên sâu, thực hành 8 dự án, hàng trăm bài tập, trang hỏi đáp riêng, cấp chứng chỉ sau khóa học và mua một lần học mãi mãi.
                                </p>
                                <a href="#" class="btn btn-danger">
                                    Xem khóa học
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h3 class="text-dark font-weight-bold" style="margin-bottom: 10px;">2. CSS</h3>
                            <p>
                                Để học web Front-end chúng ta luôn bắt đầu với ngôn ngữ HTML và CSS, đây là 2 ngôn ngữ có mặt trong mọi website trên internet. Trong khóa học này F8 sẽ chia sẻ từ những kiến thức cơ bản nhất. Sau khóa học này bạn sẽ tự làm được 2 giao diện websites là
                                The Band và Shopee.
                            </p>
                        </div>
                        <div class="content" style="display: flex;">
                            <div class="col-3">
                                <img src="./assets/img/css.png" alt="" style="max-width: 200px;">
                            </div>
                            <div class="col-9">
                                <a href="#">
                                    <h3 class="text-dark font-weight-bold">HTML</h3>
                                    <span class="text-danger font-weight-bold">Free</span>
                                </a>
                                <p>
                                    Từ cơ bản tới chuyên sâu, thực hành 8 dự án, hàng trăm bài tập, trang hỏi đáp riêng, cấp chứng chỉ sau khóa học và mua một lần học mãi mãi.
                                </p>
                                <a href="#" class="btn btn-danger">
                                    Xem khóa học
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h3 class="text-dark font-weight-bold" style="margin-bottom: 10px;">3. Javascript</h3>
                            <p>
                                Để học web Front-end chúng ta luôn bắt đầu với ngôn ngữ HTML và CSS, đây là 2 ngôn ngữ có mặt trong mọi website trên internet. Trong khóa học này F8 sẽ chia sẻ từ những kiến thức cơ bản nhất. Sau khóa học này bạn sẽ tự làm được 2 giao diện websites là
                                The Band và Shopee.
                            </p>
                        </div>
                        <div class="content" style="display: flex;">
                            <div class="col-3">
                                <img src="./assets/img/js.png" alt="" style="max-width: 200px;">
                            </div>
                            <div class="col-9">
                                <a href="#">
                                    <h3 class="text-dark font-weight-bold">HTML</h3>
                                    <span class="text-danger font-weight-bold">Free</span>
                                </a>
                                <p>
                                    Từ cơ bản tới chuyên sâu, thực hành 8 dự án, hàng trăm bài tập, trang hỏi đáp riêng, cấp chứng chỉ sau khóa học và mua một lần học mãi mãi.
                                </p>
                                <a href="#" class="btn btn-danger">
                                    Xem khóa học
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer footer-big">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-9">
                        <div class="links">
                            <ul class="uppercase-links">
                                <li>
                                    <a href="#paper-kit">
									Home
								</a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
									Company
								</a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
									Portfolio
								</a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
								   Team
								</a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
								   Blog
								</a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
								   Contact
								</a>
                                </li>


                            </ul>
                            <hr />

                            <div class="copyright">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>, made with <i class="fa fa-heart heart"></i> by Elearning
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 ml-auto col-sm-2">
                        <div class="social-area">
                            <a href="#facebook" class="btn btn-neutral btn-round btn-just-icon btn-facebook">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#twitter" class="btn btn-neutral btn-just-icon btn-round btn-twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#google" class="btn btn-neutral btn-just-icon btn-round btn-google">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                            <a href="#pin" class="btn btn-neutral btn-just-icon btn-round btn-pinterest">
                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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