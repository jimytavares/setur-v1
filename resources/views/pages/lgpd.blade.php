@extends('layout.main')

@section('title', 'SETUR: LGPD')

@section('content')

    <section>
        <div class="container">
            
            <div class="box-title">
                <h4>{{$namepage}}</h4>
                @include('ini.header-page')
                <div class="img-pages">
                    <small style="color:gray;"></small>
                </div><hr><br/>
            </div>

            <h4><b>Lei Geral de Proteção de Dados Pessoais</b></h4>

            <div class="" style="margin-top:35px;">
                <p style="font-size:17px;"><b>Horário de atendimento:</b> 8h às 14h, de segunda a sexta.<br/>
                    <b>Endereço:</b> Centro de Convenções de Natal - Via Costeira Sen. Dinarte Medeiros Mariz, S/n - Ponta Negra, Natal/RN - CEP 59.090-002 CNPJ: 01.278.765/0001-50</p>
            </div>

            <h4 style="margin-top:35px;">Encarregados dos Dados Pessoais</h4>

            <h4 style="margin-top:30px;">Titular</h4>

            <div class="" style="margin-top:35px;">
                <p style="font-size:17px;"><b><i class="far fa-user"></i> LARISSA ANTONIA FRANÇA DE OLIVEIRA</b><br/>
                Cargo: <br/>
                E-mail: lgpd@setur.rn.gov.br<br/>
                Telefone: (84) 99431-4887</p>
            </div>

            <h4 style="margin-top:30px;">Suplente</h4>

            <div class="" style="margin-top:35px;">
                <p style="font-size:17px;"><b><i class="far fa-user"></i> ANA IRIS ALVES DA SILVA</b><br/>
                    Cargo: <br/>
                    E-mail: lgpd@setur.rn.gov.br<br/>
                    Telefone: (84) 99654-4192</p>
            </div>
           
        </div>
    </section>

@endsection
    
