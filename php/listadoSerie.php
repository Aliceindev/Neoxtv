<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/listar.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Séries Listadas - Neoxtv </title>
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
        <a class="nav-link" href="">Listados <span class="sr-only">(current)</span></a>
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

<br>
<form method = "post" action="addSerie.php">
    
      <button type = "submit" class="btn btn-xs btn-warning"  data-toggle="modal" data-target="#delete-modal">

      <svg class="bi bi-file-earmark-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h5v-1H4a1 1 0 01-1-1V3a1 1 0 011-1h5v2.5A1.5 1.5 0 0010.5 6H13v2h1V6L9 1z"/>
        <path fill-rule="evenodd" d="M13.5 10a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13v-1.5a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
        <path fill-rule="evenodd" d="M13 12.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd"/>
      </svg>
      Adicionar
      </button> 
</form>
<br>

<?php
@include 'conectar.php';

if (!empty($_POST["dataForRemoving"])){

  $id_serie = $_POST["dataForRemoving"];
  $selecionando = "SELECT path FROM series WHERE id_serie = $id_serie";
  $dados2 = mysqli_query($conn,$selecionando);
  
  while($linha2 = mysqli_fetch_array($dados2)){
    $capa = $linha2['path'];
  }
  
  $query_for_removing = "DELETE FROM series WHERE id_serie='$id_serie' "; 
  mysqli_query($conn,$query_for_removing);
  unlink("$capa");

}

$query = "SELECT id_serie,nome_s,path,ano_public_s,genero_s,cla_etaria_s,total_eps_s,total_temp_s,descricao_s,link_s FROM series";

$resultado = mysqli_query($conn,$query);

?>


<table class="table table-bordered table-light table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Capa</th>
      <th scope="col">Nome</th>
      <th scope="col">Ano</th>
      <th scope="col">Gênero</th>
      <th scope="col">Faixa etária</th>
      <th scope="col">Link trailer</th>
      <th scope="col">Episódios</th>
      <th scope="col">Temporadas</th>
      <th scope="col">Descrição</th>
      <th scope="col"><th>
    

    </tr>
  </thead>
  <tbody>

<?php

while($linha = mysqli_fetch_array($resultado)){
    echo "<tr> <td>".$linha['id_serie']."</td>
    <td><img height='90px' class='rounded' src=".$linha['path']."></td>
    <td>".$linha['nome_s']."</td>
    <td>".$linha['ano_public_s']."</td>
    <td>".$linha['genero_s']."</td>
    <td>".$linha['cla_etaria_s']."</td>
    <td>".$linha['link_s']."</td>
    <td>".$linha['total_eps_s']."</td>
    <td>".$linha['total_temp_s']."</td>
    <td class='tam'>".$linha['descricao_s']."</td>";
    ?>

    <td>
    <form method = "post" action="updateSerie.php">
    <input type = "hidden" id="inputHidden" name="dataForUpdating" value=<?php echo $linha['id_serie']; ?> >  
      <button type = "submit" class="btn btn-info btn-xs"  >Editar</button> 
    </td>
    </form>  

    <td>
    <form method = "post" action="listadoSerie.php">
    <input type = "hidden" id="inputHidden" name="dataForRemoving" value=<?php echo $linha['id_serie']; ?> >  
      <button type = "submit" class="btn btn-danger btn-xs"  >Excluir</button> 
    </td></tr>
    </form>
  
    <?php
}
?>

  </tbody>
</table>

<?php
mysqli_close($conn);
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>