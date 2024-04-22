<div class="header-middle">
    <div class="container">
        <div class="header-left">
            <button class="mobile-menu-toggler" type="button">
                <i class="icon-menu"></i>
            </button>
            <a href="/" class="logo">
                @if(null !== $store->model->extraFields->get('logo_do_cabecalho'))
                    @desktop
                        <img src="{{ thumb($store->model->extraFields->get('logo_do_cabecalho')->values->first()->source) }}" width="150" height="50"> 
                    @elsedesktop
                        <img class="w-75 py-5" src="{{ thumb($store->model->extraFields->get('logo_do_cabecalho')->values->first()->source, 200) }} " width="150" height="50"> 
                    @enddesktop
                @endif
            </a>
        </div><!-- End .header-left -->
        @desktop
        <div class="header-center">
            @include(engine_view('component_header_middle_search'))
        </div><!-- End .headeer-center -->
        @enddesktop
        <div class="header-right">
            <a canopus-open-identification-modal class="header-icon pb-md-1 pl-1 mr-5" style="cursor: pointer; display: flex; ">
                <i class="icon-user-2"></i>
            <h6 class="user-text font1 d-none d-flex flex-column justify-content-center mb-0">
                <span class="text-body">Bem vindo(a)</span>
                <span class="font-weight-bold" style="font-size: 14px;">Login/ Registre-se</span>
            </h6>
            </a>
            <div class="dropdown cart-dropdown"canopus-checkout-cart-open-preview >
                <a href="/checkout/cart" class="dropdown-toggle" {{--role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"--}} data-display="static" >
                    <i class="minicart-icon"></i>
                    <span class="cart-count"></span>
                </a>
                {{-- @include(engine_view('component_header_middle_dropdown_cart')) --}}
            </div><!-- End .dropdown -->
        </div><!-- End .header-right -->
    </div><!-- End .container -->
     @mobile
                <div class="w-100 pr-5 pl-5" style="border: none;">
            
            <form action="/busca" method="get" id="search-form" style="border: none;">
                <div class="header-search-wrapper pr-4" style="border: none; display: flex; align-items: center; background-color: #fff; border-radius: 25px; overflow: hidden; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <input type="search" class="form-control" name="term" id="term" placeholder="Pesquise aqui" required autocomplete="on" style="border: none; padding: 15px; flex: 1; outline: none; font-size: 16px; color: #555;">
                    <input type="hidden" value="24" name="size" />
                    <button class="btn" type="submit" style="min-height: 35px; border: none; background-color: #762432; border-radius: 25px; color: #fff; cursor: pointer;"><i class="icon-magnifier"></i></button>
                </div><!-- End .header-search-wrapper -->
            </form>
            <div class="search-results"></div>
        </div><!-- End .header-search -->
        @endmobile
    
</div><!-- End .header-middle -->
