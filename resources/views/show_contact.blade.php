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
                    <h2>Display <span class="colorextra">Contact Us</span></h2>
                    
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
                                    <th scope="col">Name</th>
                                    <th scope="col">Email id</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Message</th>
                                    {{-- <th scope="col">Total Booking</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $key => $val)
                                <tr>
                                    <th scope="row">{{$user->firstItem() + $key}}</th>
                                    <td style=" text-transform: capitalize;">{{$val->name}}</td>
                                    <td>{{$val->email}}</td>
                                    <td style=" text-transform: capitalize;">{{$val->subject}}</td>
                                    <td><span class="more"> {{$val->message}}</span></td>
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
