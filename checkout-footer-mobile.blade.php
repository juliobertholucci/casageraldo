<footer class="footer-bottom pt-5" >
            <div class="container d-flex justify-content-between align-items-center flex-column pb-3 footer-container">
                
                <div class="container d-flex justify-content-between pb-3">
                    
                <div class="footer-copyright">
                    <a href="/">
                        @if(null !==$store->model->extraFields->get('logo_do_rodape'))
                            <img src="{{thumb($store->model->extraFields->get('logo_do_rodape')->values->first()->source, 109, 43) }} "> 
                        @endif      
                    </a>
                </div>
                
                    <img style="width:30%;" src="{{ path('CompraSegura.png') }}">                
                    <img style="width:27%;" src="{{ path('SiteSeguro.png') }}">
                   
            
                </div>
                
                <div class="container">
                    
                    <p>
                        CNPJ: 04.801.372/0001-78
                    </p>
                   
                </div>
        </div><!-- End .footer-bottom -->
        </footer>