@extends('layouts.app')

@section('content')

</br>
</br>
</br>
</br>
</br>



<!-- manage Admin profile-->



<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="contact2-title text-center mb-65">
            <a class="btn btn-primary float-right mr-5" href="hostpanel">Back</a>
                <h2>Manage <span class="colorextra"></span></h2>
                <hr>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 ad" style="padding-bottom: 20px;">
                <div class="contact2-title text-center mb-65 formpad">
                    <h2><span class="colorextra"> Profile</span></h2>
                </div>
                <form action="" method="post" name="shopform" enctype="multipart/form-data"  class="form-group addform"  style="text-align:center;">
                   
                    
                   
                    <div class="col-md-12 formpadding2">
                        <span class=area>Email :</span>
                        <span class=area>{{$host->email_id}}</span>
                    </div>

                    <div class="col-md-12 formpadding2">
                        <span class=area>Fname :</span>
                        <span class=area style=" text-transform: capitalize;">{{$host->fname}}</span>
                    </div>

                    <div class="col-md-12 formpadding2">
                        <span class=area>Lname :</span>
                        <span class=area style=" text-transform: capitalize;">{{$host->lname}}</span>
                    </div>

                    <div class="col-md-12 formpadding2">
                        <span class=area>Gender :</span>
                        <span class=area style=" text-transform: capitalize;">{{$host->gender}}</span>
                    </div>

                    <div class="col-md-12 formpadding2">
                        <span class=area>Phone No :</span>
                        <span class=area>{{$host->phone_no}}</span>
                    </div>
                    
                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary profileupdate" id="">
                            Edit
                        </button>                                            
                    </div>
                    
                </form>
            </div>


            <div class="col-md-6 ud" style="padding-bottom: 20px;">
                <div class="contact2-title text-center mb-65 formpad">
                    <h2><span class="colorextra">Update</span></h2>
                </div>
                <form action="\update_host_profile" method="post"  class="form-group addform">
                    @csrf
                    <div class="col-md-12  formpadding2">
                    <input type="email" value="{{$host->email_id}}" required="" pattern="^[a-zA-Z ]*$" class="form-control area" placeholder="Enter Email*" style="cursor: no-drop" disabled/>
                    </div>

                    <div class="col-md-12  formpadding2">
                        <input type="text" name="fname" value="{{$host->fname}}" required="" pattern="^[a-zA-Z ]*$" class="form-control area" placeholder="Enter Fname*"/>
                    </div>

                    <div class="col-md-12  formpadding2">
                    <input type="text" name="lname" value="{{$host->lname}}" required="" pattern="^[a-zA-Z ]*$" class="form-control area" placeholder="Enter Lname*"/>
                    </div>

                    <div class="formpadding2 col-md-12" style="text-align:center;">
                        <label>
                            <input type="radio" @if($host->gender == 'male') checked="checked" @endif name="gender" value="male" style="cursor: pointer;">
                            <i style="color: #aaa; font-weight: 500;">Male</i>&nbsp;&nbsp;
                            <input type="radio" name="gender" @if($host->gender == 'female') checked="checked" @endif name="gender" value="female" style="cursor: pointer;">
                            <i style="color: #aaa; font-weight: 500;">Female</i>
                        </label>
                    </div>

                    <div class="formpadding2 col-md-12">
                    <input type="text" name="phone_no" value="{{$host->phone_no}}" required="" pattern="^[0-9]*$" class="form-control area" placeholder="Enter Phone Number*"/>
                    </div>

                    <div class="row">    
                        <div class="col-md-6 btn ">
                            <button type="submit" class="btn btn-primary">
                                Update Profile
                            </button>                                            
                        </div> 
                        <div class="col-md-6 btn ">
                        <a type="button" class="btn btn-primary" href="{{URL::to('hostprofile')}}">
                                Cancle
                            </a>                                            
                        </div> 
                    </div>
                </form>
            </div> 


            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                    <div class="contact2-title text-center mb-65 formpad">
                        <h2><span class="colorextra">Update Password </span></h2>
                    </div>
                    @if(session('old_password'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('old_password') }}
                          </div>
                    @endif
                    @if(session('sucess'))
                        <div class="alert alert-success" role="alert">
                            {{ session('sucess') }}
                          </div>
                    @endif
                        <form action="\update_host_password" method="post"  class="form-group">
                            @csrf
                            <div class="col-md-12  formpadding2">
                                <input type="password" name="old_password" value="{{ old('old_password') }}" class="form-control area" placeholder="Enter Old Password*"/>
                                <span class="text-danger">{{ $errors->first('old_password') }}</span>
                            </div>

                            <div class="col-md-12  formpadding2">
                                <input type="password" name="new_password" value="{{ old('new_password') }}" class="form-control area" placeholder="Enter New Password*"/>
                                <span class="text-danger">{{ $errors->first('new_password') }}</span>
                            </div>

                            <div class="col-md-12  formpadding2">
                            <input type="password" name="conform_password"  value="{{ old('conform_password') }}" class="form-control area" placeholder="Enter Confirm Password*"/>
                            <span class="text-danger">{{ $errors->first('conform_password') }}</span>
                            </div>

                            <div class="row">    
                                <div class="col-md-12 btn ">
                                    <button type="submit" class="btn btn-primary">
                                        Update Password
                                    </button>                                            
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>          
        
   
        
<!-- manage Admin Profile end-->



@endsection