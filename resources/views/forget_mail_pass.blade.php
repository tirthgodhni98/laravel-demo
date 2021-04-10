<table border="1">
    <tr>
        <caption><h2>Forgot Password</h2></caption>
    </tr>
    <tr>
        <th scope="col">Email Id</th>
        <th scope="col">Your Password</th>
    </tr>
    <tr>
        <td>{{$email_id}}</td>
        <td>{{$password}}</td>
    </tr>
    

</table>
<p style="color: red; animation: msgblink 1s linear infinite;">Please Change Your Password For Some Security Reason ..!</p>
<a href="{{URL::to('login')}}">Login Now</a>