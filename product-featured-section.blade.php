@if(null !== $product->model->extraFields->get('produtos_relacionados'))
<div class="featured-section">
    <div class="container">
        <h2 class="carousel-title pb-5 fontClass text-center">Produtos Relacionados</h2>
        <div class="featured-products owl-carousel owl-theme owl-dots-top" data-toggle="owl" data-owl-options="{
						'dots': true,
						'rewind': false,
						'loop' : false,
						@mobile 'center': true, @endmobile
						'nav': true,
						'autoplay': false,
						'autoplayTimeout':15000,
                        'autoplayHoverPause':true,
						'responsive': {
							'375': {
								'items': 1
							},
							'992': {
							    'items': 4
							}
						}
					}">
            @foreach($product->model->extraFields->get('produtos_relacionados')->values as $relatedProduct)
            <div class="home-product" style="width: 90%; border-right: 1px solid rgba(0,0,0,.09); margin: 0 auto" >
                @include(engine_view('product-container'),['item'=> $relatedProduct->record])
            </div>
            @endforeach
        </div><!-- End .featured-proucts -->
    </div><!-- End .container -->
</div><!-- End .featured-section -->
@endif