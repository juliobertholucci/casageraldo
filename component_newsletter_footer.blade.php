<div class="container-fluid mt-5 p-5 border-bottom" style="background-color:#f5f5f5; width:100%;">
    <div class="row no-gutters m-0 align-items-center">
                        <div class="col-lg-6 col-xl-4 mb-2 mb-lg-0">
                            <div class="info-box d-block d-sm-flex text-center text-sm-left py-0">
                                
                                <div class="widget-newsletter-info">
                                    <h3 class="line-height-1 mb-1 fontClass" style="font-weight:900; font-size:20px;">Promoções Exclusivas
                                    </h3>
                                    @if('' !== word('mensagem-de-inscricao-na-newsletter'))
                                    <p class="widget-newsletter-content mt-0 fontClass" style="color:#222222;font-size:14px;">{{ word('mensagem-de-inscricao-na-newsletter') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-8">
                            <form action="#" class="mb-0">
                                <div class="footer-submit-wrapper d-flex">
                                    <input type="email" class="form-control mb-0 email-newsletter fontClass" style="font-size:14px; color:#222222" placeholder="Digite seu melhor e-mail" required>
                                    <button type="submit" class="btn btn-primary fontClass" style="min-width: 140px !important; border-radius:0px 8px 8px 0px; font-weight:700;">Obter Vantagem</button>
                                </div>
                            </form>
                        </div>
                    </div>
   </div>
   @push('scripts')
    <script>
        $('.footer-submit-wrapper .btn').click(function(e) {
            e.preventDefault();
            var email = $('.footer-submit-wrapper .email-newsletter').val();
            if (email === '') {
                iziToast.error({'message': 'Preencha o seu melhor e-mail'});
                return;
            }
            StoreNewsletterEmail.store(email);
        });
        
        CanopusEventCenter.addListener('NewsletterEmail.Submitting', function() {
            $('.footer-submit-wrapper .btn').attr('disabled', 'disabled');
            $('.footer-submit-wrapper .email-newsletter').attr('disabled', 'disabled');
            
            iziToast.show({'message': 'Cadastrando seu e-mail...'});
        });
        CanopusEventCenter.addListener('NewsletterEmail.Stored', function() {
            $('.footer-submit-wrapper .btn').removeAttr('disabled');
            $('.footer-submit-wrapper .email-newsletter').removeAttr('disabled');
            $('.footer-submit-wrapper .email-newsletter').val('');
        });
    </script>
    @endpush