@extends('layout.main')

@section('title', 'SETUR - Editais')

@section('content')

    <section>
        <div class="container">
          
           
            <div class="box-title">
                <h4>Editais</h4>
                @include('ini.header-page')
                <hr>
            </div>
            
            <div class="card text-center">
              <div class="card-header">
                Diário Oficial
              </div>
              <div class="card-body" style="height:100%;">
                <h5 class="card-title">RESULTADO PRELIMINAR DO EDITAL 001/2024</h5>
                  <i class="far fa-file-pdf" style="font-size:50px; color:red; margin-top:10px;"></i>
                <p style="margin-top:10px;">
                    RESULTADO PRELIMINAR DO EDITAL 001/2024 - SELEÇÃO DE ORGANIZAÇÕES DA SOCIEDADE CIVIL SEM FINS LUCRATIVOS - OSC'S, RESPONSÁVEIS PELAS INSTÂNCIAS DE GOVERNANÇA REGIONAIS DO TURISMO
                </p>
                <p>
                    O recurso contra resultado preliminar poderá ser impetrado no prazo de 05 (cinco) dias úteis da publicação conforme item 8.2 e nos termos do item 10 do edital.
                </p>
                <p>
                    Natal/RN, 22 de julho de 2024.<br/>
                    Solange de Araújo Portela<br/>
                    Secretária de Estado Interina do Turismo – SETUR/RN<br/>
                    Aurora Rayane Cavalcante de Melo<br/>
                    Coordenadora de Articulação e Ordenamento – CAO/SETUR/R  
                </p>
                <a href="{{ URL::asset('doc/editais/resultado-preliminar-do-edital-0012024.pdf') }}" class="btn btn-success" target="_blank">Download</a>
              </div>
              <div class="card-footer text-muted">
               
              </div>
            </div>
            
        </div>
    </section>

@endsection
    
