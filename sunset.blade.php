@extends(engine_view('base'))   
@section('title', $store->model->name.' | Sunset ')
@section('page_content') 


<div class="w-100 p-0 m-0 banSunset">
    
     <img class="w-100" src="{{ path('BannerSunset.png') }}">
    
</div>

<div class="cMain row pt-5" style="background-color:#222222">
    
    <div class="col-md-6 p-5 textContainer">
        
        <h3 class="fontClass TituloPasseio text-uppercase text-white">Uma festa de tirar o fôlego!</h3>
            <br>
            <p class="text-white">
                A Casa Geraldo te convida para uma festa marcante, descontraida e com muita música de vários artistas consagrados da região!
                    <br><br>
                Um ambiente com muita energia e preparo da Casa, com serviço exepcional para atender vocês!
                    <br><br>
                Desfrute de bons momentos com a Sunset, reserve seu ingresso e não perca essa oportunidade.
                    <br><br>
            </p>
        
    </div>


    <div class="col-md-6 p-5">
        
         <video  class="w-100 borderShadow" controls>
            <source src="{{ path('SunsetVideo2.mp4')}}" type="video/mp4">
         </video>
        
    </div>
    
</div>


<div class="cMain row justify-content-center pl-3 pr-3 marg" style="display:flex; padding-top:50px; background-color:black;">
    
    
    <div class="row col-md-5" style="margin:0;padding:0; ">
        
        <div class="col-4 col-sm-4 image mb-3 text-center"> <i class="fas fa-music iconPasseio text-white"></i> <br><br> <p class="fontClass text-white txtIcon">Música Eletrônica</p> </div>
        <div class="col-4 col-sm-4 image mb-3 text-center"> <i class="fas fa-guitar iconPasseio text-white"></i> <br><br> <p class="fontClass text-white txtIcon">Shows Ao Vivo</p> </div>
        <div class="col-4 col-sm-4 image mb-3 text-center"> <i class="fas fa-wine-glass-alt iconPasseio text-white"></i> <br><br> <p class="fontClass text-white txtIcon">Drinks e Bebidas</p> </div>
        
    </div>
    
    <div class="row col-md-5" style="margin:0;padding:0;">
        
        <div class="col-4 col-sm-4 image mb-3 text-center"> <i class="fas fa-star iconPasseio text-white"></i> <br><br> <p class="fontClass txtIcon text-white">Ambiente Exclusivo</p> </div> 
        <div class="col-4 col-sm-4 image mb-3 text-center"> <i class="fas fa-grin-stars iconPasseio text-white"></i> <br><br> <p class="fontClass txtIcon text-white">Atrações Especiais</p> </div>
        <div class="col-4 col-sm-4 image mb-3 text-center"> <i class="far fa-clock iconPasseio text-white"></i> <br><br> <p class="fontClass txtIcon text-white">Longa Duração</p> </div>
        
    </div>
    
</div>


<div class="cMain row pt-5" style="background-color:#222222">
    
    <div class="col-md-12 text-center p-5 textContainer">
        
        <h3 class="fontClass TituloPasseio text-uppercase text-white">Atrações do Evento 07/10/2023</h3>
            <br>
            <p class="text-white">
                Karen Machado
                    <br><br>
                DJ Marcon
                    <br><br>
                Ricky Paes
                    <br><br>
                Tabata Rocha
                    <br><br>
                DJ Gabriel Costa
            </p>
            
            
        
        <div class="w-100 text-center justify-content-center">
            <a href="https://api.whatsapp.com/send?phone=5535999527967&text=Ol%C3%A1!%20Vim%20do%20site%20da%20Casa%20Geraldo%20e%20gostaria%20de%20agendar%20minha%20reserva!" target="_blank"><button class="botao" style="margin-top:20px; margin-bottom:20px;">Comprar Ingressos</button></a>
        </div>
        
        <strong class="text-white" style="font-size:20px;">DATA: 07/10/2023 COM INÍCIO ÀS 16:00 HORAS</strong>
        
    </div>
    
</div>


@endsection 