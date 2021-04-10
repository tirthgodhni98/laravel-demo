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
                    <h2>Display <span class="colorextra">All Booking</span></h2>
                    
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
                                <th scope="col">Propertie Name</th>
                                <th scope="col">Customer Email</th>
                                <th scope="col">Customer First Name</th>
                                <th scope="col">Customer Contact No</th>
                                <th scope="col">Host Email</th>
                                <th scope="col">Check In</th>
                                <th scope="col">Check Out</th>
                                <th scope="col">Total Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($booking_data as $key=> $val)
                                    
                                
                                <tr>
                                <th scope="row">{{$booking_data->firstItem() + $key }}</th>
                                    <td style=" text-transform: capitalize;">{{$val->pro_name}}</td>
                                    <td>{{$val->cemail_id}}</td>
                                    <td style=" text-transform: capitalize;">{{$val->fname}} {{$val->lname}}</td>
                                    <td>{{$val->phone_no}}</td>
                                    <td>{{$val->pro_email}}</td>
                                    <td>{{$val->amount}}</td>
                                    <td>{{$val->check_in}}</td>
                                    <td>{{$val->check_out}}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td style=" text-transform: capitalize;">total no of Bookings:- {{ $booking_data->Total()}} </td>
                                    <td colspan="8"> {{ $booking_data->links() }} </td>
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
