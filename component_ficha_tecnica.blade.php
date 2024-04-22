
<h3 class="text-center fontClass pb-5 pt-3" style="font-weight:900;">
        Ficha Técnica
    </h3>
<div class="row ficha-tecnica borderShadow">
    @if(null !== $product->extraFields->get('uva'))
        <div class="tec-item col-6">
            
        <svg  style="width: 33px !important" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
        <path id="Layer_1" d="M11.4,24.1c-0.2,0.4-0.2,0.9-0.2,1.4c0,2.3,1.8,4.1,4.1,4.1s4.1-1.8,4.1-4.1c0-0.5-0.1-0.9-0.2-1.4
        	c-1.5-0.1-2.9-0.7-3.9-1.6C14.3,23.4,12.9,24,11.4,24.1z M7.1,18.2c0-0.5,0.1-0.9,0.2-1.4c1.5-0.1,2.9-0.7,3.9-1.6
        	c0.7,0.7,1.5,1.2,2.5,1.4c-0.1,0.5-0.2,1-0.2,1.6c0,1,0.3,2,0.7,2.8c-0.7,0.8-1.8,1.3-3,1.3C8.9,22.3,7.1,20.5,7.1,18.2L7.1,18.2z
        	 M23,17c0.1,0,0.2,0,0.3,0c0.1,0.4,0.2,0.7,0.2,1.1c0,2.3-1.8,4.1-4.1,4.1s-4.1-1.8-4.1-4.1c0-0.5,0.1-0.9,0.2-1.4
        	c1.3-0.1,2.5-0.5,3.5-1.3C20.1,16.5,21.5,17,23,17L23,17z M7.5,6.8c1,0,2,0.4,2.7,1c-0.6,0.9-0.9,2-0.9,3.1s0.3,2.2,0.9,3.1
        	c-0.7,0.6-1.7,1-2.7,1c-2.3,0-4.1-1.8-4.1-4.1C3.4,8.6,5.3,6.8,7.5,6.8z M20.3,14c0.6-0.9,0.9-2,0.9-3.1s-0.3-2.2-0.9-3.1
        	c0.7-0.6,1.7-1,2.7-1c2.3,0,4.1,1.8,4.1,4.1c0,2.3-1.8,4.1-4.1,4.1C22,15,21.1,14.6,20.3,14z M11.2,10.9c0-2.1,1.6-3.8,3.6-4.1
        	c0.1-0.5,0.2-1.6,0.5-2.2c0.3-0.7,0.8-1.3,1.3-1.9c0.6-0.5,1.2-0.9,2-1.3c0.8-0.4,1.5-0.6,2.4-0.8c0.8-0.2,1.7-0.3,2.7-0.3V2
        	c-1.3,0-2.5,0.2-3.5,0.5c-1,0.3-1.9,0.9-2.6,1.7c-0.6,0.6-1,2.2-1.1,2.7c1.8,0.4,3.1,2.1,3.1,4c0,2.3-1.8,4.1-4.1,4.1
        	S11.2,13.2,11.2,10.9L11.2,10.9z M2.9,1c0.3,1.3,0.7,2.3,1.3,3c0.5,0.7,1.2,1.2,2,1.5C6.9,5.8,7.8,5.9,8.8,6c1,0,2.1,0,3.4-0.1
        	c0.7,0,1.2-0.1,1.5-0.1C13.1,1.1,9.5-0.5,2.9,1L2.9,1z"/>
        </svg>

            <div class="content">
                <p class="mb-0 ml-3 ct font-weight-bold"> {{$product->extraFields->get('uva')->label}}</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('uva')->values->first()->value}}</p>
            </div>
        </div>
    @endif
    
    @if(null !== $product->extraFields->get('tipo_do_vinho'))
        <div class="tec-item col-6">
            <i class="fas fa-wine-glass-alt" style="font-size: 3rem"></i>
            <div class="content">
               <p class="mb-0 ml-3 ct font-weight-bold"> {{$product->extraFields->get('tipo_do_vinho')->label}}</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('tipo_do_vinho')->values->first()->value}}</p>
            </div>
        </div>
      @endif
      
      @if(null !== $product->extraFields->get('classificacao'))
       <div class="tec-item col-6">
            <i class="fas fa-tint" style="font-size: 3rem"></i>
            <div class="content">
               <p class="mb-0 ml-3 ct font-weight-bold"> {{$product->extraFields->get('classificacao')->label}}</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('classificacao')->values->first()->value}}</p>
            </div>
        </div>
        @endif
       
       @if(null !== $product->extraFields->get('safra'))
        <div class="tec-item col-6">
            <i class="far fa-calendar" style="font-size: 3rem"></i>
            <div class="content">
               <p class="mb-0 ml-3 ct font-weight-bold"> {{$product->extraFields->get('safra')->label}}</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('safra')->values->first()->value}}</p>
            </div>
        </div>
        @endif
        
        @if(null !== $product->extraFields->get('teor_alcoolico'))
        <div class="tec-item col-6">
            <i class="fas fa-percentage" style="font-size: 3rem"></i>
            <div class="content">
               <p class="mb-0 ml-3 ct font-weight-bold"> {{$product->extraFields->get('teor_alcoolico')->label}}</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('teor_alcoolico')->values->first()->value}}%</p>
            </div>
        </div>
        @endif
        
        @if(null !== $product->extraFields->get('volume'))
        <div class="tec-item col-6">
            <i class="fas fa-wine-bottle" style="font-size: 3rem"></i>
            <div class="content">
                <p class="mb-0 ml-3 ct font-weight-bold"> {{$product->extraFields->get('volume')->label}}</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('volume')->values->first()->value}}</p>
            </div>
        </div>
        @endif
    
    
        @if(null !== $product->extraFields->get('temperatura_de_servico'))
        <div class="tec-item col-6">
            <i class="fas fa-temperature-low" style="font-size: 3rem"></i>
            <div class="content">
                <p class="mb-0 ml-3 ct font-weight-bold"> {{$product->extraFields->get('temperatura_de_servico')->label}}</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('temperatura_de_servico')->values->first()->value}}</p>
            </div>
        </div>
        @endif

        @if($product->extraFields->get('pais_de_origem'))
        <div class="tec-item col-6">
            <i class="fas fa-globe" style="font-size: 3rem"></i>
            <div class="content">
               <p class="mb-0 ml-3 ct font-weight-bold">País</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('pais_de_origem')->values->first()->record->nome_do_pais->values->first()->value}}</p>
            </div>
        </div>
        @endif
        
        @if(null !== $product->extraFields->get('tempo_de_guarda'))
        <div class="tec-item col-6">
            <i class="far fa-clock" style="font-size: 3rem"></i>
            <div class="content">
               <p class="mb-0 ml-3 ct font-weight-bold"> {{$product->extraFields->get('tempo_de_guarda')->label}}</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('tempo_de_guarda')->values->first()->value}}</p>
            </div>
        </div>
        @endif

        
   
        
