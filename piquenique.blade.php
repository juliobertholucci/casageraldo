@extends(engine_view('base'))   
@section('title', $store->model->name.' | Piquenique ')
@section('page_content')    
@include(engine_view('modal1'))
@include(engine_view('modal2'))

<div class="w-100 p-0 m-0 banSunset">
    
    <img class="w-100" src="{{ path('BannerPiquenique.png') }}">
    
</div>

<div class="cMain row mt-5">
    
    <div class="col-md-6 pr-5 pl-5 textContainer">
        
        <h5 class="fontClass TituloPasseio" id="planos">Como Funciona?</h5>
            <br>
        <p> 
        
               Você pode escolher entre o Plano Ouro ou o Plano Platinum para consumação.
                <br><br>
               Você pode optar por alocar um espaço específico disponível para realizar seu piquenique, ou caso preferir pode optar por áreas livres.
                <br><br>
               Aproveite bons momentos em família no ambiente incrível da Casa Geraldo!
               
        </p>
        
    <div class="w-100 row">
        
        <div class="col-md-6 w-50 text-ccenter">
             <button class="botao w-100" data-toggle="modal" data-target="#myModal1" style="margin-top:20px; margin-bottom:20px;">Ver Plano Ouro</button>
        </div>
        
        <div class="col-md-6 w-50 text-ccenter">
            <button class="botao w-100" data-toggle="modal" data-target="#myModal2" style="margin-top:20px; margin-bottom:20px;">Ver Plano Platinum</button>
        </div>
        
    </div>
        
    </div>

    <div class="col-md-6">
        
            <div id="demo3" class="carousel slide w-100 borderShadow" data-ride="carousel">
            
              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo3" data-slide-to="0" class="active"></li>
                <li data-target="#demo3" data-slide-to="1"></li>
                <li data-target="#demo3" data-slide-to="2"></li>
              </ul>
            
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ path('pique1.png') }}">
                </div>
                <div class="carousel-item">
                  <img src="{{ path('pique2.png') }}">
                </div>
                <div class="carousel-item">
                  <img src="{{ path('pique3.png') }}">
                </div>
              </div>
            
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo3" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo3" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo3" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            
            </div>
        
        
    </div>

</div>

<div class="TituloDiv mt-4">
    <h3 class="TextoTitulo">Locais</h3>
</div>

    <div class="TituloDivPasseio">
        <h3 class="TextoTitulo" style="color:#222222">Pergolado Malbec</h3>
    </div>

<div class="cMain row pl-3 pr-3 pt-3 justify-content-center">
    
    <div class="col-md-6 mb-3 image">
        
        <video class="w-100 borderShadow" controls>
            <source src="{{ path('DeckMalbec.mp4')}}" type="video/mp4">
         </video>
        
    </div>
    
    <strong class="txtIcon w-100">R$100 - Máximo de 8 pessoas</strong>
    
</div>

<div class="TituloDivPasseio">
        <h3 class="TextoTitulo" style="color:#222222">Deck das Oliveiras</h3>
    </div>

<div class="cMain row pl-3 pr-3 pt-3 justify-content-center">
    
    <div class="col-md-6 mb-3 image">
        
        <video class="w-100 borderShadow" controls>
            <source src="{{ path('DeckOliveiras.mp4')}}" type="video/mp4">
         </video>
        
    </div>
    
    <strong class="txtIcon w-100">R$100 - Máximo de 10 pessoas</strong>
    
</div>


<div class="TituloDivPasseio">
        <h3 class="TextoTitulo" style="color:#222222">Deck da Ameixeira</h3>
    </div>

<div class="cMain row pl-3 pr-3 pt-3 justify-content-center">
    
    <div class="col-md-6 mb-3 image">
        
        <video class="w-100 borderShadow" controls>
            <source src="{{ path('DeckAmeixeira.mp4')}}" type="video/mp4">
         </video>
        
    </div>
    
    <strong class="txtIcon w-100">R$100 - Máximo de 4 pessoas</strong>
    
</div>



<div class="TituloDivPasseio">
        <h3 class="TextoTitulo" style="color:#222222">Pergolados Centro</h3>
    </div>

<div class="cMain row pl-3 pr-3 pt-3 justify-content-center">
    
    <div class="col-md-6 mb-3 image">
        
        <video class="w-100 borderShadow" controls>
            <source src="{{ path('PergoladoCentro.mp4')}}" type="video/mp4">
         </video>
        
    </div>
    
    <strong class="txtIcon w-100">R$200 - Máximo de 8 pessoas</strong>
    
</div>


<div class="TituloDivPasseio">
        <h3 class="TextoTitulo" style="color:#222222">Pergolados Viognier</h3>
    </div>

<div class="cMain row pl-3 pr-3 pt-3 justify-content-center">
    
    <div class="col-md-6 mb-3 image">
        
        <video class="w-100 borderShadow" controls>
            <source src="{{ path('DeckViognier.mp4')}}" type="video/mp4">
         </video>
        
    </div>
    
    <strong class="txtIcon w-100">R$200 - Máximo de 8 pessoas</strong>
    
</div>


<div class="TituloDivPasseio">
        <h3 class="TextoTitulo" style="color:#222222">Mirante do Terraço</h3>
    </div>

<div class="cMain row pl-3 pr-3 pt-3 justify-content-center">
    
    <div class="col-md-6 mb-3 image">
        
        <video class="w-100 borderShadow" controls>
            <source src="{{ path('Mirante.mp4')}}" type="video/mp4">
         </video>
        
    </div>
    
    <strong class="txtIcon w-100">R$250 - Máximo de 4 pessoas</strong>
    
</div>

<div class="TituloDivPasseio">
        <h3 class="TextoTitulo" style="color:#222222">Wine in Garden</h3>
    </div>

<div class="cMain row pl-3 pr-3 pt-3 justify-content-center">
    
    <div class="col-md-6 mb-3 image">
        
        <video class="w-100 borderShadow" controls>
            <source src="{{ path('WineGarden.mp4')}}" type="video/mp4">
         </video>
        
    </div>
    
    <strong class="txtIcon w-100">R$1000 - Máximo de 20 pessoas sentadas</strong>
    
</div>

<div class="TituloDivPasseio">
        <h3 class="TextoTitulo" style="color:#222222">Áreas Livres</h3>
</div>

<div class="cMain row pl-3 pr-3 pt-3 justify-content-center">
    
    <div class="col-md-6 mb-3 image">
        
        <video class="w-100 borderShadow" controls>
            <source src="{{ path('AreasLivres.mp4')}}" type="video/mp4">
        </video>
        
    </div>
    
</div>


<div class="w-100 text-center justify-content-center">
    <a href="#planos"><button class="botao" style="margin-top:20px; margin-bottom:20px;">Escolher Plano</button></a>
</div>




@endsection 