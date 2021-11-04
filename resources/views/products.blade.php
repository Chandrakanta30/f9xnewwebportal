@extends('main')
@section('content') 

<section class="page-title-area">
<div class="container">
<div class="page-title-content text-center">
<h2>Case Studies 3 Columns</h2>
<ul>
<li><a href="/">Home</a></li>
<li>Case Studies 3 Columns</li>
</ul>
</div>
</div>
<div class="shape-img1"><img src="{{ asset('assets/img/shape/shape1.svg')}}" alt="image"></div>
<div class="shape-img2"><img src="{{ asset('assets/img/shape/shape2.png')}}" alt="image"></div>
<div class="shape-img3"><img src="{{ asset('assets/img/shape/shape3.png')}}" alt="image"></div>
</section>


<section class="projects-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="single-projects-box">
<div class="image">
<img src="{{ asset('assets/img/projects/img1.jpg')}}" alt="image">
<a href="single-case-studies-2.html" class="link-btn"><i class='bx bx-plus'></i></a>
</div>
<div class="content">
<h3><a href="single-case-studies-2.html">Movie Recommendation</a></h3>
<span>System Project</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-projects-box">
<div class="image">
<img src="{{ asset('assets/img/projects/img2.jpg')}}" alt="image">
<a href="single-case-studies-2.html" class="link-btn"><i class='bx bx-plus'></i></a>
</div>
<div class="content">
<h3><a href="single-case-studies-2.html">Customer Segmentation</a></h3>
<span>Machine Learning</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-projects-box">
<div class="image">
<img src="{{ asset('assets/img/projects/img3.jpg')}}" alt="image">
<a href="single-case-studies-2.html" class="link-btn"><i class='bx bx-plus'></i></a>
</div>
<div class="content">
<h3><a href="single-case-studies-2.html">Data Analysis</a></h3>
<span>Web Project</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-projects-box">
<div class="image">
<img src="{{ asset('assets/img/projects/img4.jpg')}}" alt="image">
<a href="single-case-studies-2.html" class="link-btn"><i class='bx bx-plus'></i></a>
</div>
<div class="content">
<h3><a href="single-case-studies-2.html">Detection Project</a></h3>
<span>Programming</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-projects-box">
<div class="image">
<img src="{{ asset('assets/img/projects/img5.jpg')}}" alt="image">
<a href="single-case-studies-2.html" class="link-btn"><i class='bx bx-plus'></i></a>
</div>
<div class="content">
<h3><a href="single-case-studies-2.html">Data Scientist</a></h3>
<span>Data Science</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-projects-box">
<div class="image">
<img src="{{ asset('assets/img/projects/img6.jpg')}}" alt="image">
<a href="single-case-studies-2.html" class="link-btn"><i class='bx bx-plus'></i></a>
</div>
<div class="content">
<h3><a href="single-case-studies-2.html">Benefits Research</a></h3>
<span>Science Projects</span>
 </div>
</div>
</div>
</div>
</div>
</section>
@endsection