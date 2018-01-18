@extends('client.layouts.layout')

@section('content')


    <!-- Inner Banner -->
    <div class="inner-page-banner-area" style="background-image: url('/uploads/inner-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-12 mx-auto text-center">
                    <h2 class="font-weight-bold text-uppercase display-4 text-white">News Full Width</h2>
                    <ol class="list-inline text-center">
                        <li class="list-inline-item"><a href="#">Home </a> &nbsp; / </li>
                        <li class="list-inline-item"><a href="#">Pages</a>  &nbsp; / </li>
                        <li class="list-inline-item active">News Full Width</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- News & Blog Section -->
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <img src="{{ url('/uploads/' . $post->image) }}" class="img-fluid" alt="{{ $post->title }}">
                    <h6 class="text-uppercase font-weight-bold p-0 mt-4">{{ $post->title }}</h6>
                    <ul class="list-inline m-0">
                        <li class="list-inline-item"><i class="fa fa-calendar"></i><span>{{ $post->created_at->format('d M Y') }}</span></li>
                    </ul>
                    <p>{{ $post->description }}</p>

                </div>
            </div>
        </div>
    </section>


@endsection