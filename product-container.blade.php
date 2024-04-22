<div class="product-default inner-quickview inner-icon borderShadow p-3" style="border-radius:8px; color:#000; font-size:14px; font-weight:600;">
<figure>
                <a 
                @if($item->urls->first())
                href="{{url($item->urls->first()->url)}}"
                @endif
                >
                    <img src="{{ thumb($item->main_image->source, 1000, 1000, ['fill(white)']) }}" alt="{{ $item->identification->first()->name }}">
                </a>
               
                 <div class="d-flex position-absolute" style="top: 5%; left: 5%;">
                @if($item->extraFields->get('pais_de_origem'))
                    <img src="{{ thumb($item->extraFields->get('pais_de_origem')->values->first()->record->bandeira_do_pais->values->first()->source, 36) }}" >
                @endif

                </div>
                <div class="d-flex position-absolute" style="top: 8%; right: 35%;">
                    @if($item->extraFields->get('texto_da_tag_do_card_de_produto'))
                        <div class="label-group">
                            <span class="product-label label-sale tagDis" style="background-color:transparent !important;color:#762432 !important;">{{$item->extraFields->get('texto_da_tag_do_card_de_produto')->values->first()->value}}</span>
                        </div>
                    @endif
            </div>
            
                
            </figure>
            <div class="product-details">
                <div class="category-wrap">
                    <div class="category-list w-100 text-center">
                    @if($item->categories->isNotEmpty())
                        @if($item->categories->first()->urls->isNotEmpty())
                        <a href="{{ $item->categories->first()->urls->first()->url }}" class="product-category fontClass categoriaProduto">
                        @endif
                            {{$item->categories->first()->name}}
                        @if($item->categories->first()->urls->isNotEmpty())
                        </a>
                        @endif
                    @endif
                    </div>
                </div>
                <h2 class="text-center fontClass tituloProduto d-block w-100 " data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ $item->identification->first()->name }}">
                    <a class="fontClass tituloProduto" @if($item->urls->first()) 
                        href="{{url($item->urls->first()->url)}}"
                        @endif>
                        {{ $item->identification->first()->name }}
                    </a>
                </h2>
                
                <div class="ratings-container justify-content-center w-100 text-center">
                    @if(null !== $item->averageRate)
                    <div class="product-ratings"> 
                        <span class="ratings" style="width:{{$item->averageRate * 20}}%">{{$item->avarageRate}}</span><!-- End .ratings -->
                        <span class="tooltiptext tooltip-top text-center">{{$item->avarageRate}}</span>
                    </div><!-- End .product-ratings -->
                    @endif
                </div><!-- End .product-container -->
                
                <div class="price-box text-center w-100 justify-content-center">
                    <span class="depor-de"><br></span>
                    <span class="product-price fontClass textPreco" price-loader-id="{{ $item->id }}" price-loader-type="item" price="{{$item->prices->first()->originalPrice}}">
                        <i class="fas fa-circle-notch fa-spin"></i>
                    </span>
                    
                    @if(null !== $item->extraFields->get('texto_promocao'))
                    
                        <p class="mb-0 ml-3 ct font-weight-normal"> {{$item->extraFields->get('texto_promocao')->values->first()->value}}</p>
                    
                    @endif
                    
                     @if(null !== $item->extraFields->get('desconto_assinante') and null !== word('desconto_assinante'))
                    <h2 class="subscribePrice d-inline-flex ml-3 mb-0">
                        <span class="badge rounded-pill bg-primary-color" style="color:#FFF;">Assinante R${{number_format($item->prices->first()->price * (1 - (intval(word('desconto_assinante'))/100)), 2, ',', ' ')}}</span>
                    </h2>
                    @endif
                </div><!-- End .price-box -->
                @if($item->variations->isNotEmpty())
                        <span style="display:none; font-size: 1.8rem; font-weight: 600;" class="product-available" available-id="@foreach($item->variations as $variation){{$variation->id}} @endforeach">Produto Indisponível</span>
                    @else
                        <span style="display:none;font-size: 1.8rem; font-weight: 600;" class="product-available" available-id="{{ $item->id }}">Produto Indisponível</span>
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
    
    <br>
    
    <div class="buyArea d-flex px-2">
    <button style="cursor: pointer;" quantity="1"
        rel="{{ checkout_cart_add_item_link($item) }}" canopus-checkout-add-item-btn class="paction product-container" title="Add to Cart">
        Comprar
    </button>
    </div>
</div>
