@extends('layouts.app')

@section('content')

</br>
</br>
</br>
</br>
</br>

<div class="container topbot">
    <div class="contact2-title text-center mb-65">
        <h2>Customer <span class="colorextra"> Dashboard</span></h2>
        <hr>
    </div>

    <div class="row">
        <div class="col-md-4 topbot2">
            <a href='userprofile'>
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-user-circle-o userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">Customer Profile</font></h2>
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
        <a href="{{URL::to('customerbooking')}}">
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-user-circle-o userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">Booking</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                            View Booking
                        </button>                                            
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 topbot2">
        <a href="{{URL::to('customercanclebooking')}}">
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-user-circle-o userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">Cancle Booking</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                            View All Cancle Booking
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
