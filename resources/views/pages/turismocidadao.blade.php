@extends('layout.main')

@section('title', 'SETUR - Turismo Cidadão')

@section('content')
    
<style>
</style>

    <section>
        <div class="container">
            
            <div class="box-title">
                <h4>Turismo Cidadão</h4>
                <p>
                    <a href="/setur-v1/public/"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d-m-y') ?>
                </p>
                <div class="img-pages">
                    <a href="{{ URL::asset('img/4.png') }}" target="_blank"><img src="{{ URL::asset('img/4.png') }}"/></a>
                    <br/>
                    <small style="color:gray;">(Forte Reis magos - Sandro Menezes)</small>
                </div>
                <hr>
            </div><br/>
            
            <div class="box-lojas">
                
                <p>O Governo do RN, por meio da Secretaria de Turismo, da  Empresa de Promoção Turística do Rio Grande do Norte (Emprotur) e da Secretaria de Tributação, lançou em 2020 o programa Turismo Cidadão. A iniciativa garante a troca de pontos acumulados no Nota Potiguar por vouchers que podem ser usados em passeios turísticos, meios de hospedagem e restaurantes dentro do Rio Grande do Norte.</p>   

                <p>O programa tem como objetivo estimular a economia Potiguar e principalmente o segmento turístico (um dos mais afetados pela pandemia do novo coronavírus), por meio de ações voltadas para o público interno.</p>

                <p>Durante as três fases do programa, o Governo do RN garantiu um investimento de R$ 2,3 milhões. No Turismo Cidadão, pontos acumulados durante o mês no Nota Potiguar pode ser revertido em vouchers nos valores de R$100 R$ 150 e R$ 200 que serão, obrigatoriamente, usados em produtos turísticos e restaurantes do nosso estado. O programa significou uma injeção direta de recursos em um dos setores mais prejudicados pela pandemia e foi um grande sucesso de público.</p> 

                <p>O chamamento público para empresas e prestadores de serviços interessados no projeto Turismo Cidadão ainda está disponível. Veja aqu. </p>
                <p>O  voucher não é reembolsável e deverá ser utilizado uma única vez, sem a possibilidade de troco, ou seja, caso o valor for menor que o do voucher, não será possível obter a diferença. É importante também verificar o horário de funcionamento do estabelecimento antes de se dirigir ao local.</p> 
                
                <p>Veja abaixo a relação preliminar dos empreendimentos cadastrados.</p>
                <p>Obs.: Essa lista poderá ser ampliada no decorrer do programa.</p>

                <h4 style="text-align:center;<p>"><b>AGÊNCIAS DE TURISMO</b></h4><br/>

                <p><b>ATHENAS VIAGENS E TURISMO</b></p>
                <p><b>Endereço:</b> Av. Afonso Pena, 1185</p>
                <p>Tirol – Natal/RN, CEP: 59020-265</p>
                <p><b>Contato:</b> (84) 3221-2626 / 99981-1303 – Karla (84) 84 98845-0140</p>
                <p><b>Instagram:</b> @athenasturismo</p>
                <p><a href="https://www.instagram.com/athenasturismo/" target="_blank">@athenasturismo</a></p>

                <p><b>TEAM DA SERRA ECOTURISMO</b></p>
                <p><b>Endereço:</b> Rua Renato Dantas, 27</p>
                <p>Acampamento – Caicó/RN, CEP: 59.300-000.</p>
                <p><b>Contato:</b> (84) 99820-1132</p>
                <p><b>Instagram:</b> @teamdaserra</p>
                <p><a href="capacitacoes.blade.php" target="_blank">@teamdaserra</a></p>

                <p><b>MICHELLE TOUR</b></p>
                <p><b>Endereço:</b> Av. Rui Barbosa, 911</p>
                <p>Tirol – Natal/RN, CEP: 59.015-290.</p>
                <p><b>Contato:</b> (84) 4009-0677</p>
                <p><b>Instagram:</b> @michelletourrn</p>
                <p><a href="https://www.instagram.com/michelletourrn/" target="_blank">@michelletourrn</a></p>

                <p><b>CACKTUR VIAGENS</b></p>
                <p><b>Endereço:</b> ET PARA CATRE, 77 Ap. 302, Residencial Vida EcocilEcopark</p>
                <p>Emaus -Parmanirim/RN, CEP: 59148-520.</p>
                <p><b>Contato:</b> (84) 99700-1606</p>
                <p><b>Instagram:</b> @cacktur.viagens</p>
                <p><a href="https://www.instagram.com/cacktur.viagens/" target="_blank">@cacktur.viagens</a></p>

                <p><b>SUNLINE</b></p>
                <p><b>Endereço:</b> Av. Prudente de Morais, 1195, Loja 01</p>
                <p>Tirol – Natal/RN, CEP: 59020-505</p>
                <p><b>Contato:</b> (84) 3211-5919</p>
                <p><b>Instagram:</b> @sunlinetur</p>
                <p><a href="https://www.instagram.com/sunlinetur/" target="_blank">@sunlinetur</a></p>

                <p><b>TANTAN</b></p>
                <p><b>Endereço:</b> Rua Walfredo Gurgel, 22</p>
                <p>Martins/ RN, CEP: 59800-000</p>
                <p><b>Contato:</b> (84) 99844-9561</p>
                <p><b>Instagram:</b> @fiquetantan_ecotur</p>
                <p>https://instagram.com/fiquetantan_ecotur/</p>

                <br/><h4 style="text-align:center;<p>"><b>BARES E RESTAURANTES</b></h4><br/>

                <p><b>CAICOENSE RESTAURANTE – NATAL SHOPPING</b></p>
                <p><b>Endereço:</b> Av Senador Salgado Filho, 2234, Loja 146, Candelária, Natal/RN – CEP: 59.064-000</p>
                <p><b>Contato:</b> (84) 2226-8220</p>
                <p><b>Instagram:</b> @caicoenserestaurante</p>
                <p><a href="https://instagram.com/caicoenserestaurante?utm_medium=copy_link" target="_blank">@caicoenserestaurante</a></p>

                <p>CALÍGULA NATAL</p>
                <p><b>Endereço:</b> Rua Jundiaí, 438, Loja 01 – Loja 02 – Loja 21</p>
                <p>Tirol – Natal/RN, CEP: 59020-120</p>
                <p><b>Contato:</b> (84) 2010-0771 – Reginaldo (84) 99934-5317</p>
                <p><b>Instagram:</b> @caligulanatal</p>
                <p><a href="https://www.instagram.com/caligulanatal/" target="_blank">@caligulanatal</a></p>

                <p><b>CAMARÕES DELIVERY</b></p>
                <p><b>Endereço:</b> Rua Dr. Israel Nunes, 462</p>
                <p>Nova Descoberta – Natal/RN, CEP: 59056-370</p>
                <p><b>Contato:</b> (84) 2010-4040</p>
                <p><b>Instagram:</b> @camaroesnatal</p>
                <p><a href="https://instagram.com/camaroesnatal" target="_blank">@camaroesnatal</a></p>

                <p><b>CAMARÕES MIDWAY</b></p>
                <p><b>Endereço:</b> Av. Nevaldo Rocha, 3775, Loja 302 – Bloco L3</p>
                <p>Tirol – Natal/RN, CEP: 59015-900</p>
                <p><b>Contato:</b> (84) 2010-2424</p>
                <p><b>Instagram:</b> @camaroesnatal</p>
                <p><a href="https://instagram.com/camaroesnatal" target="_blank">@camaroesnatal</a></p>

                <p><b>CAMARÕES NATAL SHOPPING</b></p>
                <p>Endereço: Av. Senador Salgado Filho, 2234, Loja 106-108</p>
                <p>Candelária – Natal/RN, CEP: 59064-900</p>
                <p>Contato: (84) 3235-8280</p>
                <p>Instagram: @camaroesnatal</p>
                <p><a href="https://instagram.com/camaroesnatal" target="_blank">@camaroesnatal</a></p>

                <p><b>CAMARÕES POTIGUAR</b></p>
                <p>Endereço: Rua Pedro Fonseca Filho, 8887</p>
                <p>Ponta Negra – Natal/RN, CEP: 59090-080</p>
                <p>Contato: (84) 3209-2425</p>
                <p>Instagram: @camaroesnatal</p>
                    <p><a href="https://instagram.com/camaroesnatal" target="_blank">@camaroesnatal</a></p>

                <p><b>CAMARÕES RESTAURANTE</b></p>
                <p>Endereço: Av. Engenheiro Roberto Freire, 3980</p>
                <p>Ponta Negra – Natal/RN, CEP: 59094-410</p>
                <p>Contato: (84) 3209-2424</p>
                <p>Instagram: @camaroesnatal</p>
                    <p><a href="https://instagram.com/camaroesnatal" target="_blank">@camaroesnatal</a></p>

                <p><b>DON MATIAS PARILLA</b></p>
                <p>Endereço: Av. Praia de Ponta Negra, 8888</p>
                <p>Ponta Negra – Natal/RN, CEP: 59094-100.</p>
                <p>Contato: (84) 9629-6376 – Juliana (84) 98869-8565</p>
                <p>Instagram: @donmatiasparrilla</p>
                    <p><a href="https://www.instagram.com/donmatiasparrilla/" target="_blank">@donmatiasparrilla</a></p>

                <p><b>GOSTOSO SABOR</b></p>
                <p>Endereço: Av. São Miguel dos Caribes, 4448</p>
                <p>Neópolis – Natal/RN, CEP:59088-500</p>
                <p>Contato: (84) 3217-0949 / (84) 99656-5383</p>
                <p>Instagram: @gostososabor</p>
                    <p><a href="https://instagram.com/gostososabor" target="_blank">@gostososabor</a></p>

                <p><b>MACOCO – COZINHA ARTESANAL</b></p>
                <p>Endereço: Rua dos Bem-te-vis, 34</p>
                <p>Praia de Pipa – Tibau do Sul/RN, CEP: 59.178-000.</p>
                <p>Contato: (84) 99142-5666/(84) 99159-4602</p>
                <p>Instagram: @restaurante_macoco</p>
                    <p><a href="https://instagram.com/restaurante_macoco" target="_blank">@restaurante_macoco</a></p>

                <p><b>MOZZARELLA PIZZAS</b></p>
                <p>Endereço: Av.Senador Salgado Filho, 1853</p>
                <p>Lagoa Nova – Natal/RN, CEP: 59056-000</p>
                <p>Contato: (84) (84) 3234-1212 / 3234-2424</p>
                <p>Instagram: @mozzarellapizzas_</p>
                    <p><a href="https://www.instagram.com/mozzarellapizzas_/" target="_blank">@mozzarellapizzas_</a></p>

                <p><b>NEMO SUSHI</b></p>
                <p>Endereço:Av. Senador Salgado Filho, 2234, Loja 309</p>
                <p>Candelária – Natal/RN, CEP: 59064-900</p>
                <p>Contato: (84) 4007-2684</p>
                <p>Instagram: @siganemo</p>
                    <p><a href="https://www.instagram.com/siganemo" target="_blank">@siganemo</a></p>

                <p><b>NEMO SUSHI (UNIDADE CIDADE VERDE)</b></p>
                <p>Endereço: Av. Ayrton Senna, 1995, Shopping Cidade Verde -Loja 03 e 04</p>
                <p>Nova Parnamirim – Parnamirim/RN, CEP: 59151-610</p>
                <p>Contato: (84) 99850-8296</p>
                <p>Instagram: @siganemo</p>
                    <p><a href="https://www.instagram.com/siganemo" target="_blank">@siganemo</a></p>

                
            </div>
            
        </div>
    </section>

@endsection
    
