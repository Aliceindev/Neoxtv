<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/listar.css">
    <link rel="stylesheet" href="../css/add.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>UPDATE - Neoxtv</title>
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

<?php
@include 'conectar.php';

if(!empty($_POST["codeUpdating"])){
    $nome = $_POST['nome_f'];
    $ano = $_POST['ano_public_f'];
    $classificacao = $_POST['cla_etaria_f']; 
    $descricao = $_POST['descricao_f'];
    $link = $_POST['link_f'];
    $genero = $_POST['genero_f'];       
 
    $pasta= "../img/";
    $arquivo= $_FILES['capa_f'];
    $nomeDoArquivo = $arquivo['name'];
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    $path = $pasta . $nomeDoArquivo;
    $capa= move_uploaded_file($arquivo['tmp_name'], $path);
    $id_up = $_POST['codeUpdating'];
   
    $query = "UPDATE filmes SET nome_f='$nome', ano_public_f='$ano', cla_etaria_f='$classificacao', descricao_f='$descricao', link_f='$link', genero_f='$genero', capa_f='$nomeDoArquivo', path='$path' WHERE id_filme=$id_up";
     if (mysqli_query($conn, $query)) {
    ?>
      <?php header("Location: sucesso_upFilme.php?msg=OK");?>
    <?php
    } else {
    ?>
      <div class="alert alert-danger" role="alert">
        <?php echo "<strong> Erro: <strong>" . $query . "<br>" . mysqli_error($conn);?>
      
    <?php
    }
}
  

if (!empty($_POST["dataForUpdating"])){
    $id_up = $_POST['dataForUpdating'];
    
    $query = "SELECT id_filme, nome_f,path,ano_public_f,genero_f,link_f,cla_etaria_f,descricao_f,capa_f FROM filmes WHERE id_filme=$id_up";
    $resultado = mysqli_query($conn,$query);  

    $linha = mysqli_fetch_array($resultado);
?>

<div class="main">
        <div class="register">
            <form id="register" method="POST" action="update.php" enctype="multipart/form-data">
                <h2>Editar Filmes</h2>
                <label>Nome do Filme</label>
                <br>
                <input type="text" name="nome_f" id="name" placeholder="<?php echo $linha['nome_f'];?>" required>
                <br><br>

                <label>Ano de Publicação</label>
                <br>
                <input type="number" name="ano_public_f" id="name" placeholder="<?php echo $linha['ano_public_f'];?>" required>
                <br><br>

                <label>Gênero</label>
                <br>

                <select class="select" name="genero_f">
                    <option value="Terror">Terror</option>
                    <option value="Ação">Ação</option>
                 </select>
                
                <br><br>

                <label>Classificação Etaria</label>
                <br>
                <input type="number" name="cla_etaria_f" id="name" placeholder="<?php echo $linha['cla_etaria_f'];?>" required>
                <br><br>

                <label>Link do trailer</label>
                <br>
                <input type="text" name="link_f" id="name" placeholder="<?php echo $linha['link_f'];?>" maxlength="500" required>
                <br><br>

                <label>Descrição</label>
                <br>
                <textarea id="desc" name="descricao_f" rows="5" cols="33" maxlength="1000" placeholder="<?php echo $linha['descricao_f'];?>" required></textarea>
                <br><br>

                <label>Capa</label>
                <br>
                <input type="file" name="capa_f" id="capa">
                <br><br>

                <input type = "hidden" id="inputHidden" name="codeUpdating" value="<?php echo $linha['id_filme']; ?> ">
                <input type="submit" id="submit" name="submit" value="Confirmar">

            </form>
        </div>
    </div>



<?php
}
?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>