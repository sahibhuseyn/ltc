@extends('client.layouts.layout')
@section('content')

    <!-- Inner Banner -->
    <div class="inner-page-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-12 mx-auto text-center">
                    <h2 class="font-weight-bold text-uppercase display-4 text-white">Course Details</h2>
                    <ol class="list-inline text-center">
                        <li class="list-inline-item"><a href="#">Home </a> &nbsp; / </li>
                        <li class="list-inline-item"><a href="#">Pages</a>  &nbsp; / </li>
                        <li class="list-inline-item active">Course Details </li>
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
                        <li class="nav-item border"><a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Popular COURSES</a></li>
                        <li class="nav-item border"><a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"> Our Syllabus</a></li>
                        <li class="nav-item border"><a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">Addmission Requirments </a></li>
                        <li class="nav-item border no-cutter"><a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-controls="settings">Our Teachers Profile</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane border border-top-0 p-3 active" id="home" role="tabpanel">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos sunt, reiciendis corrupti maiores voluptas dicta nesciunt sed accusamus aperiam inventore? Autem tempore ratione assumenda modi, fugiat at beatae nihil simili. Lorem ipsum dolor sit amet, consectetur adipisicing elit. In reprehenderit consectetur sed dolores voluptatem culpa necessitatibus debitis repudiandae, architecto sint eum fugiat corporis facilis totam accusantium est omnis rem ex!
                            <ul class="list-inline pt-3">
                                <li class="list-bloack-item"><span class="ti-angle-double-right"></span> Arts & HUmmunaites</li>
                                <li class="list-bloack-item"><span class="ti-angle-double-right"></span> Buisness</li>
                                <li class="list-bloack-item"><span class="ti-angle-double-right"></span> Computer Science</li>
                                <li class="list-bloack-item"><span class="ti-angle-double-right"></span> math & Logic</li>
                                <li class="list-bloack-item"><span class="ti-angle-double-right"></span> Personal Development</li>
                                <li class="list-bloack-item"><span class="ti-angle-double-right"></span> Physical Science and Engineering</li>
                                <li class="list-bloack-item"><span class="ti-angle-double-right"></span> Social Sciences</li>
                                <li class="list-bloack-item"><span class="ti-angle-double-right"></span> Language Learning</li>
                                <li class="list-bloack-item"><span class="ti-angle-double-right"></span> Degrees and Professional Certificates</li>
                            </ul>
                        </div>
                        <div class="tab-pane border border-top-0 p-3 " id="profile" role="tabpanel">
                            <div class="col-lg-6 col-md-6 float-left">
                                <b>Section A: Perspectives in Education</b>
                                <ul class="list-inline pt-3">
                                    <li class="list-block-item"><strong>PE 1:</strong> Childhood and Growing Up 8-11</li>
                                    <li class="list-block-item"><strong>PE 2:</strong> Contemporary India and Education 12-17</li>
                                    <li class="list-block-item"><strong>PE 3:</strong> Learning and Teaching 18-21</li>
                                    <li class="list-block-item"><strong>PE 4:</strong> Gender, School and Society 22-24</li>
                                    <li class="list-block-item"><strong>PE 5:</strong> Knowledge and Curriculum 25-29</li>
                                    <li class="list-block-item"><strong>PE 6:</strong> Creating an Inclusive School 30-32</li>
                                    <li class="list-block-item"><strong>PE 7:</strong> Health, Yoga and Physical Education 33-36</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <b>Section B: Curriculum and Pedagogic Studies</b>
                                <ul class="list-inline pt-3">
                                    <li class="list-block-item"><strong>CPS 1:</strong> Language across the Curriculum 37-39</li>
                                    <li class="list-block-item"><strong>CPS 2&3: </strong> Pedagogy of two School Subjects (Part I &II)</li>
                                    <li class="list-block-item">Social Science 41-47</li>
                                    <li class="list-block-item">Biological Science 48-54</li>
                                    <li class="list-block-item">Physical Science 55-60</li>
                                    <li class="list-block-item">Mathematics 61-67</li>
                                    <li class="list-block-item">Hindi 68-80</li>
                                    <li class="list-block-item">English 81-87</li>
                                    <li class="list-block-item">Urdu 88-95</li>
                                    <li class="list-block-item">Sanskrit 96-103</li>
                                    <li class="list-block-item">CPS 4: Assessment for Learning 104-109</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane border border-top-0 p-3 " id="messages" role="tabpanel">
                            This section will give you 10 things you need to either know or do to apply. You can then use our checklist for first-year applicants to make sure you have all of the required elements together before submitting your application. Want more detail? <strong>Download and print our Freshman Application Instructions.</strong>
                            <ul class="list-inline pt-3">
                                <li class="list-block-item"><i class="fa fa-print"></i> <a href="#" class="text-dark">Basic Requirements</a></li>
                                <li class="list-block-item"><i class="fa fa-print"></i> <a href="#" class="text-dark">Choosing a College</a></li>
                                <li class="list-block-item"><i class="fa fa-print"></i> <a href="#" class="text-dark">Application</a></li>
                                <li class="list-block-item"><i class="fa fa-print"></i> <a href="#" class="text-dark">Application Supporting Materials</a></li>
                                <li class="list-block-item"><i class="fa fa-print"></i> <a href="#" class="text-dark">Cornell University Supplemental Information</a></li>
                                <li class="list-block-item"><i class="fa fa-print"></i> <a href="#" class="text-dark">Official Transcript</a></li>
                                <li class="list-block-item"><i class="fa fa-print"></i> <a href="#" class="text-dark">Standardized Test Scores</a></li>
                                <li class="list-block-item"><i class="fa fa-print"></i> <a href="#" class="text-dark">Application Fee</a></li>
                                <li class="list-block-item"><i class="fa fa-print"></i> <a href="#" class="text-dark">Interviews</a></li>
                                <li class="list-block-item"><i class="fa fa-print"></i> <a href="#" class="text-dark">Additional Submissions</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane border border-top-0 p-3 " id="settings" role="tabpanel">
                            <div class="media">
                                <img class="d-flex align-self-center mr-4 img-fluid rounded" src="assets/images/team/course_02.jpg" alt="Generic placeholder image">
                                <div class="media-body mt-3">
                                    <h5 class="mt-0 mb-2">Karren Johnson </h5>
                                    <span class="italic">Teacher of Graphic Design</span>
                                    <ul class="list-inline m-0">
                                        <li class="facebook list-inline-item pr-3">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item twitter p-3">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item linkedin  p-3">
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li class="list-inline-item youtube  p-3">
                                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                                        </li>
                                    </ul>
                                    <p>A graphic design project may involve the stylization and presentation of existing text and either preexisting imagery or images developed by the graphic designer. Elements can be inco rporated in both traditional and digital form, which involves the use of visual arts, typography, and page layout techniques.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection