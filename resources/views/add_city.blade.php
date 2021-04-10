@extends('layouts.app')

@section('content')

</br>
</br>
</br>
</br>
</br>



<!-- manage shop-->



<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="contact2-title text-center mb-65">
                <a class="btn btn-primary float-right mr-5" href="adminpanel">Back</a>
                <h2>Manage <span class="colorextra"></span></h2>
                <hr>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 ad" style="padding-bottom: 20px;">
                <div class="contact2-title text-center mb-65 formpad">
                    <h2><span class="colorextra"> Add</span></h2>
                </div>
                <form action="add_city" method="post" name="shopform" enctype="multipart/form-data"  class="form-group addform">
                    {{ csrf_field() }}
                    <div class="col-md-12  formpadding2">
                        <select name="country"  id="country_of_city" class="form-control area country_id" >
                            <option value="">--select Country--</option>
                            @foreach ($country as $val)
                            <option value="{{$val->id}}">{{$val->name}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{ $errors->first('country') }}</span>
                    </div>

                    <div class="col-md-12  formpadding2">
                        <select name="state" id="state_of_city"   class="form-control area state_id" >
                            <option value="">--select State--</option>
                            
                        </select>
                        <span class="text-danger">{{ $errors->first('state') }}</span>
                    </div>

                    <div class="formpadding2 col-md-12">
                        <input type="text" name="city"  pattern="^[a-zA-Z ]*$" class="form-control area" placeholder="Enter City name*" style="text-transform: lowercase;"/>
                        <span class="text-danger">{{ $errors->first('city') }}</span>
                    </div>
                    
                    <div class="col-md-12 formpadding2">
                        <input type="file" name="image"   class="form-control area" accept=".jpg,.png,.jpeg" />
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    </div>
                    
                    <div class="col-md-12 btn ">
                        <button type="submit" class="btn btn-primary">
                            Add City
                        </button>                                            
                    </div> 
                </form>
            </div>


            <div class="col-md-4 ud" style="padding-bottom: 20px;">
                <div class="contact2-title text-center mb-65 formpad">
                    <h2><span class="colorextra"> Update</span></h2>
                </div>
                <form  method="post" name="shopform" id="updateCity"   class="form-group addform">
                    {{ csrf_field() }}
                    <div class="col-md-12  formpadding2">
                        <select name="country_id" id="country_id"   class="form-control area country_id " >
                            <option value="">--select Country--</option>
                            @foreach ($country as $val)
                                <option value="{{$val->id}}" >{{$val->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12  formpadding2">
                        <select name="state_id" id="state_id"  class="form-control area state_id" >
                            <option value="">--select State--</option>
                            @foreach ($state as $val)
                            <option value="{{$val->id}}" >{{$val->name}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="formpadding2 col-md-12">
                        <input type="text" id="update_city" name="update_city"  pattern="^[a-zA-Z ]*$" class="form-control area" placeholder="Enter City name*"/>
                        <input type="hidden" id="update_city_id" name="update_city_id" />
                    </div>

                    
                    <div class="row">    
                        <div class="col-md-6 btn ">
                            <button type="button" class="btn btn-primary" onclick="saveupdatecity()">
                                Update City
                            </button>                                            
                        </div> 
                        <div class="col-md-6 btn ">
                            <a type="button" class="btn btn-primary" href="{{URL::to('citya')}}">
                                Cancle
                            </a>                                            
                        </div> 
                    </div>
                </form>
            </div> 


            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                    <div class="contact2-title text-center mb-65 formpad">
                        <h2><span class="colorextra">MANAGE CITY</span></h2><br/>
                    </div>
                        <table class="table table-striped" style="text-align:center;">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Country Name</th>
                                <th scope="col">State Name</th>
                                <th scope="col">City Name</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Photos</th>
                                <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($citys as $key => $val)
                                <tr>
                                <th scope="row">{{$citys->firstItem() + $key }}</th>
                                <td style=" text-transform: capitalize;">{{$val->c_name}}</td>
                                <td style=" text-transform: capitalize;">{{$val->name}}</td>
                                <td style=" text-transform: capitalize;">{{$val->cname}}</td>
                                <td class=""><i class="fa fa-edit update" onclick="updateCity('{{$val->id}}','{{$val->cname}}','{{$val->st_id}}','{{$val->name}}','{{$val->co_id}}','{{$val->c_name}}')" data-val="{{$val->cname}}" data-id="{{$val->id}}"></i></td>
                                <td><i class="fa fa-picture-o showimage" data-toggle="modal" data-target="#modelphotos" data-image="{{$val->image}}" data-id="{{$val->id}}"></i></td> 
                                <td><form action="deleteCityid" method="POST"> {{csrf_field()}}
                                    <button class="border-0" type="submit" ><i class="fa fa-times" ></i>
                                        <input type="hidden" name="deleteCityid"  value="{{$val->id}}">
                                    </button>
                                </form></td>
                                </tr>
                               
                                @endforeach
                                <tr>
                                    <td style=" text-transform: capitalize;">total no of records:- {{ $citys->Total()}} </td>
                                    <td colspan="8"> {{ $citys->links() }} </td>
                                 </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal photos start -->
    <div class="modal fade" id="modelphotos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Photos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                            <div class="col-md-12">
                                <div class="modelphoto">
                                    <div class="">
                                        
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:auto;weidth:auto;">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                <!--i  id="start" class="fa fa-times deletefafa" data-val="1" title="DELETE"></i-->
                                                <form method="POST" enctype="multipart/form-data" id="updateimageform">
                                                    {{ csrf_field() }}
                                                    <img class="d-block w-100 maru popupimage" src="" alt="First slide" title="Update image" >
                                                    <input type="file" name="update_image" required=""  class="form-control imagehidde" accept=".jpg,.png,.jpeg" />
                                                    <input type="hidden" name="city_id" class="city_id">
                                                </form>
                                            </div>
                                        </div>
                                   
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                                     
                                        
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                                </div>
                            </div>
                            </div>
                        <!-- Model Photos over -->

</div>          
        
   
        
<!-- manage shop end-->



@endsection