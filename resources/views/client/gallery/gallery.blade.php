@extends('client.layouts.layout')

@section('styles')

    <link rel="stylesheet" href="{{ url('/client/plugins/mixtup/style.css') }}" />

@endsection

@section('content')

    <!-- Inner Banner -->
    <div class="inner-page-banner-area" style="background-image: url('/uploads/inner-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-12 mx-auto text-center">
                    <h2 class="font-weight-bold text-uppercase display-4 text-white">Gallery Masonary</h2>
                    <ol class="list-inline text-center">
                        <li class="list-inline-item"><a href="{{ route('index') }}">Home </a> &nbsp; / </li>
                        <li class="list-inline-item active">Gallery </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery -->
    <section id="portfolio-container">
        <main class="cd-main-content">
            <div class="cd-tab-filter-wrapper">
                <div class="cd-tab-filter">
                    <ul class="cd-filters">
                        <li class="placeholder">
                            <a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
                        </li>
                        <li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>

                        @foreach($categories as $category)
                            <li class="filter" data-filter=".{{ $category['category'] }}"><a href="#0" data-type="{{ $category['category'] }}">{{ $category['category'] }}</a></li>

                        @endforeach
                    </ul> <!-- cd-filters -->
                </div> <!-- cd-tab-filter -->
            </div> <!-- cd-tab-filter-wrapper -->

            <div class="cd-gallery">
                <ul>

                    @foreach($galleries as $gallery)

                    <li class="mix @foreach($categories as $category) {{ $category['category'] }} @endforeach check1 radio2 option3" ><img src="{{ url('/uploads/' . $gallery->image) }}" alt="{{ $gallery->name }}"></li>


                    @endforeach

                    <li class="mix color-2 check2 radio2 option2"><img src="assets/images/gallery/2.jpg" alt="Image 2"></li>
                    <li class="mix color-3 check3 radio3 option1"><img src="assets/images/gallery/3.jpg" alt="Image 3"></li>
                    <li class="mix color-4 check3 radio2 option4"><img src="assets/images/gallery/4.jpg" alt="Image 4"></li>
                    <li class="mix color-5 check1 radio3 option2"><img src="assets/images/gallery/5.jpg" alt="Image 5"></li>
                    <li class="mix color-1 check2 radio3 option3"><img src="assets/images/gallery/6.jpg" alt="Image 6"></li>
                    <li class="mix color-2 check2 radio2 option1"><img src="assets/images/gallery/7.jpg" alt="Image 7"></li>
                    <li class="mix color-3 check1 radio3 option4"><img src="assets/images/gallery/8.jpg" alt="Image 8"></li>
                    <li class="mix color-2 check1 radio2 option3"><img src="assets/images/gallery/9.jpg" alt="Image 9"></li>
                    <li class="mix color-4 check3 radio2 option4"><img src="assets/images/gallery/10.jpg" alt="Image 10"></li>
                    <li class="mix color-5 check3 radio3 option2"><img src="assets/images/gallery/11.jpg" alt="Image 11"></li>
                    <li class="mix color-2 check1 radio3 option1"><img src="assets/images/gallery/12.jpg" alt="Image 12"></li>
                    <li class="gap"></li>
                    <li class="gap"></li>
                    <li class="gap"></li>
                </ul>
            </div> <!-- cd-gallery -->

            <div class="cd-filter">
                <form>
                    <div class="cd-filter-block">
                        <h4>Search</h4>

                        <div class="cd-filter-content">
                            <input type="search" placeholder="Try color-1...">
                        </div> <!-- cd-filter-content -->
                    </div> <!-- cd-filter-block -->

                    <div class="cd-filter-block">
                        <h4>Check boxes</h4>

                        <ul class="cd-filter-content cd-filters list list-inline">
                            <li class="list-block-item">
                                <input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
                                <label class="checkbox-label" for="checkbox1">Option 1</label>
                            </li>

                            <li class="list-block-item">
                                <input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
                                <label class="checkbox-label" for="checkbox2">Option 2</label>
                            </li>

                            <li class="list-block-item">
                                <input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
                                <label class="checkbox-label" for="checkbox3">Option 3</label>
                            </li>
                        </ul> <!-- cd-filter-content -->
                    </div> <!-- cd-filter-block -->

                    <div class="cd-filter-block">
                        <h4>Select</h4>

                        <div class="cd-filter-content">
                            <div class="cd-select cd-filters">
                                <select class="filter" name="selectThis" id="selectThis">
                                    <option value="">Choose an option</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                    <option value="option4">Option 4</option>
                                </select>
                            </div> <!-- cd-select -->
                        </div> <!-- cd-filter-content -->
                    </div> <!-- cd-filter-block -->

                    <div class="cd-filter-block">
                        <h4>Radio buttons</h4>

                        <ul class="cd-filter-content cd-filters list list-inline">
                            <li class="list-inline-item">
                                <input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
                                <label class="radio-label" for="radio1">All</label>
                            </li>

                            <li class="list-inline-item">
                                <input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
                                <label class="radio-label" for="radio2">Choice 2</label>
                            <li class="list-inline-item">

                            <li>
                                <input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
                                <label class="radio-label" for="radio3">Choice 3</label>
                            </li>
                        </ul> <!-- cd-filter-content -->
                    </div> <!-- cd-filter-block -->
                </form>

                <a href="#0" class="cd-close">Close</a>
            </div> <!-- cd-filter -->

            <a href="#0" class="cd-filter-trigger">Filters</a>
        </main>
    </section>


@endsection

@section('scripts')
    <script type="text/javascript" src="{{ url('/client/plugins/masterslider/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/client/js/jquery-2.1.1.html') }}"></script>
    <script type="text/javascript" src="{{ url('/client/plugins/mixtup/jquery.mixitup.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/client/plugins/mixtup/main.js') }}"></script> <!-- Resource jQuery -->

@endsection