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
                <a class="btn btn-primary float-right mr-5" href="hostpanel">Back</a>
                    <h2>Display <span class="colorextra">Customer</span></h2>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                    <div class="contact2-title text-center mb-65 formpad">
                        <!-- <h2><span class="colorextra">MANAGE PROPERTY</span></h2><br/> -->
                    </div>
                        <table class="table table-striped" style="text-align:center;">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Customer Email</th>
                                <th scope="col">Customer First Name</th>
                                <th scope="col">Customer Last Name</th>
                                <th scope="col">Customer Contact No</th>
                                <th scope="col">Gender</th>
                                {{-- <th scope="col">Total Booking</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $key => $val)
                                <tr>
                                    <th scope="row">{{$user->firstItem() + $key}}</th>
                                    <td>{{$val->email_id}}</td>
                                    <td style=" text-transform: capitalize;">{{$val->fname}}</td>
                                    <td style=" text-transform: capitalize;">{{$val->lname}}</td>
                                    <td>{{$val->phone_no}}</td>
                                    <td style=" text-transform: capitalize;">{{$val->gender}}</td>
                                {{-- <td>6</td> --}}
                                </tr>
                                @endforeach
                                <tr>
                                    <td style=" text-transform: capitalize;">total no of records:- {{ $user->Total()}} </td>
                                    <td colspan="8"> {{$user->links() }} </td>
                                 </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>    
  
</br>
</br>
</br>
</br>
</br>
@endsection
