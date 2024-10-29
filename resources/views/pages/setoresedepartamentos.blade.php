@extends('layout.main')

@section('title', 'SETUR: Setores e Departamentos')

@section('content')

    <section>
        <div class="container">
            
            <div class="box-title">
                <h4>Setores e Departamentos</h4>
                @include('ini.header-page')
                <div class="img-pages">
                    <a href="{{ URL::asset('img/serradolima3.jpg') }}" target="_blank"><img src="{{ URL::asset('img/serradolima3.jpg') }}"/></a>
                    <br/>
                    <small style="color:gray;">(Serra do Lima)</small>
                </div><hr><br/>
            </div>
            
            @foreach($slc_cargos as $dados)
                <div class="box-text-sd">
                    <h4>{{$dados->cargo}}</h4> 
                    <p style="font-size:17px;"><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{$dados->nome}} <br/> <small style="font-size:14px;"><i class="fas fa-at"></i> Email: {{$dados->email}}</small> <br/> <small style="font-size:14px;"><i class="fas fa-phone"></i> Telefone: {{$dados->telefone}}</small></p>
                    

                    <p>{!!html_entity_decode($dados->descricao) !!}</p>

                </div>
            @endforeach
           
        </div>
    </section>

@endsection
    
