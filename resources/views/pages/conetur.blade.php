@extends('layout.main')

@section('title', 'SETUR - Fale Conosco')

@section('content')

    <section>
        <div class="container">
            
            <div class="box-title">
                <h4>Conetur</h4>
                @include('ini.header-page')
            </div><br/>
            
            <p>O Conselho Estadual de Turismo – Conetur é um órgão colegiado de caráter consultivo, vinculado à Secretaria Estadual de Turismo – SETUR, responsável por propor diretrizes, oferecer subsídios e contribuir para a formulação e implementação da Política Estadual de Turismo.</p>
            
            <div class="row box-conetur">
                
                {{-- left/text --}}
                <div class="col">

                    <h4>MEMBROS DO CONETUR</h4><br/>

                    <p><b>Esfera Federal</b></p>
                    <p>BNB - Banco do Nordeste<br/>
                    Caixa Econômica Federal- CEF;<br/>
                    IPHAN- Instituto do Patrimônio Histórico e Artístico Nacional.</p>

                    <p><b>Esfera Estadual</b></p>
                    <p>SETUR – Secretaria de Estado do Turismo;</p>
                    <p>EMPROTUR – Empresa Potiguar de Promoção Turística do RN;</p>
                    <p>IDEMA – Instituto de Desenvolvimento Sustentável e Meio Ambiente;</p>
                    <p>SESED – Secretaria de Estado de Segurança Pública e da Defesa Social;</p>
                    <p>SEDEC – Secretaria de Estado do Desenvolvimento Econômico.</p>

                    <p><b>Esfera Regional</b></p>
                    <p>Polo Agreste/Trairí;<br/>
                    Polo Costa Branca;<br/>
                    Polo Cabugi Central;<br/>
                    Polo Costa das Dunas;<br/> 
                    Polo “Do Sertão Para o Mar;<br/>
                    Polo Potengi;<br/>
                    Polo Rota do Frio;<br/>
                    Polo Seridó;<br/>           	
                    Polo Serrano;<br/>
                    Polo Serras do Agreste Potiguar;<br/>
                    Polo Vale Mar;</p>


                    <p><b>Esfera Municipal</b></p>
                    <p>Município do Natal;<br/>
                    Município de Tibau do Sul;<br/> 
                    Iniciativa Privada<br/>
                    ABRASEL – Associação brasileira de bares e restaurantes do RN;<br/>
                    ABRAJET – Associação brasileira dos jornalistas e escritores de turismo do RN;<br/>
                    ABAV – Associação brasileira das agências de viagens do RN;<br/>
                    ABIH – Associação brasileira da indústria de hotéis do RN;<br/>
                    NCVB – Natal Convention & Visitors Bureau;<br/>
                    SENAC – Serviço Nacional de Aprendizagem Comercial do RN;<br/>
                    SEBRAE – Serviço de Apoio às Micro e Pequenas Empresas do RN.<br/>
                    COOPBUGGY – Cooperativa de Transportes Turísticos e Serviços Afins do RN;<br/> 
                    FECOMÉRCIO – Federação do Comércio do Estado do RN;<br/>
                    SINDBUGGY – Sindicato dos Bugueiros Profissionais do RN;<br/>
                    SINDETUR – Sindicato das Empresas de Turismo no Estado do RN;<br/>
                    SINGTUR – Sindicato dos Guias de Turismo do RN;<br/>
                    SHRBS – Sindicato dos Hotéis, Restaurantes, Bares e Similares; Representantes da Academia;<br/>
                    UFRN – Universidade Federal do RN;<br/>
                    UERN – Universidade Estadual do RN.</p>
                </div>
                
                {{-- right/table.pdf --}}
                <div class="col">
                   
                   <div class="accordion" id="accordionPanelsStayOpenExample">
                     
                      <p style="color:gray;">Download de Arquivos:</p>
                     
                      {{-- BOX: Regimentos --}}
                      <div class="accordion-item accord-conetur">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <i class="fas fa-file-pdf" style="color:red; font-size:20px;"></i> &nbsp;Regimento
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                          <div class="accordion-body">
                            
                            <div class="row row-arq-conetur">
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/conetur-publicacao-regimento-interno.pdf') }}" target="_blank"><p>Publicacao Regimento Interno CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/conetur-regimento-2009.pdf') }}" target="_blank"><p>Regimento CONETUR 2009</p></a>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      
                      {{-- BOX: Decretos --}}
                      <div class="accordion-item accord-conetur">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            <i class="fas fa-file-pdf" style="color:red; font-size:20px;"></i> &nbsp;Decretos
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                          <div class="accordion-body">
                            
                            <div class="row row-arq-conetur">
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/1-decreto-conetur-10.386-junho-1989.pdf') }}" target="_blank"><p>1º Decreto CONETUR 10.386 - Junho 1989</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/2-decreto-conetur-11.014-junho-1991.pdf') }}" target="_blank"><p>2º Decreto CONETUR 11.014 - Junho 1991</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/3-decreto-conetur-12.925-marco-1996.pdf') }}" target="_blank"><p>3º Decreto CONETUR 12.925 - Março 1996</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/4-decreto-conetur-12.757-setembro-1995.pdf') }}" target="_blank"><p>4º Decreto CONETUR 12.757 - Setembro 1995</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/5-decreto-conetur-13.101-setembro-1996.pdf') }}" target="_blank"><p>5º Decreto CONETUR 13.101 - Setembro 1996</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/6-decreto-conetur-17.276-dezembro-2003.pdf') }}" target="_blank"><p>6º Decreto CONETUR 17.276 - Dezembro 2003</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/7-decreto-conetur-18.893-fevereiro-2006.pdf') }}" target="_blank"><p>7º Decreto CONETUR 18.893 - Fevereiro 2006</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/8-decreto-conetur-21.382-novembro-2009.pdf') }}" target="_blank"><p>8º Decreto CONETUR 21.382 - Novembro 2009</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/9-decreto-conetur-22.545-janeiro-2012.pdf') }}" target="_blank"><p>9º Decreto CONETUR 22.545 - Janeiro 2012</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/conetur-publicacao-regimento-interno.pdf') }}" target="_blank"><p>CONETUR Publicação Regimento Interno</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/conetur-regimento-2009.pdf') }}" target="_blank"><p>CONETUR Regimento 2009</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/decreto-conetur-30.937-setembro-2021.pdf') }}" target="_blank"><p>Decreto Conetur 30.937  - setembro 2021</p></a>
                                </div>
                                
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      
                      {{-- BOX: Atas --}}
                      <div class="accordion-item accord-conetur">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            <i class="fas fa-file-pdf" style="color:red; font-size:20px;"></i> &nbsp;Atas
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                          <div class="accordion-body">
                            
                            <div class="row row-arq-conetur">
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/40-ATA-CONETUR.pdf') }}"><p>40ª ATA CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/42-ATA-CONETUR.pdf') }}"><p>42ª ATA CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/50-ATA-CONETUR.pdf') }}"><p>50ª ATA CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/51-ATA-CONETUR.pdf') }}"><p>51ª ATA CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/52-ATA-CONETUR-ASSINADA.pdf') }}"><p>52ª ATA CONETUR - ASSINADA</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/53-ATA-CONETUR.pdf') }}"><p>53ª ATA CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/54-ATA-CONETUR-ASSINADA.pdf') }}"><p>54ª ATA CONETUR - ASSINADA</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/55-ATA-CONETUR-SEM-ASSINATURA.pdf') }}"><p>55ª ATA CONETUR - SEM ASSINATURA</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/56-ATA-CONETUR-ASSINADA.pdf') }}"><p>56ª ATA CONETUR - ASSINADA</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/57-ATA-CONETUR-SEM-ASSINATURA.pdf') }}"><p>57ª ATA CONETUR - SEM ASSINATURA</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/58-ATA-CONETUR-ASSINADA.pdf') }}"><p>58ª ATA CONETUR - ASSINADA</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/59-ATA-CONETUR-ASSINADA.pdf') }}"><p>59ª ATA CONETUR - ASSINADA</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/60-ATA-CONETUR-ASSINADA.pdf') }}"><p>60ª ATA CONETUR - ASSINADA</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/61-ATA-CONETUR.pdf') }}"><p>61ª ATA CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/62-ATA-CONETUR.pdf') }}"><p>62ª ATA CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/63-ATA-CONETUR.pdf') }}"><p>63ª ATA CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/64-ATA-CONETUR.pdf') }}"><p>64ª ATA CONETUR - ASSINADA</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/65-ATA-CONETUR.pdf') }}"><p>65ª ATA CONETUR - ASSINADA</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/66-ATA-CONETUR.pdf') }}"><p>66ª ATA CONETUR - ASSINADA</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/67-ATA-CONETUR.pdf') }}"><p>67ª ATA CONETUR - ASSINADA</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/68-ATA-CONETUR.pdf') }}"><p>68ª ATA CONETUR - ASSINADA</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/69-ATA-CONETUR.pdf') }}"><p>69ª ---------</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/70-ATA-CONETUR.pdf') }}"><p>70ª ATA CONETUR - ASSINADA</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/71-ATA-CONETUR.pdf') }}"><p>71ª ATA CONETUR - ASSINADA</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/72-ATA-CONETUR.pdf') }}"><p>72ª ATA CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/73-ATA-CONETUR.pdf') }}"><p>73ª ATA CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/74-ATA-CONETUR.pdf') }}"><p>74ª ATA CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/75-ATA-CONETUR.pdf') }}"><p>75ª ATA CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/76-ATA-CONETUR.pdf') }}"><p>76ª ATA CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/77-ATA-CONETUR.pdf') }}"><p>77ª ATA CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/78-ATA-CONETUR.pdf') }}"><p>78ª ATA CONETUR</p></a>
                                </div>
                                
                                <div class="col-1">
                                    <i class="fas fa-download"></i>
                                </div>
                                <div class="col-11">
                                    <a href="{{ URL::asset('doc/conetur/79-ATA-CONETUR.pdf') }}"><p>79ª ATA CONETUR</p></a>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      
                    </div>
                   
                </div>
                
            </div>
            
        </div>
    </section>

@endsection
    
