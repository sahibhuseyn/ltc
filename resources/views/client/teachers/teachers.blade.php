@extends('client.layouts.layout')

@section('content')


    <!-- Inner Banner -->
    <div class="inner-page-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-12 mx-auto text-center">
                    <h2 class="font-weight-bold text-uppercase display-4 text-white">Team Members </h2>
                    <ol class="list-inline text-center">
                        <li class="list-inline-item"><a href="#">Home </a> &nbsp; / </li>
                        <li class="list-inline-item"><a href="#">Pages</a>  &nbsp; / </li>
                        <li class="list-inline-item active">Event Single </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <section>
        <div class="container">
            <div class="row">

                @foreach($teachers as $teacher)

                    <div class="col-lg-4 col-md-6 mb-4">
                    <a href="{{ route('teacher_single', $teacher->slug) }}">

                        <div class="card">
                            <img src="{{ url('/uploads/' . $teacher->image) }}" class="card-img-top img-fluid" alt="">
                            <div class="card-body">
                                <h6 class="card-title">{{ $teacher->name }}</h6>
                                <span class="italic">{{ $teacher->title }}</span>
                                <p class="card-text">{{ $teacher->short_description }}</p>
                            </div>
                        </div>
                    </a>
                    </div>

                @endforeach
            </div>
        </div>
    </section>


@endsection