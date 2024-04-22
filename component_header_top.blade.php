<div class="header-top">
    <div class="container">
        <div class="header-right">
            <p class="welcome-msg">
                @if('' !== word('mensagem_de_boas_vindas'))
                    {{ word('mensagem_de_boas_vindas') }}
                @endif
            </p>
            <div class="header-dropdown dropdown-expanded">
                <a href="#">Links</a>
                <div class="header-menu">
                    <ul>
                        <li><a href="/Contato">Contato</a></li>
                        <li id="link-account" style="display:none;"><a href="/account">Minha conta</a></li>
                        <li id="link-identification-modal" style="display:none;"><a href="#" canopus-open-identification-modal>Entre ou cadastre-se</a></li>
                        <li id="link-quit" style="display:none;"><a href="#" canopus-logout>Sair</a></li>
                    </ul>
                </div><!-- End .header-menu -->
            </div><!-- End .header-dropown -->
            
            <div class="social-icons ml-5">
						    @if('' !== 'link-do-facebook')
							    <a href="{{ word('link-do-facebook')}}" class="social-icon social-facebook icon-facebook" target="_blank"></a>
							@endif
							@if('' !== 'link-do-twitter')
						    	<a href="{{ word('link-do-twitter')}}" class="social-icon social-twitter icon-twitter" target="_blank"></a>
							@endif
							@if('' !== 'link-do-instagram')
							    <a href="{{ word('link-do-instagram')}}" class="social-icon social-instagram icon-instagram" target="_blank"></a>
							@endif
						</div><!-- End .social-icons -->
        </div><!-- End .header-right -->
    </div><!-- End .container -->
</div><!-- End .header-top -->