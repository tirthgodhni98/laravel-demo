@extends('layouts.app')

@section('content')

</br>
</br>
</br>
</br>
</br>


<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="contact2-title text-center mb-65">
            <a class="btn btn-primary float-right mr-5" href="adminpanel">Back</a>
                <h2>Manage <span class="colorextra">Propertie Type</span></h2>
                <hr>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 ad" style="padding-bottom: 20px;">
                <div class="contact2-title text-center mb-65 formpad">
                    <h2><span class="colorextra"> Add</span></h2>
                </div>
                <form action="\add_property_type" method="post" class="form-group addform">
                    {{ csrf_field() }}
                    <div class="formpadding2 col-md-12">
                        <input type="text" name="propertietype" pattern="^[a-zA-Z ]*$" class="form-control area" placeholder="Enter Propertie Type*"  style="text-transform: lowercase;"/>
                        <span class="text-danger">{{ $errors->first('propertietype') }}</span>
                    </div>
                    
                    <div class="col-md-12 btn ">
                        <button type="submit" class="btn btn-primary">
                            Add Propertie type
                        </button>                                            
                    </div> 
                </form>
            </div>


            <div class="col-md-4 ud" style="padding-bottom: 20px;">
                <div class="contact2-title text-center mb-65 formpad">
                    <h2><span class="colorextra"> Update</span></h2>
                </div>
                <form  method="post"  class="form-group addform" id="updatepropertytype">
                    {{ csrf_field() }}
                    <div class="formpadding2 col-md-12">
                        <input type="text" id="update_propertie_type" name="update_propertie_type" pattern="^[a-zA-Z ]*$" class="form-control area" placeholder="Enter Propertie Type*"  style="text-transform: lowercase;"/>
                        <input type="hidden" name="update_id_property" id="update_id_property">
                    </div>

                    
                    <div class="row">    
                        <div class="col-md-6 btn ">
                            <button type="button" class="btn btn-primary"  onclick="saveupdatepropertytype()">
                                Update Propertie Type
                            </button>                                            
                        </div> 
                        <div class="col-md-6 btn ">
                        <a class="btn btn-primary float-right mr-5" href="{{URL::to('propertie_type')}}">
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
                        <h2><span class="colorextra">Manage propertie Type</span></h2><br/>
                    </div>
                        <table class="table table-striped" style="text-align:center;">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Property Type</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($property_type as $key=> $val)
                                   
                                <tr>
                                <th scope="row">{{$property_type ->firstItem() + $key}}</th>
                                <td style=" text-transform: capitalize;">{{$val->name}}</td>
                                <td ><i class="fa fa-edit update" onclick="updatepropertytype('{{$val->name}}',{{$val->id}})" ></i></td>
                                <td><form action="deletepropertytype" method="POST"> {{csrf_field()}}
                                    <button class="border-0" type="submit" ><i class="fa fa-times" ></i>
                                        <input type="hidden" name="deletepropertytype"  value="{{$val->id}}">
                                    </button>
                                </form></i></td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td style=" text-transform: capitalize;">total no of records:- {{ $property_type->Total()}} </td>
                                   <td colspan="5"> {{ $property_type->links() }}</td>
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