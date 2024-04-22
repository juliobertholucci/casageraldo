@mobile
    <style>
            .tamanho{
                display: block;
                text-align: center;
                font-size:1.8rem;
            }
            .ProductSizeVariation{
                text-align: center;
            }
            .product-action{
                flex-direction: column;
            }
            .product-single-qty{
                align-self: center;
                margin-bottom: 2.5rem !important;
                display:none !important;
                
            }
    </style>
@endmobile
    
    
        

<div class="infos" itemscope itemtype="https://schema.org/Product">    
<div class="product-single-details">
    <h1 itemprop="name" class="product-single-title">{{$product->model->identification->first()->name}}</h1>
    <hr style="padding:0; margin:8px 0px 8px 0px; border-radius:10px; height:4px; background-color:#762432;"/>
    <div class="ratings-container">
        <a href="#" class="rating-link" style="margin-left: 0 !important;">
        <div class="product-ratings" style="font-size: 2rem">
            <span class="ratings fontClass" style="width:{{number_format($product->averageRate, 1, '.', '') * 20}}%; font-size: 2rem;">{{number_format($product->averageRate, 1, '.', '')}}</span><!-- End .ratings -->
        </div><!-- End .product-ratings -->
        <span style="margin-left: 1rem;">
            {{number_format($product->averageRate, 1, '.', '')}}
        </span>
        </a>
    </div><!-- End .product-container -->
    <div style="display:none">
        <img itemprop="image" src="{{$product->images->first()->source}}" alt="{{$product->model->identification->first()->name}}">
        <span itemprop="category">{{$product->model->categories->first()->name}}</span>
        <span itemprop="url">{{url()->current()}}</span>
        @if(null !== $product->extraFields->get('marca'))
        <span itemprop="brand">{{$product->extraFields->get('marca')->values->first()->value}}</span>
        @endif
    </div>
        
       
        @if(null !== $product->extraFields->get('desconto_assinante') and null !== word('desconto_assinante'))
            <p class="h4 pt-5">Preço pra Assinante: R${{number_format($product->model->prices->first()->price * (1 - (intval(word('desconto_assinante'))/100)), 2, ',', ' ')}}.
                <a href="/clube" class="institucionalLink" style="text-decoration: underline;">O que é isso?</a>
            </p>
            
        @endif
    <div class="product-desc">
        @if($product->extraFields->has('descricao_simples'))
                <p style="font-size:16px; color:#222222; font-weight:400;" class="fontClass">{!! $product->extraFields->get('descricao_simples')->values->first()->value !!}</p>
        @endif
    </div><!-- End .product-desc -->
@if($product->extraFields->has('cores_relacionadas'))
    <div class="product-filters-container">
        <div class="product-single-filter">
            <label>Cores:</label>
            <ul class="config-swatch-list">
                <li class="active"> 
                    <a href="/{{$product->model->urls->first()->url}}" 
                    @if(null !== $product->model->extraFields->get('codigo_hexadecimal_da_cor_do_produto'))
                    style="background-color: {{$product->model->extraFields->get('codigo_hexadecimal_da_cor_do_produto')->values->first()->value}};"
                    @endif
                    >{{$product->model->identification->first()->name}}  </a>
                </li>
        @foreach($product->extraFields->get('cores_relacionadas')->values as $relatedColors)
                <li> 
                    <a href="/{{$relatedColors->record->urls->first()->url}}" 
                    @if(null !== $relatedColors->record->extraFields->get('codigo_hexadecimal_da_cor_do_produto'))
                    style="background-color: {{$relatedColors->record->extraFields->get('codigo_hexadecimal_da_cor_do_produto')->values->first()->value}};"
                    @endif
                    >{{$relatedColors->record->identification->first()->name}} </a>
                </li>
        @endforeach
            </ul>
        </div><!-- End .product-single-filter -->
    </div><!-- End .product-filters-container -->
@endif
@if(null !== $product->model->variations && $product->model->variations->isNotEmpty())
        <label class="tamanho">Tamanhos : </label>
        <div class="ProductSizeVariation">
            <ul>
                <li>
                @foreach($product->model->variations as $variation)
                    <span rel="{{checkout_cart_add_item_link($variation)}}" class="paction"  id="sizeVariation" 
                    @buyableAvailable($variation, 1) 
                        onclick="updateSize('{{ checkout_cart_add_item_link($variation) }}', this)"
                    @endbuyableAvailable    
                        @buyableAvailable($variation, 1)
                                    @else
                                       style="background-color:LightGrey; color:white; cursor: auto; border: none"  
                                    @endbuyableAvailable
                        >
                        {{$variation->extraFields->get('tamanho')->values->first()->value}} 
                    </span>
                @endforeach
                </li>
            </ul>
        </div>
@endif 

 

