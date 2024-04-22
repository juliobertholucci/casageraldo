<div class="col product-default inner-quickview inner-icon @desktop border-right @enddesktop">
    <figure>
         @if(null !== $item->urls->first())
            <a href="{{ url($item->urls->first()->url) }}">
        @endif
        
            <img src="{{ thumb($item->main_image->source, 230, 230, ['fill(white)']) }}" alt="{{ $item->identification->first()->name }}" loading="lazy">
        </a>
         <div class="d-flex position-absolute" style="top: 0%; left: 60%;">
                    @if($item->extraFields->get('texto_da_tag_do_card_de_produto'))
                        <div class="label-group">
                            <span class="product-label label-sale">{{$item->extraFields->get('texto_da_tag_do_card_de_produto')->values->first()->value}}</span>
                        </div>
                        @endif
                </div>
      
    </figure>
     <div class="d-flex position-absolute" style="top: 5%; left: 5%;">
                @if($item->extraFields->get('pais_de_origem'))
                    <img src="{{ thumb($item->extraFields->get('pais_de_origem')->values->first()->record->bandeira_do_pais->values->first()->source, 36) }}" >
                @endif
            </div>
    <div class="product-details">
        <div class="category-wrap">
            <div class="category-list">
                @if($item->categories->isNotEmpty())
                    @if($item->categories->first()->urls->isNotEmpty())
                    <a href="{{ $item->categories->first()->urls->first()->url }}" class="product-category">
                    @endif
                        {{$item->categories->first()->name}}
                    @if($item->categories->first()->urls->isNotEmpty())
                    </a>
                    @endif
                @endif
            </div>
        </div>
        <h2 class="product-title" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ $item->identification->first()->name }}">
            @if(null !== $item->urls->first()) 
            <a href="{{url($item->urls->first()->url)}}">
                {{ $item->identification->first()->name }}
            </a>
            @endif
        </h2>
        <div class="ratings-container">
            @if(null !== $item->averageRate)
            <div class="product-ratings"> 
                <span class="ratings" style="width:{{$item->averageRate * 20}}%">{{$item->averageRate}}</span><!-- End .ratings -->
                <span class="tooltiptext tooltip-top">{{$item->averageRate}}</span>
            </div><!-- End .product-ratings -->
            @endif
        </div><!-- End .product-container -->
        <div class="price-box">
            <span class="depor-de"><br></span>
                    <span class="product-price" price-loader-id="{{ $item->id }}" price-loader-type="item" price="{{$item->prices->first()->originalPrice}}">
                <i class="fas fa-circle-notch fa-spin"></i>
            </span>
                    @if(null !== $item->extraFields->get('desconto_assinante') and null !== word('desconto_assinante'))
        @desktop
        <h4 class="subscribePrice d-inline-flex ml-2 mb-0">
            <span class="badge rounded-pill bg-primary-color" style="color:#FFF;">Assinante R${{number_format($item->prices->first()->price * (1 - (intval(word('desconto_assinante'))/100)), 2, ',', ' ')}}</span>
        </h4>
        @elsedesktop
        <h2 class="subscribePrice d-inline-flex ml-2">
            <span class="badge rounded-pill bg-primary-color" style="color:#FFF;">Assinante R${{number_format($item->prices->first()->price * (1 - (intval(word('desconto_assinante'))/100)), 2, ',', ' ')}}</span>
        </h2>
        @enddesktop
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
    
     <div class="buyArea d-flex justify-content-center px-2">
     <div class="product-single-qty">
        <input onchange="updateQuantity(this)" class="horizontal-quantity form-control" type="text" id="inputQuantity" >
    </div><!-- End .product-single-qty -->
    <button style="cursor: pointer;" quantity="1"
        rel="{{ checkout_cart_add_item_link($item) }}" canopus-checkout-add-item-btn class="paction product-container" title="Add to Cart ">
        Adicionar
    </button>
    </div>
    
</div>
