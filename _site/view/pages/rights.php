<?php 
include_once('../../controller/connection.php');
session_name(md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iHuman</title>
    <link rel="icon" 
      type="image/jpg" 
      href="http://localhost/iHuman/_site/media/images/unicorn.png" />
    <link rel="stylesheet" href="http://localhost/iHuman/_site/media/css/style_video.css">
    <link rel="stylesheet" href="http://localhost/iHuman/_site/media/css/style_nav.css">
    <link rel="stylesheet" href="http://localhost/iHuman/_site/media/css/style_contact.css">
    <link rel="stylesheet" href="http://localhost/iHuman/_site/media/js/style.css">

    <!-- CDN's -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<script src="https://unpkg.com/blip-chat-widget" type="text/javascript"></script>
<script>
    (function () {
        window.onload = function () {
            new BlipChat()
            .withAppKey('dG9tMzoyY2M2YzI1MS02NTJkLTRiNGUtYWFmMC0wNGQzNzBjNjg3MTQ=')
            .withButton({"color":"#2CC3D5","icon":""})
            .build();
        }
    })();
</script>
<!-- Nav -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="http://localhost/iHuman/index.php">
        <img src="http://localhost/iHuman/_site/media/images/unicorn.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <b style="font-weight: bold;">i</b><b style="font-weight: bold;">Human</b>
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="http://localhost/iHuman/_site/view/pages/blog.php">Blog<b style="color: yellow">+</b></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="http://localhost/iHuman/_site/view/pages/about.php">Saiba mais</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="http://localhost/iHuman/_site/view/pages/donate.php">Doar<b style="color: yellow">+</b></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="http://localhost/iHuman/_site/view/pages/rights.php">Defesa dos direitos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="http://localhost/iHuman/_site/view/pages/contact.php">Contato</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="http://localhost/iHuman/_site/view/pages/mapa.php">Onde nos encontrar</a>
          </li>
          <div class="btn-group">
            <button type="button" class="btn btn-warning drop">Deficiências</button>
            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Auditiva</a>
                <a class="dropdown-item" href="#">Visual</a>
                <a class="dropdown-item" href="#">Intelectual</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Outras</a>
            </div>
          </div>
        </ul>
        <!-- CONDIÇÕES DE ACESSO DO USUÁRIO - ADM x != 0 -->
        <?php 
							if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['paswd']) == true)){
								echo '<a href="http://localhost/iHuman/_site/model/form_login.php"><button type="button" class="btn btn-outline-light log" name="log">Login</button></a>';
							}
							else if(($_SESSION['email'] == true) and ($_SESSION['paswd'] == true)) {
                //foto e sair -- se estiver logado e for ADM
                $foto_tmp = $_SESSION['profile'];
                //echo $foto_tmp;
                $exibir = "<a href='http://localhost/iHuman/_site/home.php'><img src='".$foto_tmp."' alt=' 'class='rounded-circle' width='30' height='30'></a>";
                echo $exibir;
                //echo '<img src="$foto_tmp" alt=" " class="rounded-circle">';
                echo '<a href="http://localhost/iHuman/_site/controller/_auth/logout.php"><button type="button" class="btn btn-outline-light log" name="log">Logout</button></a>';
                //definição do botão de ADM
                if(($_SESSION['class'] == 1) and ($_SESSION['email'] == true)){
                  echo '<a href="http://localhost/iHuman/_site/view/admin.php"><button type="button" class="btn btn-outline-light log" name="adm" style="color: #44A1F2 !important;">ADM</button></a>';
                }
                
							}
						?>
        <!-- <a href="http://localhost/iHuman/_site/model/form_login.php"><button type="button" class="btn btn-outline-light log" name="log">Login</button></a>-->
      </div>
    </div>
  </nav>
<!--
  <div class="overlay"></div>
  <img src="http://localhost/iHuman/_site/media/images/1_rainbow.jpg" style="width: 100%; height: auto; display: inline-block; position: relative">

