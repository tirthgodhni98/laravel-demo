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
                <form action="\add_aminities" method="post" name="shopform"   class="form-group addform">
                    {{ csrf_field() }}
                    <div class="formpadding2 col-md-12">
                        <input type="text" name="aminities_name" pattern="^[a-zA-Z ]*$" class="form-control area" placeholder="Enter Aminities Name*" style="text-transform: lowercase;"/>
                        <span class="text-danger">{{ $errors->first('aminities_name') }}</span>
                    </div>

                    <div class="formpadding2 col-md-12">
                        <input type="text" name="fa_code"   class="form-control area" placeholder="Enter Aminities FA FA-CODE*" style="text-transform: lowercase;"/>
                        <span class="text-danger">{{ $errors->first('fa_code') }}</span>
                    </div>
                    
                    <div class="col-md-12 btn ">
                        <button type="submit" class="btn btn-primary">
                            Add Aminities
                        </button>                                            
                    </div> 
                </form>
            </div>


            <div class="col-md-4 ud" style="padding-bottom: 20px;">
                <div class="contact2-title text-center mb-65 formpad">
                    <h2><span class="colorextra"> Update</span></h2>
                </div>
                <form method="post" id="updateaminities"  class="form-group addform">
                    {{ csrf_field() }}
                    <div class="formpadding2 col-md-12">
                        <input type="text" name="update_aminities_name" id="update_aminities_name" required="" pattern="^[a-zA-Z ]*$" class="form-control area" placeholder="Enter Aminities Name*" style="text-transform: lowercase;"/>
                        <input type="hidden" name="update_id" id="update_id">
                    </div>

                    <div class="formpadding2 col-md-12">
                        <input type="text" name="update_fa_code" id="update_fa_code" required="" pattern="^[a-zA-Z ]*$" class="form-control area" placeholder="Enter Aminities FA FA-CODE*" style="text-transform: lowercase;"/>
                    </div>
                    
                    
                    <div class="row">    
                        <div class="col-md-6 btn ">
                            <button type="button" class="btn btn-primary " onclick="saveupdateaminities()">
                                Update Aminities
                            </button>                                            
                        </div> 
                        <div class="col-md-6 btn ">
                        <a type="button" class="btn btn-primary" href="{{URL::to('aminities')}}">
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
                        <h2><span class="colorextra">MANAGE AMINITIES</span></h2><br/>
                    </div>
                        <table class="table table-striped" style="text-align:center;">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Aminities Name</th>
                                <th scope="col">Aminities FA FA-CODE</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($aminities as $key => $val)
                                <tr>
                                <th scope="row">{{$aminities->firstItem() + $key }}</th>
                                <td style=" text-transform: capitalize;">{{$val->name}}</td>
                                <td>  <i class="{{$val->fa_code}}"> </i> {{$val->fa_code}}</td>
                                <td ><i class="fa fa-edit update" onclick="updateAminities('{{$val->name}}','{{$val->fa_code}}',{{$val->id}})"></i></td>
                                 <td><form action="deleteAminitiesid" method="POST"> {{csrf_field()}}
                                    <button class="border-0" type="submit" ><i class="fa fa-times" ></i>
                                        <input type="hidden" name="deleteAminitiesid"  value="{{$val->id}}">
                                    </button>
                                </form></td>
                                </tr>
                                
                                @endforeach
                                <tr><td style=" text-transform: capitalize;">total no of records:- {{ $aminities->Total()}} </td>
                                    <td colspan="8">{{ $aminities->links() }} </td>
                                 </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>          
        
   
        
<!-- manage shop end-->



@endsection