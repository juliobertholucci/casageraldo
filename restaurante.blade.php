@extends(engine_view('base'))   
@section('title', $store->model->name.' | Restaurante ')
@section('page_content')      
 

 <style>
     .home-slider::after, .home-slider::before{
         border: none !important;
         }
         
 </style>
 
 <main class="main home">
            <div class="home-top-container">
                @if(null !== $BannerRestaurante->collection)
                <div class="home-slider owl-carousel owl-theme" style="background-color: transparent !important;">
                @foreach($BannerRestaurante->collection as $banner)
                @if(null !== $banner->redirect_to)
                    <a href="{{$banner->redirect_to}}">
                @endif
                    @desktop
                    <img class="item" src="{{ thumb($banner->source)}}"  style="width: 100% !important" alt="">
                    @elsedesktop
                    @if(null !== $banner->extraFields->get('banner_para_mobile'))
                    <img class="item" src="{{ thumb($banner->extraFields->get('banner_para_mobile')->values->first()->source) }}"  style="width: 100% !important" alt="">
                    @endif
                    @enddesktop
                </a>    
                @endforeach
                </div>
                @endif
                <div class="home-slider-sidebar">
                    <ul>
                        @foreach($BannerRestaurante->collection as $banner)
                            @if(null !== $banner->extraFields->get('nome_do_banner_no_slider') and null !== $banner->extraFields->get('cor_do_nome_do_banner_no_slider'))
                                <li style=" color: {{$banner->extraFields->get('cor_do_nome_do_banner_no_slider')->values->first()->value}}!important;" class="active">{{$banner->extraFields->get('nome_do_banner_no_slider')->values->first()->value}}</li>
                             @endif  
                        @endforeach
                    </ul>
                </div>
            </div><!-- End .home-slider -->

            
        <div class="cMain row pt-5">
    
    <div class="col-md-6 p-5 textContainer">
        
        <h3 class="fontClass TituloPasseio">Restaurante</h3>
            <br>
        <p>
            Com 20 anos de história, nosso restaurante proporciona para você e sua família os melhores momentos!
                <br><br>
            Um ambiente de clima acolhedor e elegante, perfeito para quem procura um cenário digno de uma boa degustação e apreciação gastronômica!
                <br><br>
            O restaurante oferece um salão para acolher toda a família, e uma área reservada e exclusiva para proporcionar maior comodidade e conforto.
                <br><br>
        </p>
    </div>


    <div class="col-md-6 p-5">
        
         <video width="320" height="350" class="w-100 borderShadow" controls>
            <source src="{{ path('VideoRest.mp4')}}" type="video/mp4">
         </video>
        
    </div>
    
</div>


<div class="cMain row justify-content-center pl-3 pr-3 marg" style="display:flex; margin-top:50px;">
    
    
    <div class="row col-md-5" style="margin:0;padding:0; ">
        
        <div class="col-4 col-sm-4 image mb-3 text-center"> <i class="fas fa-users iconPasseio"></i> <br><br> <p class="fontClass txtIcon">Ambiente Familiar</p> </div>
        <div class="col-4 col-sm-4 image mb-3 text-center"> <i class="fas fa-utensils iconPasseio"></i> <br><br> <p class="fontClass txtIcon">Menu 4 Tempos</p> </div>
        <div class="col-4 col-sm-4 image mb-3 text-center"> <i class="fas fa-paw iconPasseio"></i> <br><br> <p class="fontClass txtIcon">Pet Friendly em espaços específicos</p> </div>
        
    </div>
    
    <div class="row col-md-5" style="margin:0;padding:0;">
        
        <div class="col-4 col-sm-4 image mb-3 text-center"> <i class="fas fa-wind iconPasseio"></i> <br><br> <p class="fontClass txtIcon">Ambiente Climatizado</p> </div> 
        <div class="col-4 col-sm-4 image mb-3 text-center"> <i class="fas fa-wifi iconPasseio"></i> <br><br> <p class="fontClass txtIcon">Wi-Fi Livre</p> </div>
        <div class="col-4 col-sm-4 image mb-3 text-center"> <i class="fas fa-wheelchair iconPasseio"></i> <br><br> <p class="fontClass txtIcon">Ambiente Inclusivo com Acessibilidade</p> </div>
        
    </div>
    
</div>

<div class="cMain text-center p-5 mt-3 mb-3">
    
    <h4 class="TextoTitulo">Horário de Funcionamento</h4>
    
    <p class="txtIcon @desktop mt-2 @enddesktop"> O Restaurante está aberto nas sextas-feiras, das 11:15 às 14:00, e nos sábados e domingos, das 11:15 às 15:30. <br> @mobile <br><br> @endmobile <strong> Atenção: Esses horários podem ser alterados se houver eventos acontecendo no local.</strong></p>
    
</div>


<div class="TituloDiv">
    <h3 class="TextoTitulo" style="color:#762432">Cardápio</h3>
