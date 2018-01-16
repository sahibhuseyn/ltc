<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LTC - Admin Panel</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:40
    00,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ url('/admin/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ url('/admin/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ url('/admin/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ url('/admin/css/style.min.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ url('admin/css/themes/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="theme-teal">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/dash">BA - Admin Panel</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li {{Request::is('dash') ? "class=active" : ''}}>
                        <a href="/dash">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li {{Request::is('dash/languages') ? "class=active" : ''}}>
                        <a href="{{ route('admin_languages') }}">
                            <i class="material-icons">language</i>
                            <span>Languages</span>
                        </a>
                    </li>
                    <li {{Request::is('dash/translations/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">translate</i>
                            <span>Translations</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__LTCFILENAMES__ as $key => $file_name)
                                <li {{ Request::is('dash/translations/' . $file_name->file_name) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/translations/' . $file_name->file_name) ? "class=toggled" : '' }} href="{{ route('admin_translations', $file_name->file_name) }}">{{ $file_name->file_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{Request::is('slider/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">photo_library</i>
                            <span>Slider</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__LTCLANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/slider/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/slider/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_slider', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{Request::is('gallery/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">photo_camera</i>
                            <span>Gallery</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__LTCLANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/gallery/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/gallery/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_gallery', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{Request::is('dash/categories/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Course Categories</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__LTCLANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/categories/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/categories/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_categories', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    {{--<li {{Request::is('dash/types/*') ? "class=active" : ''}}>--}}
                        {{--<a href="javascript:void(0);" class="menu-toggle">--}}
                            {{--<i class="material-icons">list</i>--}}
                            {{--<span>Study Abroad Categories</span>--}}
                        {{--</a>--}}
                        {{--<ul class="ml-menu">--}}
                            {{--@foreach($__LTCLANGUAGES__ as $key => $language)--}}
                                {{--<li {{ Request::is('dash/types/' . $language->code) ? "class=active" : '' }}>--}}
                                    {{--<a {{ Request::is('dash/types/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_types', $language->code) }}">{{ $language->name }}</a>--}}
                                {{--</li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li {{Request::is('dash/study/*') ? "class=active" : ''}}>--}}
                        {{--<a href="javascript:void(0);" class="menu-toggle">--}}
                            {{--<i class="material-icons">flag</i>--}}
                            {{--<span>Study Abroad</span>--}}
                        {{--</a>--}}
                        {{--<ul class="ml-menu">--}}
                            {{--@foreach($__LTCLANGUAGES__ as $key => $language)--}}
                                {{--<li {{ Request::is('dash/study/' . $language->code) ? "class=active" : '' }}>--}}
                                    {{--<a {{ Request::is('dash/study/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_study', $language->code) }}">{{ $language->name }}</a>--}}
                                {{--</li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    <li {{Request::is('dash/courses/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">school</i>
                            <span>Courses</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__LTCLANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/courses/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/courses/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_courses', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{Request::is('dash/posts/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">turned_in</i>
                            <span>Posts</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__LTCLANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/posts/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/posts/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_posts', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{Request::is('dash/jobs/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Jobs</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__LTCLANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/jobs/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/jobs/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_jobs', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{Request::is('dash/teachers/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person</i>
                            <span>Teachers</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__LTCLANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/teachers/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/teachers/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_teachers', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{Request::is('dash/testimonials/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">format_size</i>
                            <span>Testimonials</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__LTCLANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/testimonials/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/testimonials/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_testimonials', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        @if (Session::has('success'))
            <div class="container-fluid">
                <div class="alert bg-green alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    {{ Session::get('success') }}
                </div>
            </div>
        @elseif(Session::has('fail'))
            <div class="container-fluid">
                <div class="alert bg-red alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    {{ Session::get('fail') }}
                </div>
            </div>
        @endif
        @yield('content')
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ url('/admin/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ url('/admin/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ url('/admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ url('/admin/plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ url('/admin/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ url('/admin/js/admin.js') }}"></script>

    @yield('scripts')
</body>

</html>
