@if($searchPage->items->count() !== 0)
<div class="row row-sm">
@foreach($searchPage->items as $item)
    <div class="col-12 col-md-4">
        <div class="product-default inner-quickview inner-icon">
            @include(engine_view('product-container'))
        </div>
    </div>
@endforeach
</div>

@else
    <h3 class="text-center my-5 py-5"> Nenhum resultado encontrado para o termo pesquisado</h3>
@endif