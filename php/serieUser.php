<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/filmes_adm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Séries - Neoxtv</title>
</head>
<body class="dark_background">
<?php session_start(); ?> 
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navegador dark_background">
    <div class="container-lg">
        <a class="navbar-brand" href="#">
          <img src="../img/neoxtv.png" alt="" width="140" height="50">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="filmeUser.php">Filmes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Séries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Minha Lista</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Gêneros
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#fc">Ficção científica</a></li>
              <li><a class="dropdown-item" href="#mi">Mistério</a></li>
            </ul>
          </li>
          <span class="navbar-text">
          Perfil <?php echo $_SESSION['nome'];?>
          </span>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/casaDoDragao_movi.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>A Casa do Dragão (2022)</h5>
                <p>200 anos antes dos eventos de "Game of Thrones", os Targaryen estavam no ápice de seu poder, tendo inúmeros dragões sob seu comando, mas nem tudo dura para sempre. O início do fim da dinastia Targaryen.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img src="../img/senhorDosAneis_movi.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>O Senhor dos Anéis: Os Anéis de Poder (2022)</h5>
                <p>Tendo início em uma época de relativa paz, a série acompanha um grupo de personagens que enfrenta o ressurgimento do mal na Terra-média.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img src="../img/gmThrones_movi.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Game of Thrones (2011)</h5>
                <p>Em uma terra onde os verões podem durar vários anos e o inverno toda uma vida, sete nobres famílias lutam pelo controle da mítica terra de Westeros, dividida depois de uma guerra.</p>
              </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <br><br>
      <br><br>

    <div class="container" id="fc">
        <h3>Ficção científica</h3>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-md-2">
              <a href="series_user/vanHelsing.php">
                <img src="../img/vanHelsing_fc.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
          <div class="col-md-2">
              <a href="series_user/chamed.php">
                <img src="../img/chamed_fc.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="series_user/teenWolf.php">
                <img src="../img/teenWolf_fc.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="series_user/rodaTempo.php">
                <img src="../img/rodaDoTempo_fc.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="series_user/dark.php">
                <img src="../img/dark_fc.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="series_user/ragnarok.php">
                <img src="../img/ragnarok_fc.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
        </div>
    </div>
  
    <div class="container" id="mi">
    <br>
        <h3>Mistério</h3>
    </div>
    
    <div class="container">
        <div class="row">
        <div class="col-md-2">
              <a href="series_user/trIncognita.php">
                <img src="../img/trIncognita_mi.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="series_user/1899.php"> 
                <img src="../img/1899_mi.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="series_user/domo.php">
                <img src="../img/domo_mi.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="series_user/ohio.php"> 
                <img src="../img/ohio_mi.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="series_user/sobrenatural.php">
                <img src="../img/sobrenatural_mi.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="series_user/blackM.php">
                <img src="../img/blackMirror_mi.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
        </div>
        <br><br>
    </div>


<?php
?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>