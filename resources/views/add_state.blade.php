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
                <form action="add_state" method="post" name="shopform" enctype="multipart/form-data"  class="form-group addform">
                    {{ csrf_field() }}
                    <div class="col-md-12  formpadding2">
                        <select name="country"   class="form-control area" >
                            <option value="">--select Country--</option>
                            @foreach ($country as $val)
                            <option value="{{$val->id}}">{{$val->name}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{ $errors->first('country') }}</span>
                    </div>

                    <div class="formpadding2 col-md-12">
                        <input type="text" name="state_name"  pattern="^[a-zA-Z ]*$" class="form-control area" placeholder="Enter State name*" style="text-transform: lowercase;"/>
                        <span class="text-danger">{{ $errors->first('state_name') }}</span>
                    </div>
                    
                    <div class="col-md-12 btn ">
                        <button type="submit" class="btn btn-primary">
                            Add State
                        </button>                                            
                    </div> 
                </form>
            </div>


            <div class="col-md-4 ud" style="padding-bottom: 20px;">
                <div class="contact2-title text-center mb-65 formpad">
                    <h2><span class="colorextra"> Update</span></h2>
                </div>
                <form  method="post" name="shopform"  class="form-group addform" id="updateState">
                    {{csrf_field()}}
                    <div class="col-md-12  formpadding2">
                        <select  name="country_id" id="country_id" class="form-control area" >
                            <option value="">--select Country--</option>
                            @foreach ($country as $val)
                                <option value="{{$val->id}}" >{{$val->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="formpadding2 col-md-12">
                        <input type="text" id="update_state" name="state_name"   pattern="^[a-zA-Z ]*$" class="form-control area" placeholder="Enter State name*" style="text-transform: lowercase;"/>
                        <input type="hidden" id="update_state_id" name="update_state_id" />
                    </div>

                    
                    <div class="row">    
                        <div class="col-md-6 btn ">
                            <button type="button" class="btn btn-primary" onclick="saveupdatestate()" >
                                Update State
                            </button>                                            
                        </div> 
                        <div class="col-md-6 btn ">
                            <a class="btn btn-primary" href="{{URL::to('state')}}">
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
                        <h2><span class="colorextra">MANAGE STATE</span></h2><br/>
                    </div>
                        <table class="table table-striped" style="text-align:center;">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Country Name</th>
                                <th scope="col">State Name</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach ($state as $key => $val)
                                <tr>
                                <th scope="row">{{$state ->firstItem() + $key}}</th>
                                <td style=" text-transform: capitalize;">{{$val->name}}</td>
                                <td style=" text-transform: capitalize;">{{$val->sname}}</td>
                                <td ><i class="fa fa-edit update" onclick="updateState('{{$val->c_id}}','{{$val->name}}','{{$val->id}}','{{$val->sname}}')" data-val="{{$val->name}}" data-id="{{$val->id}}"></i></td>
                                <td><form action="deleteState" method="POST"> {{csrf_field()}}<button class="border-0" type="submit" ><i class="fa fa-times" ></i>
                                    <input type="hidden" name="deleteStateid"  value="{{$val->id}}">
                                    </button>
                                </form></td>
                                </tr>
                                @endforeach
                               
                                <tr>
                                    <td style=" text-transform: capitalize;">total no of records:- {{ $state->Total()}} </td>
                                   <td colspan="5"> {{ $state->links() }}</td>
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