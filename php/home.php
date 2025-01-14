<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/incio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Início - Neoxtv</title>
</head>
<body>    

  <?php session_start(); ?> 
  <?php if ($_SESSION['nome'] == 'admin'){
    header("Location: adminHome.php");

  }?>


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
            <a class="nav-link active"  aria-current="page" href="inicio_user.html">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="filmeUser.php">Filmes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="serieUser.php">Séries</a>
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

    <div class="banner">
        <img src="../img/banner1.jpg" class="bg">

        <div class="content">
            <img id="imagem" src="../img/logo1.png" class="movieTitle">
            <h4>
                <span>2022</span>
                <span><i>16+</i></span>
                <span>4° Temporada</span>
                <span>9 Episódios</span> 
                <span>Mistério</span>
            </h4>
            <p>
                Passada na década de 1980, na cidade fictícia de Hawkings, Stranger Things conta a história de um garoto que desaparece misteriosamente e dos eventos paranormais que se passam em torno desse acontecimento.
            </p>
            <div class="buttons">
                <a href="#" onclick="toggleVideo()"><i class="fa fa-play" id="play_but" aria-hidden="true"></i> Play</a>
                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> Minha Lista</a>
            </div>
        </div>
       <a class="play" onclick="toggleVideo()"><img src="../img/play.png">Assista ao Trailer</a>
    </div>

    <div class="trailer">
        <video src="../img/video.mp4" controls="true"></video>
        <img src="../img/close.png" class="close" onclick="toggleVideo()">
    </div>

</body>
<script src="../js/script.js"></script>
</html>