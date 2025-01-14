
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
    <title>Adicionar - Filmes</title>
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
        <a class="nav-link" href="listadoFilme.php">Listados <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="filmeAdmin.php">Sair</a>
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
            <form id="register" method="POST" action="customerAdd.php" enctype="multipart/form-data">
                <h2>Adicionar Filmes</h2>
                <label>Nome do Filme</label>
                <br>
                <input type="text" name="nome_f" id="name" placeholder="Digite o nome do filme" required>
                <br><br>

                <label>Ano de Publicação</label>
                <br>
                <input type="number" name="ano_public_f" id="name" placeholder="Digite o ano de publicação do filme" required>
                <br><br>

                <label>Gênero</label>
                <br>

                <!--&nbsp; &nbsp; &nbsp;
                <input type="radio" id="tr" name="genero_f" value="Terror">
                &nbsp;
                <label for="tr">Terror</label>
                &nbsp; &nbsp; &nbsp;&nbsp;
                <input type="radio" id="ac" name="genero_f" value="Ação e Aventura">
                &nbsp;
                <label for="ac">Ação e Aventura</label>
                !-->

                <select class="select" name="genero_f">
                    <option value="Terror">Terror</option>
                    <option value="Ação">Ação</option>
                 </select>
                
                <br><br>

                <label>Classificação Etaria</label>
                <br>
                <input type="number" name="cla_etaria_f" id="name" placeholder="Digite a classificação ex: 18" required>
                <br><br>

                <label>Link do trailer</label>
                <br>
                <input type="text" name="link_f" id="name" placeholder="anexar o link" maxlength="500" required>
                <br><br>

                <label>Descrição</label>
                <br>
                <textarea id="desc" name="descricao_f" rows="5" cols="33" maxlength="1000"  placeholder="Descrição do Filme" required></textarea>
                <br><br>

                <label>Capa(.jpg)</label>
                <br>
                <input type="file" name="capa_f" id="capa">
                <br><br>

                <input type="submit" value="Adicionar" name="submit" id="submit">
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
