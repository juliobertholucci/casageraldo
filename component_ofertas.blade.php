<section class="product-panel mt-2">
            <div class="container">
            <!--     <div class="section-title">
                    <h1 class="text-center TituloHome">Ofertas<mark style="color:#CA0025; background-color:transparent">Su Vino</mark></h1>
                </div> -->
                    <div class="product-intro divide-line mt-2 mb-8">
                    @foreach($productsTab1->collection as $item)
                        @include(engine_view('ofertasinclude'))
                    @endforeach
                </div>
            </div>
</section>