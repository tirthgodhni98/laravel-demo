<table border="1">
    <tr>
        <caption><h2>Booking</h2></caption>
    </tr>
    <tr>
        <th scope="col">Property Name</th>
        <th scope="col">Host Contact No</th>
        <th scope="col">Host Email_id</th>
        <th scope="col">Check-In</th>
        <th scope="col">Check-Out</th>
        <th scope="col">Amount</th>
    </tr>
    <tr>
        <td style=" text-transform: capitalize;">{{$propery_name}}</td>
        <td>{{$propery_Host_phone}}</td>
        <td>{{$host_email_id}}</td>
        <td>{{$check_in}}</td>
        <td>{{$check_out}}</td>
        <td>₹ {{$total}} /-</td>
    </tr>

</table>