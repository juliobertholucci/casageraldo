@extends(engine_view('base'))
@section('title', word('title-pagina-inicial'))
@section('page_content')
        
            <style>
     .home-slider::after, .home-slider::before{
         border: none !important;
     }
 </style>
 <main class="main home" style="margin:0;">
            <div class="home-top-container">
                @if(null !== $mainBanners->collection)
                <div class="home-slider owl-carousel owl-theme" style="background-color: transparent !important;">
                @foreach($mainBanners->collection as $banner)
                @if(null !== $banner->redirect_to)
                    <a href="{{$banner->redirect_to}}">
                @endif
                    @desktop
                    <img class="item" src="{{ thumb($banner->source) }}"  style="width: 100% !important" alt="">
                    @elsedesktop
                    @if(null !== $banner->extraFields->get('banner_para_mobile'))
                    <img class="item" src="{{ thumb($banner->extraFields->get('banner_para_mobile')->values->first()->source) }}"  style="width: 100% !important" alt="">
                    @endif
                    @enddesktop
                </a>    
                @endforeach
                </div>
                @endif
                <div class="home-slider-sidebar">
                    <ul>
                        @foreach($mainBanners->collection as $banner)
                            @if(null !== $banner->extraFields->get('nome_do_banner_no_slider') and null !== $banner->extraFields->get('cor_do_nome_do_banner_no_slider'))
                                <li style=" color: {{$banner->extraFields->get('cor_do_nome_do_banner_no_slider')->values->first()->value}}!important;" class="active">{{$banner->extraFields->get('nome_do_banner_no_slider')->values->first()->value}}</li>
                             @endif  
                        @endforeach
                    </ul>
                </div>
            </div><!-- End .home-slider -->
            
        @include(engine_view('component_featured'))
        
         @desktop
        
        <a href="/produtos" class="w-100 p-0 m-0 banSunset">
    
            <img class="w-100" src="{{ path('SecundarioDesktop.jpg') }}">
    
        </a>
        
        @enddesktop
        
        @mobile
        
        <a href="/produtos" class="w-100 p-0 m-0 banSunset">
    
            <img class="w-100" src="{{ path('SecundarioMobile.jpg') }}">
    
        </a>
        
        @endmobile
            
        <br><br><br>
        @include(engine_view('component_section_1'))
        @include(engine_view('component_section_3'))
        @include(engine_view('component_section_4'))
        
@endsection

