@extends('layout.main')

@section('title', 'SETUR - Erro Buscar')

@section('content')

    <div class="container" style="padding-top:80px;">

        <div class="" style="text-align:center; margin-top:60px;">
            <i class="fas fa-exclamation-triangle" style="font-size:50px; color:#005baa;"></i><br/>
            <small style="color:red;">Resultado da pesquisa:</small>
            <h3 style="text-align:center; margin-top:10px; color:#005baa;"> Página não encontrada</h3>
            <p style="color:; font-size:17px; margin-top:20px;"><b>Verifique se o valor da buca digitado está correto <br/>ou o que você procura não consta no nosso site, tente novamente.</b></p>
        </div>

        <form action="/buscarsite" class="domain-form" method="GET" enctype="multipart/form-data" style="margin-left:28%; margin-top:40px;">
            <div class="form-group d-md-flex"> 
                <input type="text" name="buscar" class="form-control" placeholder="informe o que você deseja procurar no site..." style="width:400px !important; border-radius:0px; border-color:gray; background-color:transparent;"> 
                <button class="btn btn-success btn-sm" type="submit" style="margin-left:5px;"><i class="fa fa-search"></i> Buscar</button>
            </div>
        </form>
        
        <br/><hr>
        <h3 style="text-align:center; margin-top:40px; color:#005baa;">O que você procura pode está aqui:</h3><br/>
        
        <div class="row">
            <div class="col-4"><a href="/institucional"><button class="btn btn-outline-primary" style="width:100%; color:black; margin-top:10px;">Institucional</button></a></div>
                <div class="col-4"><a href="/agestao"><button class="btn btn-outline-primary" style="width:100%; color:black; margin-top:10px;">A Gestão</button></a></div>
                <div class="col-4"><a href="/setoresedepartamentos"><button class="btn btn-outline-primary" style="width:100%; color:black; margin-top:10px;">Setores e Departamentos</button></a></div>
                <div class="col-4"><a href="https://emprotur.setur.rn.gov.br/" target="_blank"><button class="btn btn-outline-primary" style="width:100%; color:black; margin-top:10px;">EMPROTUR</button></a></div>
                <div class="col-4"><a href="https://www.centrodeconvencoesdenatal.rn.gov.br/"><button class="btn btn-outline-primary" style="width:100%; color:black; margin-top:10px;">Centro de Convenções</button></a></div>
                <div class="col-4"><a href="/faleconosco"><button class="btn btn-outline-primary" style="width:100%; color:black; margin-top:10px;">Fale Conosco</button></a></div>
                <div class="col-4"><a href="#"><button class="btn btn-outline-primary" style="width:100%; color:black; margin-top:10px;">CONETUR</button></a></div>
                <div class="col-4"><a href="/noticias"><button class="btn btn-outline-primary" style="width:100%; color:black; margin-top:10px;">Notícias</button></a></div>
                <div class="col-4"><a href="/sobreoestado"><button class="btn btn-outline-primary" style="width:100%; color:black; margin-top:10px;">Sobre o Estado</button></a></div>
                <div class="col-4"><a href="https://visiteriograndedonorte.com.br/"><button class="btn btn-outline-primary" style="width:100%; color:black; margin-top:10px;">Visite Rio Grande do Norte</button></a></div>
                <div class="col-4"><a href="/turismonorn"><button class="btn btn-outline-primary" style="width:100%; color:black; margin-top:10px;">Turismo no RN</button></a></div>
                <div class="col-4"><a href="/planoseprojetos"><button class="btn btn-outline-primary" style="width:100%; color:black; margin-top:10px;">Planos e Projetos</button></a></div>
                <div class="col-4"><a href="/turismocidadao"><button class="btn btn-outline-primary" style="width:100%; color:black; margin-top:10px;">Turismo Cidadão</button></a></div>
                <div class="col-4"><a href="/acapacitacoes"><button class="btn btn-outline-primary" style="width:100%; color:black; margin-top:10px;">Capacitações</button></a></div>
        </div>
        
    </div>
    <br/><br/>

@endsection
    
