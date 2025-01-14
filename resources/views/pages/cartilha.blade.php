@extends('layout.main')

@section('title', 'SETUR - Cartilha')

@section('content')

    <section>
        <div class="container">
            
            <div class="box-title">
                <h4>Cartilha do Turismo Responsável</h4>
                @include('ini.header-page')
            </div>
            
            <div class="container">
                <div class="row col-md-8 mx-auto">                    
                    <img src="{{ URL::asset('img/cartilha_capa.png') }}" class="py-5" />
                    <img src="{{ URL::asset('img/cartilha_1.png') }}" class="pb-5" />
                    <img src="{{ URL::asset('img/cartilha_2.png') }}" class="pb-5" />
                    <img src="{{ URL::asset('img/cartilha_3.png') }}" class="pb-5" />
                    <img src="{{ URL::asset('img/cartilha_4.png') }}" class="pb-5" />
                    <img src="{{ URL::asset('img/cartilha_5.png') }}" class="pb-5" />
                    <img src="{{ URL::asset('img/cartilha_6.png') }}" class="pb-5" />
                    <img src="{{ URL::asset('img/cartilha_7.png') }}" class="pb-5" />
                    <img src="{{ URL::asset('img/cartilha_8.png') }}" class="pb-5" />
                    <img src="{{ URL::asset('img/cartilha_9.png') }}" class="pb-5" />
                    <img src="{{ URL::asset('img/cartilha_10.png') }}" class="pb-5" />
                    <img src="{{ URL::asset('img/cartilha_11.png') }}" class="pb-5" />
                    <img src="{{ URL::asset('img/cartilha_12.png') }}" />                    
                </div>
            </div>
            
        </div>
    </section>

@endsection
