<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/info.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Série Sobrenatural - Neoxtv</title>
</head>
<body class="dark_background">
  <?php session_start(); ?> 
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navegador dark_background">
    <div class="container-lg">
        <a class="navbar-brand" href="#">
          <img src="../../img/neoxtv.png" alt="" width="140" height="50">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link" href="../home.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../filmeUser.php">Filmes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active"  aria-current="page" href="../serieUser.php">Séries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Minha Lista</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Gêneros
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item"  href="#">...</a></li>
              <li><a class="dropdown-item" href="#">...</a></li>
            </ul>
          </li>
          <span class="navbar-text">
          Perfil <?php echo $_SESSION['nome'];?>
          </span>
          <li class="nav-item">
            <a class="nav-link" href="../logout.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <br><br><br><br><br>

      <section id="about" class="about-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="abount-img">
                        <img src="../../img/sobrenatural_mi.jpg" alt="" class="img-fluid rounded" id="tam">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>Sobrenatural</h2>
                        <h4>2005 | Mistério </h4>
                        <h4>Classificação etária 16 anos </h4>
                        <h4>Temporadas: 15 | Episódios: 327 </h4>
                        <p>Os irmãos Dean e Sam vasculham o país em busca de atividades paranormais, brigando 
                        com demônios, fantasmas e monstros no caminho.</p>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <div class="container">
        <div class="text">
            <h2>Veja o Trailer abaixo:</h2>
        </div>
        <div class="video">
        <iframe width="1000" height="600" src="https://www.youtube.com/embed/31A0DqX6jHI" 
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
        clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <h5>Video produzido por Adoro Cinema</h5>
        </div>
      </div>

      <br><br>
</body>
</html>