<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <center><img src="http://localhost/iHuman/_site/media/images/unicorn.png" style="width: 200px; height: auto;"></center>
        <br>
        <br>
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.2444638858574!2d-46.93277828553556!3d-22.344396385300676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c856f0dd034083%3A0x9a3c1f8c167a3ac1!2sEscola%20T%C3%A9cnica%20Estadual%20Euro%20Albino%20de%20Souza!5e0!3m2!1spt-BR!2sbr!4v1574041889575!5m2!1spt-BR!2sbr" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" style="border-radius: 20px;"></iframe>
      </div>
    </div>
  </div>
</section>
        -->
<div class="overlay"></div>
  <div class="container contact-form">
            <div class="contact-image">
                <img src="http://localhost/iHuman/_site/media/images/unicorn.png"/>
            </div>
            <form method="POST">
                <h3>​​​​​​​​Para o desafio da garantia de direitos básicos, a Organização utiliza estratégias no campo da Promoção, Proteção, Defesa e Garantia de Direitos da pessoa com Deficiência Intelectual.</h3>
        </form>

            <div class="row">
  <div class="col-sm-6">
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Quais são os direitos de uma pessoa com deficiência intelectual?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      A pessoa com deficiência intelectual tem os mesmos direitos que todos os outros cidadãos. Ela tem direito a frequentar a escola regular e deve receber apoio da escola para superar as suas dificuldades/necessidades. Tem direito aos serviços de saúde, aos recursos da comunidade  e a oportunidades de trabalho.

Contudo existem alguns benefícios, que podem ser requeridos pela pessoa com deficiência.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Benefício de Prestação Continuada (BPC-LOAS)
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      ​O Benefício de Prestação Continuada é um benefício assistencial previsto na Lei Orgânica de Assistência Social, Lei 8.742 de 07/12/1993.

Consiste no pagamento mensal de um salário mínimo às pessoas com deficiência, cuja renda familiar per capita (por pessoa) não ultrapasse ¼ do valor do salário mínimo (atualmente valor máximo de R$ 238,00 por pessoa).

