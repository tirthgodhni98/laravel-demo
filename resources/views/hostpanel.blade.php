@extends('layouts.app')

@section('content')

</br>
</br>
</br>
</br>
</br>

<div class="container topbot">
    <div class="contact2-title text-center mb-65">
        <h2>Host <span class="colorextra"> Dashboard</span></h2>
        <hr>
    </div>

    <div class="row">
        <div class="col-md-4 topbot2">
            <a href='hostprofile'>
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-user-circle-o userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">Host Profile</font></h2>
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
            <a href="{{URL::to('propertyadd')}}">
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-user-circle-o userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">Add Propertie</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button"  class="btn btn-primary"  data-toggle="modal" data-target="#allamenities">
                            Add Propertie
                        </button>                                            
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 topbot2">
            <a href='bookingdisplay'>
                <div class="userdiv">
                    <div> 
                        <i class="fa fa-user-circle-o userfafa"></i>
                    </div>
                    <div>
                        <h2 class="divmargin"><font color="black">Booking</font></h2>
                    </div>

                    <div class="col-md-12 btn ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                            Booking
                        </button>                                            
                    </div>
                </div>
            </a>
        </div>  
        <div class="col-md-4 topbot2">
            <a href="{{URL::to('hostcanclebooking')}}">
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



</br>
</br>
</br>
</br>
</br>
@endsection
