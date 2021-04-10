<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
      ></script>
      <link rel="stylesheet" href="{{asset('theme/css/style_login.css')}}" />
      <link rel="stylesheet" href="{{asset('theme/css/toastr.min.css')}}" />
      <title>Login</title>
    </head>
    <body>

      
      <div class="container">
        <div class="forms-container">
          <div class="signin-signup">
            <form method="POST" class="sign-in-form" id="login_form" autocomplete="off">
              @csrf
              <h2 class="title">Sign in</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" id="username"  name="username" placeholder="Username" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                
                <input type="password" id="login_password" name="login_password" placeholder="Password" />
              </div>
              <div class="form-group">
                <a href="forget_password" style="color: #01b7f2; text-decoration: underline; margin-right: 217px; padding-top: 7px;">Forgot password</a>
              </div>
              <button type="button" name="login" id="login" class="btn" value="login">login</button>
              <!--input type="submit" value="Login" class="btn solid" /-->
            </form>
            {{-- forget password --}}
            
            <form class="sign-up-form" method="POST" autocomplete="off">
              @csrf
              <h2 class="title">Sign up</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <label>
                  <input type="radio" checked="checked" name="property_type" value="1" style="cursor: pointer;">
                    <i style="color: #aaa; font-weight: 500;">User</i>&nbsp;&nbsp;
                  <input type="radio" name="property_type" value="2" style="cursor: pointer;">
                  <i style="color: #aaa; font-weight: 500;" >Property Dealer</i>
                </label>
              </div>
              <div class="input-field" id="0">
                <i class="fas fa-envelope"></i>
                <input type="text" id="email_id" name="email_id" placeholder="Email" />
              </div>
              <div class="input-field" id="1">
                <i class="fas fa-user"></i>
                <input type="text" name="fname" placeholder="User First Name" />
              </div>
              <div class="input-field" id="2">
                <i class="fas fa-user"></i>
                <input type="text" name="lname" placeholder="User Last Name" />
              </div>
              
              <div class="input-field" >
                <i class="fas fa-venus-mars"></i>
                <label>
                  <input type="radio" checked="checked" name="gender" value="male" style="cursor: pointer;">
                    <i style="color: #aaa; font-weight: 500;">Male</i>&nbsp;&nbsp;
                  <input type="radio" name="gender" value="female" style="cursor: pointer;">
                  <i style="color: #aaa; font-weight: 500;">Female</i>
                </label>
              </div>

              <div class="input-field" id="3">
                <i class="fas fa-phone-alt"></i>
                <input type="text" name="phone_no" placeholder="Contact No" />
              </div>
              <div class="input-field" id="4">
                <i class="fas fa-lock"></i>
                <input type="password" name="pwd" placeholder="Password" />
              </div>
              <button type="button" name="sign_up" id="sign_up" class="btn" value="Sign up">Sign up</button>
              <!--input type="submit"  name="sign_up" class="btn" value="Sign up" /-->
            </form>
          </div>
        </div>

        <div class="panels-container">
          <div class="panel left-panel">
            <div class="content">
              <h3><a class="navbar-brand" href="{{URL::to('home')}}" style="text-decoration: none; color: white;"><big>Click.</big><small>com</small></a></h3>
              <p>
               Create A New Account !
              </p>
              <button class="btn transparent" id="sign-up-btn">
                Sign up
              </button>
            </div>
            {{-- <img src="img/log.svg" class="image" alt="" /> --}}
          </div>
          <div class="panel right-panel">
            <div class="content">
              <h3><a class="navbar-brand" href="{{URL::to('home')}}" style="text-decoration: none; color: white;"><big>Click.</big><small>com</small></a></h3>
              <p>
                Already Have a member?
              </p>
              <button class="btn transparent" id="sign-in-btn">
                Sign in
              </button>
            </div>
            {{-- <img src="img/register.svg" class="image" alt="" /> --}}
          </div>
        </div>
      </div>
      
      {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/"></script> --}}
      <script src="{{ asset('theme/js/jquery.min.js')}}"></script>
      <script src="{{ asset('theme/js/app_login.js')}}"></script>
      <script src="{{ asset('theme/js/toastr.min.js')}}"></script>
      <script src="{{ asset('theme/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('theme/js/sweetalert2.min.js')}}"></script>
      <script>

          $(document).ready(function(){
            const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000
            });

            var i = 0;

            $.ajaxSetup({
              headers: {
                  'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
              }
          });
               $('#sign_up').on('click',function(){
  
                $.ajax({
                url: "{{URL::to('create1')}}",
                type: "POST",
                method:'POST',
                data: $('.sign-up-form').serialize(),
                // dataType: "JSON",
                success: function (data) {
                    if (data.errors) {
                    //console.log(data.errors.length);
                      $.each(data.errors,function(key,value){
                        toastr.error(value);
                        $('#'+key).css('border','1px solid red');
                      });
                    } else {
                      toastr.success('Registrations Successfully.....');
                      setTimeout(function(){location.reload();}, 2000);


                }
              },
                error: function (request, status, error) {

                }
            });
            return false;
               });
          });

          //login
          $('#login').on('click',function(){
  
            $.ajax({
            url: "{{URL::to('login1')}}",
            type: "POST",
            method:'POST',
            data: $('#login_form').serialize(),
            // dataType: "JSON",
            success: function (data) {
              var myarray = new Array();
              myarray.push(data.credentials_error);

                if (data.errors_login) {
                    //console.log(myarray);
                      $.each(data.errors_login,function(key,value){
                        toastr.error(value);
                        //$('#'+key).css('border','1px solid red');
                      });
                }else if(data.credentials_error){
                  $.each(myarray,function(key,value){
                    toastr.error(value);
                    //$('#'+key).css('border','1px solid red');
                  });
                } 
                else {
                  //console.log(data);
                  toastr.success('Login Successfully.....');
                  
                  setTimeout(function(){window.location.replace(data);}, 1000);
                  }
              } ,
            error: function (request, status, error) {

            }
          });
          return false;
          });

      </script>      
    </body>
    </html>
