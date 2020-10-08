<!DOCTYPE html>
<html lang="en">
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
</head>
<body>
    <!-- CABECALHO -->
    <header>
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-2 offset-md-0 col-6 offset-3 mb-5 mb-sm-0">
                    <div class="logo">
                        <a href="index.php">
                        <img src="./img/imagologo.svg" alt="Logo Nav Bar" class="img-fluid logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-9 d-flex justify-content-center align-items-center">
                    <form class="search-form clearfix w-75 d-flex justify-content-center mx-auto" action="./produto-busca.php">
                        <input type="text" class="form-control search" placeholder="Minha busca">
                        <button type="submit" class="btn btn-sm btn-outline-secondary pl-3 pr-3 ml-2"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="col-md-1 login-col d-flex align-items-center">
                  <div class="wrapper w-100 login">
                    <a href="login.php" title="login"><i class="fa fa-user"></i></a>
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
                  <li class="nav-item mobile">
                      <a class="nav-link" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="cesta.php">Cesta</a>
                  </li>
              </ul>
          </div>
          <a class="desktop navbar-right pr-3 login-navbar" href="login.php" title="login"><i class="fa fa-user"></i></a>
      </div>
  </nav>