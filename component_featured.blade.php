<section class="product-panel">
        <div class="container">
            <div class="section-title text-center">
                <p style="margin-bottom:40px; color:#222222;" class="fontClass TextoTitulo">Produtos em Destaque</p>
            </div>
                <div class="product-intro divide-line mt-2 mb-8">
                @foreach($featuredProducts->collection as $item)
                    @include(engine_view('component_featured_product'))
                @endforeach
            </div>
        </div>
</section>