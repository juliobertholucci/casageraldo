@extends(engine_view('base'))

@if(null !== $product->model->extraFields->get('title'))
    @section('title', $product->model->extraFields->get('title')->values->first()->value.' | '.$store->model->name)
@else
    @section('title', $product->model->identification->first()->name.' | '.$store->model->name)
@endif

@if(null !== $product->model->extraFields->get('description'))
    @push('tags')
    <meta name="description" content="{{$product->model->extraFields->get('description')->values->first()->value}}">
    <meta property="og:description" content="{{$product->model->extraFields->get('description')->values->first()->value}}">
    @endpush
@endif

@if(null !== $product->model->extraFields->get('canonical_url'))
    @push('tags')
    <link rel="canonical" href="{{$product->model->extraFields->get('canonical_url')->values->first()->value}}">
    <meta property="canonical" content="{{$product->model->extraFields->get('canonical_url')->values->first()->value}}">
    @endpush
@endif

@push('tags')
    <meta property="og:type" content="product"/>
    <meta property="fb:admins" content="{{$store->model->name}}"/>
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="760" />
    <meta property="og:image" content="{{$product->images->first()->source}}" />
@endpush

@section('page_content')
<main class="main">
    <style>
         .item-availability-alert-modal .iziToast-message{
             margin-bottom: 30px !important;
         }
    </style>
    @include(engine_view('product-breadcrumb')) 
    <div class="container">
        <div class="product-single-container product-single-default">
            <div class="row">
                
                @include(engine_view('product-single-gallery'))
                <div class="col-lg-5">
                    @include(engine_view('product-single-details'))
                </div><!-- End .col-md-6 -->
            </div><!-- End .row -->
        </div><!-- End .product-single-container -->
    </div><!-- End .container -->
            @include(engine_view('product-tabs'))

    
    @include(engine_view('product-featured-section'))
    
</main><!-- End .main -->
@endsection
