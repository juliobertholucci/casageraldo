@include(engine_view('component_newsletter_footer'))
<footer class="footer" style="width:100%; margin:0; padding:0;">
    <div class="container-fluid">
        <div class="footer-middle" style="padding:0">
                    <div class="row justify-content-center">
                        <div class="col-lg-2">
                            <div class="widget mb-3">
                                <h4 class="fontClass TituloRodape"> Navegação
                                </h4>
                                
                                <div class="row"> 
        						  
                                          <a href="/passeios" class="col-md-12 fontClass txtRodape" style="font-size:18px;"><i class="fas fa-arrow-circle-right mr-3"></i>Passeios</a>     
                                          <a href="/restaurante" class="col-md-12 fontClass txtRodape" style="font-size:18px;"><i class="fas fa-arrow-circle-right mr-3"></i>Restaurante</a>
                                          <a href="/trocas-e-devolucoes" class="col-md-12 fontClass txtRodape" style="font-size:18px;"><i class="fas fa-arrow-circle-right mr-3"></i>Trocas e Devoluções</a>
                                          <a href="/politicas-de-privacidade" class="col-md-12 fontClass txtRodape" style="font-size:18px;"><i class="fas fa-arrow-circle-right mr-3"></i>Políticas de Privacidade</a>
        						</div>
                                
                                
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->
                        
                        <div class="col-lg-2">
                            <div class="widget mb-2">
                                 <h4 class="fontClass TituloRodape">Redes Sociais</h4>

                                <div class="row"> 
        						  
                                          <a target="_blank" href="https://www.instagram.com/casageraldo/" class="col-md-12 fontClass txtRodape" style="font-size:18px;"><i class="fas fa-arrow-circle-right mr-3"></i>Instagram</a>     
                                          <a target="_blank" href="https://www.facebook.com/casageraldovinhosfinos" class="col-md-12 fontClass txtRodape" style="font-size:18px;"><i class="fas fa-arrow-circle-right mr-3"></i>Facebook</a>
                                          <a target="_blank" href="https://www.tripadvisor.com.br/Restaurant_Review-g2347134-d4283134-Reviews-Casa_Geraldo-Andradas_State_of_Minas_Gerais.html" class="col-md-12 fontClass txtRodape" style="font-size:18px;"><i class="fas fa-arrow-circle-right mr-3"></i>TripAdvisor</a>
        						</div> <!-- End .social-icons --> 
        
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-2 -->

                        <div class="col-lg-2">
                            <div class="widget mb-3">
                                <h4 class="fontClass TituloRodape">Contato Passeios <br>e Restaurante</h4>
                                
                                <div class="row"> 
        						  
                                          <a target="_blank" href="https://api.whatsapp.com/send?phone=5535999527967" class="col-md-12 fontClass txtRodape" style="font-size:18px;"><i class="fas fa-arrow-circle-right mr-3"></i>WhatsApp</a>
                                          @mobile<a target="_blank" href="tel:3537311600" class="col-md-12 fontClass txtRodape" style="font-size:18px;"><i class="fas fa-arrow-circle-right mr-3"></i>Telefone</a>@endmobile
                                          @desktop<a class="col-md-12 fontClass txtRodape text-dark" style="font-size:18px;"><i class="fas fa-arrow-circle-right mr-3"></i>(35) 3731-1600</a>@enddesktop
        						</div>
        						
        						<br>
        						
        						<h4 class="fontClass TituloRodape">Contato Compras Site</h4>
                                
                                <div class="row"> 
        						  
                                          <a target="_blank" href="https://api.whatsapp.com/send?phone=5535998132967" class="col-md-12 fontClass txtRodape" style="font-size:18px;"><i class="fas fa-arrow-circle-right mr-3"></i>WhatsApp</a>
                                         <!-- @mobile<a target="_blank" href="tel:35998132967" class="col-md-12 fontClass txtRodape" style="font-size:18px;"><i class="fas fa-arrow-circle-right mr-3"></i>Telefone</a>@endmobile -->
                                        <!--  @desktop<a class="col-md-12 fontClass txtRodape text-dark" style="font-size:18px;"><i class="fas fa-arrow-circle-right mr-3"></i>(35) 99813-2967</a>@enddesktop -->
                                          <a target="_blank" href="mailto:sac@casageraldo.com.br" class="col-md-12 fontClass txtRodape" style="font-size:18px;"><i class="fas fa-arrow-circle-right mr-3"></i>E-mail</a>
                                          
        						</div>
                                
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->
                        @desktop
                        <div class="col-lg-2">
                        @elsedesktop
                        <div class="col-5">
                        @enddesktop
                            <div class="widget mb-3">
                               <h4 class="fontClass TituloRodape">Segurança</h4>
                                    <img src="{{thumb(path('lets_encrypt.png'), 100 , 80)}}" alt="Bandeiras das formas de pagamento" loading="lazy" id="letsencrypt">
                                    
                            </div>
                            <!-- End .col-lg-3 -->
                        </div>
                        
                        @desktop
                        <div class="col-lg-2">
                        @elsedesktop
                        <div class="col-6">
                        @enddesktop
                            <div class="widget mb-3">
                                <h4 class="fontClass TituloRodape">Métodos de Pagamento</h4>

                                <img src="{{thumb(path('bandeiras.png'), 400 , 240)}}" alt="Bandeiras das formas de pagamento" loading="lazy">
                            </div>
                        </div>
                        <!-- End .row -->
                    </div>
                </div>
                
                
       
    </div>
    
            <div class="text-center p-5">
                    
                <p class="fontClass">A venda de bebidas alcoólicas é proibida para menores de 18 anos. Aprecie com moderação. Se beber, não dirija. © 2023. Casa Geraldo - CNPJ: 16.733.677/0001-79. <br> Fazenda São Geraldo - Andradas-MG. Todos os direitos reservados.</p>
                    
            </div>

</footer><!-- End .footer -->

