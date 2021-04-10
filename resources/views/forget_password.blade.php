<html>
    <head>
        <title>Forgot Password</title>
<style>
  body,
  input{
    font-family: "Nunito Sans", Arial, sans-serif
  }
    .form-gap {
    padding-top: 70px;
    }
    .btn {
        box-shadow: none !important;
    font-size: 14px;
    display: inline-block;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    }
    .btn.btn-primary {
    border: 1px solid #2F2D51 !IMPORTANT;
    background: #2F2D51 !IMPORTANT;
    color: #F2F7FF !IMPORTANT;
    transition: 2s;
}
button:not(:disabled), [type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled) {
    cursor: pointer;
}
    </style>
    <link rel="shortcut icon" href="{{ asset('theme/images/favicon.ico') }}">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
<script src="{{asset('theme/js/jquery.min.js')}}"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
</head>
    <body style="    background-color: #6998bd;">

 
 <div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
              </p>
                  <div class="panel-body">    <p>You can reset your password here.
    
                    <form id="register-form" role="form" action="forget_pass" autocomplete="off" class="form" method="post">
                        @csrf
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input type="email"  id="email" name="email" placeholder="email address" class="form-control"  >
                          
                        </div>
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        <span class="text-primary">{{ $errors->first('send_mail') }}</span>
                      </div>
                      <div class="form-group">
                        <button name="recover-submit" class="btn btn-primary" value="Reset Password" type="submit">Reset Password</button>
                      </div>
                      
                    </form>
                    
                  </div>
                </div>
                <a href="login">Go To Login Page</a>   
              </div>
            </div>
          </div>
    </div>
    
</div>
    </body>
</html>