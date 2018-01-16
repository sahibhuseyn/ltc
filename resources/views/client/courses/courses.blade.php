@extends('client.layouts.layout')
@section('content')

    <!-- Inner Banner -->
    <div class="inner-page-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-12 mx-auto text-center">
                    <h2 class="font-weight-bold text-uppercase display-4 text-white">Course 3 Column</h2>
                    <ol class="list-inline text-center">
                        <li class="list-inline-item"><a href="#">Home </a> &nbsp; / </li>
                        <li class="list-inline-item"><a href="#">Pages</a>  &nbsp; / </li>
                        <li class="list-inline-item active">Course 3 Column </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Counter Section -->
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
                            <div class="card">
                                <img class="card-img-top" src="{{ url('/uploads'.$course->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="text-uppercase font-weight-bold m-0">{{ $course->title }}</h6>
                                    {{--<div class="font-italic py-2 font-weight-bold orange">Henry H. Garrick, Teacher</div>--}}
                                    <p class="card-text">{{ $course->short_description }}</p>

                                    <a  href="{{ route('course_single', $course->slug) }}" class="btn btn-radius2 py-2 px-3 text-uppercase">Apply Now!</a>
                                </div>
                            </div>
                        </div>


                    @endforeach
                </div>
                <div class="col-lg-12 col-md-12 mx-auto mt-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

@endsection