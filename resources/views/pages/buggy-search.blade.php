@extends('layout.main')

@section('title', 'SETUR: Bugueiros Credenciados')

@section('content')

    <section>
        <div class="container">
            
            <div class="box-title">
                <h4>{{$namepage}}</h4>
                <p style="font-size:18px; color:gray;">Resultado da buscar por <span style="text-transform:uppercase; color:black; font-weight:bold;">{{$result}}</span> na lista dos bugueiros.</p>
                @include('ini.header-page')
                <hr><br/>
            </div>

            {{-- .table --}}
            <div class="row">
                <div class="col">
                    <a href="{{ route('bugueiroCredenciados') }}"><button class="btn btn-primary btn-sm">Listar Todos os Bugueiros</button></a>
                </div>
                <div class="col">
                    @include('componentes.buscarBugueiro')
                </div>
            </div>
            <table class="table table-striped" style="font-size:16px; margin-top:20px;">
                <thead style="background-image: linear-gradient(to right, #75a152 , #e3650e, #e3650e);">
                    <tr style="color:white;">
                        <th class="" style="width:5%;">ATIVO</th>
                        <th class="" style="width:5%;">CREDENCIAL</th>
                        <th class="">NOME DO BUGUEIRO</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($result_bugueiro as $dados)
                        <tr>
                            <td class="" style="text-align:center;"><i class="fas fa-check-circle" style="color:green;"></i></td>
                            <td class="" style="text-align:center;"><b>{{$dados->credencial}}</b></td>
                            <td class="" style="font-size:20px;">{!! $dados->nome !!}</td>
                       </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>
    </section><br/><br/><br/><br/><br/><br/><br/><br/>

@endsection
    