</div>

<div class="TituloDivPasseio">
    <h3 class="TextoTitulo" style="color:#222222">Entrada e Salada</h3>
</div>


<div class="cMain row pl-3 pr-3 pt-3 justify-content-center">
    
    <div class="col-md-4 image">
        
        <img class="borderShadow" src="{{ path('salada1.jpeg') }}">
        <p class="txtIcon mt-2">Nhoque Recheado de Requeijão ao Ragu de Ossobuco.</p>
        
    </div>
    
    <div class="col-md-4 image">
        
         <img class="borderShadow" src="{{ path('salada2.jpeg') }}">
         <p class="txtIcon mt-2"> Salada de Grãos.</p>
        
    </div>
    
</div>

<div class="TituloDivPasseio">
    <h3 class="TextoTitulo" style="color:#222222">Pratos Principais</h3>
</div>

<div class="cMain row pl-3 pr-3 pt-3">
    
    <div class="col-md-3 mb-3 image">
        
         <img class="borderShadow" src="{{ path('princi7.png') }}">
         <p class="txtIcon mt-3">Almôndega de Proteína de Soja ao Molho Sugo Acompanhada de Espaguete de Abobrinha.</p>
        
    </div>
    
    
    
    <div class="col-md-3 mb-3 image">
        
         <img class="borderShadow" src="{{ path('burrata.jpg') }}">
         <p class="txtIcon mt-3">Burrata acompanhada de Risoto de Pesto de Rúcula.</p>
        
    </div>
    
    <div class="col-md-3 mb-3 image">
        
         <img class="borderShadow" src="{{ path('princi6.png') }}">
         <p class="txtIcon mt-3">Picanha Suína ao Molho de Laranja acompanhada de Arroz Branco, Tutu de Feijão e Farofa de Banana.</p>
        
    </div>
    
    <div class="col-md-3 mb-3 image">
        
        <img class="borderShadow" src="{{ path('princi5.png') }}">
        <p class="txtIcon mt-3">Filé Mignon ao Molho Roti acompanha Risoto de Gorgonzola, Bacon e Pera.</p>
        
    </div>
    
</div>

<div class="cMain row pl-3 pr-3 pt-3">
    
    
    <div class="col-md mb-3 image">
        
         <img class="borderShadow" src="{{ path('princi4.png') }}">
         <p class="txtIcon mt-3">Camarão Empanado acompanhado de Risoto de Alho-Poró</p>
        
    </div>
    
    <div class="col-md image">
        
         <img class="borderShadow" src="{{ path('princi8.png') }}">
         <p class="txtIcon mt-3">Salmão Grelhado com Crosta de Gergelim ao Molho de Alho-Poró e Legumes Salteados.</p>
        
    </div>
    
       <div class="col-md mb-3 image">
        
        <img class="borderShadow" src="{{ path('princi1.png') }}">
        <p class="txtIcon mt-3">Prime Rib ao Molho Pesto de Ervas acompanhado de Purê de Mandioquinha e Tomate Defumado.</p>
        
    </div>
    
    <div class="col-md mb-3 image">
        
         <img class="borderShadow" src="{{ path('princi3.png') }}">
         <p class="txtIcon mt-3">Stinco de Cordeiro ao Molho Roti Trufado acompanhado de Polenta Cremosa e Redução de Balsâmico.</p>
        
    </div>
    
    <div class="col-md image">
        
        <img class="borderShadow" src="{{ path('sobre5.jpeg') }}">
        <p class="txtIcon mt-3">Lasanha à Bolonhesa</p>
        
    </div>
    
    
</div>
 
 <div class="TituloDivPasseio">
    <h3 class="TextoTitulo" style="color:#222222">Sobremesas</h3>
</div>

<div class="cMain row pl-3 pr-3 pt-3">
    
    <div class="col-md mb-3 image">
        
        <img class="borderShadow" src="{{ path('Sobremesa51.png') }}">
        <p class="txtIcon mt-3">Tiramisù</p>
        
    </div>
    
    <div class="col-md mb-3 image">
        
        <img class="borderShadow" src="{{ path('sobre1.jpeg') }}">
        <p class="txtIcon mt-3">Salada de Frutas</p>
        
    </div>
    
    
    <div class="col-md mb-3 image">
        
        <img class="borderShadow" src="{{ path('sobre2.jpeg') }}">
        <p class="txtIcon mt-3">Grand Gateau (Menu Gran Reserva)</p>
        
    </div>
    
    <div class="col-md mb-3 image">
        
         <img class="borderShadow" src="{{ path('sobre3.jpeg') }}">
         <p class="txtIcon mt-3">Trufas de Cereja acompanhada de Sorvete e Creme (Menu Gran Reserva)</p>
        
    </div>
    
    <div class="col-md mb-3 image">
        
        <img class="borderShadow" src="{{ path('sobre4.jpeg') }}">
        <p class="txtIcon mt-3">Barbie: Sorvete de Morango com Picolé de Groselha / Minecraft: Sorvete Blue Ice e Picolé de Tuti Fruti (Menu KIDS)</p>
        
    </div>
    
    
