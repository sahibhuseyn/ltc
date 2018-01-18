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
    <link rel="icon" type="image/png" href="{{ url('/uploads/favicon-16x16.png') }}">

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
                    <ul class="list-inline list__custom bg-transparent pull-right">
                        @foreach($__LTCLANGUAGES__ as $language)
                            <li class="mr-2"><a href="{{ route('change_language', $language->code) }}"><img src="{{ url('/uploads/'. $language->image) }}" alt=""></a></li>
                        @endforeach
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
                    <a class="nav-link" href=" {{ route('index') }}"  aria-haspopup="true" aria-expanded="false">@lang('navbar.home') </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}"  aria-haspopup="true" aria-expanded="false">@lang('navbar.about_us')</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('course_list') }}" aria-haspopup="true" aria-expanded="false">@lang('navbar.courses')</a>
                    <div class="dropdown-menu">
                        @foreach($__LTCCATEGORIES__ as $category)
                            {{--BU METODU DEYISHMEK LAZIMDI--}}
                            @php
                                $hasChild = false;
                                foreach ($__LTCCATEGORIES__ as $child) {
                                    if ($category->id == $child->parent_id) {
                                        $hasChild = true;
                                    }
                                }
                            @endphp
                            @if($category->parent_id == 0)
                                    <a class="dropdown-item" href="{{ route('course_category', $category->id) }}">{{ $category->name }}</a>
                                    @if($hasChild)
                                        <ul class="dropdown">
                                            @foreach($__LTCCATEGORIES__ as $child)
                                                @if($category->id == $child->parent_id)
                                                    <li class="dropdown-item"><a href="{{ route('course_category', $child->id) }}">{{ $child->name }}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                            @endif
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('event') }}"  aria-haspopup="true" aria-expanded="false">@lang('navbar.events') </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('teacher_list') }}"  aria-haspopup="true" aria-expanded="false">@lang('navbar.teachers')</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('price') }}"  aria-haspopup="true" aria-expanded="false"> @lang('navbar.prices')</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('post_list') }}" aria-haspopup="true" aria-expanded="false"> @lang('navbar.news')  </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('gallery') }}" aria-haspopup="true" aria-expanded="false"> @lang('navbar.gallery')  </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('study_abroad') }}" aria-haspopup="true" aria-expanded="false"> @lang('navbar.study_abroad')  </a>
                    <div class="dropdown-menu">
                @foreach($__LTCTYPES__ as $type)
                    {{--BU METODU DEYISHMEK LAZIMDI--}}
                    @php
                        $hasChild = false;
                        foreach ($__LTCTYPES__ as $child) {
                            if ($type->id == $child->parent_id) {
                                $hasChild = true;
                            }
                        }
                    @endphp

                    @if($type->parent_id == 0)
                            <a class="dropdown-item" href="{{ route('study_type', $type->id) }}">{{ $type->name }}</a>
                            @if($hasChild)
                                <ul class="dropdown">
                                    @foreach($__KTCTYPES__ as $child)
                                        @if($type->id == $child->parent_id)
                                            <li class="dropdown-item"><a href="{{ route('study_type', $child->id) }}">{{ $child->name }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                            @endif
                        @endforeach
                    </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacts') }}">@lang('navbar.contact')</a>
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
            <div class="col-lg-4 col-md-6">
                <img class="mt-5 mb-20" alt="" src="{{ url('/uploads/logo-wide.png') }}">
                <p>@lang('contact_info.address')</p>
                <ul class="list-inline mt-5">
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="tel:0124976297">@lang('contact_info.phone')</a> </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="tel:0124920792">@lang('contact_info.phone1')</a> </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-whatsapp text-theme-color-2 mr-5"></i> <a class="text-gray" href="https://api.whatsapp.com/send?phone=00994552262485">@lang('contact_info.phone2')</a> </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="tel:0552124151">@lang('contact_info.phone3')</a> </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="tel:0702797517">@lang('contact_info.phone4')</a> </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-whatsapp text-theme-color-2 mr-5"></i> <a class="text-gray" href="https://api.whatsapp.com/send?phone=00994702781777">@lang('contact_info.phone5')</a> </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="mailto:office@britishacademy.az">@lang('contact_info.mail')</a> </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">@lang('contact_info.domain')</a> </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-uppercase text-white">@lang('contact_info.links')</h5>
                <ul class="list-inline">
                    <li class="list-block-item"><span class="ti-angle-double-right"></span> <a href="{{ route('index') }}"> @lang('navbar.home')</a></li>
                    <li class="list-block-item"><span class="ti-angle-double-right"></span> <a href="{{ route('about') }}"> @lang('navbar.about_us')</a></li>
                    <li class="list-block-item"><span class="ti-angle-double-right"></span> <a href="{{ route('course_list') }}"> @lang('navbar.courses')</a></li>
                    <li class="list-block-item"><span class="ti-angle-double-right"></span> <a href="{{ route('teacher_list') }}"> @lang('navbar.teachers')</a></li>
                    <li class="list-block-item"><span class="ti-angle-double-right"></span> <a href="{{ route('contacts') }}"> @lang('navbar.contact')</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-uppercase text-white">@lang('open_hours.caption')</h5>
                <ul class="list-inline">
                    <li class="list-block-item">
                        <span> @lang('open_hours.days') </span>
                    </li>
                    <li class="list-block-item">
                        @lang('open_hours.hour')
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 text-left">Copyright © {{ date('Y') }}  London Training Centre. All Rights Reserved </div>
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