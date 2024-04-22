<div class="canopus-cart-items px-4">
    <ul>
        @if(null !== $cartPreview->collection)
            @foreach($cartPreview->collection as $item)
            <li class="row cart-item-row" data-id="{{ $item->id }}" data-type="{{ $item->options->type }}">
                @if(null !== $item->model->extra_fields)
                        <p>Extra Fields</p>
                    @endif
                    
                <div class="canopus-cart-item-image col-4">
                    @if(null !== $item->model->images)
                        <img src="{{ thumb($item->model->images->first()->source, 300, 300, ['fill(transparent)'] ) }}">
                    @endif
                    
                    

                </div>
                <div class="canopus-cart-item-name-qtd col-8">
                    <div class="canopus-cart-item-info row">
                        <h4 class="col-12 fontClass pl-0">{{$item->name}}</h4>
                    </div>
                    <div class="canopus-cart-item-quantity d-flex row" id="{{$item->id}}">
                        <div class="quantity col-5 pl-0">
                            <button class="btn-less-qtd-modal" data-id="{{ $item->id }}" data-type="{{ $item->options->type }}">
                                <i style="color:#762432; font-size:15px;" class="fas fa-minus"></i>
                            </button>
                            
                            <input style="color:#222222; font-weight:600; font-size:15px;" type="text"
                                readonly
                                value="{{ $item->qty }}"
                                maxlength="4"
                                name="quantity-modal-input"
                                class="quantity-modal-input"
                                id="input-quantity-{{ $item->id }}" />
                            
                            <button class="btn-more-qtd-modal" data-id="{{ $item->id }}" data-type="{{ $item->options->type }}">
                                <i style="color:#762432; font-size:15px;" class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div class="price col-2 p-0 text-center">
                            <p class="fontClass" style="font-size:16px;">R$ {{ number_format($item->price, 2, ',', '.') }}</p>
                        </div>
                        <div class="action col-1 pl-0 text-right">
                            <button class="btn btn-link btn-remove-item" data-id="{{ $item->id }}" data-type="{{ $item->options->type }}">
                                <i style="color:#762432; font-size:15px;" class="fa fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        @endif
        <li class="row">
            <div class="col-12 text-center">
                <button id="btn-clear-cart" class="botao w-100 fontClass" style="height:5vh; border-radius:0px; background-color:#f5f5f5; color:#222222">LIMPAR CARRINHO</button>
            </div>
        </li>
    </ul>
</div>