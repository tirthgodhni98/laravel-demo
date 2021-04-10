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
                <a class="btn btn-primary float-right mr-5" href="hostpanel">Back</a>
                <h2>Manage <span class="colorextra"></span></h2>
                <hr>
            </div>
        </div>
    </div>

<!-- 
    <div class="col-md-12 btn ">
        <button type="button" class="btn btn-primary" id="update">
            Update
        </button>                                            
    </div> -->

    <div class="row">
        <div class="col-md-4 ad" style="padding-bottom: 20px;">
                <div class="contact2-title text-center mb-65 formpad">
                    <h2><span class="colorextra"> Add</span></h2>
                </div>
                {{-- @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            
                <form action="\add_property" method="post"  enctype="multipart/form-data"  class="form-group addform">
                    {{ csrf_field() }}
                    <div class="col-md-12  formpadding2">
                        <select name="country" value="{{ old('country') }}" class="form-control area country_all" >
                            <option value="">--select Country--</option>
                            @foreach ($country as $val)
                                <option value="{{$val->id}}" style=" text-transform: capitalize;">{{$val->name}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{ $errors->first('country') }}</span>
                    </div>
                    <div class="col-md-12 formpadding2">
                        <select name="state" value="{{ old('state') }}" class="form-control area state_all">
                            <option value="">-- select State --</option>
                        </select>
                        <span class="text-danger">{{ $errors->first('state') }}</span>
                    </div>
                    <div class="col-md-12  formpadding2">
                        <select name="city" value="{{ old('city') }}" class="form-control area city_all">
                            <option value="">--select City --</option>
                        </select>
                        <span class="text-danger">{{ $errors->first('city') }}</span>
                    </div>
                    <div class="col-md-12  formpadding2">
                        <select name="peropty_type" value="{{ old('peropty_type') }}" class="form-control area" >
                            <option value="">--select Property Type--</option>
                            @foreach ($peropty_type as $val)
                            <option value="{{$val->id}}" >{{$val->name}}</option>
                        @endforeach
                        </select>
                        <span class="text-danger">{{ $errors->first('peropty_type') }}</span>
                    </div>
                    <div class="formpadding2 col-md-12">
                        <input type="text" name="property_name" value="{{ old('property_name') }}"  class="form-control area" placeholder="Enter Propertie name*" style="text-transform: lowercase;"/>
                        <span class="text-danger">{{ $errors->first('property_name') }}</span>
                    </div>

                    <div class=" formpadding2 col-md-12">
                        <input type="text" name="rent"  value="{{ old('rent') }}" class="form-control area" placeholder="Enter Rent*"/>
                        <span class="text-danger">{{ $errors->first('rent') }}</span>
                    </div>

                    <div class="formpadding2 col-md-12">
                        <center><font>Select Aminities</font></center><br/>
                        <div class="row">
                            @foreach ($aminities as $val)
                                <div class="col-md-3">
                                    <span title="{{$val->name}}">
                                        <input type="checkbox"  id="aminities{{$val->id}}" name="aminities[]" value="{{$val->id}}" title="{{$val->name}}" style="cursor: pointer;">
                                        <i for="aminities{{$val->id}}" class="{{$val->fa_code}}" title="{{$val->name}}" ></i><br>
                                    </span>
                                </div>
                            @endforeach
                            <div class="col-md-12"> <span class="text-danger">{{ $errors->first('aminities') }}</span></div>
                        </div>
                    </div>

                    
                    <div class="col-md-12 formpadding2">
                        <input type="file" name="property_image[]" id="image_check_lenght"  class="form-control area image_check_lenght" accept=".jpg,.png,.jpeg" multiple/>
                        <span class="text-danger">{{ $errors->first('property_image') }}</span>
                    </div>
                    <div class="col-md-12  formpadding2">
                        <select name="bedroom" value="{{ old('bedroom') }}" class="form-control area">
                            <option value="">--select Bedroom --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <span class="text-danger">{{ $errors->first('bedroom') }}</span>
                    </div>

                    <div class="col-md-12  formpadding2">
                        <select name="washroom" id="washroom" value="{{ old('washroom') }}"  class="form-control area">
                            <option value="">--select Washroom --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <span class="text-danger">{{ $errors->first('washroom') }}</span>
                    </div>

                    <div class=" formpadding2 col-md-12">
                        <textarea class="form-control area1" value="{{ old('description') }}" name="description" placeholder="Give your Description*" col="35" rows="4"></textarea>
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    </div>

                    <div class=" formpadding2 col-md-12">
                        <textarea class="form-control area1" id="address" value="{{ old('address') }}" name="address" placeholder="Give your address*" col="35" rows="4" ></textarea>
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                    </div>

                    <div class=" formpadding2 col-md-12">
                        <input type="text" name="property_map" id="property_map" value="{{ old('property_map') }}"  class="form-control area" placeholder="Enter map*"/>
                        <span class="text-danger">{{ $errors->first('property_map') }}</span>
                    </div>
                   
                    <div class="col-md-12 btn ">
                        <button type="submit" class="btn btn-primary">
                            Add Propertie
                        </button>                                            
                    </div> 
                </form>
            </div>
            
            <div class="col-md-4 ud" style="padding-bottom: 20px;">
                <div class="contact2-title text-center mb-65 formpad">
                    <h2><span class="colorextra"> Update</span></h2>
                </div>
                <form  method="post" name="shopform" id="updateproperty"   class="form-group addform">
                    @csrf
                    <div class="col-md-12  formpadding2">
                        <select name="country_id"  id="country_id"   class="form-control area country_id country_all" >
                            <option value="">--select Country--</option>
                            @foreach ($country as $val)
                                <option value="{{$val->id}}" style=" text-transform: capitalize;">{{$val->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 formpadding2">
                        <select name="state_id" id="state_id"  class="form-control state_id state_all" id="state_id">
                            @foreach ($state as $val)
                                <option value="{{$val->id}}" >{{$val->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12  formpadding2">
                        <select name="update_city" id="update_city"  class="form-control city_id city_all">
                            <option value="">--select City --</option>
                            @foreach ($city as $val)
                            <option value="{{$val->id}}" >{{$val->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="col-md-12  formpadding2">
                        <select name="peropty_type" id="peropty_type"   class="form-control area peropty_type" >
                            <option value="">--select Property Type--</option>
                            @foreach ($peropty_type as $val)
                                <option value="{{$val->id}}" >{{$val->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="formpadding2 col-md-12">
                        <input type="text" name="property_name" id="property_name"  class="form-control area" placeholder="Enter Propertie name*"/>
                        <input type="hidden" name="update_property_id" class="property_id">
                    </div>

                    <div class=" formpadding2 col-md-12">
                        <input type="text" name="update_rent" id="update_rent"  pattern="^[0-9]{10}$"  class="form-control area" placeholder="Enter Rent*"/>
                    </div>
                   
                    <div class="col-md-12  formpadding2">
                        <select name="bedroom"  class="form-control area bedroom">
                            <option value="">--select Bedroom --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <div class="col-md-12  formpadding2">
                        <select name="washroom"  class="form-control area washroom">
                            <option value="">--select Washroom --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <div class=" formpadding2 col-md-12">
                        <textarea class="form-control area1" name="update_desc" id="update_desc" placeholder="Give your Description*" col="35" rows="4"></textarea>
                    </div>

                    <div class=" formpadding2 col-md-12">
                        <textarea class="form-control area1" name="update_address" id="update_address" placeholder="Give your address*" col="35" rows="4" ></textarea>
                    </div>

                    <div class=" formpadding2 col-md-12">
                        <input type="text" name="update_map" id="update_map"   class="form-control area" placeholder="Enter map*"/>
                    </div>
                    <div class="row">    
                        <div class="col-md-6 btn ">
                            <button type="button" class="btn btn-primary" onclick="saveupdatepropertys()">
                                Update Propertie
                            </button>                                            
                        </div> 
                        <div class="col-md-6 btn ">
                            <a type="button" class="btn btn-primary" href="propertyadd">
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
                        <h2><span class="colorextra">MANAGE PROPERTY</span></h2><br/>
                    </div>
                        <table class="table table-striped" style="text-align:center;">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Property Name</th>
                                <th scope="col">View</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Amenities</th>
                                <th scope="col">Photos</th>
                                <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($property as $key => $val)
                                <tr>
                                 <td scope="row">{{$property->firstItem() + $key }}</td>   
                                <td style=" text-transform: capitalize;">{{$val->name}}</td>
                                <td><i class="fa fa-eye quick_property" onclick="quick_property({{$val->id}})" data-toggle="modal" data-target="#viewproperty"></i></td>
                                <td ><i class="fa fa-edit update" onclick="updateproperty('{{$val->id}}','{{$val->name}}','{{$val->rent}}','{{$val->bedroom}}','{{$val->washroom}}','{{$val->address}}','{{$val->map}}','{{$val->city_id}}','{{$val->city_name}}','{{$val->state_id}}','{{$val->state_name}}','{{$val->country_id}}','{{$val->country_name}}','{{$val->property_types_id}}','{{$val->property_type_name}}')" data-desc="'{{$val->description}}'" ></i></td>
                                <td><i class="fa fa-flickr" data-toggle="modal" onclick="quick_amenities({{$val->id}})" data-target="#modelaminities"></i></td>
                                <td><i class="fa fa-picture-o" data-toggle="modal" onclick="quick_property_image({{$val->id}})" data-target="#modelphotos"></i></td>
                                <td><form action="deleteproperty" method="POST"> {{csrf_field()}}
                                    <button class="border-0" type="submit" ><i class="fa fa-times" ></i>
                                        <input type="hidden" name="deleteproperty"  value="{{$val->id}}">
                                    </button>
                                </form></td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td style=" text-transform: capitalize;">total no of records:- {{ $property->Total()}} </td>
                                    <td colspan="8"> {{ $property->links() }} </td>
                                 </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>    
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Error</h5>
                      <button type="button" class="close OpenImgUpload" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <p class="text-danger">Please Select More Than 6 Images</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger OpenImgUpload"  data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
              </div>
            <!-- View Model -->
            <div class="modal fade" id="viewproperty" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Property Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="quick_property_data">
                            
                        </div>
                    </div>
                </div>



                <!-- view all amenities model -->

        </div>

                        <!-- Modal aminities start-->
                        <div class="modal fade bd-example-modal-lg" id="modelaminities" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">All Amenities</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="quick_property_amenities">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- Modal aminities over-->
                                        

                        <!-- Button trigger modal -->

                            <!-- Modal photos start -->
                            <div class="modal fade" id="modelphotos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog " role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Photos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                        <div class="modal-body" id="quick_property_image">
                                    
                            
                                     
                        </div> 
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                                
                            </div>
                            </div>
                           
                        <!-- Model Photos over -->
                        



    </div>
</div>          
        
   
        
<!-- manage shop end-->



@endsection