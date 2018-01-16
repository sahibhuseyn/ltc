<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pro-Education - Education Multiple Html Template</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon-16x16.png">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />

    <!--  Bootstrap Css -->
    <link rel="stylesheet" href="{{ url('/client/plugins/bootstrap/css/bootstrap.css') }}">

    <!--  Animation Css -->
    <link rel="stylesheet" href=" {{ url('/client/css/icon-font.min.css') }}">
    <link rel="stylesheet" href="{{ url('/client/css/animate.css') }}">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ url('/client/plugins/thimfy-icon/themify-icons.css') }}" />
    <link rel="stylesheet" href=" {{ url('/client/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ url('/client/plugins/icofont/css/icofont.css') }}">

    <!--  Fontawesome Css -->
    <link rel="stylesheet" href="{{ url('/client/plugins/font-awesome/css/font-awesome.min.css') }}">

    @yield('styles')
    @yield('upper_js')

    <!--  Owl Carousel -->
    <link rel="stylesheet" href="{{ url('client/plugins/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('/client/plugins/owl-carousel/css/owl.theme.min.css') }}">
    <link rel="stylesheet" href="{{ url('client/plugins/owl-carousel/css/owl.transitions.css') }}">

    <!--  Custom Css -->
    <link rel="stylesheet" href="{{ url('/client/css/layout.css') }}">
    <link rel="stylesheet" href="{{ url('/client/css/responsive.css') }}">

</head>
<body id="page-top">

<div class="top__header fixed-top">

<!-- Header -->
<header class="header bg-transparent">
    <div class="bg-transparent">
        <div class="container bg-transparent">
            <div class="row bg-transparent">
                <div class="col-md-4 bg-transparent">
                    <ul class="list-inline list__custom bg-transparent">
                        <li class="mr-2"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="mr-2"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-8 bg-transparent">
                    <ul class="list-inline list__custom bg-transparent">
                        <li class="mr-2"><a href=""></a></li>
                        <li class="mr-2"><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light" id="header-fix">
    <div class="container">
        <a style="color:#fff;" class="navbar-brand" href="{{ route('index') }}">Education</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarColor03">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href=" {{ route('index') }}"  aria-haspopup="true" aria-expanded="false">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}"  aria-haspopup="true" aria-expanded="false">About Us </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('course_list') }}" aria-haspopup="true" aria-expanded="false">Courses </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="course.html">Courses 3 Column </a>
                        <a class="dropdown-item" href="course-grid.html">Courses Grids</a>
                        <a class="dropdown-item" href="course-detail.html">Courses Details</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('event') }}"  aria-haspopup="true" aria-expanded="false">Events </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="events.html">Events  </a>
                        <a class="dropdown-item" href="event-single.html">Event Single</a>
                        <a class="dropdown-item" href="event-calender.html">Event Calender</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('teacher_list') }}"  aria-haspopup="true" aria-expanded="false">Our Teachers </a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('post_list') }}" aria-haspopup="true" aria-expanded="false"> News  </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="news.html">News 3 Column</a>
                        <a class="dropdown-item" href="news-left.html">News Left Sidebar</a>
                        <a class="dropdown-item" href="news-right.html">News Right Sidebar</a>
                        <a class="dropdown-item" href="news-single.html">News Single</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"   aria-haspopup="true" aria-expanded="false"> Pages  </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="register.html">Register </a>
                        <a class="dropdown-item" href="login.html">Login</a>
                        <a class="dropdown-item" href="gallery.html">Gallery 3 Column</a>
                        <a class="dropdown-item" href="gallery-grid.html">Gallery Grid</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacts') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>


@yield('content')




