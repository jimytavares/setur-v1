@extends('layout.main')

@section('title', 'SETUR: Bugueiros Credenciados')

@section('content')

    <section>
        <div class="container">
            
            <div class="box-title">
                <h4>Relação de Bugueiros Credenciados</h4>
                @include('ini.header-page')
                <div class="img-pages">
                    <small style="color:gray;"></small>
                </div><hr><br/>
            </div>

            {{-- .table --}}
            <div class="row">
                <div class="col-12">
                    <p style=""><b>Total:</b> {{$countBugueiros}}</p>
                </div>
                <div class="col">
                    {{ $get_bugueiros->links('pagination::bootstrap-4') }}
                </div>
                <div class="col">
                    <form action="{{ route('buscarBugueiro') }}" class="domain-form" method="GET" enctype="multipart/form-data">
                    @csrf
                        <div class="d-md-flex"> 
                            <input type="text" name="nome_credencial" class="form-control px-4" placeholder="Informe o nome para Buscar pelo Bugueiro"> 
                            <button type="submit" class="search-domain btn btn-info px-3" style="background-color:#e3650e; border:none; color:white;"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
                        </div>
                    </form>
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
                    @foreach($get_bugueiros as $dados)
                        <tr>
                            <td class="" style="text-align:center;"><i class="fas fa-check-circle" style="color:green;"></i></td>
                            <td class="" style="text-align:center;"><b>{{$dados->credencial}}</b></td>
                            <td class="" style="font-size:18px;">{!! $dados->nome !!}</td>
                       </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>
    </section>

@endsection
    
