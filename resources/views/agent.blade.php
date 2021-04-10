@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('theme/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-0 text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{URL::to('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Agents <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">Agents</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-agent">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Agents</span>
            <h2 class="mb-4">Our Agents</h2>
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="{{asset('theme/images/team-1.jpg') }}" class="img-fluid" alt="Colorlib Template">
		    				<div class="desc">
		    					<h3><a href="properties.html">Carlos Henderson</a></h3>
									<p class="h-info"><span class="location">Listing</span> <span class="details">10 Properties</span></p>
		    				</div>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="{{asset('theme/images/team-2.jpg')}}" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">Mike Bochs</a></h3>
								<p class="h-info"><span class="location">Listing</span> <span class="details">10 Properties</span></p>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="{{asset('theme/images/team-3.jpg')}}" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">Jessica Moore</a></h3>
								<p class="h-info"><span class="location">Listing</span> <span class="details">10 Properties</span></p>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="{{asset('theme/images/team-4.jpg') }}" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">Sarah Geronimo</a></h3>
								<p class="h-info"><span class="position">Listing</span> <span class="details">10 Properties</span></p>
	    				</div>
    				</div>
        	</div>

        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="{{asset('theme/images/team-5.jpg')}}" class="img-fluid" alt="Colorlib Template">
		    				<div class="desc">
		    					<h3><a href="properties.html">Carlos Henderson</a></h3>
									<p class="h-info"><span class="location">Listing</span> <span class="details">10 Properties</span></p>
		    				</div>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="{{asset('theme/images/team-6.jpg')}}" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">Mike Bochs</a></h3>
								<p class="h-info"><span class="location">Listing</span> <span class="details">10 Properties</span></p>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="{{asset('theme/images/team-7.jpg')}}" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">Jessica Moore</a></h3>
								<p class="h-info"><span class="location">Listing</span> <span class="details">10 Properties</span></p>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="{{asset('theme/images/team-8.jpg')}}" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">Sarah Geronimo</a></h3>
								<p class="h-info"><span class="position">Listing</span> <span class="details">10 Properties</span></p>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="{{asset('theme/images/team-9.jpg')}}" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">Sarah Geronimo</a></h3>
								<p class="h-info"><span class="position">Listing</span> <span class="details">10 Properties</span></p>
	    				</div>
    				</div>
        	</div>
        </div>
    	</div>
    </section>

@endsection