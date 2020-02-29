<?php 
include_once('controller/connection.php');
session_name(md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
session_start();

if($_SESSION['email'] != true) {
	header('location:http://localhost/iHuman/index.php');
} 
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

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://localhost/iHuman/_site/media/images/carroussel/1_unicorn.jpg" alt="O mundo mágico de crianças com deficiência" style="max-width: 100%; max-height: auto; width: 100%; height: auto;">
      <div class="carousel-caption d-none d-md-block">
      <h1 style="color: #F20F8C;">Mundos Mágicos?</h1>
    <h3 style="color: #F20F8C;">O mundo mágico de crianças com deficiência</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/iHuman/_site/media/images/carroussel/2_defficient.jpg" alt="O mundo mágico de crianças com deficiência" style="max-width: 100%; max-height: auto; width: 100%; height: auto;">
      <div class="carousel-caption d-none d-md-block">
      <h1>Mundos coloridos</h1>
    <h3>A forma como crianças vêem o mundo</h3>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/iHuman/_site/media/images/carroussel/3_childrens.jpg" alt="Como funciona a mente de crianças deficientes?" style="max-width: 100%; max-height: auto; width: 100%; height: auto;">
      <div class="carousel-caption d-none d-md-block">
      <h1>Deficiência e Infância</h1>
    <h3>Como funciona a mente de crianças deficientes?</h3>
                        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- CARDS DE LISTAGEM DE USUÁRIOS E EVENTOS- -->

<div class="overlay"></div>
  <div class="container contact-form">
            <div class="contact-image">
                <img src="http://localhost/iHuman/_site/media/images/unicorn.png"/>
            </div>
            <form method="POST">
                <h1 style="margin-bottom: 2%; margin-top: -10%; text-align: center; color: #F20F8C;">COMUNIDADE<b style="color: #44A1F2 !important;">+</b></h1>
            </form>


  <div class="card-group">
    <div class="card">
      <img class="card-img-top" src="http://localhost/iHuman/_site/media/images/heroe.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Ver Super-Heróis</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="http://localhost/iHuman/_site/view/pages/def.php"><button type="button" class="btn btn-outline-info" style="background-color: #04D9C4; color: #fff;">Visualizar</button></a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="http://localhost/iHuman/_site/media/images/volunteer.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Ver Voluntários</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <a href="http://localhost/iHuman/_site/view/pages/vol.php"><button type="button" class="btn btn-outline-info" style="background-color: #5864A6; color: #fff;">Visualizar</button></a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="http://localhost/iHuman/_site/media/images/institute.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Ver Instituições</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <a href="http://localhost/iHuman/_site/view/pages/ins.php"><button type="button" class="btn btn-outline-info" style="background-color: #1FBF92; color: #fff;">Visualizar</button></a>
      </div>
    </div>
  </div>        
</div>
<br>
<br>
<!--          
<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <p>The HTML5 video element uses an mp4 video as a source. Change the source video to add in your own background! The header text is vertically centered using flex utilities that are build into Bootstrap 4.</p>
        <p>The overlay color can be changed by changing the <code>background-color</code> of the <code>.overlay</code> class in the CSS.</p>
        <p>Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet.</p>
        <p class="mb-0">
          Created by <a href="https://startbootstrap.com">Start Bootstrap</a>
        </p>
      </div>
    </div>
  </div>
</section>
-->

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