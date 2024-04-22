@extends(engine_view('base'))   
@section('title', $store->model->name.' | Eventos ')
@section('page_content') 


    
<div class="w-100 pb-3 pt-4 mb-3 mt-3" style="background-color:#f5f5f5;">
    <h3 class="TextoTitulo" style="color:#222222">Eventos Casa Geraldo</h3>
</div>

<div class="cMain row pl-3 pr-3 pt-3">
    
    <div class="col-md mb-3 image">
        
         <div class="card borderShadow" style="width:100%; border-radius:15px;">
            <img class="card-img-top" src="{{ path('Sunset.png') }}" style="width:100%; border-radius:15px;">
            <div class="card-body">
                  <h1 class="txtIcon fontClass" style="color:#222222; font-size:20px;">Sunset</h1>
                  <p class="card-text txtIcon fontClass">Uma festa de tirar o fôlego no espaço incrível da Casa Geraldo, com serviço do Restaurante, 
                  atrações da música e um evento que começa de dia e só termina de madrugada!</p>
                  <a href="#" class="btn disabled btn-primary" style="border-radius:15px; font-weight:700; text-decoration:none;">Em Breve</a>
            </div>
         </div>
        
    </div>
    
    
    <div class="col-md mb-3 image">
        
         <div class="card borderShadow" style="width:100%; border-radius:15px;">
            <img class="card-img-top" src="{{ path('NoiteEspumante.png') }}" style="width:100%; border-radius:15px;">
            <div class="card-body">
                  <h1 class="txtIcon fontClass" style="color:#222222; font-size:20px;">Noite do Espumante</h1>
                  <p class="card-text txtIcon fontClass">Evento para celebrar felicidade com muito espumante e shows ao vivo, 
                  com serviço do Restaurante Casa Geraldo e muitas atrações nessa noite magnífica!</p>
                  <a href="#" class="btn disabled btn-primary" style="border-radius:15px; font-weight:700; text-decoration:none;">Em Breve</a>
            </div>
         </div>
        
    </div>
    
    <div class="col-md mb-3 image">
        
         <div class="card borderShadow" style="width:100%; border-radius:15px;">
            <img class="card-img-top" src="{{ path('NoiteItaliana.png') }}" style="width:100%; border-radius:15px;">
            <div class="card-body">
                  <h1 class="txtIcon fontClass" style="color:#222222; font-size:20px;">Noite Italiana</h1>
                  <p class="card-text txtIcon fontClass">Celebre a cultura italiana e a origem da Casa Geraldo com uma festa cheia de alegria, com eventos icônicos como danças, 
                  personagens fantasiados e um serviço de excelência!</p>
                  <a href="#" class="btn disabled btn-primary" style="border-radius:15px; font-weight:700; text-decoration:none;">Em Breve</a>
            </div>
         </div>
        
    </div>
    
</div>


<div class="cMain row pl-3 pr-3 pt-3">
    
    <div class="col-md mb-3 image">
        
         <div class="card borderShadow" style="width:100%; border-radius:15px;">
            <img class="card-img-top" src="{{ path('Vindima.png') }}" style="width:100%; border-radius:15px;">
            <div class="card-body">
                  <h1 class="txtIcon fontClass" style="color:#222222; font-size:20px;">Vindima</h1>
                  <p class="card-text txtIcon fontClass">A Festa da Vindima é realizada para comemorar o sucesso da colheita das uvas, com 
                  tema da cultura italiana, além de convidados especiais e a oportunidade de pisar em uvas.</p>
                  <a href="#" class="btn disabled btn-primary" style="border-radius:15px; font-weight:700; text-decoration:none;">Em Breve</a>
            </div>
         </div>
        
    </div>
    
    
    <div class="col-md mb-3 image">
        
         <div class="card borderShadow" style="width:100%; border-radius:15px;">
            <img class="card-img-top" src="{{ path('NoitePortuguesa.png') }}" style="width:100%; border-radius:15px;">
            <div class="card-body">
                  <h1 class="txtIcon fontClass" style="color:#222222; font-size:20px;">Noite Portuguesa</h1>
                  <p class="card-text txtIcon fontClass">A cultura portuguesa é rica em gastronomia, vinho e muita dança! A Casa Geraldo celebra esse
                  evento com muita energia ao estilo português, para toda a família!</p>
                  <a href="#" class="btn disabled btn-primary" style="border-radius:15px; font-weight:700; text-decoration:none;">Em Breve</a>
            </div>
         </div>
        
    </div>
    
    <div class="col-md mb-3 image">
        
         <div class="card borderShadow" style="width:100%; border-radius:15px;">
            <img class="card-img-top" src="{{ path('Beatles.png') }}" style="width:100%; border-radius:15px;">
            <div class="card-body">
                  <h1 class="txtIcon fontClass" style="color:#222222; font-size:20px;">The Beatles</h1>
                  <p class="card-text txtIcon fontClass">Uma linda homenagem a banda dos Beatles, na Casa Geraldo, com muita música, diversão e nostalgia de uma das maiores bandas de rock do mundo.</p>
                  <a href="#" class="btn disabled btn-primary" style="border-radius:15px; font-weight:700; text-decoration:none;">Em Breve</a>
            </div>
         </div>
        
    </div>
    
