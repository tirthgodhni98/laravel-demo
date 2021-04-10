@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('theme/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-0 text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{URL::to('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">About Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-7 order-md-last d-flex align-items-stretch">
						<div class="img w-100 img-2 mr-md-2" style="background-image: url('{{ asset('theme/images/about.jpg')}}');"></div>
						<div class="img w-100 img-2 ml-md-2" style="background-image: url('{{ asset('theme/images/about-2.jpg')}}');"></div>
					</div>
					<div class="col-md-5 wrap-about py-md-5 ftco-animate">
	          <div class="heading-section pr-md-5">
	            <h2 class="mb-4">Click.com Real Estate</h2>

	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
	          </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row pt-md-5">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-5 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="{{$city_count}}">{{$city_count}}</strong>
                <span>Total<br>Citys</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-5 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="{{$property_count}}">{{$property_count}}</strong>
                <span>Total <br>Properties</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-5 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="{{$property_dealer_count}}"></strong>
                <span>Total <br>Property Dealer</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-5 mb-4">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="{{$user_count}}">0</strong>
                <span>Total <br>Happy Users</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    

@endsection

