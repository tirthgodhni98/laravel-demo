<style>
 .morecontent span {
    display: none;
}
.morelink {
    display: block;
}
</style>

<div class="row">
    <div class="col-md-12"><center><h3 style=" text-transform: capitalize;">{{$user->name}} </h3></center></div> 
        <!-- <div class="col-md-1"></div> -->
        <div class="col-md-12"><center style=" text-transform: uppercase;"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;{{$user->city_name}},{{$user->state_name}},{{$user->country_name}}</center></div>
</div>
<div class="col-md-12">
    
<div class="row">
    <div class="row col-md-12">
        <table  class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Property Type</td>
                <td style=" text-transform: capitalize;">{{$user->property_type_name}}</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Rent</td>
                <td><i class="fa fa-rupee"></i> {{$user->rent}}/- Per Night</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Address</td>
                <td>{{$user->address}}</td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>Description</td>
                <td><span class="more">{{$user->description}}</span></td>
                </tr>
                <tr>
                <th scope="row">5</th>
                <td>Bedroom</td>
                <td>{{$user->bedroom}}</td>
                </tr>
                <tr>
                <th scope="row">6</th>
                <td>Washroom</td>
                <td>{{$user->washroom}}</td>
                </tr>

            </tbody>
        </table>
        <?php echo $user->map; ?>   
    </div>            
</div>
</div>

<script>
    $(document).ready(function() {
    // Configure/customize these variables.
        var showChar = 100;  // How many characters are shown by default
        var ellipsestext = "...";
        var moretext = "Show more >";
        var lesstext = "Show less";
        

        $('.more').each(function() {
            var content = $(this).html();
    
            if(content.length > showChar) {
    
                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);
    
                var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
    
                $(this).html(html);
            }
    
        });
    
        $(".morelink").click(function(){
            if($(this).hasClass("less")) {
                $(this).removeClass("less");
                $(this).html(moretext);
            } else {
                $(this).addClass("less");
                $(this).html(lesstext);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });
    });
</script>