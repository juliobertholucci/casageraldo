@if(!request()->ajax())
@extends(engine_view('base'))
@section('title', word('title-pagina-inicial'))
@section('page_content')
<main class="main">

    <div class="container mt-4">
        <div class="row">
            <div 
            @if($searchPage->items->count() == 0)
                class="col"
            @else
                class="col-lg-9"
            @endif
            >
                @include(engine_view('toolbox'))
@endif
                @include(engine_view('search-products'))
@if(!request()->ajax())
                @include(engine_view('toolbox-pagination'))
            </div><!-- End .col-lg-9 -->
                @include(engine_view('search-aside'))
        </div><!-- End .row -->
    </div><!-- End .container -->
    <div class="row category-pagination-btn-row">
        @if($searchPage->items->count() > 24)
            <button class="category-pagination-btn btn-primary">Ver mais ...</button>
        @endif
    </div>
    <div class="mb-5"></div><!-- margin -->
     
</main><!-- End .main -->

@push('pre-scripts')
<script>
    var priceSliderRangeMin = {{ $searchPage->priceMin }};
    var priceSliderRangeMax = {{ $searchPage->priceMax }};

</script>
@endpush
@push('scripts')
<script src="{{script('showcase.js')}}"></script>
<script src="{{script('nouislider_min.js')}}"></script>

@endpush

@endsection
@endif