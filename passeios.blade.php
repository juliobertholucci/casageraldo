@extends(engine_view('base'))   
@section('title', $store->model->name.' | Passeios ')
@section('page_content')      
  
  
@include(engine_view('component_slider_passeio'))
            
@include(engine_view('component_section_passeio_1'))
<br><br>
@include(engine_view('component_section_passeio_2'))
<br><br>
@include(engine_view('component_section_passeio_3'))




@endsection 