@extends(engine_view('base'))   
@section('title', $store->model->name.' | Nossa História ')
@section('page_content') 

<div class="TituloDiv">
    <h3 class="TextoTitulo">Nossa História</h3>
</div>

<div class="cMain row pt-5">
    
    <div class="col-md-6 p-5 textContainer">
        
        <p>A história da vinícola começa em mil novecentos e sessenta e nove com Geraldo Marcon, descendente de italianos que carregava no sangue o amor pela vitivinicultura, Geraldo adquiriu a Fazenda São Geraldo e o Sítio Bom Fim, onde passou a cultivar uvas para produção de vinhos.</p>
        <br>
        <p>Desde então, a família tem se dedicado à elaboração de vinhos, em um trabalho transmitido de geração a geração. Geraldo gerenciou a pequena vinícola vendendo sua produção a granel para outras vinícolas da capital paulista até o ano de sua morte 1978, quando seu filho Luiz Carlos assumiu a vinícola dando continuidade ao trabalho do pai...</p>
        <br>
        <p>Mais tarde Luiz trouxe para dentro da vinícola seus 3 filhos (Carlos Geraldo, Luiz Henrique e Michel) ao qual desde pequenos auxiliavam o pai nas tarefas do cultivo da uva e vinificação.
Os irmãos foram crescendo e cada um foi assumindo uma função dentro da empresa. Carlos o mais velho se formou em química e se encarregou de toda fabricação do vinho, desde a chegada da uva até a rotulação do produto. Luiz Henrique se formou em Engenharia de alimentos, porém sua paixão pelo campo e pela viticultura o levaram a tomar conta dos vinhedos, se tornando em referência no cultivo de uvas finas de inverno. Michel desde pequeno cuidava dos assuntos de escritório, se formando em administração e hoje é o responsável por toda parte financeira e administrativa da empresa.</p>
        <p> Em 1993 com a necessidade de atingir diretamente os mercados, nascia a marca de vinhos Campino onde seus produtos eram exclusivamente vinhos de mesa. A vinícola nos anos seguintes alavancou grande crescimento devido a qualidade seus produtos, inovações em tecnologias de vitivinificação e designer de seus rótulos e garrafas. Com o crescimento das vendas foi necessário a compra da matéria prima do vinho (Uva) para suprir a demanda da vinícola e essa era trazida em caminhões do Rio Grande do Sul para Andradas.</p>
        <br>
        <p>No ano de 2.000 acompanhando o aumento na demanda do vinho fino Luiz Carlos resolve apostar nessa nova tendência e no ano seguinte nascia a nova marca de vinhos Casa Geraldo, no início com apenas 3 rótulos varietais (Cabernet, Merlot e Moscato Giallo), vinhedos dessas variedades simultaneamente eram implantados, porém devido as dificuldades do clima de verão não tiveram grande sucesso, sendo assim as uvas continuavam a serem trazidas do Rio Grande do Sul.</p>
        <br>
        <p>Vendo a necessidade de impulsionar o consumo de vinhos e alavancar a venda no varejo Luiz Carlos inicia o projeto Casa Geraldo Turismo Enogastronômico com inauguração em 9 de julho de 2003, uma aposta visionária para época, mas que com o passar dos anos se mostrou de extrema importância para o crescimento da marca e divulgação de seus vinhos.</p>
        <br>
        <p>Em 2010 Luiz Carlos deixa a administração da empresa para seus filhos, os quais carregavam o sonho de serem grandes Vitivinicultores. Uma nova era de inovações e tecnologias se inicia.
Acompanhando as recentes pesquisas sobre a inversão do ciclo da uva conhecida por Colheita de Inverno, os irmãos Marcon visionários como o pai resolvem investir todas as fichas nesse novo e audacioso projeto.</p>
        <br>
        <p>Em 2012 a primeira inversão de ciclo é feita na vinícola e com a qualidade do vinho obtido resolvem arrancar todos os vinhedos de variedades vitis-lambruscas para darem lugares a diversas variedades vitis-viniferas.</p>
        <br>
        <p>Em 2015 devido ao aumento do fluxo de turistas, o complexo turístico sofre diversas reformas e ampliações. Novos passeios e novas áreas de recreação são criadas.</p>
        <br>
        <p>Nos anos seguintes novos vinhedos são implantados e com isso novos e sofisticados vinhos com Terroir de nossa região são lançados. Vinhos que carregam no seu DNA o nosso amor pela vitivinicultura.</p>
        <br>
        <p>Não tardou e os resultados apareceram na forma de premiações, dezenas e dezenas de medalhas em concursos nacionais e internacionais foram ganhas tanto nos vinhos quanto nos espumantes elaborados pela vinícola. Hoje nossa carta tem mais de 60 rótulos que agradam os mais exigentes paladares.</p>
        <br>
        <p>E a história continua a ser escrita com muito amor ao vinho!!! Em breve certamente novas páginas dessa história.</p>
    
    </div>

    <div class="col-md-6 p-5">
        
        
        
         <video width="320" height="350" class="w-100 borderShadow" controls>
         <source src="{{ path('VideoInicial.mp4')}}" type="video/mp4">
         </video>
        
            <div id="demo" class="carousel slide mt-3 w-100 borderShadow" data-ride="carousel">
            
              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
              </ul>
            
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ path('fotohistoria1.jpg') }}">
                </div>
                <div class="carousel-item">
                  <img src="{{ path('fotohistoria2.jpg') }}">
                </div>
                <div class="carousel-item">
                  <img src="{{ path('fotohistoria3.jpg') }}">
                </div>
                <div class="carousel-item">
                  <img src="{{ path('fotohistoria4.jpg') }}">
                </div>
              </div>
            
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            
            </div>
        
        
    </div>
    
</div>


    @include(engine_view('component_section_2'))

@endsection