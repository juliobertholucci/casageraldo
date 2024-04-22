@extends(engine_view('base'))
@section('title', $store->model->name.' | Página não encontrada')
 
<style>
    #error-messagem-container{
        height: 50% !important;
    }
</style>
@section('page_content')
    <div class="container py-5 my-5">
        <div id="error-messagem-container" class="row align-items-center justify-content-around flex-column">
                <span class="d-block" style="font-size: 15rem;">404</span>
                <div class="mb-4 lead" style="font-size: 3rem;">Página não encontrada</div>
                <a href="/" class="btn btn-primary font-weight-bold">Voltar para a página inicial</a>
        </div>
    </div>
@endsection