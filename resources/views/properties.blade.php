@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('theme/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-0 text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{URL::to('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Properties <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">Properties</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12">
						<div class="search-wrap-1 ftco-animate p-4">
							<form action="\search_property" method="get" class="search-property-1">
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

    <section class="ftco-section goto-here">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Properties</h2>
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
                <li>{{ $property->links()}}</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>



@endsection