</div>


<div class="cMain row pl-3 pr-3 pt-3">
    
    <div class="col-md mb-3 image">
        
         <div class="card borderShadow" style="width:100%; border-radius:15px;">
            <img class="card-img-top" src="{{ path('Revei.png') }}" style="width:100%; border-radius:15px;">
            <div class="card-body">
                  <h1 class="txtIcon fontClass" style="color:#222222; font-size:20px;">Réveillon</h1>
                  <p class="card-text txtIcon fontClass">Comemore a virada de ano com muita classe, bons vinhos, espumantes e um ótimo atendimento da Casa Geraldo. Feche o ano com chave de ouro!</p>
                  <a href="#" class="btn disabled btn-primary" style="border-radius:15px; font-weight:700; text-decoration:none;">Em Breve</a>
            </div>
         </div>
        
    </div>
    
    
    <div class="col-md mb-3 image">
        
         <div class="card borderShadow" style="width:100%; border-radius:15px;">
            <img class="card-img-top" src="{{ path('Casamento.png') }}" style="width:100%; border-radius:15px;">
            <div class="card-body">
                  <h1 class="txtIcon fontClass" style="color:#222222; font-size:20px;">Casamentos e Eventos</h1>
                  <p class="card-text txtIcon fontClass">Nos momentos mais especiais da vida a Casa Geraldo se dispõe presente para atender, 
                  preparando o ambiente perfeito para a ocasião, ficando ainda mais especial!</p>
                  <a href="https://api.whatsapp.com/send?phone=5535999527967&text=Ol%C3%A1!%20Vim%20do%20site%20Casa%20Geraldo%20e%20gostaria%20de%20saber%20mais%20sobre%20Casamentos%20e%20Eventos%20Particulares" class="btn btn-primary" style="border-radius:15px; font-weight:700; text-decoration:none;">Conhecer Mais</a>
            </div>
         </div>
        
    </div>
    
    <div class="col-md mb-3 image">
        
         <div class="card borderShadow" style="width:100%; border-radius:15px;">
            <img class="card-img-top" src="{{ path('Namorados.png') }}" style="width:100%; border-radius:15px;">
            <div class="card-body">
                  <h1 class="txtIcon fontClass" style="color:#222222; font-size:20px;">Dia dos Namorados</h1>
                  <p class="card-text txtIcon fontClass">Uma singela homenagem ao amor dos namorados feita pela Casa Geraldo, ambiente calmo e acolhidor para os 
                  corações amantes desfrutarem um momento único e especial.</p>
                  <a href="#" class="btn disabled btn-primary" style="border-radius:15px; font-weight:700; text-decoration:none;">Em Breve</a>
            </div>
         </div>
        
    </div>
    
</div>
    
    <div class="cMain row pl-3 pr-3 pt-3">
    
    <div class="col-md-4 mb-3 image">
        
         <div class="card borderShadow" style="width:100%; border-radius:15px;">
            <img class="card-img-top" src="{{ path('Piquenique.png') }}" style="width:100%; border-radius:15px;">
            <div class="card-body">
                  <h1 class="txtIcon fontClass" style="color:#222222; font-size:20px;">Piquenique</h1>
                  <p class="card-text txtIcon fontClass">Escolha um ponto e aprecie a bela paisagem que a Casa Geraldo tem a oferecer, no seu conforto o Restaurante irá
                  servir você e seus convidados. Passem bons momentos ao ar livre.</p>
                  <a href="#" class="btn disabled btn-primary" style="border-radius:15px; font-weight:700; text-decoration:none;">Em Breve</a>
            </div>
         </div>
        
    </div>
    
    
    <div class="col-md-4 mb-3 image">
        
         <div class="card borderShadow" style="width:100%; border-radius:15px;">
            <img class="card-img-top" src="{{ path('Aniversario.png') }}" style="width:100%; border-radius:15px;">
            <div class="card-body">
                  <h1 class="txtIcon fontClass" style="color:#222222; font-size:20px;">Aniversário Casa Geraldo</h1>
                  <p class="card-text txtIcon fontClass">O aniversário da Casa Geraldo é marcado por uma festa contagiante, comemorando o sucesso da Casa em seus anos
                  de vida, com muita alegria e vinho!</p>
                  <a href="#" class="btn disabled btn-primary" style="border-radius:15px; font-weight:700; text-decoration:none;">Em Breve</a>
            </div>
         </div>
        
    </div>
    
    
    
</div>
    


@endsection 