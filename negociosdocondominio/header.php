<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title></title>

  <!-- Jaque CSS -->
  <link href="css/jaque.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="source/navbars/navbar.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="header ">
    <div class="container">
      <div class="row ">
        <div class="col-sm-3 logotem "> <a class="nav-link active" aria-current="page" href="login.php"><img src="images/logo.svg" class="logo" width="130px">
            <!-- <h1 class="logotexto">Negócios do condominio </h1> -->
          </a></div>
        <div class="col-sm-9 align-self-end ">
          <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
              <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                  <li class="nav-item"> <a class="nav-link" href="busca.php" style="text-transform: uppercase; font-size: 12pt;">Buscar</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="cadastro.php" style="
                    text-transform: uppercase;
                    font-size: 12pt;">Cadastro Morador</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="cadastro-servicos.php" style="
                    text-transform: uppercase;
                    font-size: 12pt;">Cadastro Serviços</a> </li>
                  <li class="nav-item" style="
                    text-transform: uppercase; font-size: 12pt;"> <a class="nav-link" href="perfil.php">Perfil</a> </li>
                  <!-- <input class="form-control form-control-sm" type="search" placeholder="Search" aria-label="Search"> 
                <a class="btn me-2 btn btn-primary" href="busca.php">Buscar</a> -->
                </ul>
              </div>
              <?php if (isset($row[0]['imagem']) && $row[0]['imagem'] != '') : ?>
                <div class="dropdown text-end"> <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle text-white" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"> <img src="<?php echo $row[0]['imagem'] ?>" alt="mdo" width="32" height="32" class="rounded-circle"> </a>
                <?php else : ?>
                  <div class="dropdown text-end"> <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle text-white" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"> <img src="./images/images.jpeg" alt="mdo" width="32" height="32" class="rounded-circle"> </a>
                  <?php endif ?>

                  <!-- <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="cadastro.php">Cadastro Morador</a></li>
                <li><a class="dropdown-item" href="cadastro-servicos.php">Cadastro Serviços</a></li>
                <li><a class="dropdown-item"  href="perfil.php">Perfil</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="login.php">Login</a></li>
              </ul> -->
                  </div>
                </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  </div>