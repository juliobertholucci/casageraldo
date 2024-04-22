@if(!request()->ajax())
<!DOCTYPE html>
<html lang="pt">
    <head>
        @include(engine_view('component_head'))
        
    </head>
    
    <body style="background-color: #fff">
        <div class="page-wrapper">
            <header class="header">
                @includeAndCache(engine_view('component_header_middle'))
                @includeAndCache(engine_view('component_header_sticker'))
            </header><!-- End .header -->
            
            @yield('page_content')
            @include(engine_view('component_footer'))
        </div><!-- End .page-wrapper -->
        @mobile
        @includeAndCache(engine_view('component_mobile_menu'))
        @endmobile
        
        @includeAndCache(engine_view('component_newsletter_popup'))
        
        <!-- START Bootstrap-Cookie-Alert -->
        <div class="alert text-center cookiealert" role="alert">
            <div class="cookiealert-container">
                <b>As configurações de cookies deste site estão definidas para permitir todos os cookies a fim de oferecer a melhor experiência. Clicando em Aceitar você concordará e continuará navegando pelo site. Veja nossa  <a href="/politica-de-privacidade" target="_blank">Política de privacidade</a>
        
                <button type="button" class="btn btn-primary btn-sm acceptcookies" style="display: inline-flex !important">
                    Aceito
                </button>
            </div>
        </div>
        <!-- END Bootstrap-Cookie-Alert -->

        <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
    
        <!-- Plugins JS File -->
        <script src="{{script('jquery_min.js')}}"></script>
        <script src="{{script('bootstrap_bundle_min.js')}}"></script>
        <script src="{{script('plugins_min.js')}}"></script>
        <script src="{{script('jquery_countdown.js')}}"></script>
    
        
        
        <script src="{{script('jquery_countTo.js')}}"></script>
        <script src="{{script('jquery_bootstrap-touchspin_min.js')}}"></script>
    
        <script src="{{ canopus_js() }}"></script>
        <!-- Facebook APP SDK -->
        <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId            : '132350280704520',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v10.0'
            });
        };
        </script>
        <script>
            CanopusEventCenter.addListener('Checkout.Added', function(dados) {
                fbq('track', 'AddToCart');
            });
            CanopusEventCenter.addListener('Identification.Register.Registered', function(dados) {
                fbq('track', 'CompleteRegistration');
            });
            CanopusEventCenter.addListener('CostumerMessage.Triggering', function(dados) {
                fbq('track', 'Contact');
            });
            
            document.querySelector('#search-form').addEventListener("submit", function(dados){
                fbq('track', 'Search')
            });
             CanopusEventCenter.addListener('ServerDataLoader.Loaded', function(dados) {
                    if(dados.client == null) return;
                    
                    clientTags = dados.client.tags;
                    clientTags.forEach(function(tag){
                        if(tag.name === "Cliente CNPJ"){
                            Array.from(document.querySelectorAll('.d-none.precificacao')).forEach(function(el) { 
                                el.classList.remove('d-none');
                            });
                        }
                    })
                });
            
            
        </script>
        
        <!-- Main JS File -->
        <script>
            var stickyHeaderLogoSrc = "";
            @if(null !== $store->model->extraFields->get('logo_do_menu_sobreposto_do_cabecalho'))
            stickyHeaderLogoSrc = "{{ thumb($store->model->extraFields->get('logo_do_menu_sobreposto_do_cabecalho')->values->first()->source, 109, 43) }}";
            @endif
        </script>
        @stack('pre-scripts')
        
        <script src="{{script('main_init.js')}}"></script>
        <script src="{{script('main.js')}}"></script>
        <script src="{{script('header.js')}}"></script>
        <script src="{{script('jquery_inputmask.js')}}" async></script>
        <script src="{{script('checkout_preview.js')}}"></script>
        <script src="{{script('prices.js')}}"></script>
        <script src="{{script('search.js')}}"></script>
        <script src="{{script('availability.js')}}"></script>
     
        @stack('scripts')
        <script>
         CanopusEventCenter.addListener('ServerDataLoader.Loaded', function(dados) {
                if(null !== dados.client && null !== document.querySelector('.comment-login-block')){
                   document.querySelector('.comment-login-block').style.display = 'none';
                }
            });
        </script>
    
    <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', {{word('pixel_id')}});
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id={{word('pixel_id')}}&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
        
 <script type="text/javascript">
    $(document).ready(function() {
    var isshow = localStorage.getItem('isshow');
    if (isshow== null) {
        localStorage.setItem('isshow', 1);
        // Show popup here
        iziToast.question({
    close: false,
    overlay: true,
    displayMode: 'once',
    id: 'question',
    theme: 'dark',
    backgroundColor: 'rgb(46, 46, 46)',
    messageColor: '#fff',
    titleColor: '#fff',
    zindex: 9999999,
    timeout: 99999999,
    title: '<p style="margin-bottom: 20px; font-size: 2.1rem">Bem-vindo!</p>',
    message: '<p style="margin-bottom: 20px">VOCÊ TEM MAIS DE 18 ANOS?</p>',
    messageSize: '18',
    position: 'center',
    buttons: [
        ['<button><b>SIM</b></button>', function (instance, toast) {
            instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
        }, true],
        ['<button>NÃO</button>', function (instance, toast) {
            window.location.href = "https://www.google.com"
            instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
        }],
    ],
    onClosing: function(instance, toast, closedBy){
        console.info('Closing | closedBy: ' + closedBy);
    },
    onClosed: function(instance, toast, closedBy){
        console.info('Closed | closedBy: ' + closedBy);
    }
});
    }
});

        function selectPrice(ele){
            var value = ele.value;
            productbox = ele.closest(".product-default");
            priceSpan = productbox.querySelector('.product-price')
            priceSpan.price= ele.value;
            priceSpan.innerText = "R$" + value.replace(".", ",");
            var btnBuyProduct = productbox.querySelector('.paction');
            var inputQtd = productbox.querySelector('#inputQuantity');
            btnBuyProduct.setAttribute("quantity", ele.getAttribute("inputquantity"))
            inputQtd.value = ele.getAttribute("inputquantity");
            
            productbox.querySelectorAll('.btn-outline-secondary').forEach(function(button){
                button.classList.remove('active')
            })
            ele.classList.add('active')
        }
        function updateQuantity(el) {
            var inputQuantity = el
            var btnBuyProduct = el.closest('.product-default').querySelector('.paction');
            var quantity = inputQuantity.value;
            btnBuyProduct.setAttribute("quantity", quantity)
            
            
        }
        </script>
    </body>
</html>
@endif