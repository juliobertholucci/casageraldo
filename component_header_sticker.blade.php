<style>
    .megamenu .row ul li{
        line-height: 1.1rem !important;
    }
    
    .megamenu .row .col-lg-4 .banner{
        height: auto !important;
    }

    .header-bottom .header-right .header-icon, .header-bottom .cart-subtotal{
        display: none !important;
    }
    @mobile
        .header-middle .user-text,
        .header-middle .cart-subtotal{
            display: none !important;
        }
      
    @endmobile
</style>
<div class="header-bottom sticky-header container">
    <div class="container">
        <nav class="main-nav">
            <ul class="menu sf-arrows">
                <li>
                    <a href="#" class="pr-5">
                        <i class="fa fa-bars align-middle mr-3"></i>
                        Categorias
                    </a>
                    <div class="megamenu vertical" style="padding-bottom: 0 !important;">
                        @include(engine_view('component_all_categories'))
                    </div>
                </li>
                @foreach($mainMenuCategories->collection as $category)
                <li class="main-category">
                    <a href="/{{$category->urls->first()->url}}"
                        @if($category->children->isNotEmpty())
                            class="sf-with-ul"
                        @endif
                        >
                        {{$category->name}}
                    </a>
                    @if($category->children->count() > 0)
                    @if($category == $mainMenuCategories->collection->last())
                    <div class="megamenu vertical" style="padding-bottom: 0 !important;">
                    @else
                    <div class="megamenu vertical" style="padding-bottom: 0 !important;">
                    @endif
                        <div class="row">
                            @if (null !== $category->extraFields->get('imagem_do_banner_da_categoria_no_menu_principal'))
                            <div class="col-lg-8">
                            @else
                            <div class="col-lg">
                            @endif
                                <div class="row">
                                    @foreach($category->children as $subCategoryLevel1)
                                    <div class="col-sm">
                                        <div class="menu-title">
                                            <a href="/{{ $subCategoryLevel1->urls->first()->url }}">
                                                {{$subCategoryLevel1->name}}
                                            </a>
                                        </div>
                                        <ul>
                                            @foreach($subCategoryLevel1->children as $subCategoryLevel2)
                                            <li>
                                                <a class="mainMenuSubCategory" href="/{{$subCategoryLevel2->urls->first()->url}}">
                                                    {{$subCategoryLevel2->name}}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div><!-- End .col-lg-6 -->
                                    @endforeach
                                </div><!-- End .row -->
                            </div><!-- End .col-lg-8 -->
                            @if (null !== $category->extraFields->get('imagem_do_banner_da_categoria_no_menu_principal'))
                            <div class="col-lg-4">
                                <div class="banner">
                                    @if (null !== $category->extraFields->get('link_de_redirecionamento_do_banner_da_categoria_no_menu_principal'))
                                    <a href="{{ $category->extraFields->get('link_de_redirecionamento_do_banner_da_categoria_no_menu_principal')->values->first()->value }}">
                                    @endif
                                        
                                            <img src="{{ thumb($category->extraFields->get('imagem_do_banner_da_categoria_no_menu_principal')->values->first()->source, 250) }} " loading="lazy"> 
                                    @if (null !== $category->extraFields->get('link_de_redirecionamento_do_banner_da_categoria_no_menu_principal'))
                                    </a>
                                    @endif
                                </div><!-- End .banner -->
                            </div><!-- End .col-lg-4 -->
                            @endif
                        </div>
                    </div><!-- End .megamenu -->
                    @endif
                </li>
                @endforeach

                <!-- @if('' !== word('texto_do_link_da_direita_do_menu_principal'))
                <li class="float-right special-effect">
                    <a href="{{ word('url_de_redirecionamento_do_link_da_direita_do_menu_principal') }}">
                        {{ word('texto_do_link_da_direita_do_menu_principal') }}
                    </a>
                </li>
                @endif-->
            </ul>
        </nav>
    </div><!-- End .header-bottom -->
</div><!-- End .header-bottom -->
