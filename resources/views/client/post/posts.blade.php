@extends('client.layouts.layout')

@section('content')

    <!-- Inner Banner -->
    <div class="inner-page-banner-area" style="background-image: url('/uploads/inner-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-12 mx-auto text-center">
                    <h2 class="font-weight-bold text-uppercase display-4 text-white">News Right</h2>
                    <ol class="list-inline text-center">
                        <li class="list-inline-item"><a href="#">Home </a> &nbsp; / </li>
                        <li class="list-inline-item"><a href="#">Pages</a>  &nbsp; / </li>
                        <li class="list-inline-item active">News Right</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Section News -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    @foreach($posts as $post)

                        <div class="media border p-3 mt-4">
                            <img class="d-flex align-self-start mr-3 posts_img" src="{{ url('/uploads/' . $post->image) }}"  alt="{{ $post->title }}">
                            <div class="media-body">
                                <h6 class="card-title text-uppercase font-weight-bold">{{ $post->title }}</h6>
                                <ul class="list-inline italic mb-0">
                                    <li class="list-inline-item"><i class="fa fa-calendar"></i><span> {{ $post->created_at->format('d M Y') }}</span></li>
                                </ul>
                                <p>{{ $post->short_description }}</p>
                                <a href=" {{ route('post_single', $post->slug) }}" class="btn btn-radius2 btn font-weight-normal p-2 px-3 text-uppercase">read More</a>
                            </div>
                        </div>


                    @endforeach

                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="widget border">
                        <h6 class="bg-danger text-uppercase p-3 text-white font-weight-bold">RECENT POSTS</h6>


                        @foreach($postLatest as $latest)
                            <div class="media pt-0 m-2">
                                <img class="d-flex mr-2 img__size" src="{{ url('/uploads/'. $latest->image) }}" alt="{{ $latest->title }}">
                                <div class="media-body">
                                    <p class="mb-0">{{ $latest->created_at->formatLocalized('%d %B %Y')  }}</p>
                                    <p class="pb-0 mb-1 line-height27"><a href="{{ route('post_single', $latest->slug) }}">{{ $latest->title }}</a></p>

                                </div>
                            </div>
                            <hr>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection