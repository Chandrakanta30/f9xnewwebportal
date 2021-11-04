@extends('main')
@section('content') 

<section class="page-title-area">
<div class="container">
<div class="page-title-content text-center">
<h2>Services</h2>
<ul>
<li><a href="/">Home</a></li>
<li>Services</li>
</ul>
</div>
</div>
<div class="shape-img1"><img src="{{ asset('assets/img/shape/shape1.svg')}}" alt="image"></div>
<div class="shape-img2"><img src="{{ asset('assets/img/shape/shape2.png')}}" alt="image"></div>
<div class="shape-img3"><img src="{{ asset('assets/img/shape/shape3.png')}}" alt="image"></div>
</section>


<section class="services-area pt-100 pb-70 bg-f1f8fb">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-services-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
<div class="icon">
<img src="{{ asset('assets/img/services/icon1.png')}}" alt="image">
</div>
<h3><a href="single-services-2.html">Data Analytics</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
<a href="single-services-2.html" class="read-more-btn">Read More <i class="flaticon-right"></i></a>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-services-box wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
<div class="icon">
<img src="{{ asset('assets/img/services/icon2.png')}}" alt="image">
</div>
<h3><a href="single-services-2.html">AI & ML Development</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
<a href="single-services-2.html" class="read-more-btn">Read More <i class="flaticon-right"></i></a>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-services-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
<div class="icon">
<img src="{{ asset('assets/img/services/icon3.png')}}" alt="image">
</div>
<h3><a href="single-services-2.html">Data Science</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
<a href="single-services-2.html" class="read-more-btn">Read More <i class="flaticon-right"></i></a>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-services-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
<div class="icon">
<img src="{{ asset('assets/img/services/icon4.png')}}" alt="image">
</div>
<h3><a href="single-services-2.html">Predictive Analytics</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
<a href="single-services-2.html" class="read-more-btn">Read More <i class="flaticon-right"></i></a>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-services-box wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
<div class="icon">
<img src="{{ asset('assets/img/services/icon5.png')}}" alt="image">
</div>
<h3><a href="single-services-2.html">Software Development</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
<a href="single-services-2.html" class="read-more-btn">Read More <i class="flaticon-right"></i></a>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-services-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
<div class="icon">
<img src="{{ asset('assets/img/services/icon6.png')}}" alt="image">
</div>
<h3><a href="single-services-2.html">Elastic Solutions</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
<a href="single-services-2.html" class="read-more-btn">Read More <i class="flaticon-right"></i></a>
</div>
</div>
</div>
</div>
<div class="circle-shape2"><img src="{{ asset('assets/img/shape/circle-shape2.png')}}" alt="image"></div>
<div class="lines">
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
</div>
</section>


<section class="project-start-area bg-color ptb-100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12">
<div class="project-start-image">
<img src="{{ asset('assets/img/project-start1.png')}}" data-speed="0.06" data-revert="true" alt="image">
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="project-start-content">
<h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">We Like to Start Your Project With Us</h2>
<p class="wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
<a href="contact.html" class="default-btn wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"><i class="flaticon-web"></i>Get Started<span></span></a>
</div>
</div>
</div>
</div>
<div class="vector-shape9"><img src="{{ asset('assets/img/shape/vector-shape9.png')}}" alt="image"></div>
<div class="vector-shape10"><img src="{{ asset('assets/img/shape/vector-shape10.png')}}" alt="image"></div>
</section>

@endsection