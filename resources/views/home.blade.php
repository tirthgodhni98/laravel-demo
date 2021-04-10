@extends('layouts.app')

@section('content')

<!-- {{asset('theme/css/animate.css')}} -->

    <section class="hero-wrap" style="background-image: url('{{asset('theme/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text">
	            <h1 class="mb-4">Find Perfect <br>Place From Your Area.</h1>
	            <p style="font-size: 18px;color:#f2f7ff">Plan a different kind of getaway to uncover the hidden gems near you.</p>
	            <p><a href="{{URL::to('properties')}}" class="btn btn-primary py-3 px-4">View all properties</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
 
    <section class="ftco-section ftco-no-pb ftco-no-pt"  >
    	<div class="container">
	    	<div class="row" >
					<div class="col-md-12">
						<div class="search-wrap-1 ftco-animate p-4" >
							<form action="\search_property" method="get" class="search-property-1" id="search_pro">
		        				<div class="row">
								<div class="col-lg align-items-end">
										<div class="form-group">
											<label for="#">Country</label>
											<div class="form-field">
											<div class="select-wrap">
									<div class="icon"><span class="fa fa-chevron-down"></span></div>
									<select name="country"  class="form-control area country_all" >
										<option value="">--select Country--</option>
										@foreach ($country as $val)
											<option value="{{$val->id}}" style=" text-transform: capitalize;">{{$val->name}}</option>
										@endforeach
										
									</select>
									<span class="text-danger" >{{ $errors->first('country') }}</span>
									</div>
									</div>
								</div>
									</div>
									<div class="col-lg align-items-end">
										<div class="form-group">
											<label for="#">State</label>
											<div class="form-field">
											<div class="select-wrap">
									<div class="icon"><span class="fa fa-chevron-down"></span></div>
									<select name="state"  class="form-control area state_all">
										<option value="">-- select State --</option>
									</select>
									<span class="text-danger" style="color: red;">{{ $errors->first('state') }}</span>
									</div>
									</div>
								</div>
									</div>
									<div class="col-lg align-items-end">
										<div class="form-group">
											<label for="#">City</label>
											<div class="form-field">
											<div class="select-wrap">
									<div class="icon"><span class="fa fa-chevron-down"></span></div>
									<select name="city" value="{{ old('city') }}" class="form-control area city_all">
										<option value="">--select City --</option>
									</select>
									<span class="text-danger" style="color: red;">{{ $errors->first('city') }}</span>
									</div>
									</div>
								</div>
									</div>
									<div class="col-lg align-items-end">
										<div class="form-group">
											<label for="#">Property Type</label>
											<div class="form-field">
											<div class="select-wrap">
									<div class="icon"><span class="fa fa-chevron-down"></span></div>
									<select name="peropty_type" value="{{ old('peropty_type') }}" class="form-control area" >
										<option value="">--select Property Type--</option>
										@foreach ($peropty_type as $val)
										<option value="{{$val->id}}" style=" text-transform: capitalize;">{{$val->name}}</option>
									@endforeach
									</select>
									<span class="text-danger" style="color: red;">{{ $errors->first('peropty_type') }}</span>
									</div>
									</div>
								</div>
									</div>
		        			<div class="col-lg align-self-end">
		        				<div class="form-group">
		        					<div class="form-field">
				                <input type="submit" value="Search" class="form-control btn btn-primary">
				              </div>
			              </div>
		        			</div>
		        		</div>
		        	</form>
		        </div>
					</div>
	    	</div>
	    </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
      <div class="container">
        <div class="row d-flex no-gutters">
          <div class="col-md-3 d-flex align-items-stretch ftco-animate mynew">
            <div class="media block-6 services services-bg d-block text-center px-4 py-5 mypink">
            	<div class="icon d-flex justify-content-center align-items-center "><span class="flaticon-business"></span></div>
              <div class="media-body py-md-4">
                <h3>Trusted by Thousands</h3>
                <p class="mynew">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-items-stretch ftco-animate">
            <div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-home"></span></div>
              <div class="media-body py-md-4">
                <h3>Wide Range of Properties</h3>
                <p class="mynew">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-items-stretch ftco-animate">
            <div class="media block-6 services services-bg services-lighten d-block text-center px-4 py-5">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-stats"></span></div>
              <div class="media-body py-md-4">
                <h3>Financing Made Easy</h3>
                <p class="mynew">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-items-stretch ftco-animate">
            <div class="media block-6 services services-bg d-block text-center px-4 py-5">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-quarantine"></span></div>
              <div class="media-body py-md-4">
                <h3>Locked in Pricing</h3>
                <p class="mynew">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
      		<div class="row justify-content-center">
          		<div class="col-md-12 heading-section text-center ftco-animate mb-5">
          			<span class="subheading">What we offer</span>
            		<h2 class="mb-2">Featured Properties</h2>
          		</div>
        	</div>
        	<div class="row">
          		<div class="col-md-12">
            		<div class="row">
					@foreach ($property as $val)
					
				  	<div class="col-md-4 item" >
                		<div class="property-wrap ftco-animate">
							<a href="{{URL::to('propertiedetail')}}/{{$val->id}}"  class="img" style="background-image: url('{{asset('property_image')}}/{{$val->image}}');">
		        				<p class="price"><span class="fa fa-rupee"> {{$val->rent}}/- Per Night</span></p>
		        			</a>
		        			<div class="text">
		        				<h3 style=" text-transform: capitalize;"><a href="{{URL::to('propertiedetail')}}/{{$val->id}}">{{$val->name}}</a></h3>
		        				<span class="location" style=" text-transform: uppercase;"><i class="fa fa-map-marker"> </i> {{$val->city_name}}</span>
		        				<a class="d-flex align-items-center justify-content-center btn-custom"  href="{{URL::to('propertiedetail')}}/{{$val->id}}">
		        					<span class="fa fa-link"></span>
		        				</a>
		        			</div>
		        		</div>
					</div>

					@endforeach	
					
					
				</div>
				<div class="col-md-12" style="text-align: center;">
					<a href="{{URL::to('properties')}}" class="btn btn-primary">View all properties</a>
				</div>
            </div>
        </div>
    </section>

    <section class="ftco-sec	tion ftco-no-pt" id="citysearch">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Properties</span>
            <h2 class="mb-2">Properties for this Cities</h2>
          </div>
        </div>
    		<div class="row">
				@foreach ($city_with_property as $val)
					
				
    			<div class="col-md-4">
				<a href="searchforcityproperty/{{$val->city_id}}" class="search-place img" style="background-image: url('{{asset('city/')}}/{{$val->image}}');">
						<div class="desc">
							<h3><span style=" text-transform: capitalize;">{{$val->name }}</span></h3>
							<span>{{$val->count}} Properties</span>
						</div>
    				</a>
				</div>
				@endforeach
    		</div>
    	</div>
    </section>
	<section style="height:100px;">
		
	</section>
    <section class="ftco-section services-section bg-darken" style="padding-top=50px;">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Work flow</span>
            <h2 class="mb-3">How it works</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>01</span>
              	<img src="theme/images/blob.svg" alt="">
              	</div>
                <h3>Search Property</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>02</span>
              	<img src="theme/images/blob.svg" alt=""></div>
                <h3>Evaluate Property</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>03</span>
              	<img src="theme/images/blob.svg" alt=""></div>
                <h3>Close the Deal</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>04</span>
              	<img src="theme/images/blob.svg" alt=""></div>
                <h3>Have Your Property</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
    		</div>
    	</div>
    </section>

    {{-- <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-7 order-md-last d-flex align-items-stretch">
						<div class="img w-100 img-2 mr-md-2" style="background-image: url('{{asset('theme/images/about.jpg')}}');"></div>
						<div class="img w-100 img-2 ml-md-2" style="background-image: url('{{asset('theme/images/about-2.jpg')}}');"></div>
					</div>
					<div class="col-md-5 wrap-about py-md-5 ftco-animate">
	          <div class="heading-section pr-md-5">
	            <h2 class="mb-4">Ecoverde Real Estate</h2>

	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
	          </div>
					</div>
				</div>
			</div>
		</section> --}}

		{{-- <section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row pt-md-5">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-5 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="1000">0</strong>
                <span>Total <br>cilent</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-5 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="2500">0</strong>
                <span>Total <br>Booking</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-5 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="500">0</strong>
                <span>Total <br>Properties</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-5 mb-4">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="67">0</strong>
                <span>Total <br> CancleBooking</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section> --}}

    
    @endsection