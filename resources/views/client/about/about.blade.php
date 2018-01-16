@extends('client.layouts.layout')

@section('content')


    <!-- Inner Banner -->
    <div class="inner-page-banner-area" style="background-image: url('/uploads/inner-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-12 mx-auto text-center">
                    <h2 class="font-weight-bold text-uppercase display-4 text-white">About Us</h2>
                    <ol class="list-inline text-center">
                        <li class="list-inline-item"><a href="#">Home </a> &nbsp; / </li>
                        <li class="list-inline-item"><a href="#">Pages</a>  &nbsp; / </li>
                        <li class="list-inline-item active">About Us </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h2 class="text-uppercase font-weight-bold">Welcome to <span class="orange"> Pro Education</span></h2>
                    <div class="divider float-left"></div>
                    <div class="clearfix"></div>
                    <p class="pt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim adi minim veniam, quis nostrud exerci tation ullamcorperea commodo consequat utm euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim adi commodo minim euismod tincidunt.</p>

                    <ul class="list-inline">
                        <li class="list-block-item"><span class="ti-angle-double-right"></span> Our Mission and Philosophy</li>
                        <li class="list-block-item"><span class="ti-angle-double-right"></span> Our Departments and Programms</li>
                        <li class="list-block-item"><span class="ti-angle-double-right"></span> Why We Are Best</li>
                        <li class="list-block-item"><span class="ti-angle-double-right"></span> Grest Career Outcomes</li>
                        <li class="list-block-item"><span class="ti-angle-double-right"></span> 25 hours of High Quality e-Learning content</li>
                        <li class="list-block-item"><span class="ti-angle-double-right"></span> 72 end of chapter quizzes</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="uploads/1.jpg" class="rounded img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>

    <!-- Counter -->
    <section class="image-bg">
        <div class="background-image-maker"></div>
        <div class="holder-image py-5">
            <img src="uploads/counter-bg.jpg" alt="" class="img-fluid">
        </div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 col-md-3 mx-auto text-center">
                    <div class="single_counter text-white">
                        <div class="lnr lnr-user fa-2x text-white pb-3"></div>
                        <h3 class="statistic-counter text-white">100</h3>
                        <h6 class="text-uppercase text-white">Educated Teachers</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 mx-auto text-white text-center">
                    <div class="single_counter p-y-2 m-t-1 text-white">
                        <div class="lnr lnr-users text-white fa-2x text-white pb-3"></div>
                        <h3 class="statistic-counter text-white">400</h3>
                        <h6 class="text-white text-uppercase">Professional Students</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 mx-auto text-center text-white">
                    <div class="fact-box mb-5 mb-lg-0">
                        <div class="lnr lnr-calendar-full text-white fa-2x text-white pb-3"></div>
                        <h3 class="statistic-counter text-white">30</h3>
                        <h6 class="text-uppercase text-white">Years Experience</h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 mx-auto text-center text-white">
                    <div class="single_counter p-y-2 m-t-1">
                        <div class="lnr lnr-coffee-cup text-white fa-2x text-white pb-3"></div>
                        <h3 class="statistic-counter text-white">312</h3>
                        <h6 class="text-uppercase text-white">topper Awards</h6>
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
                    <div class="col-lg-4 col-md-4">
                    <div class="team-member text-center">
                        <figure>
                            <img src="{{ url('/uploads/' . $teacher->image) }}" class="card-img-top img-fluid" alt="">
                            <figcaption>
                                <p>{{ $teacher->short_description }}</p>
                            </figcaption>
                        </figure>
                        <h6 class="text-uppercase font-weight-bold pt-4">{{ $teacher->name }}</h6>
                        <p>{{ $teacher->title }}</p>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>



@endsection