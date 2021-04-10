
<div class="row">
    @foreach ($aminities as $val)
    <div class="col-md-6">
        <div class="row">
            
            <div class="col-md-2">
            <span class="{{$val->aminities_fa_code}}" style="font-size: 20px;"></span>
            </div>
            <div class="cold-md-8">
                {{$val->aminities_name}}
            </div>
        </div>
    </div>
          
    @endforeach
</div>