<!-- Footer Section -->
<section class="footer">
    <div class="container">
        <div class="row animatedParent animateOnce animateOnce">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase text-white">About Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtin eiusmodtin didunt ut labore et dolore magna aliqua.</p>
                <h6 class="text-white">Follow Us:-</h6>
                <ul class="list-inline">
                    <li class="list-inline-item pr-2"><a href="#" class="text-white"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item pl-2 pr-2"><a href="#" class="text-white"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item pl-2 pr-2"><a href="#" class="text-white"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="text-uppercase text-white">Useful Links</h5>
                <ul class="list-inline">
                    <li class="list-block-item"><span class="ti-angle-double-right"></span> <a href="#"> Home</a></li>
                    <li class="list-block-item"><span class="ti-angle-double-right"></span> <a href="#"> About Us</a></li>
                    <li class="list-block-item"><span class="ti-angle-double-right"></span> <a href="#"> Courses</a></li>
                    <li class="list-block-item"><span class="ti-angle-double-right"></span> <a href="#"> Teachers</a></li>
                    <li class="list-block-item"><span class="ti-angle-double-right"></span> <a href="#"> Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-uppercase text-white">RECENT TWEETS</h5>
                <ul class="list-inline">
                    <li class="list-block-item">
                        <i class="fa fa-twitter float-left mt-2 mr-2" aria-hidden="true"></i>
                        <p><a href="#">@UNIVERSITY</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtin.<br />
                            <a href="#">about 5 min ago</a></p>
                    </li>
                    <li class="list-block-item">
                        <i class="fa fa-twitter float-left mt-2 mr-2" aria-hidden="true"></i>
                        <p><a href="#">@UNIVERSITY</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtin.<br />
                            <a href="#">about 5 min ago</a></p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase text-white">Instagram </h5>
                <ul class="list-inline">
                    <li class="list-inline-item mb-2"><a href="#" target="_blank" title=""><img src="assets/images/sidebar-thumb-1.jpg" class="rounded" alt="" /></a></li>
                    <li class="list-inline-item mb-2"><a href="#" target="_blank" title=""><img src="assets/images/sidebar-thumb-2.jpg" class="rounded" alt="" /></a></li>
                    <li class="list-inline-item mb-2"><a href="#" target="_blank" title=""><img src="assets/images/sidebar-thumb-3.jpg" class="rounded" alt="" /></a></li>
                    <li class="list-inline-item mb-2"><a href="#" target="_blank" title=""><img src="assets/images/sidebar-thumb-1.jpg" class="rounded" alt="" /></a></li>
                    <li class="list-inline-item mb-2"><a href="#" target="_blank" title=""><img src="assets/images/sidebar-thumb-2.jpg" class="rounded" alt="" /></a></li>
                    <li class="list-inline-item mb-2"><a href="#" target="_blank" title=""><img src="assets/images/sidebar-thumb-3.jpg" class="rounded" alt="" /></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 text-left">Copyright © Education. All Rights Reserved </div>
            <div class="col-lg-6 col-md-6 text-right">
                <ul class="linst-inline">
                    <li class="list-inline-item"><a href="#">Privacy</a></li>
                    <li class="list-inline-item"><a href="#">Terms & Conditions</a></li>
                    <li class="list-inline-item"><a href="#">Sitemap</a></li>
                    <li class="list-inline-item"><a href="#">Purchase</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Js -->
<script type="text/javascript" src="{{ url('/client/plugins/bootstrap/js/jquery-3.2.1.slim.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/client/plugins/bootstrap/js/popper.min.js') }}"></script>

<!-- Bootstrap Js -->
<script type="text/javascript" src="{{ url('client/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
@yield('scripts')


<!-- Header Scroll -->
<script type="text/javascript" src="{{ url('/client/js/custom.js') }}"></script>


<!-- Testimonials Slider Js -->
<script type="text/javascript" src="{{ url('/client/plugins/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/client/js/testimonials.js') }}"></script>

<!-- Counter Js -->
<script type="text/javascript" src="{{ url('/client/plugins/counter/jquery.waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/client/plugins/counter/jquery.counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/client/js/counter-custom.js') }}"></script>

<!-- Bg maker Custom Js -->
<script type="text/javascript" src="{{ url('/client/js/bg-maker-custom.js') }}"></script>

</body>

</html>