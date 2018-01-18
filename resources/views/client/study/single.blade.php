@extends('client.layouts.layout')

@section('content')


    <!-- Inner Banner -->
    <div class="inner-page-banner-area" style="background-image: url('/uploads/inner-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-12 mx-auto text-center">
                    <h2 class="font-weight-bold text-uppercase display-4 text-white">{{ $study->title }}</h2>
                    <ol class="list-inline text-center">
                        <li class="list-inline-item"><a href="{{ route('index') }}">@lang('top_header.main')</a> &nbsp; / </li>
                        <li class="list-inline-item"><a href="{{ route('study_abroad') }}">@lang('top_header.studies')</a>  &nbsp; / </li>
                        <li class="list-inline-item active">{{ $study->title }}</li>
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
                    <img src="{{ url('/uploads/' . $study->image) }}" class="img-fluid" alt="{{ $study->title }}">
                    <h6 class="text-uppercase font-weight-bold p-0 mt-4">{{ $study->title }}</h6>
                    <ul class="list-inline m-0">
                        <li class="list-inline-item"><i class="fa fa-calendar"></i><span>{{ $study->created_at->format('d M Y') }}</span></li>
                    </ul>
                    <p>{{ $study->description }}</p>

                </div>
            </div>
        </div>
    </section>


@endsection