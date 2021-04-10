<div class="col-md-12">
    <div class="modelphoto">
        <div class="">
            
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:auto;weidth:auto;">
                <div class="carousel-inner">
                    
                    <?php count($image);?>     
              @foreach($image as $key => $val)
              
                <div class="carousel-item <?php if($key == 1) { echo 'active';}?>">
                    @if (count($image) > 5)
                    <i  id="start" class="fa fa-times deletefafa" onclick="clickimagedelete({{$val->id}},{{$val->pro_id}})" title="DELETE"></i>
                    @endif
                <img class="d-block w-100 maru" src="{{asset('property_image')}}/{{$val->image}}" alt="First slide">
                </div>
                @endforeach
                
            </div>
       
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </div>
    <hr>
    <label class="right">Add More Images</label>
    <div class="col-md-12">
        
        <form action="\add_property_image" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="row">
                <div class=" formpadding2 col-md-12">
                    <input type="file" name="property_image[]" required  class="form-control" accept=".jpg,.png,.jpeg" multiple/>
                    <span class="text-danger">{{ $errors->first('property_image') }}</span>
                <input type="hidden" name="add_more_property_id" value="{{$val->pro_id}}">
                <input type="hidden" name="add_more_property_name" value="{{$val->pro_name}}">
                </div>
                <div class="col-md-12 btn ">
                    <button type="submit" class="btn btn-primary">
                        Add More Image
                    </button>   
                </div>
            </div>
        </form>
            
    </div><br/>
</div>