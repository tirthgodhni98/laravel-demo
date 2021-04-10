<?php 

    $a_key =[];
    foreach($amenities_f as $vaal)
    {
        array_push($a_key,$vaal->amenities_id);
    } 
           
?>
<div class="row">
    <input type="hidden" id="show_pro_id_ami">
    @foreach ($aminities as $val)
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-2">
                <input type="checkbox"  class="chake"  value="{{$val->id}}"   <?php if( in_array($val->id,$a_key)){ echo 'checked="checked"';} ?>>
            </div>
            <div class="col-md-2">
            <span class="{{$val->fa_code}}" style="font-size: 20px;"></span>
            </div>
            <div class="cold-md-8">
                {{$val->name}}
            </div>
        </div>
    </div>
          
    @endforeach
</div>

<script>
$(document).ready(function(){
      $('.chake').click(function() {
        var pro_id = $('#show_pro_id_ami').val();
       // var id = $(this+':checked').val();
       var id = $(this).val();
        if (this.checked) {
            //console.log($(this).val());
            $.ajax({
                url:"{{url('update_delete_aminities')}}",
                type: "POST",
                data: {
                pro_id: pro_id,
                ami_id: id,
                key:0,
                _token: '{{csrf_token()}}' 
                },
                success: function(result){
                    //$('#quick_property_image').html(result);
                   // function quick_amenities(pro_id)
                }
                });

          console.log('checked');
        } else {
          console.log('un-checked');
          $.ajax({
                url:"{{url('update_delete_aminities')}}",
                type: "POST",
                data: {
                pro_id: pro_id,
                ami_id: id,
                key:1,
                _token: '{{csrf_token()}}' 
                },
                success: function(result){
                    //$('#quick_property_image').html(result);
                   // function quick_amenities(pro_id)
                }
                });
        }
      });
    });
</script>