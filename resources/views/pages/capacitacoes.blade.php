@extends('layout.main')

@section('title', 'SETUR - Capacitações')

@section('content')

    <section>
        <div class="container">
            
            <div class="box-title">
                <h4>Capacitações</h4>
                <p>
                    <a href="/setur-v1/public/"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d-m-y') ?>
                </p>
                <div class="img-pages">
                    <a href="{{ URL::asset('img/5.png') }}" target="_blank"><img src="{{ URL::asset('img/5.png') }}"/></a>
                    <br/>
                    <small style="color:gray;">(Igreja Matriz de São Joao Batista - Roberto Meira)</small>
                </div>
                <hr>
            </div>
            
            <div class="" style="margin-top:30px;">
                
                <p>O Governo do Rio Grande do Norte lançou no dia 19/04/2022, em solenidade no Centro de Convenções de Natal, cinco cursos de qualificação profissional e técnica para 46 cidades potiguares. As capacitações, promovidas por meio da Secretaria de Estado do Turismo (Setur), somam investimento de R$ 1 milhão do Projeto Governo Cidadão, com recursos viabilizados pelo empréstimo junto ao Banco Mundial.</p>

                <p>A partir de maio de 2022, são realizados cursos de Técnicas para Garçom, Gestão de pequenos negócios em comércio e serviços, Boas práticas no Manejo de Alimentos, Instância de Governança Municipal e Turismo de Base Comunitária. Os cursos são ministrados pelo SENAC.</p> 

                <p>Essa é a segunda vez que a Secretaria de Estado do Turismo oferece uma série de cursos de formação voltados para os gestores municipais de turismo, empreendedores e/ou prestadores de serviços turísticos. Em 2021, cerca de 25 cidades potiguares foram contempladas com a 1° leva de cursos ministrados pelo SENAC.</p> 

                <p>Os cursos ofertados no 1° ciclo de formações foram os de instância de governança municipal, turismo de base comunitária, gestão de pequenos negócios em comércio e serviços, e o curso de turismo sustentável: oportunidade para destinos e negócios.</p> 

                <p>Ao todo, em 2021 e 2022, mais de 1800 vagas foram ofertadas.</p> 
                
            </div>
            
        </div>
    </section><br/><br/><br/>

@endsection
    
