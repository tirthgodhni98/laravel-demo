<table border="1">
    <tr>
        <caption>Booking</caption>
    </tr>
    <tr>
        <th scope="col">Property Name</th>
        <th scope="col">Customer Contact No</th>
        <th scope="col">Customer Email_id</th>
        <th scope="col">Check-In</th>
        <th scope="col">Check-Out</th>
        <th scope="col">Amount</th>
    </tr>
    <tr>
        <td style=" text-transform: capitalize;">{{$propery_name}}</td>
        <td>{{$cust_phone}}</td>
        <td>{{$email_id}}</td>
        <td>{{$check_in}}</td>
        <td>{{$check_out}}</td>
        <td> ₹ {{$total}} /-</td>
    </tr>

</table>