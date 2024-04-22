@extends('layout.main')

@section('title', 'SETUR - Fale Conosco')

@section('content')

    <section>
        <div class="container">
            
            <div class="box-title">
                <h4>Fale Conosco</h4>
                @include('ini.header-page')
                <div class="img-pages">
                    <a href="{{ URL::asset('img/maracajau3.jpg') }}" target="_blank"><img src="{{ URL::asset('img/maracajau3.jpg') }}"/></a>
                    <br/>
                    <small style="color:gray;">(Maracajau)</small>
                </div>
                <hr>
            </div>
            
            {{-- web/ --}}
            <div class="row hidden-xs" style="margin-top:40px;">
               
                {{-- Form --}}
                <div class="col-8">
                    
                    <form role="form" method="POST" action="/insertFaleConosco" enctype="multipart/form-data">
                        @csrf 
                        <div class="form-row">
                            <div class="form-group col-12">
                              <label style="  letter-spacing: 1px;"><b>Nome:</b></label>
                              <input type="text" name="nome" class="form-control" id="inputEmail4" placeholder="Nome Completo">
                            </div>
                        </div><br/>

                        <div class="row">
                            <div class="col">
                              <label style="  letter-spacing: 1px;"><b>E-Mail:</b></label>
                              <input type="text" name="email" class="form-control" id="inputCity" placeholder="seuemail@email.com">
                            </div>
                            <div class="col">
                              <label style="letter-spacing: 1px;"><b>Telefone:</b></label>
                              <input type="text" name="telefone" class="form-control" id="inputCity" placeholder="(00) 00000-0000">
                            </div>
                        </div><br/>

                        <div class="col-12">
                            <label style="  letter-spacing: 1px;"><b>Mensagem:</b></label>
                            <textarea name="texto" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div><br/>
                        
                        <div class="row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-success btn-sm" style="width:200px;">Enviar</button>
                            </div>
                            <div class="col-2">
                                <input name="datta" class="w3-input w3-border" style="color:white; border:none;" value="<?php echo date('Y-m-d');?>" type="date" required>
                            </div>
                        </div>

                    </form>
                    
                 </div>
                    
                {{-- Buttons/Wpp --}}
                <div class="col">
                        <div class="row">
                            <div class="col-md-auto">
                                <a href="https://bit.ly/3vRd1l7" target="_blank"><button class="btn btn-success" style="border-radius:80px; width:70px; height:70px;"><i class="fa fa-whatsapp" aria-hidden="true" style="font-size:35px;"></i></button></a>
                            </div>
                            <div class="col">
                                <a href="https://bit.ly/3vRd1l7" target="_blank"><p style="margin-top:23px;">WhattsApp Cadastur</p></a>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-auto">
                                <a href="https://bit.ly/3p4ui6D" target="_blank"><button class="btn btn-success" style="border-radius:80px; width:70px; height:70px;"><i class="fa fa-whatsapp" aria-hidden="true" style="font-size:35px;"></i></button></a>
                            </div>
                            <div class="col">
                                <a href="https://bit.ly/3p4ui6D" target="_blank"><p style="margin-top:25px;">WhattsApp Buggy Turismo</p></a>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-auto">
                                <button class="btn btn-primary" style="border-radius:80px; width:70px; height:70px;"><i class="fa fa-phone" aria-hidden="true" style="font-size:35px;"></i></button>
                            </div>
                            <div class="col">
                                <p style="margin-top:13px;"><b>Fone:</b> (84) 3232.2503 <br/> <b>Gabinete:</b> 3232.2486</p>
                            </div>
                        </div>
                        <small style="color:gray; text-align:center;">*Clique em algum botão acima e seja direcionado direto para nosso whattsapp.</small>
                    </div>
                    
            </div>
            
            {{-- mb/ --}}
            <div class="row visible-xs" style="margin-top:40px;">
               
                {{-- Form --}}
                <div class="col-12">
                    
                    <form role="form" method="POST" action="/insertFaleConosco" enctype="multipart/form-data">
                        @csrf 
                        <div class="form-row">
                            <div class="form-group col-12">
                              <label style="  letter-spacing: 1px;"><b>Nome:</b></label>
                              <input type="text" name="nome" class="form-control" id="inputEmail4" placeholder="Nome Completo">
                            </div>
                        </div><br/>

                        <div class="row">
                            <div class="col">
                              <label style="  letter-spacing: 1px;"><b>E-Mail:</b></label>
                              <input type="text" name="email" class="form-control" id="inputCity" placeholder="seuemail@email.com">
                            </div>
                            <div class="col">
                              <label style="letter-spacing: 1px;"><b>Telefone:</b></label>
                              <input type="text" name="telefone" class="form-control" id="inputCity" placeholder="(00) 00000-0000">
                            </div>
                        </div><br/>

                        <div class="col-12">
                            <label style="  letter-spacing: 1px;"><b>Mensagem:</b></label>
                            <textarea name="texto" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div><br/>
                        
                        <div class="row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-success btn-sm" style="width:200px;">Enviar</button>
                            </div>
                            <div class="col-2">
                                <input name="datta" class="w3-input w3-border" style="color:white; border:none;" value="<?php echo date('Y-m-d');?>" type="date" required>
                            </div>
                        </div>

                    </form>
                    
                 </div>
                    
                {{-- Buttons/Wpp --}}
                <div class="col-12" style="margin-top:20px;">
                        <div class="row">
                            <div class="col-4">
                                <a href="https://bit.ly/3vRd1l7" target="_blank"><button class="btn btn-success" style="border-radius:80px; width:70px; height:70px;"><i class="fa fa-whatsapp" aria-hidden="true" style="font-size:35px;"></i></button></a>
                            </div>
                            <div class="col-8">
                                <a href="https://bit.ly/3vRd1l7" target="_blank"><p style="margin-top:23px;">WhattsApp Cadastur</p></a>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-4">
                                <a href="https://bit.ly/3p4ui6D" target="_blank"><button class="btn btn-success" style="border-radius:80px; width:70px; height:70px;"><i class="fa fa-whatsapp" aria-hidden="true" style="font-size:35px;"></i></button></a>
                            </div>
                            <div class="col-8">
                                <a href="https://bit.ly/3p4ui6D" target="_blank"><p style="margin-top:25px;">WhattsApp Buggy Turismo</p></a>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-4">
                                <button class="btn btn-primary" style="border-radius:80px; width:70px; height:70px;"><i class="fa fa-phone" aria-hidden="true" style="font-size:35px;"></i></button>
                            </div>
                            <div class="col-8">
                                <p style="margin-top:13px;"><b>Fone:</b> (84) 3232.2503 <br/> <b>Gabinete:</b> 3232.2486</p>
                            </div>
                        </div>
                        <small style="color:gray; text-align:center;">*Clique em algum botão acima e seja direcionado direto para nosso whattsapp.</small>
                    </div>
                    
            </div>
            
        </div>
    </section><br/><br/>

@endsection
    
