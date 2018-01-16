@extends('client.layouts.layout')

@section('styles')


    <!--  Master Slider Css -->
    <link rel="stylesheet" href="{{ url('/client/plugins/masterslider/style/masterslider.css') }}" />

    <!--  Master Slider Skin -->
    <link rel="stylesheet" href="{{ url('/client/plugins/masterslider/skins/default/style.css') }}" />

@endsection

@section('content')
    @include('client.partials.slider')

<!-- Course -->
<section class="course">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mx-auto text-center">
                <h2 class="mb-3 text-uppercase font-weight-bold">Our top <span class="orange">Courses</span></h2>
                <div class="divider"></div>
                <p class="pt-3 pb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, nventore veritatis.</p>
            </div>
        </div>
        <div class="row">
            <div class="card-group">

                @foreach($courses as $course)

                    <div class="col-lg-4 col-md-6 mb-3">
                        <a href="{{ route('course_single', $course->slug) }}">
                            <div class="card">
                                <img class="card-img-top" src="{{ url('/uploads/' . $course->image) }}" alt="{{ $course->title }}">
                                <div class="card-body">
                                    <h6 class="text-uppercase font-weight-bold m-0">{{ $course->title }}</h6>
                                    {{--<div class="font-italic py-2 font-weight-bold orange">Henry H. Garrick, Teacher</div>--}}
                                    <p class="card-text">{{ $course->short_description }}</p>
                                </div>
                                <div class="card-footer">
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item float-right"><i class="fa fa-dollar"></i> <strong>{{ $course->price }}</strong> &nbsp; &nbsp; <del> <i class="fa fa-dollar"></i> <strong>{{ $course->prev_price }}</strong></del></li>
                                    </ul>
                                </div>
                            </div>

                        </a>
                    </div>



                @endforeach

            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="image-bg">
    <div class="background-image-maker"></div>
    <div class="holder-image">
        <img src="/uploads/counter-bg.jpg" alt="" class="img-fluid">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mx-auto text-center">
                <h2 class="mb-3 text-uppercase font-weight-bold text-white">Happy Cleints <span class="orange">Reviews</span></h2>
                <div class="divider"></div>
                <p class="pt-3 pb-3 text-white">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, nventore veritatis.</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">

                    @foreach($testimonials as $testimonial)

                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ url('/uploads/' . $testimonial->image) }}" alt="">
                            </div>
                            <p class="description">{{ $testimonial->feedback }} </p>
                            <h3 class="testimonial-title"> {{ $testimonial->position }}</h3>
                        </div>


                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Members -->
<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mx-auto text-center">
                <h2 class="mb-3 text-uppercase font-weight-bold">Our <span class="orange">Teachers</span></h2>
                <div class="divider"></div>
                <p class="pt-3 pb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, nventore veritatis.</p>
            </div>
        </div>
        <div class="row">

            @foreach($teachers as $teacher)

                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="{{ route('teacher_single', $teacher->slug) }}">
                        <div class="card">
                            <img src="{{ url('/uploads/' . $teacher->image) }}" class="card-img-top img-fluid" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold text-uppercase mb-0">{{ $teacher->name }}</h6>
                                <div class="font-italic py-2 orange"><b>{{ $teacher->title }}</b></div>
                                <p class="card-text">{{ $teacher->short_description }}</p>
                            </div>
                        </div>
                    </a>
                </div>


            @endforeach

        </div>
    </div>
</section>

<!-- Subscribe Section -->
<section class="image-bg">
    <div class="color-overlay"></div>
    <div class="background-image-maker"></div>
    <div class="holder-image">
        <img src="/uploads/counter-bg.jpg" alt="" class="img-fluid">
    </div>
    <div class="container">
        <div class="row py-5 my-5">
            <div class="col-lg-10 col-md-10 text-center mx-auto text-white">
                <h2 class="text-capitalize text-white"><span class="thin">Applications are</span> Now Open</h2>
                <p class="lead line-height34">Subscribe now and receive weekly newsletter with new events,<br /> interesting charity activities.</p>
                <button type="submit" class="btn btn-radius2 text-uppercase font-weight-bold">Get Started</button>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mx-auto text-center">
                <h2 class="mb-3 text-uppercase font-weight-bold">Our Latest <span class="orange">News</span></h2>
                <div class="divider"></div>
                <p class="pt-3 pb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, nventore veritatis.</p>
            </div>
        </div>
        <div class="row">

            @foreach($posts as $post)

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ url('/uploads/' . $post->image) }}" class="img-fluid" alt="Blog images">
                        <div class="card-body">
                            <h6 class="card-title text-uppercase font-weight-bold">{{ $post->title }}</h6>
                            <ul class="list-inline font-italic orange mb-1">
                                <li class="list-inline-item"><i class="fa fa-calendar"></i><span> {{ $post->created_at->format('d M Y') }}</span></li>
                            </ul>
                            <p>{{ $post->short_description }}</p>
                            <a class="btn btn-radius2 font-weight-normal py-2 px-3" href="{{ route('post_single', $post->slug) }}">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</section>


@endsection()

@section('scripts')
    <!-- Master Slider -->
    <script type="text/javascript" src="{{ url('/client/plugins/masterslider/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/client/plugins/masterslider/masterslider.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/client/js/master-slider-custom.js') }}"></script>

@endsection