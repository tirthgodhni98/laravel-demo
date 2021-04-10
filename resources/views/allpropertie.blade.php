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
                    <div class="contact2-title text-center mb-65 formpad">
                    <a class="btn btn-primary float-right mr-5" href="adminpanel">Back</a>
                        <h2><span class="colorextra">View All Property</span></h2><br/>
                    </div>
                        <table class="table table-striped" style="text-align:center;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                <th scope="col">Property Name</th>
                                <th scope="col">View</th>
                                <th scope="col">Amenities</th>
                                <th scope="col">Photos</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($property as $key => $val)
                                <tr>
                                    <td>{{$property->firstItem() + $key}}</td>
                                    <td style=" text-transform: capitalize;">{{$val->name}}</td>
                                    <td><i class="fa fa-eye quick_property" onclick="quick_property_admin({{$val->id}})" data-toggle="modal" data-target="#viewproperty"></i></td>
                                    <td><i class="fa fa-flickr" data-toggle="modal" onclick="quick_amenities_admin({{$val->id}})" data-target="#modelaminities"></i></td>
                                    <td><i class="fa fa-picture-o" data-toggle="modal" onclick="quick_property_image_admin({{$val->id}})" data-target="#modelphotos"></i></td>
                                
                                </tr>
                                @endforeach
                                <tr>
                                    <td style=" text-transform: capitalize;">total no of records:- {{ $property->Total()}} </td>
                                   <td colspan="5"> {{ $property->links() }}</td>
                                </tr>
                            </tbody>
                        </table>
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
                        <div class="modal-body" id="quick_property_data_admin">
                            
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
                            <div class="modal-body" id="quick_property_amenities_admin">
                            
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
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Photos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="quick_property_image_admin">
                                    
                            
                        </div>
                                     
                                        
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                                </div>
                            </div>
                            </div>
                        <!-- Model Photos over -->

  
</br>
</br>
</br>
</br>
</br>
@endsection
