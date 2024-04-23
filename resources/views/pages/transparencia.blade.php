@extends('layout.main')

@section('title', 'SETUR: Transparência')

@section('content')

<style>
    .btn-all-transp{ width:200px; height:150px; margin:0 auto; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius:5px; }
    .btn-left-transp{ background-color:#0174b2; width:25%; text-align:center; border-top-left-radius: 5px; border-bottom-left-radius: 5px; }
    .btn-right-transp{ background-color:; width:75%; border-top-right-radius: 5px; border-bottom-right-radius: 5px; text-align: center; }
    .btn-right-transp p{ color:#505a62; font-weight:bold; font-size:18px; margin-left:12px; margin-top:26px; }
    .btn-right-transp-lg{ background-color:#0189d3; width:80%; border-top-right-radius: 5px; border-bottom-right-radius: 5px; }
    .btn-right-transp-lg p{ color:white; font-size:18px; margin-left:12px; margin-top:10px; }
    .btn-right-transp:hover{ background-color:#0174b2; }
    .icon-btn-transp{ font-size:25px; padding-top:30px; color:white; }
</style>

    <section>
        <div class="container" style="margin-top:130px;">
            
            <div class="row">
                <div class="col">
                    
                    <div class="row btn-all-transp">
                        <div class="btn-left-transp">
                            .
                        </div>
                        <div class="btn-right-transp">
                            <p><i class="fas fa-layer-group icon-btn-transp"></i> Institucional</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col">
                    
                    <div class="row btn-all-transp">
                        <div class="btn-left-transp">
                            <i class="fas fa-layer-group icon-btn-transp"></i>
                        </div>
                        <div class="btn-right-transp">
                            <p>Atas do Conselho</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col">
                    
                    <div class="row btn-all-transp">
                        <div class="btn-left-transp">
                            <i class="fas fa-layer-group icon-btn-transp"></i>
                        </div>
                        <div class="btn-right-transp">
                            <p>Licitações e Contratos</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col">
                    
                    <div class="row btn-all-transp">
                        <div class="btn-left-transp">
                            <i class="fas fa-layer-group icon-btn-transp"></i>
                        </div>
                        <div class="btn-right-transp">
                            <p>Leis, decretos e regulamentações</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="row" style="margin-top:40px;">
                <div class="col">
                    
                    <div class="row btn-all-transp">
                        <div class="btn-left-transp">
                            <i class="fas fa-layer-group icon-btn-transp"></i>
                        </div>
                        <div class="btn-right-transp">
                            <p>Planos e projetos</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col">
                    
                    <div class="row btn-all-transp">
                        <div class="btn-left-transp">
                            <i class="fas fa-layer-group icon-btn-transp"></i>
                        </div>
                        <div class="btn-right-transp">
                            <p>Transferência e Convênios</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col">
                    
                    <div class="row btn-all-transp">
                        <div class="btn-left-transp">
                            <i class="fas fa-layer-group icon-btn-transp"></i>
                        </div>
                        <div class="btn-right-transp">
                            <p>Programas, ações, projetos e obras</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col">
                    
                    <div class="row btn-all-transp">
                        <div class="btn-left-transp">
                            <i class="fas fa-layer-group icon-btn-transp"></i>
                        </div>
                        <div class="btn-right-transp">
                            <p>E-SIC</p>
                        </div>
                    </div>
                    
                </div>
            </div>
           
        </div>
    </section>

@endsection
    