</div>


<div class="TituloDivPasseio">
    <h3 class="TextoTitulo" style="color:#222222">Porções Área Externa</h3>
</div>

<div class="cMain row pl-3 pr-3">
    
    <div class="col-md-3 mb-3 image">
        
        <img class="borderShadow" src="{{ path('porc1.jpeg') }}">
        <p class="txtIcon mt-3"></p>
        
    </div>
    
    <div class="col-md-3 mb-3 image">
        
         <img class="borderShadow" src="{{ path('porc2.jpeg') }}">
         <p class="txtIcon mt-3"></p>
        
    </div>
    
    <div class="col-md-3 mb-3 image">
        
         <img class="borderShadow" src="{{ path('porc3.jpeg') }}">
         <p class="txtIcon mt-3"></p>
        
    </div>
    
    <div class="col-md-3 mb-3 image">
        
         <img class="borderShadow" src="{{ path('porc4.jpeg') }}">
         <p class="txtIcon mt-3"></p>
        
    </div>
</div>

<div class="cMain row pl-3 pr-3 pt-3">
    
    <div class="col-md-3 mb-3 image">
        
        <img class="borderShadow" src="{{ path('porc5.jpeg') }}">
        <p class="txtIcon mt-3"></p>
        
    </div>
    
    <div class="col-md-3 mb-3 image">
        
         <img class="borderShadow" src="{{ path('porc6.jpeg') }}">
         <p class="txtIcon mt-3"></p>
        
    </div>
    
    <div class="col-md-3 mb-3 image">
        
         <img class="borderShadow" src="{{ path('porc7.jpeg') }}">
         <p class="txtIcon mt-3"></p>
        
    </div>
    
    <div class="col-md-3 mb-3 image">
        
         <img class="borderShadow" src="{{ path('porc8.jpeg') }}">
         <p class="txtIcon mt-3"></p>
        
    </div>
</div>

<div class="cMain row pl-3 pr-3 pt-3">
    
    <div class="col-md-3 mb-3 image">
        
        <img class="borderShadow" src="{{ path('porc9.jpeg') }}">
        <p class="txtIcon mt-3"></p>
        
    </div>
    
    <div class="col-md-3 mb-3 image">
        
         <img class="borderShadow" src="{{ path('porc10.jpeg') }}">
         <p class="txtIcon mt-3"></p>
        
    </div>
    
    <div class="col-md-3 mb-3 image">
        
         <img class="borderShadow" src="{{ path('porc11.jpeg') }}">
         <p class="txtIcon mt-3"></p>
        
    </div>
    
    <div class="col-md-3 mb-3 image">
        
         <img class="borderShadow" src="{{ path('porc12.jpeg') }}">
         <p class="txtIcon mt-3"></p>
        
    </div>
</div>

    <div class="w-100 text-center justify-content-center">
         <a href="https://api.whatsapp.com/send?phone=5535999527967&text=Ol%C3%A1!%20Vim%20do%20site%20da%20Casa%20Geraldo%20e%20gostaria%20de%20agendar%20minha%20reserva!" target="_blank"><button class="botao" style="margin-top:20px; margin-bottom:20px;">Agendar Reserva</button></a>
    </div>

<div class="cMain row pt-5">
    
    <div class="col-md-6 p-5 textContainer">
        
        <h3 class="fontClass TituloPasseio">Área Externa</h3>
        <p class="fontClass">  
        
            <br>
            A Casa Geraldo também proporciona atendimento na área externa para seus clientes, durante o horário de funcionamento do restaurante.
                <br><br>
            Ambiente aberto, com mesas de guarda-sol, pergolados e áreas de descanso com música, proporcionando uma experiência única que você merece ter, a Casa Geraldo terá o prazer de te atender!
                <br><br>
            O Cardápio é variado, com tábua de frios, harmonizações, vinhos, espumantes e muito mais.
                <br><br>
        </p>
    </div>

    <div class="col-md-6 p-5">
        
            <div id="demo7" class="carousel slide w-100 borderShadow" data-ride="carousel">
            
              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo7" data-slide-to="0" class="active"></li>
                <li data-target="#demo7" data-slide-to="1"></li>
                <li data-target="#demo7" data-slide-to="2"></li>
              </ul>
            
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ path('externa1.jpeg') }}">
                </div>
                <div class="carousel-item">
                  <img src="{{ path('externa2.jpeg') }}">
                </div>
                <div class="carousel-item">
                  <img src="{{ path('externa3.jpeg') }}">
                </div>
              </div>
            
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo7" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo7" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            
            </div>
        
        
    </div>
    
</div>


@endsection 