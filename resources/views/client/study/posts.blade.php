@extends('client.layouts.layout')

@section('content')

    <!-- Inner Banner -->
    <div class="inner-page-banner-area" style="background-image: url('/uploads/inner-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-12 mx-auto text-center">
                    <h2 class="font-weight-bold text-uppercase display-4 text-white">News Right</h2>
                    <ol class="list-inline text-center">
                        <li class="list-inline-item"><a href="{{ route('index') }}">Home </a> &nbsp; / </li>
                        <li class="list-inline-item active">News Right</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- News & Blog Section -->
    <section class="news">
        <div class="container">
            <div class="row">
                @foreach($studies as $study)

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ url('/uploads/'.$study->image) }}" class="img-fluid" alt="{{ $study->title }}">
                            <div class="card-body">
                                <h6 class="card-title text-uppercase font-weight-bold">{{ $study->title }}</h6>
                                <ul class="list-inline italic">
                                    <li class="list-inline-item"><i class="fa fa-calendar"></i><span> {{ $study->created_at->format('d M Y') }}</span></li>
                                </ul>
                                <p>{{ $study->short_description }}</p>
                                <a class="btn btn-radius2 font-weight-normal py-2 px-3" href="{{ route('study_single', $study->slug) }}">@lang('links.read_more') <i class="fa fa-angle-double-right"></i></a>						</div>
                        </div>
                    </div>


                @endforeach

            </div>
        </div>
    </section>

@endsection