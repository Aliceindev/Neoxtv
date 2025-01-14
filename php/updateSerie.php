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
    <title>UPDATE - Séries</title>
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
        <a class="nav-link" href="SerieAdmin.php">Sair</a>
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
    $nome = $_POST['nome_s'];
    $ano = $_POST['ano_public_s'];
    $classificacao = $_POST['cla_etaria_s']; 
    $descricao = $_POST['descricao_s'];
    $totalEpp = $_POST['total_eps_s'];
    $totalTemp = $_POST['total_temp_s'];
    $link = $_POST['link_s'];
    $genero = $_POST['genero_s'];
 
    $pasta= "../img/";
    $arquivo= $_FILES['capa_s'];
    $nomeDoArquivo = $arquivo['name'];
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    $path = $pasta . $nomeDoArquivo;
    $capa= move_uploaded_file($arquivo['tmp_name'], $path);
    
    $id_up = $_POST['codeUpdating'];
   
    $query = "UPDATE series SET nome_s='$nome', ano_public_s='$ano',total_eps_s='$totalEpp',total_temp_s='$totalTemp', cla_etaria_s='$classificacao', descricao_s='$descricao', link_s='$link', genero_s='$genero', capa_s='$nomeDoArquivo', path='$path' WHERE id_serie=$id_up";
     if (mysqli_query($conn, $query)) {
    ?> 
      <?php header("Location: sucesso_upSerie.php?msg=OK"); ?>  
    <?php
    } else {
    ?>
      <div class="alert alert-danger" role="alert">
        <?php echo "<strong> Erro: <strong>" . $query . "<br>" . mysqli_error($conn);?>
      </div>
    <?php
    }
}
  
if (!empty($_POST["dataForUpdating"])){
    $id_up = $_POST['dataForUpdating'];
    
    $query = "SELECT id_serie, nome_s,path,ano_public_s,total_eps_s,total_temp_s,genero_s,link_s,cla_etaria_s,descricao_s,capa_s FROM series WHERE id_serie=$id_up";
    $resultado = mysqli_query($conn,$query);  

    $linha = mysqli_fetch_array($resultado);
?>

    <div class="main">
        <div class="register">
            <form id="register" method="POST" action="updateSerie.php" enctype="multipart/form-data">
                <h2>Editar Séries</h2>
                <label>Nome da Série</label>
                <br>
                <input type="text" name="nome_s" id="name" placeholder="<?php echo $linha['nome_s'];?>" required>
                <br><br>

                <label>Ano de Publicação</label>
                <br>
                <input type="number" name="ano_public_s" id="name" placeholder="<?php echo $linha['ano_public_s'];?>" required>
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
                <input type="number" name="cla_etaria_s" id="name" placeholder="<?php echo $linha['cla_etaria_s'];?>" required>
                <br><br>

                <label>Quantidade de Episódios</label>
                <br>
                <input type="number" name="total_eps_s" id="name" placeholder="<?php echo $linha['total_eps_s'];?>" required>
                <br><br>

                <label>Quantidade de temporadas</label>
                <br>
                <input type="number" name="total_temp_s" id="name" placeholder="<?php echo $linha['total_temp_s'];?>" required>
                <br><br>

                <label>Link do trailer</label>
                <br>
                <input type="text" name="link_s" id="name" placeholder="<?php echo $linha['link_s'];?>" maxlength="500" required>
                <br><br>

                <label>Descrição</label>
                <br>
                <textarea id="desc" name="descricao_s" rows="5" cols="33" maxlength="1000" placeholder="<?php echo $linha['descricao_s'];?>" required></textarea>
                <br><br>

                <label>Capa</label>
                <br>
                <input type="file" name="capa_s" id="">
                <br><br>

                <input type = "hidden" id="inputHidden" name="codeUpdating" value="<?php echo $linha['id_serie']; ?> ">
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