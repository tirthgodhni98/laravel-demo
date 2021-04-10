<div class="col-md-12">
    <div class="modelphoto">
        <div class="">
            
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:auto;weidth:auto;">
                <div class="carousel-inner">
                    
                    <?php count($image);?>     
              @foreach($image as $key => $val)
              
                <div class="carousel-item <?php if($key == 1) { echo 'active';}?>">
                   
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
</div>