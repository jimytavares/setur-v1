@extends('layout.main')

@section('title', 'SETUR: Atas Conetur')

@section('content')

 <style>
        .fas {animation: fadeIn 2s ease-in-out;}
        .far {animation: fadeIn 2s ease-in-out;}
        @keyframes fadeIn {
        0% { opacity:0.3; }
        100% { opacity:1; }
    }
     .box-title{ text-align: center; }
     .box-group-transp{ text-transform: uppercase;}
        .btn-all-transp{ width:456px; height:70px; margin:0 auto; }
        .btn-left-transp{ background-color:#e3650e; width:20%; text-align:center; border-top-left-radius: 5px; border-bottom-left-radius: 5px; }
        .btn-right-transp{ background-color:#F2F2F2; width:80%; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #e3650e; }
        .btn-right-transp p{ color:black; font-size:18px; margin-left:12px; margin-top:26px; letter-spacing: 1px; }
        .btn-right-transp-lg{ background-color:#0189d3; width:80%; border-top-right-radius: 5px; border-bottom-right-radius: 5px; }
        .btn-right-transp-lg p{ color:black; font-size:18px; margin-left:12px; margin-top:10px; }
        .btn-right-transp:hover{ background-color:#e3650e; }
        .icon-btn-transp{ font-size:25px; padding-top:23px; color:white; }
    </style>

    <section>
        <div class="container">
            
            <div class="box-title">
                <h4>ATAS CONETUR</h4>
                @include('ini.header-page')
                <hr style="margin:0 auto;">
                <br/>
            </div>
            
            <div class="container mt-3">

                <!-- .1 -->
                <div class="row box-group-transp">
                    <div class="col-6 col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-layer-group icon-btn-transp"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Documentos AÇU</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-layer-group icon-btn-transp"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Pedra Grande</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-buttons-transp mt-4">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-layer-group icon-btn-transp"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Polo Serrano</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-buttons-transp mt-4">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-layer-group icon-btn-transp"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Upanema</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- .2 -->
                <div class="row box-group-transp mt-4">
                    <div class="col-6 col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-layer-group icon-btn-transp"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Venha Ver</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-layer-group icon-btn-transp"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Polo Serido</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-buttons-transp mt-4">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-layer-group icon-btn-transp"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Polo Potengi</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-buttons-transp mt-4">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-layer-group icon-btn-transp"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Polo do Sertão Para o Mar</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- .3 -->
                <div class="row box-group-transp mt-4">
                    <div class="col-6 col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-layer-group icon-btn-transp"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Polo Central Cabugi</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-layer-group icon-btn-transp"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Polo Agreste Trairi</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-buttons-transp mt-4">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-layer-group icon-btn-transp"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Polo Costa das Dunas</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-buttons-transp mt-4">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-layer-group icon-btn-transp"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Polo Rota do Frio</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- .4 -->
                <div class="row box-group-transp mt-4">
                    <div class="col-6 col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-layer-group icon-btn-transp"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Polo Serras do Agreste Potiguar</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-layer-group icon-btn-transp"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Polo Vale Mar</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-buttons-transp" style="margin-top:53px;">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-layer-group icon-btn-transp"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Polo CostaBranca</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
            
            
        </div>
    </section>

@endsection
    
