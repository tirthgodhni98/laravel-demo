@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('theme/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-0 text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{URL::to('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span> Properties <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">Search Properties</h1>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section goto-here">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Search Properties</h2>
          </div>
        </div>
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
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li>{{ $property->appends(request()->except('page'))->links() }}</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>



@endsection
