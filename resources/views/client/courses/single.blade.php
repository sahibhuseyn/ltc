@extends('client.layouts.layout')
@section('content')

    <!-- Inner Banner -->
    <div class="inner-page-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-12 mx-auto text-center">
                    <h2 class="font-weight-bold text-uppercase display-4 text-white">@lang('top_header.courses')</h2>
                    <ol class="list-inline text-center">
                        <li class="list-inline-item"><a href="{{ route('index') }}">@lang('top_header.main')</a> &nbsp; / </li>
                        <li class="list-inline-item"><a href="{{ route('course_list') }}">@lang('top_header.courses')</a>  &nbsp; / </li>
                        <li class="list-inline-item active">{{ $course->title }} </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Counter Section -->
    <section class="courses-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <img src="{{ url('/uploads/' . $course->image) }}" class="img-fluid" alt="" />
                    <h2 class="text-uppercase font-weight-bold pt-4"> {{ $course->title }} </h2>
                    <p> {{ $course->short_description }}</p>
                    <p>{{ $course->description }}</p>

                    <ul class="nav nav-tabs nav-pills nav-fill" id="myTab" role="tablist">
                        <li class="nav-item border"><a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">{{ $course->title }}</a></li>
                    </ul>
                    <div class="tab-content">
                        <table class="table table-bordered">
                            <tr>
                                <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="5">@lang('our_courses.price_caption')</td>
                            </tr>
                            <tr> <th>@lang('our_courses.type')</th> <th>@lang('our_courses.time')</th> <th>@lang('our_courses.duration')</th> <th>@lang('our_courses.price')</th><th>@lang('our_courses.weekly')</th> </tr>
                            <tbody>
                            @php
                                $types = explode(",", $course->type);
                                $class_times = explode(",", $course->class_time);
                                $course_durations = explode(",", $course->course_duration);
                                $prices = explode(",", $course->price);
                                $weekly = explode(",", $course->weekly)
                            @endphp

                            @foreach($types as $count => $type)
                                <tr>
                                    <th scope="row">{{ @$type }}</th>
                                    <td>{{ @$class_times[$count] }}</td>
                                    <td>{{ @$course_durations[$count] }}</td>
                                    <td>{{ @$prices[$count] }} AZN</td>
                                    <td>{{ @$weekly[$count] }} AZN</td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection