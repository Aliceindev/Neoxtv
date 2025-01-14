<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/add.css">
    <link rel="stylesheet" href="../css/listar.css">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Adicionar - Séries</title>
</head>
<body>

<?php session_start(); ?> 

  <nav class="navbar navbar-expand-lg navbar-dark config">
  <a class="navbar-brand" href="#">NEOXTV</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="listadoSerie.php">Listados <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="serieAdmin.php">Sair</a>
      </li>
       
    </ul>

  </div>

  <div class="collapse navbar-collapse" id="navbarNav">  
 
    <span class="navbar-text">
      Bem vindo. <?php echo $_SESSION['nome'];?>
    </span>
 
</div>

</nav>
    <div class="main">
        <div class="register">
            <form id="register" method="POST" action="customerAddS.php" enctype="multipart/form-data">
                <h2>Adicionar Séries</h2>
                <label>Nome da Série</label>
                <br>
                <input type="text" name="nome_s" id="name" placeholder="Digite o nome da série" required>
                <br><br>

                <label>Ano de Publicação</label>
                <br>
                <input type="number" name="ano_public_s" id="name" placeholder="Digite o ano de publicação da série" required>
                <br><br>

               <label>Gênero</label>
                <br>

                <select class="select" name="genero_s">
                    <option value="Ficção científica">Ficção científica</option>
                    <option value="Mistério">Mistério</option>
                 </select>

                <br><br>

                <label>Classificação Etaria</label>
                <br>
                <input type="number" name="cla_etaria_s" id="name" placeholder="Digite a classificação ex: 18" required>
                <br><br>

                <label>Quantidade de Episódios</label>
                <br>
                <input type="number" name="total_eps_s" id="name" placeholder="quantidade de episódios ex: 24" required>
                <br><br>

                <label>Quantidade de temporadas</label>
                <br>
                <input type="number" name="total_temp_s" id="name" placeholder="quantidade de temporadas ex: 2" required>
                <br><br>

                <label>Link do trailer</label>
                <br>
                <input type="text" name="link_s" id="name" placeholder="anexar o link" maxlength="500" required>
                <br><br>

                <label>Descrição</label>
                <br>
                <textarea id="desc" name="descricao_s" rows="5" cols="33" maxlength="1000" placeholder="Descrição da série" required></textarea>
                <br><br>

                <label>Capa(.jpg)</label>
                <br>
                <input type="file" name="capa_s" id="" required>
                <br><br>

                <input type="submit" value="Adicionar" name="submit" id="submit">
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>