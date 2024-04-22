
<html>
    <head>
        
        <!-- Meta Pixel Code -->
            <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '429396602863659');
            fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=429396602863659&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->
           <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-13D9PTHDC1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-13D9PTHDC1');
  gtag('config', 'AW-16475836125');
</script>
<!-- Event snippet for COMPRA conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-16475836125/69zVCJTR85YZEN2dpbA9',
      'value': 150.0,
      'currency': 'BRL',
      'transaction_id': ''
  });
</script>

        
        @checkoutHeader()
        
        <style>
            @if('' !== $store->model->extraFields->get('cor_do_fundo_da_parte_principal_do_cabecalho'))
                .header{
                    background-color:{{ $store->model->extraFields->get('cor_do_fundo_da_parte_principal_do_cabecalho')->values->first()->value }};
                }
            @endif
            
           
                
            span [_ngcontent-c4]{
                    
                font-size:10px !important;
                background-color: #000;
                color:#fff;
                padding:6px;
                margin-top:2px;
                    
            }
            
            payment-payment-coupon{
                
                color:#762432 !important;
                font-weight:700 !important;
                
            }
            
            #payment--coupon--remove-coupon{
                
                background-color:#000 !important;
                height:5vh;
                
            }
            
            .pull-right{
    
                color:#fff !important;
                display:none !important;
    
            }
                
            
            .container-fluid.canopus-cart-container{
                margin-top: 50px;
            }
            
            .ml-sm-auto.col-lg-2.col-sm-3.col-6.title{
                font-size: 14px;
                text-align:left;
                padding: 8px 0;
            }
            
            .price[_ngcontent-c4], .value{
                
                color:#762432 !important;
                 font-family: 'Satoshi', sans-serif !important;
                
            }
            
            .pull-left[_ngcontent-c1]{
                
                background-color:#222222 !important;
                color:#fff !important;
                
            }
            
            .pull-left[_ngcontent-c1]:hover{
                
                background-color:#fff !important;
                color:#222222 !important;
                border:1px solid #000;
                text-decoration:none;
                
            }
            
            .form-control[_ngcontent-c10]{
                
                border:1px solid #000;
                border-radius:8px !important;
                font-family: 'Satoshi', sans-serif;
                color:#000;
                
            }
            
            .btn[_ngcontent-c4]{
                
                background-color:#762432;
                
            }
            
            .botao{
                
                background-color:#762432;
                color:#fff;
                font-family: 'Satoshi', sans-serif;
                font-weight:900;
                width:100%;
                height:7vh;
                border-radius:15px;
                border:none;
                font-size:14px;
            }

            .canopus-cart-item-info[_ngcontent-c4] a[_ngcontent-c4]{
    
                color:#222222 !important;
                font-family: 'Satoshi', sans-serif !important;
                
            }
            
            .btn[_ngcontent-c3], .btn[_ngcontent-c13]{
                
                background-color:#5CB85C !important;
                
            }
            
            .btn-link[_ngcontent-c13]{
                
                color:#fff;
                background-color:#762432;
                font-family: 'Satoshi', sans-serif !important;
                text-decoration:none;
                font-weight:600;
                border:none;
                
            }
            
            .btn[_ngcontent-c3], .btn[_ngcontent-c13]:hover{
                
                color:#222222 !important;
                background-color:#fff !important;
                
            }
            
            .value{
                
                color:#762432 !important;
                
            }
            
            .btn[_ngcontent-c18]{
                
                margin-bottom:10px !important;
                
            }
            
            .btn[_ngcontent-c17], .btn[_ngcontent-c12]{
                
                background-color:#5CB85C !important;
                
            }
            
            .btn[_ngcontent-c17], .btn[_ngcontent-c12]:hover{
                
                background-color:#fff !important;
                color:#000 !important;
                
            }
            
            .canopus-payment-resume .canopus-cart-item-info a {
                
                color:#222222 !important;
                font-family: 'Satoshi', sans-serif !important;
                
            }
            
            .title, .payment-resume-header, .checkout-formbox-header, .checkout-formbox-header{
                
                font-family: 'Satoshi', sans-serif !important;
                color:#222222 !important;
                
            }
            
            .list-group-item p,
            .col-sm-3.col-lg-2.col-6.value{
                text-align: right;
                font-size: 14px;
            }
            
            .row.ml-sm-auto.canopus-cart-total .title,
            .row.ml-sm-auto.canopus-cart-total .value{
                font-size: 20px !important;
            }
            
            .btn{
                border-radius: 5px !important;
            }
            
            .input-group-append .btn{
                display:none;
            }
            
            .mt-md.mb-md.pull-left{
                padding: .5rem 1rem;
                background: #777;
                color: #FFF;
                margin-top: 0;
                border-radius: 5px;
            }
            .container.pb-2.pt-5{
                border-bottom: 1px solid #e1e1e1;
            }
            .cart-row .append.extra-fields {
                display: block !important;
                
            }
            .cart-row .append.extra-fields .marca{
                display: none !important;
                
            }
            .cart-row .append.extra-fields ul{
                display:flex;
                align-items: center;
            }
             .cart-row .append.extra-fields li{
                 list-style: none;
             }
             .cart-row .append.extra-fields ul.values{
                 padding: 0 !important; 
             }
             @mobile
                .col-lg-5.col-sm-12{
                     padding-top: 3rem!important;
                 }
             @endmobile
        </style>
    </head>
    <body>
        <header class="header py-4">
            <div class="d-flex align-center justify-content-center">
                <div class="header-item ">
                <a href="/" class="logo">
                    @if(null !== $store->model->extraFields->get('logo_do_cabecalho'))
                        <img src="{{ thumb($store->model->extraFields->get('logo_do_cabecalho')->values->first()->source, 150) }} "> 
                    @endif
                </a>
                <br>
                    <a href="https://api.whatsapp.com/send?phone=5535998132967&text=Ol%C3%A1!%20Preciso%20de%20ajuda%20para%20finalizar%20uma%20compra%20no%20site!" target="_blank"><button class="botao" style="margin-top:20px;">Ajuda</button></a>
                
                </div>
                
            </div>
            
        </header>
        
        <div class="container pb-2 pt-5 ">
            @checkoutBody()
        </div>
        
        @desktop
        <footer class="footer-bottom py-5" >
            <div class="container d-flex justify-content-between align-items-start footer-container">
                <div class="footer-copyright">
                    <a href="/">
                        @if(null !==$store->model->extraFields->get('logo_do_rodape'))
                            <img src="{{thumb($store->model->extraFields->get('logo_do_rodape')->values->first()->source, 109, 43) }} "> 
                        @endif      
                    </a>
                    <br><br>
                    <p>
                        CNPJ: 04.801.372/0001-78
                    </p>
                    
                </div>
                <div class="w-25">
                
                <img style="width:48%;" src="{{ path('CompraSegura.png') }}">                
                <a href="https://transparencyreport.google.com/safe-browsing/search?url=casageraldo.com.br&hl=pt-PT" target="_blank"><img style="width:48%;" src="{{ path('SiteSeguro.png') }}"></a>
                    
                </div>
                
        </div><!-- End .footer-bottom -->
        </footer>
        
        @elsedesktop
            @include(engine_view('checkout-footer-mobile'))
        @enddesktop
    </body>
</html>