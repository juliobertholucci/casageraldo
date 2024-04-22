@mobile
    <style>
        .zoomContainer{
            display:none !important;
        }
        .product-single-image{
            pointer-events: none;
        }
    </style>
@endmobile

<div class="col-lg-7 product-single-gallery">
    <div class="sticky-slider">
        <div class="product-slider-container product-item">
            <div class="product-single-carousel owl-carousel owl-theme">
                @foreach($product->images as $image)
                <div class="product-item">
                    <img class="product-single-image" src="{{thumb($image->source, 900, 900, ['fill(white)'])}}"
                    
                        data-zoom-image="{{thumb($image->source, 1500, 1500, ['fill(white)'])}}"
           
                        />
                </div>
                @endforeach
            </div>
            <!-- End .product-single-carousel -->
            <span class="prod-full-screen">
                <i class="icon-plus"></i>
            </span>
        </div>
        <div class="prod-thumbnail row owl-dots transparent-dots" id='carousel-custom-dots'>
            @foreach($product->images as $image)
            <div class="owl-dot">
                <img src="{{ thumb($image->source, 100, 100, ['fill(white)'] ) }}" alt="{{$product->identification->name}}" style="border:1px solid #762432; border-radius:8px;" />
            </div>
            @endforeach
        </div>
    </div>
</div><!-- End .col-md-6 -->