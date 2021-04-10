<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Book Your Property </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--favicon icon-->
    
    <link rel="shortcut icon" href="{{ asset('theme/images/favicon.ico') }}">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('theme/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}">
    
    <link rel="stylesheet" href="{{asset('theme/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/jquery-ui.css')}}">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{URL::to('home')}}"><big>Click.</big><small>com</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{URL::to('home')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{URL::to('properties')}}" class="nav-link">Properties</a></li>
	          <li class="nav-item"><a href="{{URL::to('about')}}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{URL::to('contact')}}" class="nav-link">Contact</a></li>
           @if (session()->has('data'))
             @if (session()->get('user_type') == 0)
                
                <li class="nav-item"><a href="{{URL::to('adminpanel')}}" class="nav-link">My Account</a></li>
                <li class="nav-item"><a href="{{URL::to('logout')}}" class="nav-link">Logout</a></li>
                
              @elseif (session()->get('user_type') == 1)
                <li class="nav-item"><a href="{{URL::to('customerpanel')}}" class="nav-link">My Account</a></li>
                <li class="nav-item"><a href="{{URL::to('logout')}}" class="nav-link">Logout</a></li>
              @elseif (session()->get('user_type') == 2)
                <li class="nav-item"><a href="{{URL::to('hostpanel')}}" class="nav-link">My Account</a></li>
                <li class="nav-item"><a href="{{URL::to('logout')}}" class="nav-link">Logout</a></li>
              @endif
          @else
           <li class="nav-item"><a href="{{URL::to('login')}}" class="nav-link">Login</a></li> 
           @endif   
           

            <!--a href="javascript:void" onclick="$('#logout-form').submit();">
              Logout
          </a>
          
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form-->
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
        <main class="py-4">
            @yield('content')
        </main>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><big>Click.</big><small>com</small></h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              {{-- <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul> --}}
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Community</h2>
              <ul class="list-unstyled">
                <li><a href="{{URL::to('home')}}#search_pro"><span class="fa fa-chevron-right mr-2"></span>Search Properties</a></li>
                <li><a href="{{URL::to('home')}}#citysearch"><span class="fa fa-chevron-right mr-2"></span>Properties For Citys</a></li>
                <li><a href="{{URL::to('home')}}"><span class="fa fa-chevron-right mr-2"></span>Home Page</a></li>
              </ul>
            </div>
          </div>
          {{-- <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Our Story</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Meet the team</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div> --}}
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <ul class="list-unstyled">
                <li><a href="{{URL::to('about')}}"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                <li><a href="{{URL::to('contact')}}"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map"></span><span class="text">4014, International Business Center, Piplod, Gaurav Path, Road, Dumas Rd, Piplod, Surat, Gujarat 395007</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+91 800 000 9898</span></a></li>
	                <li><a href="#"><span class="icon fa fa-envelope pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div style="color: white;">© 2020 Click.com, Inc. All rights reserved</div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('theme/js/jquery.min.js')}}"></script>
  <script src="{{asset('theme/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('theme/js/popper.min.js')}}"></script>
  <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('theme/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('theme/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('theme/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('theme/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('theme/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('theme/js/google-map.js')}}"></script>
  <script src="{{asset('theme/js/main.js')}}"></script>
  <script src="{{asset('theme/js/jquery-ui.js')}}"></script>
  <script>
    $(document).ready(function(){
      $(window).scroll(function() {    
        var scroll = $(window).scrollTop();

        //>=, not <=
        if (scroll >= 500) {
            //clearHeader, not clearheader - caps H
            $(".scoller").addClass("darkHeader");
        }else{
            $(".scoller").removeClass("darkHeader");
        }
      });


    });

    $( function() { 
         
     var dateFormat = "yy-mm-dd",
      from = $( "#from" )
        .datepicker({
          // defaultDate: "",
          // changeMonth: true,
          // changeYear: true,
          numberOfMonths: 1,
          dateFormat : dateFormat,
          minDate: new Date(),
          showAnim: "slide",
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
         
        }),
        
        
      to = $( "#to" ).datepicker({
        defaultDate: "+2d",
        // changeMonth: true,
        // changeYear: true,
        numberOfMonths: 1,
        dateFormat : dateFormat,
        minDate: new Date(),
        showAnim: "slide"
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
        
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
    </script>  
    {{-- <script>
      // Material Select Initialization
      $(document).ready(function() {
      $('.mdb-select').materialSelect();
      });
  </script> --}}
  
  
  <script>
    //add-update form
    $(document).ready(function(){
      $(".ud").hide();
      $(".update").click(function(){
        
      });
    });
  </script>
  
  <script>
    $(document).ready(function(){
      // var myVar = $("#start").find('.deletefafa').val();
      
        $('.deletefafa').click(function(){
          var myVar = $(this).data('val');
          alert(myVar);
  
      });
    });
  </script>
  
  <script>

    function updateCountry(name,id)
    {
      $(".ad").hide();
        $(".ud").show();
        $('#update_country').val(name);
        $('#update_country_id').val(id);

    }
    function saveupdatecountry()
    {
      var name = $('#update_country').val();
      var id =   $('#update_country_id').val();
      if($('.update_country').val() == ""){
       // alert("");
        $('.update_country').focus();
          //return false;
      }
      else{
          $('#updateCountry').attr('action', '/updatecountry').submit();
      }
    }
    //satate
    function updateState(c_id,name,id,sname)
    {
      $(".ad").hide();
        $(".ud").show();
        $('#update_state').val(sname);
        $('#update_state_id').val(id);
        $('#country_id option').each(function(index,item){
            if($(this).val() == c_id){
              $(this).attr('selected','selected');
            }
        });
    }
    function saveupdatestate()
    {
      var c_di = $('#country_id').val();
      var st_id =   $('#update_state_id').val();
      var name =   $('#update_state').val();
      if($('#country_id').val() == ""){
       // alert("");
        $('.country_id').focus();
          //return false;
      }
      else if($('#update_state').val() == "")
      {
        $('#update_state').focus();
      }
      else{
          $('#updateState').attr('action', '/updatestate').submit();
      }
    }

    //city
    function updateCity(id,cname,st_id,name,co_id,c_name)
    {
      $(".ad").hide();
        $(".ud").show();
        $('#update_city').val(cname);
        $('#update_city_id').val(id);
        $('#country_id option').each(function(index,item){
            if($(this).val() == co_id){
              $(this).attr('selected','selected');
            }
        });
        $('#state_id option').each(function(index,item){
            if($(this).val() == st_id){
              $(this).attr('selected','selected');
            }
        });
    }  

    function saveupdatecity()
    {
     
      var st_id =   $('#state_id').val();
      var name =   $('#update_city').val();
      if($('#country_id').val() == ""){
       // alert("");
        $('.country_id').focus();
          //return false;
      }
      else if($('#state_id').val() == "")
      {
        $('#state_id').focus();
      }
      else if($('#update_city').val() == "")
      {
        $('#update_city').focus();
      }
      else{
          $('#updateCity').attr('action', '/updatecity').submit();
      }
    }

    //country_ch
    $('.country_id').on('change', function() {
      var c_id  = $(this).val();
      $.ajax({
          url:"{{url('get-states-by-country')}}",
          type: "POST",
          data: {
          country_id: c_id,
          _token: '{{csrf_token()}}' 
          },
          dataType : 'json',
          success: function(result){
          $('.state_id').html('<option value="">Select State</option>'); 
          $.each(result.states,function(key,value){
          $(".state_id").append('<option value="'+value.id+'">'+value.name+'</option>');
          });
          //$('#city-dropdown').html('<option value="">Select State First</option>'); 
          }
          });
    });

    $(document).on('click', '.showimage', function() {
      //alert();  
      var image = $(this).data('image');
      var src = '{{asset("city")}}/'+image;
      var id = $(this).data('id');
      $('.city_id').val(id);
      $('.popupimage').attr('src',src);
     // alert(src);
    });

    $('.popupimage').click(function(){ $('.imagehidde').trigger('click'); });

    $('.imagehidde').on('change', function() {
      $('#updateimageform').attr('action', '/updateimageform').submit();
    });

    //Aminities 
    function updateAminities(name,fa_code,id)
    {
      $(".ad").hide();
        $(".ud").show();
        $('#update_aminities_name').val(name);
        $('#update_id').val(id);
        $('#update_fa_code').val(fa_code);

    }

    function saveupdateaminities()
    {
      var name = $('#update_aminities_name').val();
      var id =   $('#update_id').val();
      var fa_code = $('#update_fa_code').val();
      if($('#update_aminities_name').val() == "")
      {
        $('#update_aminities_name').focus();
      }
      else if($('#update_fa_code').val() == "")
      {
        $('#update_fa_code').focus();
      }
      else
      {
          $('#updateaminities').attr('action', '/updateaminities').submit();
      }
    }

    //update property type
    function updatepropertytype(name,id)
    {
      $(".ad").hide();
        $(".ud").show();
        $('#update_propertie_type').val(name);
        $('#update_id_property').val(id);
    }
    function saveupdatepropertytype()
    {
      var name = $('#update_propertie_type').val();
      var id =   $('#update_id_property').val();
      if($('#update_propertie_type').val() == "")
      {
        $('#update_propertie_type').focus();
      }
      else
      {
          $('#updatepropertytype').attr('action', '/updatepropertytype').submit();
      }
    }
  //admin update profile
  $(document).ready(function(){
    $(".ud").hide();   
    $(".profileupdate").click(function(){
      $(".ad").hide();
      $(".ud").show();
    });
  });

  //country state city all user
  $('.country_all').on('change', function() {
      var c_id  = $(this).val();
      $.ajax({
          url:"{{url('country_all_user')}}",
          type: "POST",
          data: {
          country_id: c_id,
          _token: '{{csrf_token()}}' 
          },
          dataType : 'json',
          success: function(result){
            $('.state_all').html('<option value="">Select State</option>'); 
            $.each(result.states,function(key,value){
            $(".state_all").append('<option value="'+value.id+'">'+value.name+'</option>');
            });
            $('.city_all').html('<option value="">Select State First</option>'); 
          }
          });
    });

    $('.state_all').on('change', function() {
      var st_id  = $(this).val();
      $.ajax({
          url:"{{url('state_all_user')}}",
          type: "POST",
          data: {
          state_id: st_id,
          _token: '{{csrf_token()}}' 
          },
          dataType : 'json',
          success: function(result){
          $('.city_all').html('<option value=""> Select City </option>'); 
          $.each(result.states,function(key,value){
          $(".city_all").append('<option value="'+value.id+'">'+value.name+'</option>');
          });
          //$('.city_all').html('<option value="">Select State First</option>'); 
          }
          });
    });

    //
    function quick_property(id)
    {
      // alert(id);
      $.ajax({
          url:"{{url('quick_property')}}",
          type: "POST",
          data: {
          property_id: id,
          _token: '{{csrf_token()}}' 
          },
          success: function(result){
            $('#quick_property_data').html(result);
          }
          }); 
    }
    function quick_amenities(id)
    {
      // alert(id);
      
      $.ajax({
          url:"{{url('quick_amenities')}}",
          type: "POST",
          data: {
          property_id: id,
          _token: '{{csrf_token()}}' 
          },
          success: function(result){
            $('#quick_property_amenities').html(result);
            $('#show_pro_id_ami').val(id);
          }
          }); 
    }
    function quick_property_image(id)
    {
      // alert(id);
      $.ajax({
          url:"{{url('quick_property_image')}}",
          type: "POST",
          data: {
          property_id: id,
          _token: '{{csrf_token()}}' 
          },
          success: function(result){
            $('#quick_property_image').html(result);
          }
          }); 
    }

    //update property
    function updateproperty(id,name,rent,bedroom,washroom,address,map,city_id,city_name,state_id,state_name,country_id,country_name,property_types_id,property_type_name)
    {
      //alert(description);
      $(".ad").hide();
      $(".ud").show();
      $('.property_id').val(id);
      $('#property_name').val(name);
      $('#update_rent').val(rent);
      $('#update_address').val(address);
      $('#update_map').val(map);
      var myVar = $('.update').data('desc');
      $('#update_desc').val(myVar);

      $('.country_id option').each(function(index,item){
          if($(this).val() == country_id){
            $(this).attr('selected','selected');
          }
      });
      $('.state_id option').each(function(index,item){
          if($(this).val() == state_id){
            $(this).attr('selected','selected');
          }
      });
      $('.city_id option').each(function(index,item){
          if($(this).val() == city_id){
            $(this).attr('selected','selected');
          }
      });
      $('.peropty_type option').each(function(index,item){
          if($(this).val() == property_types_id){
            $(this).attr('selected','selected');
          }
      });
      $('.bedroom option').each(function(index,item){
          if($(this).val() == bedroom){
            $(this).attr('selected','selected');
          }
      });
      $('.washroom option').each(function(index,item){
          if($(this).val() == washroom){
            $(this).attr('selected','selected');
          }
      });
    } 

    function saveupdatepropertys()
    {
      //alert("hi");
      var id = $('.property_id').val();
      var name =  $('#property_name').val();
      var rent = $('#update_rent').val();
      var desc = $('#update_desc').val();
      var address = $('#update_address').val();
      var map =  $('#update_map').val();
      var washroom = $('.washroom').val();
      var bedroom = $('.bedroom').val();
      var property_id = $('.peropty_type').val();
      var city_id = $('#update_city').val();
      
      if($('#property_name').val() == "")
      {
        $('#property_name').focus();
        
      }
      else if($('#update_rent').val() == "")
      {
        $('#update_rent').focus();
      }
      else if($('#update_desc').val() == "")
      {
        $('#update_desc').focus();
      }
      else if($('#update_address').val() == "")
      {
        $('#update_address').focus();
      }
      else if($('#update_map').val() == "")
      {
        $('#update_map').focus();
      }
      else if($('.washroom').val() == "")
      {
        $('.washroom').focus();
      }
      else if($('.bedroom').val() == "")
      {
        $('.bedroom').focus();
      }
      else if($('.peropty_type').val() == "")
      {
        $('.peropty_type').focus();
      }
      else if($('#update_city').val() == "")
      {
        $('#update_city').focus();
      }
      else
      {
        //alert("d");
          $('#updateproperty').attr('action', '/updateproperty').submit();
      }
    }
    //delete image for property
    function clickimagedelete(id,pro_id)
    {
      //alert(id);
     $.ajax({
          url:"{{url('image_delete')}}",
          type: "POST",
          data: {
            property_image_id: id,
            _token: '{{csrf_token()}}' 
          },
          success: function(result){
            //$('#quick_property_image').html(result);
            //setInterval('refreshPage()', 1000);
            quick_property_image(pro_id)
          }
          }); 

    }
//admin site all property na
    function quick_property_admin(id)
    {
      // alert(id);
      $.ajax({
          url:"{{url('quick_property_admin')}}",
          type: "POST",
          data: {
          property_id: id,
          _token: '{{csrf_token()}}' 
          },
          success: function(result){
            $('#quick_property_data_admin').html(result);
          }
          }); 
    }
    function quick_amenities_admin(id)
    {
      // alert(id);
      $.ajax({
          url:"{{url('quick_amenities_admin')}}",
          type: "POST",
          data: {
          property_id: id,
          _token: '{{csrf_token()}}' 
          },
          success: function(result){
            $('#quick_property_amenities_admin').html(result);
          }
          }); 
    }
    function quick_property_image_admin(id)
    {
      // alert(id);
      $.ajax({
          url:"{{url('quick_property_image_admin')}}",
          type: "POST",
          data: {
          property_id: id,
          _token: '{{csrf_token()}}' 
          },
          success: function(result){
            $('#quick_property_image_admin').html(result);
          }
          }); 
    }


    //readmore readless
    $(document).ready(function() {
    // Configure/customize these variables.
        var showChar = 500;  // How many characters are shown by default
        var ellipsestext = "...";
        var moretext = "Show more >";
        var lesstext = "Show less";
        

        $('.more').each(function() {
            var content = $(this).html();
    
            if(content.length > showChar) {
    
                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);
    
                var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
    
                $(this).html(html);
            }
    
        });
    
        $(".morelink").click(function(){
            if($(this).hasClass("less")) {
                $(this).removeClass("less");
                $(this).html(moretext);
            } else {
                $(this).addClass("less");
                $(this).html(lesstext);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });
        
        $(".image_check_lenght").change(function(){
          // alert("The text has been changed.");
          var imageSize = document.getElementById('image_check_lenght');
          var imageCount = imageSize.files.length;
          // console.log(imageCount);
          if(imageCount <= 6)
          {
            // alert("please select more than 6 images");
            $("#myModal").modal();
            $('.image_check_lenght').val('');
            $('.OpenImgUpload').click(function(){ $('#image_check_lenght').trigger('click'); });
          }
      });
      $('#hidden_amount').hide();
      $('.clear_text').hide();
    });

    //hidden_amount 
    

    function checkpropertybooking(id)
    { 
      
      var ci = $('#from').val();
      var co = $('#to').val();
      if($('#from').val() == "")
      {
        $('#from').focus();
        
      }
      else if($('#to').val() == "")
      {
        $('#to').focus();
      }
      else
      {
          $.ajax({
            url:"{{url('checkpropertybooking')}}",
            type: "POST",
            data: {
            property_id: id,
            check_inn: ci,
            check_outt: co,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
              // $('#quick_property_image_admin').html(result);
              if(result.booking.length == 0)
              {
                  $("#amount").addClass("d-block");
                  $("#amount").removeClass("d-none");
                  $(".mess").addClass("d-none");
                  $(".mess").removeClass("d-block"); 
                  $('.check_avail').hide();
                  $('.clear_text').show();
                  var $dates = $('#from, #to').datepicker();
                  $('.clear_text').click(function() {
                      $dates.datepicker('setDate', null);
                      $("#amount").addClass("d-none");
                      $("#amount").removeClass("d-block");
                      $('.check_avail').show();
                      $('.clear_text').hide();
                  });
                  var start= $("#from").datepicker("getDate");
                  var end= $("#to").datepicker("getDate");
                  var days = (end- start) / (1000 * 60 * 60 * 24);
                  $("#show_days").text(days);               
                  var textValue1 = document.getElementById('property_rent').value;
                  var values = textValue1 * days;
                  $("#show_rent").text(values);
                  var ser = $("#service_fee").data('ser');
                  var sum = ser + values;
                  $("#total_amount").text(sum); 
              }
              else{
                  var mess = "Please change your date !!!";
                  $("#error_date").text(mess); 
                  $(".mess").addClass("d-block");
                  $(".mess").removeClass("d-none"); 
                  $("#amount").addClass("d-none");
                  $("#amount").removeClass("d-block");
              }
              
              
            }
         });
      }

     // alert(id);
       
    }

    

    function reservepropertie(pro_id,rent)
    {
      var id = pro_id;
      
      var start_date= $("#from").val();
      var end_date= $("#to").val();
      var rent = rent;
      var start= $("#from").datepicker("getDate");
      var end= $("#to").datepicker("getDate");
      var days = (end- start) / (1000 * 60 * 60 * 24);
      var ser = $("#service_fee").data('ser');
      var total = ser + (rent * days);
      $('#amount button a').hide();
      $('#amount button i').show();
      $.ajax({
            url:"{{url('reservepropertie')}}",
            type: "POST",
            data: {
            property_id: id,
            totals: total,
            check_inn: start_date,
            check_outt: end_date,
            _token: '{{csrf_token()}}' 
            },
            // dataType : 'json',
            success: function(result){
             // location.href = 'customerbooking';
             alert("Your Booking Is Done And check Your Booking And Enjoy Your day's !!!!")
             location.replace('../customerbooking');
            //  
            },
            complete: function(){
               $('#amount button a').show();
               $('#amount button i').hide();
            }
         });
    }
    </script>
  </body>
</html>