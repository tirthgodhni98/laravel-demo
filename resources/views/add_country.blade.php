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
                <form action="\add_country" method="post" name="shopform"  class="form-group addform">
                    {{ csrf_field() }}
                    
                    <div class="formpadding2 col-md-12">
                        <input type="text" name="country_name"  pattern="^[a-zA-Z ]*$" class="form-control area" placeholder="Enter Country name*"/>
                        <span class="text-danger">{{ $errors->first('country_name') }}</span>
                    </div>
                    
                    <div class="col-md-12 btn ">
                        <button type="submit" class="btn btn-primary">
                            Add Country
                        </button>                                            
                    </div> 
                </form>
            </div>


            <div class="col-md-4 ud" style="padding-bottom: 20px;">
                <div class="contact2-title text-center mb-65 formpad">
                    <h2><span class="colorextra"> Update</span></h2>
                </div>
                <form  method="post" name="shopform" class="form-group addform" id="updateCountry">
                    {{csrf_field()}}
                    <div class="formpadding2 col-md-12">
                        <input type="text" id="update_country" name="name" value="" pattern="^[a-zA-Z ]*$" class="update_country form-control area" placeholder="Enter Country name*"/>
                        <input type="hidden" id="update_country_id" name="update_country_id" />
                    </div>

                    
                    <div class="row">    
                        <div class="col-md-6 btn ">
                            <button type="button" class="btn btn-primary" onclick="saveupdatecountry()" >
                                Update country
                            </button>                                            
                        </div> 
                        <div class="col-md-6 btn ">
                        <a class="btn btn-primary" href="{{URL::to('country')}}">
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
                        <h2><span class="colorextra">MANAGE COUNTRY</span></h2><br/>
                    </div>
                        <table class="table table-striped" style="text-align:center;">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Country Name</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($country as $key => $val)
                                <tr>
                                <th scope="row">{{$country->firstItem() + $key}}</th>
                                <td style=" text-transform: capitalize;">{{$val->name}}</td>
                                <td ><i class="fa fa-edit update" onclick="updateCountry('{{$val->name}}',{{$val->id}})" data-val="{{$val->name}}" data-id="{{$val->id}}"></i></td>
                                    <td><form action="deleteCountry" method="POST"> {{csrf_field()}}
                                        <button class="border-0" type="submit" ><i class="fa fa-times" ></i>
                                            <input type="hidden" name="deleteCountryid"  value="{{$val->id}}">
                                        </button>
                                    </form></td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td style=" text-transform: capitalize;">total no of records:- {{ $country->Total()}} </td>
                                   <td colspan="5"> {{ $country->links() }}</td>
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