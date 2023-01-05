@extends('frontend.master')
@section('content')
<!-- Video Modal Start -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="480" height="360" src="https://www.youtube.com/embed/Nbsu6EqLtZQ" title="পুলিশের পিকআপে লাঠিসোটা নিয়ে কয়েক যুবকের হামলা; ভিডিও ভাইরাল | Police Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- Header Start -->
<div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                <img class="img-fluid w-100 rounded-circle shadow-sm" src="{{ asset($myProfile->image) }}" alt="">
            </div>
            <div class="col-lg-7 text-center text-lg-left">
                <h3 class="text-white font-weight-normal mb-3">I'm</h3>
                <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;">{{ $myProfile->name }}</h1>
                <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                <div class="typed-text d-none">{{ $myProfile->qualification }}</div>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                    <a href="{{ asset($myProfile->cv) }}" class="btn btn-outline-light mr-5 download">Download CV</a>
                    <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/Nbsu6EqLtZQ" data-target="#videoModal">
                        <span></span>
                    </button>
                    <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
            <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 pb-4 pb-lg-0">
                <img class="img-fluid rounded w-100" src="{{ asset($myAbout->image) }}" alt="">
            </div>
            <div class="col-lg-7">
                <h3 class="mb-4">{{ $myAbout->title }}</h3>
                <p> {{ $myAbout->description }} </p>
                <div class="row mb-3">
                    <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary">{{ $myAbout->name }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Birthday: <span class="text-secondary">{{ $myAbout->date_of_birth }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary">{{ $myAbout->degree }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary">{{ $myAbout->experience }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary">{{ $myAbout->phone }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary">{{ $myAbout->email }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary">{{ $myAbout->address }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Freelance: <span class="text-secondary">{{ $myAbout->freelance }}</span></h6></div>
                </div>
                <a href="" class="btn btn-outline-primary mr-4">Hire Me</a>
                <a href="" class="btn btn-outline-primary">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Qualification Start -->
<div class="container-fluid py-5" id="qualification">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
            <h1 class="position-absolute text-uppercase text-primary">Education & Expericence</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h3 class="mb-4">My Education</h3>
                <div class="border-left border-primary pt-2 pl-4 ml-2">
                    @foreach($educations as $education)
                    <div class="position-relative mb-4">
                        <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                        <h3 class="font-weight-bold mb-1">{{ $education->title }}</h3>
                        <h5 class="font-weight-bold mb-1">{{ $education->name }}</h5>
                        <p class="mb-2"><strong>{{ $education->university }}y</strong> | <small>{{ date('Y',strtotime($education->starting_year )) }} - {{ date('Y',strtotime($education->ending_year)) }}</small></p>
                        <p>{{ $education->description }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">My Expericence</h3>
                <div class="border-left border-primary pt-2 pl-4 ml-2">
                    @foreach($experiences as $experience)
                    <div class="position-relative mb-4">
                        <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                        <h5 class="font-weight-bold mb-1">{{ $experience->name }}</h5>
                        <p class="mb-2"><strong>{{ $experience->company }} </strong> | <small>{{ date('Y',strtotime($experience->starting_year )) }} - {{ date('Y',strtotime($experience->ending_year)) }}</small></p>
                        <p> {{ $experience->description }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Qualification End -->


<!-- Skill Start -->
<div class="container-fluid py-5" id="skill">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
            <h1 class="position-absolute text-uppercase text-primary">My Skills</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                @foreach($skills as $skill)
                    <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">{{ $skill->name }}</h6>
                        <h6 class="font-weight-bold">{{ $skill->percentage }}%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="background-color: {{ $skill->color }}" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6">
                @if(count($right_skills)>0)
                    @foreach($right_skills as $skill)
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">{{ $skill->name }}</h6>
                            <h6 class="font-weight-bold">{{ $skill->percentage }}%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="background-color: {{ $skill->color }}" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Skill End -->


<!-- Services Start -->
<div class="container-fluid pt-5" id="service">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Service</h1>
            <h1 class="position-absolute text-uppercase text-primary">My Services</h1>
        </div>
        <div class="row pb-3">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <i class=" {{$service->fontawesome}} service-icon bg-primary text-white mr-3"></i>
                    <h4 class="font-weight-bold m-0">{{$service->name}}</h4>
                </div>
                <p> {{$service->description}}</p>
                <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Portfolio Start -->
<div class="container-fluid pt-5 pb-3" id="portfolio">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
            <h1 class="position-absolute text-uppercase text-primary">My Portfolio</h1>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li>
                    @foreach($portfolios as $portfolio)
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".{{ $portfolio->id }}">{{ $portfolio->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            @foreach($portfolios as $portfolio)
                @foreach($portfolio->images as $image)
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item {{ $portfolio->id }}">
                        <div class="position-relative overflow-hidden mb-2">
                            <img style="width: 250px; height: 230px;" class="img-fluid rounded w-100" src="{{ asset($image->image) }}" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="{{ asset($image->image) }}" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5" id="testimonial">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Review</h1>
            <h1 class="position-absolute text-uppercase text-primary">Clients Say</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel testimonial-carousel">
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                        <img class="img-fluid rounded-circle mx-auto mb-3" src="{{ asset('/') }}frontend/img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                        <h5 class="font-weight-bold m-0">Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                        <img class="img-fluid rounded-circle mx-auto mb-3" src="{{ asset('/') }}frontend/img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                        <h5 class="font-weight-bold m-0">Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                        <img class="img-fluid rounded-circle mx-auto mb-3" src="{{ asset('/') }}frontend/img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                        <h5 class="font-weight-bold m-0">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Blog Start -->
<div class="container-fluid pt-5" id="blog">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Blog</h1>
            <h1 class="position-absolute text-uppercase text-primary">Latest Blog</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-5">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded w-100" src="{{ asset('/') }}frontend/img/blog-1.jpg" alt="">
                    <div class="blog-date">
                        <h4 class="font-weight-bold mb-n1">01</h4>
                        <small class="text-white text-uppercase">Jan</small>
                    </div>
                </div>
                <h5 class="font-weight-medium mb-4">Rebum lorem no eos ut ipsum diam tempor sed rebum elitr ipsum</h5>
                <a class="btn btn-sm btn-outline-primary py-2" href="">Read More</a>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded w-100" src="{{ asset('/') }}frontend/img/blog-2.jpg" alt="">
                    <div class="blog-date">
                        <h4 class="font-weight-bold mb-n1">01</h4>
                        <small class="text-white text-uppercase">Jan</small>
                    </div>
                </div>
                <h5 class="font-weight-medium mb-4">Rebum lorem no eos ut ipsum diam tempor sed rebum elitr ipsum</h5>
                <a class="btn btn-sm btn-outline-primary py-2" href="">Read More</a>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded w-100" src="{{ asset('/') }}frontend/img/blog-3.jpg" alt="">
                    <div class="blog-date">
                        <h4 class="font-weight-bold mb-n1">01</h4>
                        <small class="text-white text-uppercase">Jan</small>
                    </div>
                </div>
                <h5 class="font-weight-medium mb-4">Rebum lorem no eos ut ipsum diam tempor sed rebum elitr ipsum</h5>
                <a class="btn btn-sm btn-outline-primary py-2" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


<!-- Contact Start -->
<div class="container-fluid py-5" id="contact">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
            <h1 class="position-absolute text-uppercase text-primary">Contact Me</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form text-center">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="control-group col-sm-6">
                                <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                       required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group col-sm-6">
                                <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                       required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                   required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"
                                          required="required"
                                          data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Footer Start -->
<div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="container text-center py-5">
        <div class="d-flex justify-content-center mb-4">
            <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="d-flex justify-content-center mb-3">
            <a class="text-white" href="#">Privacy</a>
            <span class="px-3">|</span>
            <a class="text-white" href="#">Terms</a>
            <span class="px-3">|</span>
            <a class="text-white" href="#">FAQs</a>
            <span class="px-3">|</span>
            <a class="text-white" href="#">Help</a>
        </div>
        <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#">Domain Name</a>. All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
        </p>
    </div>
</div>
<!-- Footer End -->

<!-- Scroll to Bottom -->
<i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

<!-- Back to Top -->
<a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>
@endsection
