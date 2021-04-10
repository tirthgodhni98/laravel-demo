@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('theme/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-0 text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{URL::to('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">Contact</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
          	<h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2>
            <form action="contact_add" method="POST" class="bg-light p-5 contact-form">
              @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
                <span class="text-danger" >{{ $errors->first('name') }}</span>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email">
                <span class="text-danger" >{{ $errors->first('email') }}</span>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
                <span class="text-danger" >{{ $errors->first('subject') }}</span>
              </div>
              <div class="form-group">
                <textarea name="message"  cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                <span class="text-danger" >{{ $errors->first('message') }}</span>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-8">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon">
		          		<span class="fa fa-map"></span>
		          	</div>
		            <p><span>Address:</span>4014, International Business Center, Piplod, Gaurav Path, Road, Dumas Rd, Piplod, Surat, Gujarat 395007</p>
		          </div>
		          <div class="col-md-4 text-center border-height py-4">
		          	<div class="icon">
		          		<span class="fa fa-phone"></span>
		          	</div>
		            <p><span>Phone:</span> <a href="#">+ 91 800 000 9898 </a></p>
		          </div>
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon">
		          		<span class="fa fa-paper-plane"></span>
		          	</div>
		            <p><span>Email:</span> <a href="#">mcaprojectfile2020@gmail.com</a></p>
		          </div>
		        </div>
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-md-12 ifmap">
        		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028.048899761787!2d72.7670292142477!3d21.15770658874115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04dfa683dd4f1%3A0xb3172139ae72a228!2sInternational%20Business%20Centre%2C%20Surat!5e1!3m2!1sen!2sin!4v1602141464429!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        	</div>
        </div>
      </div>
    </section>	
@endsection