<div class="price-box">
        @if($product->model->prices->first()->originalPrice > $product->model->prices->first()->price)
            <span class="depor-de" style="color:#000; font-size:14px; font-weight:600;"> <s>de: R$ {{number_format($product->model->prices->first()->originalPrice, 2, ',', '.')}} </s></span> <br>
        @endif
        <div class="precos" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
            <span itemprop="url" style="display:none">{{url()->current()}}</span>
            <link itemprop="availability" href="https://schema.org/InStock" />
            <div class="estoque">
            </div>
        <div>
            
        <div class="row w-100 m-0"> 
            
            @desktop
            <div class="w-25">
                
                <span itemprop="priceCurrency" content="R$"></span>
                 <span itemprop="price" class="fontClass" style="font-size:22px; color:#762432; font-weight:900;" content="{{number_format($product->model->prices->first()->price, 2, '.', ',' )}}" class="product-price">R$ {{number_format($product->model->prices->first()->price, 2, ',', '.' )}}</span>
                
            </div>
            
            @enddesktop
            
            @mobile
            
            <div style="width:32%;">
                
                <span itemprop="priceCurrency" content="R$"></span>
                <span itemprop="price" class="fontClass" style="font-size:22px; color:#762432; font-weight:900;" content="{{number_format($product->model->prices->first()->price, 2, '.', ',' )}}" class="product-price">R$ {{number_format($product->model->prices->first()->price, 2, ',', '.' )}}</span>
                
            </div>
            
            @endmobile
        
            <div class="w-25 @mobile w-50 justify-content-left mt-1 @endmobile">
                        @if($product->extraFields->get('texto_da_tag_do_card_de_produto'))
                            <div class="label-group">
                                <span class="product-label p-1 label-sale tagDis" style="background-color:transparent !important;color:#762432 !important;">{{$product->extraFields->get('texto_da_tag_do_card_de_produto')->values->first()->value}}</span>
                            </div>
                        @endif
            </div>
            
            
        
        </div>
        <p style="color:#000; border-radius:8px; font-weight:700;" class="p-2 fontClass @mobile fontProgressivo @endmobile">Desconto Progressivo Ativado!</p>
    </div><!-- End .price-box -->
    
    <br>

 <div class="product-action">
    @buyableAvailable($product->model, $quantityShouldBeGreaterThan = 1)
        <div class="product-single-qty">
            <input onchange="updateQuantity()" class="horizontal-quantity w-100 form-control" type="text" id="inputQuantity" >
        </div><!-- End .product-single-qty -->
        @if($product->model->variations->count() > 0)
             <input type="hidden" value="0" id="variationSelected"> </input>
                 @foreach($product->model->variations as $variation)
                     @foreach($variation->extraFields->get('tamanho') as $item)
                        <input value="0" id="stockQuantity"> </input>
                     @endforeach
                 @endforeach
        @endif
        
        <button style="cursor: pointer; background-color:#762432; border-radius:10px; color:#fff;" quantity="1"
            @if($product->model->variations->count() > 0  && $product->model->variations->isNotEmpty())
                canopus-checkout-add-item-btn 
                href=""
                onclick="checkSelectedVariation()"
            @else
                   rel="{{ checkout_cart_add_item_link($product->model) }}"
                   canopus-checkout-add-item-btn
            @endif
                        id="btnBuyProduct" class="paction add-cart" title="Add to Cart ">
            
            <span style="color:#fff; font-weight:500; font-family: font-family: 'Satoshi', sans-serif; font-size:16px;">Comprar</span>
        </button>
        @else
        <a href="javascript:;" canopus-open-item-availability-alert-modal="{{$product->model->id}}" class="btn btn-primary font-weight-bold">
            Avise-me quando chegar
        </a>
    @endbuyableAvailable
    </div><!-- End .product-action -->
@include(engine_view('component_ficha_tecnica'))
</div><!-- End .product-single-details -->
</div>


<script type="text/javascript">
  
    function updateSize(variationHref, sizeSpan) {
        
    
    var btnBuyProduct = document.getElementById("btnBuyProduct");
    btnBuyProduct.setAttribute("href", variationHref);
    btnBuyProduct.setAttribute("canopus-checkout-add-item-btn", "");
    
    
     document.querySelectorAll('.selectedVariation').forEach(function(spanElement) {
    spanElement.classList.remove('selectedVariation')
});

    sizeSpan.classList.add('selectedVariation');
 
    
}

 

 
function checkSelectedVariation() {
    var btnBuyProduct = document.getElementById('btnBuyProduct');
    if(btnBuyProduct.getAttribute("href") === "") {
          iziToast.warning({
                title: 'Atenção',
                message: 'Selecione um tamanho.'
            });  
            
    }
     
} 
function updateQuantity() {
    var btnBuyProduct = document.getElementById('btnBuyProduct');
    var inputQuantity = document.getElementById('inputQuantity');
    var quantity = inputQuantity.value
    btnBuyProduct.setAttribute("quantity", quantity)
    
    
}



</script>