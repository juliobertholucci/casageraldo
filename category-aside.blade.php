@if($category->model->count > 0 )
<aside class="sidebar-shop col-lg-3 order-lg-first">
    <div class="sidebar-wrapper">
    
    <!-- Category children -->
    @if($category->model->has_children)
    <div class="widget">
            <h3 class="widget-title">
               <a data-toggle="collapse" style="font-size:16px;font-family: 'Satoshi', sans-serif;" href="#widget-body-subcategories" role="button" aria-expanded="true" aria-controls="widget-body-subcategories">{{$category->model->name}}</a>
            </h3>
            <div class="collapse show" id="widget-body-subcategories">
                <div class="widget-body">
                    <ul class="cat-list">
                        @foreach($category->model->children as $subCategoryLevel1)
                        <li><a style="font-size:14px; font-family: 'Satoshi', sans-serif;" href="{{ $subCategoryLevel1->urls->first()->url }}">{{$subCategoryLevel1->name}}</a></li>
                        @endforeach
                    </ul>
                </div><!-- End .widget-body -->
            </div><!-- End .collapse -->
        </div><!-- End .widget -->
    @endif
    
    @if($category->model->count > 1)
        <!-- Price Filter -->
        <div class="widget">
            <h3 class="widget-title">
                <a data-toggle="collapse" style="font-size:16px;font-family: 'Satoshi', sans-serif;" href="#widget-body-price" role="button" aria-expanded="true" aria-controls="widget-body-price">Preço</a>
            </h3>
            
            <div class="collapse show" id="widget-body-price">
                <div class="widget-body">
                        <div class="price-slider-wrapper">
                            <div id="price-slider">
                            </div><!-- End #price-slider -->
                        </div><!-- End .price-slider-wrapper -->

                        <div class="filter-price-action">

                            <div class="filter-price-text" style="font-size:16px;font-family: 'Satoshi', sans-serif;">
                                Preço:
                                <span id="filter-price-range"></span>
                                <input id="value-lower" type="hidden" value="" canopus-showcase-infinite-scroll-price-min />
                                <input id="value-upper" type="hidden" value=""canopus-showcase-infinite-scroll-price-max  />
                            </div><!-- End .filter-price-text -->
                        </div><!-- End .filter-price-action -->
                </div><!-- End .widget-body -->
            </div><!-- End .collapse -->
        </div><!-- End .widget -->
        @endif
        
        <!-- Extrafield filter -->
        @foreach($category->extraFields as $extraField)
        <div class="widget">
            <h3 class="widget-title">
                <a data-toggle="collapse" href="#widget-body-{{$loop->iteration}}" role="button" aria-expanded="true" aria-controls="widget-body-{{$loop->iteration}}">
                    {{ $extraField->label}}
                </a>
            </h3>
            <div class="collapse show" id="widget-body-{{$loop->iteration}}">
                <div class="widget-body">
                    <ul class="cat-list">
                        @foreach($extraField->values as $value)
                        <li >
                         <input type="checkbox" id="{{$value->value}}" value="{{$value->value}}" canopus-showcase-infinite-scroll-extra-field-filter="{{$extraField->slug}}"
                                @extraFieldInRequest($extraField, $value)
                                    checked
                                @endextraFieldInRequest
                            />
                            
                                <label for="{{$value->value}}" style="cursor: pointer;">{{ $value->value }}</label>
                            </li>
                        @endforeach
                    </ul>
                </div><!-- End .widget-body -->
            </div><!-- End .collapse -->
        </div><!-- End .widget -->

        @endforeach
        
        <button type="submit" class="btn btn-primary mx-auto mt-3" style="border-radius:10px; font-weight:700;" canopus-showcase-infinite-scroll-apply >Filtrar</button>
    </div><!-- End .sidebar-wrapper -->
</aside><!-- End .col-lg-3 -->
@endif
