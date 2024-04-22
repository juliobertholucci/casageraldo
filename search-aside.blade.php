@if(count($searchPage->items) > 0)
<aside class="sidebar-shop col-lg-3 order-lg-first">
    <div class="sidebar-wrapper">
    <div class="widget pb-0">
        </div><!-- End .widget -->
        
@if(count($searchPage->items) > 1)
        <div class="widget pb-0">
            <h3 class="widget-title mt-2">
                <a data-toggle="collapse" href="#widget-body-price" role="button" aria-expanded="true" aria-controls="widget-body-price">Preço</a>
             </h3>

            <div class="collapse show" id="widget-body-price">
                <div class="widget-body">
                    <form action="#">
                        <div class="price-slider-wrapper">
                            <div id="price-slider"></div><!-- End #price-slider -->
                        </div><!-- End .price-slider-wrapper -->

                        <div class="filter-price-action">

                            <div class="filter-price-text">
                                Preço:
                                <span id="filter-price-range"></span>
                                <input id="value-lower" type="hidden" value="" canopus-showcase-infinite-scroll-price-min />
                                <input id="value-upper" type="hidden" value="" canopus-showcase-infinite-scroll-price-max />
                                <input id="sort" name="sort" type="hidden" value="price" canopus-showcase-infinite-scroll-limit />
                            </div><!-- End .filter-price-text -->
                        </div><!-- End .filter-price-action -->
                    </form>
                </div><!-- End .widget-body -->
            </div><!-- End .collapse -->
        </div><!-- End .widget -->
@endif
        
    
@if(null !== $searchPage->extraFields)
    @foreach($searchPage->extraFields as $extraField)

    <div class="widget pb-0">
            <h3 class="widget-title mt-2">
                <a data-toggle="collapse" href="#widget-body-{{$extraField->label}}" role="button" aria-expanded="true" aria-controls="widget-body-subcategories">{{$extraField->label}}</a>
            </h3>
            <div class="collapse show" id="widget-body-{{$extraField->label}}">
                <div class="widget-body">
                    <ul class="cat-list">
                            @foreach($extraField->values as $value)
                                 <li>
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
@endif    
<div class="container pt-5 mt-5">
    <button type="submit" class="btn btn-primary mx-auto borderShadow" canopus-showcase-infinite-scroll-apply>Filtrar</button>
</div>
        
    </div><!-- End .sidebar-wrapper -->
</aside><!-- End .col-lg-3 -->
@endif