</div>


    <h3 class="text-center fontClass mt-5 mb-3" style="font-weight:900;">
        Mais Características
    </h3>
    
    @if(null !== $product->extraFields->get('regiao'))
 <div class="tec-item">
            <i class="fas fa-map-marker-alt" style="font-size: 3rem"></i>
            <div class="content">
              <p class="mb-0 ml-3 ct font-weight-bold"> {{$product->extraFields->get('regiao')->label}}</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('regiao')->values->first()->value}}</p>
            </div>
        </div>
@endif

    @if(null !== $product->extraFields->get('corte'))
 <div class="tec-item">
            <i class="fas fa-cut" style="font-size: 3rem"></i>
            <div class="content">
              <p class="mb-0 ml-3 ct font-weight-bold"> {{$product->extraFields->get('corte')->label}}</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('corte')->values->first()->value}}</p>
            </div>
        </div>
@endif
    
    @if(null !== $product->extraFields->get('visual'))
 <div class="tec-item">
            <i class="fas fa-eye" style="font-size: 3rem"></i>
            <div class="content">
              <p class="mb-0 ml-3 ct font-weight-bold"> {{$product->extraFields->get('visual')->label}}</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('visual')->values->first()->value}}</p>
            </div>
        </div>
@endif

@if(null !== $product->extraFields->get('olfativo'))
 <div class="tec-item">
            <i class="fas fa-wind" style="font-size: 3rem"></i>
            <div class="content">
              <p class="mb-0 ml-3 ct font-weight-bold"> {{$product->extraFields->get('olfativo')->label}}</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('olfativo')->values->first()->value}}</p>
            </div>
        </div>
@endif

@if(null !== $product->extraFields->get('gustativo'))
 <div class="tec-item">
            <i class="far fa-grin-tongue" style="font-size: 3rem"></i>
            <div class="content">
              <p class="mb-0 ml-3 ct font-weight-bold"> {{$product->extraFields->get('gustativo')->label}}</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('gustativo')->values->first()->value}}</p>
            </div>
        </div>
@endif

@if(null !== $product->extraFields->get('harmonizacao'))
 <div class="tec-item">
            <i class="fas fa-utensils" style="font-size: 3rem"></i>
            <div class="content">
              <p class="mb-0 ml-3 ct font-weight-bold"> {{$product->extraFields->get('harmonizacao')->label}}</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('harmonizacao')->values->first()->value}}</p>
            </div>
        </div>
@endif

@if(null !== $product->extraFields->get('premios'))
        <div class="tec-item">
            <i class="fas fa-medal" style="font-size: 3rem"></i>
            <div class="content">
                 <p class="mb-0 ml-3 ct font-weight-bold"> {{$product->extraFields->get('premios')->label}}</p>
                <p class="mb-0 ml-3 ct font-weight-normal"> {{$product->extraFields->get('premios')->values->first()->value}}</p>
            </div>
        </div>
@endif