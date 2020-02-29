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
            <a class="nav-link js-scroll-trigger" href="#blog">Blog<b style="color: yellow">+</b></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="#about">Saiba mais</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="#rights">Defesa dos direitos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="#map">Onde nos encontrar</a>
          </li>
          <div class="btn-group">
            <button type="button" class="btn btn-warning drop">Deficiências</button>
            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
            </div>lass="nav-link js-scroll-trigger" href="#def">Deficiencias</a>
          </li>
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
                $exibir = "<img src='".$foto_tmp."' alt=' 'class='rounded-circle' width='30' height='30'>";
                echo $exibir;
                //echo '<img src="$foto_tmp" alt=" " class="rounded-circle">';
                echo '<a href="http://localhost/iHuman/_site/controller/_auth/logout.php"><button type="button" class="btn btn-outline-light log" name="log">Logout</button></a>';
                
							}
						?>
      </div>
    </div>
  </nav>