Como solicitar?
Para solicitar o BPC é preciso realizar o Cadastro Único no CRAS (Centro de Referência de Assistência Social), agendar perícia no INSS (telefone 135), comparecer na data agendada com os documentos de todos que residem na mesma casa com a pessoa com deficiência (RG, CPF, Carteira de Trabalho, comprovantes de salário, comprovante de residência e o NIS (nº do Cadastro Único) e o laudo médico que comprove a deficiência. Após a perícia social e médica, aguardar resposta.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Isenção de IPVA
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      ​Procedimento destinado a atender pedidos de isenção do IPVA para um único veículo de propriedade de pessoa com deficiência física, visual, mental severa ou profunda, ou autista, nos termos da legislação vigente. A isenção será concedida para apenas um único veículo de propriedade do interessado, independente do motivo que a ensejou.

Como solicitar?
A isenção deve ser solicitada por meio eletrônico diretamente no portal da Secretaria da Fazenda do Estado de São Paulo. O acesso ao serviço é feito por meio de certificação digital ou mediante a utilização do usuário e senha do sistema da Nota Fiscal Paulista.

Após acessar o sistema:
Selecionar Novo Requerimento.
Selecionar e Preencher o formulário Requerimento de Concessão de Isenção do IPVA para taxista ou pessoa com deficiência física, visual ou mental ou autista .
Quando o sistema solicitar, carregar cada um dos documentos.

Caso o sistema esteja fora do ar, entrar em contato pelo telefone 0800-170110 para orientação.
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="col-sm-6">
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Isenção de IPI
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      Destinado a pessoas com deficiência, autismo e doenças previstas e descritas no site da Receita Federal. Para pessoas com deficiência intelectual, somente os diagnósticos grave ou severa são aceitos para este benefício.

Como solicitar?
A isenção deve ser solicitada por meio eletrônico diretamente no portal da Secretaria da Fazenda do Estado de São Paulo. Acessar: http://idg.receita.fazenda.gov.br/interface/lista-de-servicos/isencao/deficiente-autista

Importante: é necessário que o laudo de avaliação seja emitido por prestador de serviço público de saúde, por serviço privado de saúde, contratado ou conveniado, que integre o Sistema Único de Saúde (SUS), pelo Detran ou por suas clínicas credenciadas, ou por intermédio de serviço social autônomo, sem fins lucrativos, criado por lei, caso não tenha sido emitido laudo de avaliação eletrônico.

Formulários: http://idg.receita.fazenda.gov.br/orientacao/tributaria/isencoes/isencao-ipi-iof-pessoas-fisicas
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Gratuidade no Sistema de Transporte Interestadual - PASSE LIVRE
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      Este benefício é utilizado para viagens para outros estados do Brasil, em viagens de ônibus ou trem. Não dá direito a passagens de avião. É concedido a pessoas com deficiência cuja renda per capita familiar é igual ou menor que um salário mínimo.

Como solicitar?
O interessado deve imprimir os formulários pelo site www.transportes.gov.br/conteudo/2761-formularios-para-requisicao-passe-livre.html

O atestado da equipe multiprofissional deve ser preenchido por um médico e outro profissional da saúde de Unidades SUS ou organizações conveniadas.

Caso a pessoa com deficiência necessite de acompanhante, está informação deve constar no relatório. Prazo de validade do laudo: 30 dias

Enviar em um só envelope: o atestado da equipe multiprofissional + requerimento + formulário de acompanhante (estes dois últimos preenchidos pela família), cópias do RG dos moradores da mesma casa que a pessoa com deficiência, foto 3X4 da pessoa com deficiência e do acompanhante (se for solicitado) para:              

Ministério dos Transportes, Caixa Postal 9.600 - CEP 70.040-976 - Brasília (DF)., pelos Correios.

Aguardar o bilhete ou resposta do Ministério pelos Correios.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          ATENDE
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      O Serviço de Atendimento Especial é uma modalidade de transporte gratuito, porta a porta, destinado às pessoas com autismo, surdocegueira ou deficiência física severa.

Como solicitar?
O passageiro ou seu responsável deve comparecer a um Posto de Atendimento da SPTrans e retirar a Ficha de Avaliação Médica ou imprimi-la no SITE: http://www.sptrans.com.br/pdf/bilhete_unico/FAM.pdf

Encaminhar a Ficha ao médico que acompanha a pessoa com deficiência. O profissional é de livre escolha do usuário. No caso de pessoas com autismo, a Ficha de Avaliação Médica deverá ser preenchida por médico e terapeuta que acompanha o tratamento.

Entregar a Ficha preenchida em Postos de Atendimento da SPTRANS, com cópia dos documentos pessoais (da pessoa com deficiência e seu responsável) e informar a programação dos atendimentos que necessita. A documentação será avaliada pela SPTRANS, quanto ao perfil exigido e, caso a inscrição seja aceita, o passageiro ou seu responsável receberá carta com o resultado da inscrição.

     
      </div>
    </div>
  </div>
</div>
</div>

    </div>
</div>
<!-- INCLUSÃO DO FOOTER -->
<!-- Footer -->
<footer class="page-footer font-small indigo" style="background-color: #F20F8C; color: #fff !important;">

  <!-- Footer Links -->
  <div class="container">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="http://localhost/iHuman/_site/view/pages/about.php" style="color: #fff !important;">Saiba Mais</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="http://localhost/iHuman/_site/view/pages/blog.php" style="color: #fff !important;">Blog<b style="color: yellow">+</b></a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="http://localhost/iHuman/_site/view/pages/donate.php" style="color: #fff !important;">Doar<b style="color: yellow">+</b> </a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="http://localhost/iHuman/_site/view/pages/rights.php" style="color: #fff !important;">Defesa dos Direitos</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="http://localhost/iHuman/_site/view/pages/mapa.php" style="color: #fff !important;">Mapa</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="http://localhost/iHuman/_site/view/pages/contact.php" style="color: #fff !important;">Contato</a>
        </h6>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5">
        <p style="line-height: 1.7rem">Faça parte da nossa história, torne-se um iHuman e ajude a deixar o mundo de crianças deficientes cada vez mais colorido.</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    <!-- Grid row-->
    <div class="row pb-3">

      <!-- Grid column -->
      <div class="col-md-12">

        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text"> </i>
          </a>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="http://localhost/iHuman/index.php"> iHuman.org</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>