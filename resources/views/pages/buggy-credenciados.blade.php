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
                {{ $get_bugueiros->links('pagination::bootstrap-4') }}
            <table class="table table-striped" style="font-size:16px; margin-top:20px;">
                <thead style="background-image: linear-gradient(to right, #75a152 , #e3650e, #e3650e);">
                    <tr style="color:white;">
                        <th class="" style="width:5%;">Ativo</th>
                        <th class="" style="width:5%;">credencial</th>
                        <th class="">Nome do Bugueiro</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($get_bugueiros as $dados)
                        <tr>
                            <td class="" style="text-align:center;"><i class="fas fa-check-circle" style="color:green;"></i></td>
                            <td class="" style="text-align:center;"><b>{{$dados->credencial}}</b></td>
                            <td class="">{!! $dados->nome !!}</td>
                       </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>
    </section>

@endsection
    
