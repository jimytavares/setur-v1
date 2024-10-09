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

            <h4 style="margin-top:15px;">Encarregados e dos Dados Pessoais</h4>

            <h4 style="margin-top:30px;">Titular</h4>

            <div class="" style="margin-top:15px;">
                <p style="font-size:17px;"><i class="far fa-user"></i> LARISSA ANTONIA FRANÇA DE OLIVEIRA<br/>
                Cargo: Assistente Administrativo<br/></p>
            </div>

            <h4 style="margin-top:30px;">Suplente</h4>

            <div class="" style="margin-top:15px;">
                <p style="font-size:17px;"><i class="far fa-user"></i> ANA IRIS ALVES DA SILVA<br/>
                Cargo: Assistente Técnico II<br/></p>
            </div>
            
            <br/>
            <h4><b>Localização</b></h4>

            <div class="" style="margin-top:15px;">
                <p>Centro de Convenções de Natal - Via Costeira Sen. Dinarte Medeiros Mariz, S/n <br/> Ponta Negra, Natal/RN <br/> CEP 59.090-002 <br/> CNPJ: 01.278.765/0001-50</p>
                <p style="font-size:17px;"><b>E-Mail:</b> lgpd@setur.rn.gov.br<br/>
                <b>Horário de atendimento:</b> 8h às 14h, de segunda a sexta.<br/>
            </div>
           
        </div>
    </section>

@endsection
    
