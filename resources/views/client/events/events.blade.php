@extends('client.layouts.layout')

@section('content')

    <!-- Inner Banner -->
    <div class="inner-page-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-12 mx-auto text-center">
                    <h2 class="font-weight-bold text-uppercase display-4 text-white">Events</h2>
                    <ol class="list-inline text-center">
                        <li class="list-inline-item"><a href="#">Home </a> &nbsp; / </li>
                        <li class="list-inline-item"><a href="#">Pages</a>  &nbsp; / </li>
                        <li class="list-inline-item active">Events </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Events Section -->
    <section class="events">
        <div class="container">


            @foreach($events as $count => $event)

                <div class="row mt-5">
                    @if($count%2 == 0)
                        <div class="col-lg-6 col-md-6 py-4 <?= $count%2 == 0 ? 'text-right' : ' ' ?> ">
                            <div class="background-image-maker"></div>
                            <div class="holder-image py-0 bg">
                            <img src="{{ url('/uploads/' . $event->event_bg) }}" alt="" class="img-fluid">
                            </div>
                            <h6 class="font-weight-bold text-uppercase">{{ $event->title }}</h6>
                            <span class="orange text-uppercase mb-4">{{ $event->date_str }}</span>
                            <ul class="list-inline pt-2">
                                <li class="list-inline-item font-weight-bold"><i class="fa fa-map-marker"></i>{{ $event->location }}</li>
                                <li class="list-inline-item font-weight-bold float-right"><i class="fa fa-clock-o"></i> {{ $event->time_str }}</li>
                            </ul>
                            <p>{{ $event->short_description }}</p>
                            <a href="#" class="btn-radius3 btn mr-5" data-toggle="modal" data-target=".bookModal" >Joins Events <i class="fa fa-angle-double-right"></i></a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="{{ url('/uploads/' . $event->image) }}" class="img-fluid" alt="" />
                        </div>
                        @else
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <img src="{{ url('/uploads/' . $event->image) }}" class="img-fluid" alt="" />
                            </div>
                            <div class="col-lg-6 col-md-6 py-4">
                                <div class="background-image-maker"></div>
                                <div class="holder-image py-0 bg">
                                    <img src="{{ url('/uploads/' . $event->event_bg) }}" alt="" class="img-fluid">
                                </div>
                                <h6 class="font-weight-bold text-uppercase">{{ $event->title }}</h6>
                                <span class="orange text-uppercase mb-4">{{ $event->date_str }}</span>
                                <ul class="list-inline pt-2">
                                    <li class="list-inline-item font-weight-bold"><i class="fa fa-map-marker"></i> {{ $event->location }}</li>
                                    <li class="list-inline-item font-weight-bold float-right"><i class="fa fa-clock-o"></i> {{ $event->time_str }}</li>
                                </ul>
                                <p>{{ $event->short_description }} </p>
                                <a href="#" data-toggle="modal" data-target=".bookModal" class="btn-radius3 btn mr-5">Joins Events <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    @endif

                </div>


            @endforeach
        </div>
    </section>

    <div class="modal bookModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme-colored">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-white" id="myModalLabel">Reservation Form</h4>
                </div>
                <div class="p-40">
                    <!-- Reservation Form Start-->
                    <form id="reservation_form_popup" name="reservation_form" class="reservation-form" method="post" action=""><h3 class="mt-0 line-bottom text-theme-colored mb-40">@lang('top_header.book')!</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group mb-30">
                                    <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <input placeholder="Email" type="text" id="reservation_email" name="reservation_email" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <input placeholder="Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <div class="styled-select">
                                        <select id="course_select" name="course_select" class="form-control" required="">
                                            <option value="_val">- Select Your Course Type -</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <p id="course_fee"></p>
                                    {{--<input name="reservation_date" class="form-control required date-picker" type="text" placeholder="Reservation Date" aria-required="true">--}}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-0 mt-0">
                                    <input name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button type="submit" class="btn btn-colored btn-theme-colored btn-lg btn-flat border-left-theme-colored-4px" data-loading-text="Please wait...">@lang('links.submit')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Reservation Form End-->


                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')



@endsection