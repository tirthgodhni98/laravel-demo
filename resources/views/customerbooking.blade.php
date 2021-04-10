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
                    <h2>Manage <span class="colorextra">Booking</span></h2>
                    
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
                                <th scope="col">Property Name</th>
                                <th scope="col">Host Email</th>
                                <th scope="col">Host Name</th>
                                <th scope="col">Host Contact No</th>
                                <th scope="col">Check-In</th>
                                <th scope="col">Check-Out</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Cancle Booking</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($booking_data as $key => $val)
                                    <tr>
                                    <th scope="row">{{$booking_data->firstItem() + $key }}</th>
                                        <td style=" text-transform: capitalize;">{{$val->pro_name}}</td>
                                        <td>{{$val->email_id}}</td>
                                        <td style=" text-transform: capitalize;">{{$val->fname}} {{$val->lname}}</td>
                                        <td>{{$val->phone_no}}</td>
                                        <td>{{$val->check_in}}</td>
                                        <td>{{$val->check_out}}</td>
                                        <td>{{$val->amount}}</td>
                                        <?php 
                                            $now_date = date("Y-m-d");
                                            $my = $val->check_in;
                                            $end = $val->check_out;
                                            // echo $now_date;
                                                // $date = '2009-10-22';
                                                $date1=date_create($now_date);
                                                $date2=date_create($my);
                                                $diff=date_diff($date1,$date2);
                                                $day = $diff->format("%R%a");
                                                // echo $day; 
                                                // echo $diff->format("%R%a days");
                                            
                                        ?>
                                        <td >
                                           <?php
                                                if($day == '+1'){
                                            ?>   
                                           <i class="fa fa-check" aria-hidden="true" style="    color: blue;"></i>                                                   
                                            <?php
                                                }else if ($now_date > $my){
                                            ?>
                                            <p>Enjoy your Day</p>
                                            <?php
                                                }else{
                                            ?>
                                            <form action="canclebooking" method="POST"> {{csrf_field()}}
                                                <button class="border-0" type="submit" style="color:red;" title="cancle booking">
                                                    <i class="fa fa-times" ></i>
                                                    <input type="hidden" name="canclebooking"  value="{{$val->id}}">
                                                </button>
                                            </form>
                                            
                                            <?php
                                                    
                                                }
                                            ?>
                                            </td>

                                    </tr>
                                @endforeach
                                <tr>
                                    <td style=" text-transform: capitalize;">total  Bookings:- {{ $booking_data->Total()}} </td>
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
