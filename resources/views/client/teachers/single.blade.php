@extends('client.layouts.layout')

@section('content')

    <!-- Inner Banner -->
    <div class="inner-page-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-12 mx-auto text-center">
                    <h2 class="font-weight-bold text-uppercase display-4 text-white">Team Details </h2>
                    <ol class="list-inline text-center">
                        <li class="list-inline-item"><a href="#">Home </a> &nbsp; / </li>
                        <li class="list-inline-item"><a href="#">Library</a>  &nbsp; / </li>
                        <li class="list-inline-item active">Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="team-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <figure class="figure border border-radius">
                        <img src="{{ url('/uploads/' . $teacher->image) }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption p-3"><h6>{{ $teacher->name }} </h6>
                            <div class="orange">{{ $teacher->title }}</div>

                            <p><b>Availability:</b><br>
                                <b>Monday - Friday:</b> 9:00 - 15:00<br>
                                <b>Sunday - Saturday:</b> Only Appointment</p>
                            	</figcaption>
                    </figure>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="team-detail-desc1">
                        <h5 class="text-uppercase font-weight-bold mb-0 pb-3">{{ $teacher->name }}</h5>
                        <div class="orange font-weight-bold  mb-0 pb-2">{{ $teacher->title }}</div>
                        <p>{{ $teacher->short_description }}</p>

                        <p>{{ $teacher->description }}</p>
                        <div class="space20"></div>
                        <div class="team-detail-box">
                            <table class="calender">
                                <tbody><tr class="f">
                                    <th scope="col">ID</th>
                                    <th scope="col">COURSE NAME</th>
                                    <th scope="col">GROUP</th>
                                    <th scope="col">COURSE PRICE</th>
                                    <th scope="col">COURSE SESSION</th>
                                </tr>
                                <tr>
                                    <td class="s">1</td>
                                    <td class="s1">Downloading &amp; Uploading</td>
                                    <td class="s1">NET</td>
                                    <td class="s1">$70.00</td>
                                    <td class="s1">6.00 Am to 11.00 AM </td>
                                </tr>
                                <tr>
                                    <td class="s">2</td>
                                    <td class="s1">Learn JavaScript/Ajax</td>
                                    <td class="s1">DEVELOPMENT</td>
                                    <td class="s1">$110.00</td>
                                    <td class="s1">3.00 PM to 8.00 PM </td>
                                </tr>
                                <tr>
                                    <td class="s">3</td>
                                    <td class="s1">Mailing &amp; Entertainment</td>
                                    <td class="s1">GAMES</td>
                                    <td class="s1">$90.00</td>
                                    <td class="s1">1.00 PM to 7.00 PM </td>
                                </tr>
                                <tr>
                                    <td class="s">4</td>
                                    <td class="s1">PHP Web Development</td>
                                    <td class="s1">PHP</td>
                                    <td class="s1">$80.00</td>
                                    <td class="s1">12.00 Am to 4.00 PM </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection