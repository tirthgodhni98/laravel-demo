@extends('layouts.app')

@section('content')

</br>
</br>
</br>
</br>
</br>

<div class="container topbot">
    <div class="contact2-title text-center mb-65">
        {{-- <h6 class="float-left">Welcome Bcke:{{session()->get('data')}} </h6> --}}
        <h2>Admin <span class="colorextra"> Dashboard</span></h2>
        <hr>
    </div>

    <div class="row">
        <div class="col-md-4 topbot2">
            <a href='adminprofile'>
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-user-circle-o userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">Admin Profile</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                            Profile
                        </button>                                            
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 topbot2">
        <a href="{{URL::to('country')}}">
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-globe userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">Add Country</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                            Add Country
                        </button>                                            
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 topbot2">
        <a href="{{URL::to('state')}}">
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-globe userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">Add State</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                            Add State
                        </button>                                            
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 topbot2">
        <a href="{{URL::to('citya')}}">
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-globe userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">Add City</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                            Add City
                        </button>                                            
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 topbot2">
        <a href="{{URL::to('aminities')}}">
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-user-circle-o userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">Add Aminities</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                            Add Aminities
                        </button>                                            
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 topbot2">
            <a href="{{URL::to('propertie_type')}}">
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-home userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">Propertie Type</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                            Add Propertie Type
                        </button>                                            
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 topbot2">
            <a href="{{URL::to('allpropertie')}}">
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-home userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">All Propertie</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                            All Propertie
                        </button>                                            
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 topbot2">
            <a href="{{URL::to('allcustomer')}}">
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-user-circle-o userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">All Customer</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                            All Customer
                        </button>                                            
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 topbot2">
            <a href="{{URL::to('allhost')}}">
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-user-circle-o userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">All Host</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                            All Host
                        </button>                                            
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 topbot2">
            <a href="{{URL::to('allbooking')}}">
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-shopping-cart  userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">Total Booking</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                            Total Booking
                        </button>                                            
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 topbot2">
            <a href="{{URL::to('allcanclebooking')}}">
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-shopping-cart  userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">Cancle Booking</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                           Cancle Booking
                        </button>                                            
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 topbot2">
            <a href="{{URL::to('show_contactus')}}">
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-address-card  userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">Coutact US</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                            Coutact US
                        </button>                                            
                    </div>
                </div>
            </a>
        </div>  
    </div>
                        
                        
                    

</div>



</br>
</br>
</br>
</br>
</br>
@endsection
