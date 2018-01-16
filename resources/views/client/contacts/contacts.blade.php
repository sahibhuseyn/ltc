@extends('client.layouts.layout')

@section('content')

    <!-- Inner Banner -->
    <div class="inner-page-banner-area" style="background-image: url('/uploads/inner-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-12 mx-auto text-center">
                    <h2 class="font-weight-bold text-uppercase display-4 text-white">Contact Us</h2>
                    <ol class="list-inline text-center">
                        <li class="list-inline-item"><a href="#">Home </a> &nbsp; / </li>
                        <li class="list-inline-item"><a href="#">Pages</a>  &nbsp; / </li>
                        <li class="list-inline-item active">About Us </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <form>
                        <label class="label">Name</label>
                        <input type="text" class="form-control" value="Name" />
                        <label class="label">Email Address</label>
                        <input type="text" class="form-control" value="Email" />

                        <label class="label">Phone Number</label>
                        <input type="text" class="form-control" value="Phone Number" />

                        <label class="label">Subject</label>
                        <input type="text" class="form-control" value="Subject" />

                        <label class="label">Your Message</label>
                        <textarea class="form-control" rows="5">Message</textarea>
                        <input type="submit" class="btn btn-radius2" value="SUBMIT">

                    </form>
                </div>

                <div class="col-lg-4 col-md-6 text-center">
                    <div class="bg-light py-4 px-3 border-top mb-5">
                        <i class="fa fa-envelope-o fa-3x"></i>
                        <ul class="inline-item">
                            <li class="list-inline-item"><strong>Email Address: </strong> <a href="#">testing@gmail.com</a></li>
                            <li class="list-inline-item"><strong>Email Address: </strong> <a href="#">testing@gmail.com</a></li>
                        </ul>
                    </div>

                    <div class="bg-light py-4 px-3 border-top mb-5">
                        <i class="fa fa-phone fa-3x"></i>
                        <div class="space20"></div>
                        <p><strong>Phone Number:</strong> <a href="#">+919191326545</a><br />
                            <strong>Fax Number:</strong> <a href="#">+919191326545</a></p>
                    </div>

                    <div class="bg-light py-4 px-3 border-top">
                        <h6 class="font-weight-bold text-uppercase">Our Address </h6>
                        <i class="fa fa-map-marker fa-3x"></i>
                        <div class="space20"></div>
                        <p>House #1, Road #2,<br /> AA Street, USA.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection