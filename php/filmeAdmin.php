<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/filmes_adm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Filmes - Neoxtv</title>
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
            <a class="nav-link" href="adminHome.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Filmes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="serieAdmin.php">Séries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Minha Lista</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Gêneros
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#terror">Terror</a></li>
              <li><a class="dropdown-item" href="#acao">Ação e Aventura</a></li>
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
            <img src="../img/groot_movi.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Os Primeiros Passos de Groot (2022)</h5>
                <p>Baby Groot finalmente está pronto para tentar dar seus primeiros passos fora de seu vaso, aprendendo que se deve andar antes de correr.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img src="../img/sonic_movi.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Sonic 2 - O Filme (2022)</h5>
                <p>Depois de se estabelecer em Green Hills, Sonic está pronto para mais liberdade e deixar sua marca como um herói, e Tom e Maddie concordam em deixá-lo em casa enquanto vão de férias. E juntos eles embarcam em uma jornada para encontrar a esmeralda antes que ela caia nas mãos erradas.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img src="../img/fera_movi.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Red: Crescer é Uma Fera (2022)</h5>
                <p>Mei, de treze anos, está experimentando a estranheza de ser uma adolescente com uma reviravolta – quando ela fica muito animada, ela se transforma em um panda vermelho gigante.</p>
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
    <div class="container">
      <div class="row">
     <form action="listadoFilme.php" method="post">
      <div class="col col-md-2"> 
        <button type = "submit" class="btn btn-warning btn-xs " data-toggle="modal" data-target="#delete-modal">
        <svg class="bi bi-file-earmark-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h5v-1H4a1 1 0 01-1-1V3a1 1 0 011-1h5v2.5A1.5 1.5 0 0010.5 6H13v2h1V6L9 1z"/>
        <path fill-rule="evenodd" d="M13.5 10a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13v-1.5a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
        <path fill-rule="evenodd" d="M13 12.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd"/>
      </svg> Filmes listados</button> 
      </div>
     </form>
      <br><br><br>

    <div class="container" id="terror">
        <h3>Terror</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
              <a href="filmes/telefonePreto.php"> 
              <img src="../img/telefonePreto_terror.jpg" class="img-fluid rounded" alt="">
              </a>      
            </div>
            <div class="col-md-2">
              <a href="filmes/jackBox.php"> 
              <img src="../img/jackBox_terror.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="filmes/exSagrado.php">
              <img src="../img/exorcismoSagrado_terror.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="filmes/aAvo.php">
              <img src="../img/aAvo_terror.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="filmes/halloween.php">
              <img src="../img/halloweenEnds.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="filmes/terrifier.php">
              <img src="../img/terrifier2.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
        </div>
    </div>
  
    <div class="container" id="acao">
    <br>
        <h3>Ação e Aventura</h3>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-2">
              <a href="filmes/projAdam.php"> 
              <img src="../img/projetoAdam_acao.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="filmes/moonfall.php">
              <img src="../img/moonfall_acao.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="filmes/guerraAmh.php">
              <img src="../img/guerraDoAmanha_acao.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="filmes/jurassicW.php">
              <img src="../img/jurassicWorld_acao.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="filmes/avatarCaminho.php">
              <img src="../img/avatar_acao.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
            <div class="col-md-2">
              <a href="filmes/circuloFogo.php">
              <img src="../img/circuloDeFogo_acao.jpg" class="img-fluid rounded" alt="">
              </a>
            </div>
        </div>
        <br><br>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>