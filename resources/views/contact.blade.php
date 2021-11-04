
@extends('main')
@section('content') 

<section class="page-title-area">
<div class="container">
<div class="page-title-content">
<h2>Contact Us</h2>
<ul>
<li><a href="/">Home</a></li>
<li>Contact Us</li>
</ul>
</div>
</div>
<div class="shape-img1"><img src="{{ asset('assets/img/shape/shape1.svg')}}" alt="image"></div>
<div class="shape-img2"><img src="{{ asset('assets/img/shape/shape2.png')}}" alt="image"></div>
<div class="shape-img3"><img src="{{ asset('assets/img/shape/shape3.png')}}" alt="image"></div>
</section>


<section class="contact-info-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6">
 <div class="contact-info-box">
<div class="back-icon">
<i class='bx bx-map'></i>
</div>
<div class="icon">
<i class='bx bx-map'></i>
</div>
<h3>Our Address</h3>
<p>175 5th Ave, New York, NY 10010, United States</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="contact-info-box">
<div class="back-icon">
<i class='bx bx-phone-call'></i>
</div>
<div class="icon">
<i class='bx bx-phone-call'></i>
</div>
<h3>Contact</h3>
<p>Mobile: <a href="tel:+44457895789">(+44) - 45789 - 5789</a></p>
<p>E-mail: <a href="/cdn-cgi/l/email-protection#4b232e2727240b3f392a282e3965282426"><span class="__cf_email__" data-cfemail="98f0fdf4f4f7d8eceaf9fbfdeab6fbf7f5">[email&#160;protected]</span></a></p>
</div>
</div>
<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
<div class="contact-info-box">
<div class="back-icon">
<i class='bx bx-time-five'></i>
</div>
<div class="icon">
<i class='bx bx-time-five'></i>
</div>
<h3>Hours of Operation</h3>
<p>Monday - Friday: 09:00 - 20:00</p>
<p>Sunday & Saturday: 10:30 - 22:00</p>
</div>
</div>
</div>
</div>
</section>


<section class="contact-area pb-100">
<div class="container">
<div class="section-title">
<span class="sub-title"><img src="{{ asset('assets/img/star-icon.png')}}" alt="image"> Get in Touch</span>
<h2>Ready to Get Started?<span class="overlay"></span></h2>
<p>Your email address will not be published. Required fields are marked *</p>
</div>
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="contact-image" data-tilt>
<img src="{{ asset('assets/img/contact.png')}}" alt="image">
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="contact-form">
<form id="contactForm">
<div class="row">
<div class="col-lg-12 col-md-6">
<div class="form-group">
<input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Your name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-6">
<div class="form-group">
<input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="Your email address">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
 <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Your phone number">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<button type="submit" class="default-btn"><i class="flaticon-tick"></i>Send Message<span></span></button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>


<div id="map">
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9476519598093!2d-73.99185268459418!3d40.74117737932881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a3f81d549f%3A0xb2a39bb5cacc7da0!2s175%205th%20Ave%2C%20New%20York%2C%20NY%2010010%2C%20USA!5e0!3m2!1sen!2sbd!4v1588746137032!5m2!1sen!2sbd"></iframe> -->
</div>
@endsection