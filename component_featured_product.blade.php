<div class="col-6 col-lg-3 col-md-3 col-sm-4 product-default inner-quickview inner-icon mb-3" style="color:#000; font-size:14px; font-weight:600;">
    
    <figure>
         @if(null !== $item->urls->first())
            <a href="{{ url($item->urls->first()->url) }}">
        @endif
        
            <img src="{{ thumb($item->main_image->source, 1000, 1000, ['fill(transparent)']) }}" alt="{{ $item->identification->first()->name }}" loading="lazy">
            </a>
            
            <div class="d-flex position-absolute" style="top: 8%; right: 35%;">
                    @if($item->extraFields->get('texto_da_tag_do_card_de_produto'))
                        <div class="label-group">
                            <span class="product-label label-sale tagDis" style="background-color:transparent !important;color:#762432 !important;">{{$item->extraFields->get('texto_da_tag_do_card_de_produto')->values->first()->value}}</span>
                        </div>
                    @endif
            </div>
            
    </figure>
     <div class="d-flex position-absolute" style="top: 5%; left: 5%;">
                @if($item->extraFields->get('pais_de_origem'))
                    <img src="{{ thumb($item->extraFields->get('pais_de_origem')->values->first()->record->bandeira_do_pais->values->first()->source, 36) }}" >
                @endif
            </div>
    <div class="product-details" style="padding:15px; margin:0">
        <div class="category-wrap w-100">
            <div class="category-list w-100 text-center">
                @if($item->categories->isNotEmpty())
                    @if($item->categories->first()->urls->isNotEmpty())
                    <a href="{{ $item->categories->first()->urls->first()->url }}" class="product-category fontClass">
                    @endif
                        {{$item->categories->first()->name}}
                    @if($item->categories->first()->urls->isNotEmpty())
                    </a>
                    @endif
                @endif
            </div>
        </div>
        
        <h2 class="product-title text-center" style="width:100% !important; margin:0 padding:0;" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ $item->identification->first()->name }}">
            @if(null !== $item->urls->first()) 
            <a class="w-100 TituloProduto fontClass" href="{{url($item->urls->first()->url)}}">
                {{ $item->identification->first()->name }}
            </a>
            @endif
        </h2>
        
        <div class="ratings-container justify-content-center w-100 text-center">
            @if(null !== $item->averageRate)
            <div class="product-ratings"> 
                <span class="ratings" style="width:{{$item->averageRate * 20}}%">{{$item->averageRate}}</span><!-- End .ratings -->
                <span class="tooltiptext tooltip-top">{{$item->averageRate}}</span>
            </div><!-- End .product-ratings -->
            @endif
            
        </div><!-- End .product-container -->
        <div class="price-box text-center w-100">
            
            @if(null !== $item->extraFields->get('desconto_assinante') and null !== word('desconto_assinante'))
            <h2 class="subscribePrice @desktop mb-0 @enddesktop" style="border-radius:0px; width:100%;">
                <span class="badge w-100" style="color:#FFF; background-color:#000; border-radius:8px;">Signature: R${{number_format($item->prices->first()->price * (1 - (intval(word('desconto_assinante'))/100)), 2, ',', ' ')}}</span>
            </h2>
            @desktop
            <br>
            @enddesktop
            
        @endif

            <span class="depor-de"><br></span>
              <span class="TituloPreco" price-loader-id="{{ $item->id }}" price-loader-type="item" price = "{{$item->prices->first()->originalPrice}}"> 
                <i class="fas fa-circle-notch fa-spin"></i>
            </span>
            
            @if(null !== $item->extraFields->get('texto_promocao'))
                        <p class="mb-0 ml-3 ct font-weight-normal"> {{$item->extraFields->get('texto_promocao')->values->first()->value}}</p>
            @endif
            
        </div><!-- End .price-box -->
         @if($item->variations->isNotEmpty())
                        <span style="display:none; font-size: 1.8rem; font-weight: 600;" class="product-available" available-id="@foreach($item->variations as $variation){{$variation->id}} @endforeach">Produto Indisponível</span>
                    @else
                        <span style="display:none; font-size: 1.8rem; font-weight: 600;" class="product-available" available-id="{{ $item->id }}">Produto Indisponível</span>
                    @endif
        
    </div><!-- End .product-details -->
    
        <div class="d-none precificacao">
        @if(null !== $item->extraFields->get('preco_cnpj_1'))
            <button class="btn btn-outline-secondary btn-cnpjprice-1" onclick="selectPrice(this)"
            @foreach($item->categories as $cat)
                            @if(null !== $cat->extraFields->get('quantidade_minima_preco_cnpj_1'))
                               inputQuantity="{{$cat->extraFields->get('quantidade_minima_preco_cnpj_1')->values->first()->value}}"
                               @break
                            @endif
            @endforeach
            value="{{ $item->extraFields->get('preco_cnpj_1')->values->first()->value }}"
            >
                @foreach($item->categories as $cat)
                            @if(null !== $cat->extraFields->get('quantidade_minima_preco_cnpj_1'))
                               {{$cat->extraFields->get('quantidade_minima_preco_cnpj_1')->values->first()->value}}
                               @break
                            @endif
            @endforeach
                 a 
                @foreach($item->categories as $cat)
                            @if(null !== $cat->extraFields->get('quantidade_minima_preco_cnpj_2'))
                               {{$cat->extraFields->get('quantidade_minima_preco_cnpj_2')->values->first()->value -1}}
                               @break
                            @endif
            @endforeach
                 UN
            </button>
        @endif
        
        @if(null !== $item->extraFields->get('preco_cnpj_2'))
            <button class="btn btn-outline-secondary btn-cnpjprice-2" onclick="selectPrice(this)"
            @foreach($item->categories as $cat)
                            @if(null !== $cat->extraFields->get('quantidade_minima_preco_cnpj_2'))
                               inputQuantity="{{$cat->extraFields->get('quantidade_minima_preco_cnpj_2')->values->first()->value}}"
                               @break
                            @endif
            @endforeach
                value="{{ $item->extraFields->get('preco_cnpj_2')->values->first()->value }}"
            >
                @foreach($item->categories as $cat)
                            @if(null !== $cat->extraFields->get('quantidade_minima_preco_cnpj_2'))
                               {{$cat->extraFields->get('quantidade_minima_preco_cnpj_2')->values->first()->value}}
                               @break
                            @endif
            @endforeach
                 a 
                @foreach($item->categories as $cat)
                            @if(null !== $cat->extraFields->get('quantidade_minima_preco_cnpj_3'))
                               {{$cat->extraFields->get('quantidade_minima_preco_cnpj_3')->values->first()->value - 1}}
                               @break
                            @endif
            @endforeach
            UN
              </button>
        @endif
          
        @if(null !== $item->extraFields->get('preco_cnpj_3'))
           <button class="btn btn-outline-secondary btn-cnpjprice-3" style="font-size: 7px  !important" onclick="selectPrice(this)"
             @foreach($item->categories as $cat)
                            @if(null !== $cat->extraFields->get('quantidade_minima_preco_cnpj_3'))
                               inputQuantity="{{$cat->extraFields->get('quantidade_minima_preco_cnpj_3')->values->first()->value}}"
                               @break
                            @endif
            @endforeach
            value="{{ $item->extraFields->get('preco_cnpj_3')->values->first()->value }}"
            >
            A partir </br> de 
             @foreach($item->categories as $cat)
                            @if(null !== $cat->extraFields->get('quantidade_minima_preco_cnpj_3'))
                               {{$cat->extraFields->get('quantidade_minima_preco_cnpj_3')->values->first()->value}}
                               @break
                            @endif
            @endforeach 
            UN
            </button>
        @endif
        
           
    </div>
    
     <div class="buyArea w-100 d-flex px-2">
    <button style="cursor: pointer; @desktop width:70%; @enddesktop @mobile width:90%; @endmobile margin:0 auto; border-radius:0px; font-weight:700; border-radius:8px;" quantity="1"
        rel="{{ checkout_cart_add_item_link($item) }}" canopus-checkout-add-item-btn class="paction product-container" title="Add to Cart ">
        Comprar
    </button>
    </div>
</div>


