@extends('layouts.app')

@section('content')

</br>
</br>
</br>
</br>
</br>


<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                
                <h3 style=" text-transform: capitalize;">{{$property->name}}</h3>
                <!-- <span class="fa fa-star" style="color:red"></span>
                <span>4.93(15)</span>&nbsp;&nbsp;&nbsp; -->
                
                <span class="fa fa-map-marker"> </span>
                <span style=" text-transform: uppercase;"> {{$property->city_name}},{{$property->state_name}},{{$property->country_name}} </span>
            
            </div>
            <div class="col-md-4">
                <div>
                    
                </div>
            </div>
            </br></br></br></br>
            <div class="col-md-12">
                <div class="row prodeimg">
                    
                    
                    <div class="col-md-6">
                        <img src="{{asset('property_image')}}/{{$image_first->image}}" alt="Girl in a jacket" width="100%" style="background-color:red;" height="324">
                    </div>
                   
                    <div class="col-md-6">
                        <div class="row">
                            <?php $i=1;
                            
                                //$iamge_count = count($image);
                            ?>
                            @foreach($path_of_iamge as $val)
                                <?php
                                //echo $i;
                                
                                        if ($i <= 4) 
                                        {
                                ?>
                            <div class="col-md-6" >
                                <img src="{{asset('property_image')}}/{{$val}}" alt="Girl in a jacket" width="100%" style="background-color:red; border:4px solid white;" height="162">
                            </div>
                            <?php
                                    //  
                                    
                                    }
                            $i++;
                            ?>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-10">
                    </div>
                    <div class="col-md-2" style="position: absolute;margin: 256px 1031px">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewallphotos">
                            View All Photos
                        </button>                                            
                    </div>
                </div>
            </div>
            
            <div class="col-md-12" style="margin: 20px;">
                <div class="row">
                    <div class="col-md-8">
                        <h4 style=" text-transform: capitalize;">{{$property->name}}</h4>
                        <h6> {{$property->bedroom}} bedrooms · {{$property->washroom}} bathrooms </h6>
                        <hr>
                        <div class="row">
                            <div class="col-md-1">
                                <span class="fa fa-home" style="font-size: 40px;"></span>
                            </div>
                            <div class="col-md-11">
                                <b>Entire home</b></br>
                                <p>You’ll have the earth house to yourself.</p>  
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                <span class="fa fa-tags" style="font-size: 40px;"></span>
                            </div>
                            <div class="col-md-11">
                                <b>Enhanced Clean</b></br>
                                <p>This host committed to a rigorous cleaning protocol developed with leading health and hospitality experts</p>  
                            </div> 
                        </div> 
                        <div class="row">
                            <div class="col-md-1">
                                <span class="fa fa-globe" style="font-size: 40px;"></span>
                            </div>
                            <div class="col-md-11">
                                <b>Self check-in</b></br>
                                <p>You can check in with the doorman.</p>  
                            </div> 
                        </div> 
                        <div class="row">
                            <div class="col-md-1">
                                <span class="fa fa-calendar-o" style="font-size: 40px;"></span>
                            </div>
                            <div class="col-md-11">
                                <b>Cancellation policy</b></br>
                                <p>Add your trip dates to get the cancellation details for this stay.</p>  
                            </div> 
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                             
                            <p><span class="more">{{$property->description}}</span></p>  

                                </br>
                                @if (session()->has('data'))
                                                                
                                <div>
                                    <h6>Contact Host :- </h6>
                                    <p>Mobile Number : {{$property->email_id}} </br> E-Mail:- {{$property->phone_no}}</p>
                                </div>  
                                    
                                @endif
                            </div> 
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Amenities</h4>
                                <div class="row">
                                    <?php $i=1; ?>
                                    @foreach ($aminities as $val_aminities)
                                     <?php
                                      
                                     if ($i <= 6) 
                                     {
                                         ?>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-2">
                                            <span class=" {{$val_aminities->aminities_fa_code}}" style="font-size: 20px;"></span>
                                            </div>
                                            <div class="cold-md-10" style=" text-transform: capitalize;">
                                                {{$val_aminities->aminities_name}}
                                            </div>
                                        </div>
                                    </div>
                                    <?php } $i++;?>
                                    @endforeach
                                
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div>
                                        <div class="col-md-6 btn"  style="width:350px;">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allamenities">
                                                View All Amenities
                                            </button>                                            
                                        </div>                                          
                                    </div>
                                    <div class="col-md-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<hr>
                             <div class="row">
                                <div class="col-md-12">
                                    <h4>Select check-in date</h4>
                                </div>
                                <div class="col-md-6">
                                    <h6>Check-In Date</h6>
                                    <input type="date">
                                </div>
                                <div class="col-md-6">
                                    <h6>Check-Out Date</h6>
                                    <input type="date">
                                </div>
                            </div> -->
                    </div> 
                    <div class="col-md-4 scollerposition">
                        <div class="scoller">
                            <div class="row checkave">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <span style="font-size:18px;color:black;font-weight: 800;"><i class="fa fa-rupee"></i>{{$property->rent}}</span>
                                            <span>/ Per Night</span>
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4">
                                            <!-- <span style="color:red;"><i class="fa fa-star"></i></span>
                                            <span style="color:black;"><i class=""></i>4.93</span>
                                            <span><i class=""></i>(15)</span> -->
                                        </div>
                                    </div><hr>
                                </div>
                                
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="alert alert-danger mess d-none" role="alert">
                                            <span id="error_date"></span>
                                          </div>
                                            <div class="row ">
                                                <div class="col-md-6">
                                                    <span>Check-In</span>
                                                    <input type="text" id="from" name="from" placeholder="DD/MM/YYYY" required/>
                                                </div>
                                                <div class="col-md-6">
                                                    <span>Check-Out</span>
                                                    <input type="text" id="to" name="to" placeholder="DD/MM/YYYY" required/>
                                                </div>
                                                
                                            </div><hr>
                                        </form>
                                        <div class="col-md-12 check_avail ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary" style="width:100%;" onclick="checkpropertybooking({{$property->id}})">
                                                        Check Availability                                            
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 clear_text ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary" style="width:100%;">
                                                        Clear                                           
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    <br/>
                            
                               
                                <div id="amount" class="d-none">    
                            @if (session()->has('data'))
                                
                                @if (session()->get('user_type') == 1)
                                    
                               
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary" style="width:100%;" onclick="reservepropertie('{{$property->id}}','{{$property->rent}}')">
                                                    <i style="display:none;" class="fa fa-spinner fa-spin spineers"></i><a>Reserve Propertie</a>                                            
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <p style="color: red; text-align: center">You are not a customer !!!</p>
                                @endif
                                    <hr>
                                    
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span><i class="fa fa-rupee"></i></span>
                                            <span id="rents" >{{$property->rent}} /-</span>
                                            <input type="hidden" id="property_rent" value="{{$property->rent}}">
                                                <span> * </span>
                                                <span id="show_days"> </span> Nights
                                            </div>
                                            <div class="col-md-4">
                                            <span><i class="fa fa-rupee"></i></span>
                                                <span id="show_rent"> </span> /-
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span>Service fee</span>
                                            </div>
                                            <div class="col-md-4">
                                            <span><i class="fa fa-rupee"></i></span>
                                                <span id="service_fee" data-ser="240">240 /-</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <strong>TOTAL</strong>
                                            </div>
                                            <div class="col-md-4">
                                            <span><i class="fa fa-rupee"></i></span>
                                                <strong id="total_amount"></strong> /-
                                            </div>
                                        </div>
                                    </div>
                                    @else 

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary" style="width:100%;" onclick="reservepropertie('{{$property->id}}','{{$property->rent}}')">
                                                        <a href="../login" style="color: white; }">Login Now</a>                                            
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif  
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <hr>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h3>Location</h3>
                </div>
                <div class="col-md-12">
                    <h6 style=" text-transform: uppercase;">{{$property->city_name}},{{$property->state_name}},{{$property->country_name}}</h6>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12 ifmap">
                    <?php echo $property->map; ?> 
                </div>
            </div>
            
            
            
                <div>

                <div class="modal fade" id="allamenities" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">All Aamenities</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <div class="row ">
                                    @foreach ($aminities as $aminities_val)
                                        
                                    
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-2">
                                            <span class="{{$aminities_val->aminities_fa_code}}" style="font-size: 20px;"></span>
                                            </div>
                                            <div class="cold-md-10" style=" text-transform: capitalize;">
                                               {{$aminities_val->aminities_name}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                    <!-- View All Photos Model -->
                    <div class="modal fade" id="viewallphotos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">All Photos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body modelphoto">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:auto;weidth:auto;">
                                        
                                       
                                        <div class="carousel-inner">
                                            @foreach($image as $key => $val)
              
                                            <div class="carousel-item <?php if($key == 1) { echo 'active';}?>">
                                               
                                            <img class="d-block w-100 maru" src="{{asset('property_image')}}/{{$val->image}}" alt="">

                                            </div>
                                            @endforeach
                                        </div>
                                        
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div>
</div>

</br>
</br>
</br>
</br>
</br>
@endsection
