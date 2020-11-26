<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de vendas</title>
        <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">

    <link rel="icon" href="img/favicon.png" />

    <meta name="robots" content="noindex">

</head>
<body>
    <!-- CABECALHO -->
    <header>
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-2 offset-md-0 col-6 offset-3 mb-5 mb-sm-0">
                    <div class="logo">
                        <a href="index.php">
                            <img src="./img/imagologo.svg" alt="Logo Nav Bar" class="img-fluid logo mb-5">
                        </a>
                    </div>
                </div>

                <div class="col-md-9 d-flex justify-content-center align-items-center">
                    <form class="search-form clearfix d-flex justify-content-center mx-auto" method="post" action="./produto-busca.php">
                        <input type="text" class="form-control search" name="title" id="searchForm" placeholder="Minha busca" required>
                        <button type="submit" name="searchBt" onclick="validateSearch();" class="btn btn-sm btn-outline-secondary pl-3 pr-3 ml-2"><i class="fa fa-search"></i></button>
                    </form>
                </div>

                <div class="col-md-1 login-col d-flex align-items-center">
                  <div class="wrapper w-100 login text-center d-flex align-items-center">
                  <?php
                        session_start();
                        if(isset($_SESSION["name"])==false) { 
                            echo '<a href="login.php" class="logar-icone"><i class="fa fa-user d-block"></i><span class="d-block">logar</span></a>';
                         }
                        else {
                            echo '<a href="login.php" class="logar-icone pr-3 border-right"><i class="fa fa-shopping-basket d-block"></i><span class="d-block">comprar</span></a>';
                            echo '<a href="logoff.php" class="logar-icone pl-3"><i class="fa fa-user d-block"></i><span class="d-block">deslogar</span></a>';
                        }
                    ?>  
                  </div>
                </div>
            </div>
        </div>   
    </header>
    <!-- MENU -->
    <nav class="navbar navbar-expand-md w-100 white menu pt-1 pb-2 pl-0 pr-0 border border-right-0 border-left-0" id="menu">
      <div class="container-fluid white">
          <!-- Brand/logo -->
          <a class="mobile navbar-left pl-3" href="./index.php"><img src="./img/logotipo.svg" alt="Logo Nav Bar" class="img-fluid logo-navbar-mobile"></a>
          <a class="desktop navbar-left logo pl-3" href="./index.php"><img src="./img/logotipo.svg" alt="Logo Nav Bar" class="img-fluid logo-navbar"></a>
          
          
          <button class="navbar-toggler navbar-toggler-right mr-sm-4" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <img src="./img/hamburguer.svg" alt="Icone hamburguer" class="img-hamburguer img-fluid w-100">
              </span>
          </button>
          
          <!-- flex foi removido -->
          <div class="collapse navbar-collapse menu-medex justify-content-center" id="navb"> 
              <!-- Links -->
              <ul class="navbar-nav fade-out d-flex justify-content-around w-75 pl-3 pr-3 pl-sm-0 pr-sm-4">
                  <li class="nav-item">
                      <a class="nav-link" href="index.php">Vitrine</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="cadastro.php">Cadastro</a>
                  </li>
                  <?php if(isset($_SESSION["name"])==true) { ?>
                  <li class="nav-item">
                      <form action="./cadastro.php" method="post"><button class="border-0 text-uppercase nav-link bg-transparent button-nav" name="editUser">Alterar</button></form>
                  </li>
                  <?php } ?>
                  <li class="nav-item mobile">
                      <a class="nav-link" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="cesta.php">Cesta <i class="fa fa-shopping-basket"></i></a>
                  </li>
              </ul>
          </div>
            <?php if(isset($_SESSION["name"])==false) { 
                echo '<a class="desktop navbar-right pr-3 login-navbar" href="login.php" title="login">';
                echo '<span class="small text-capitalize">logar</span> <i class="fa fa-user"></i>';
                echo '</a>';
             } 
                else {
                    echo '<a class="desktop navbar-right pr-3 login-navbar" href="logoff.php" title="deslogar">';
                    echo '<span class="small text-capitalize">deslogar</span> <i class="fa fa-user"></i>';
                    echo '</a>';
                }
            ?>  
        </a>
      </div>
  </nav>