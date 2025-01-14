<?php

@include 'conectar.php';

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
   
   if($extensao != 'jpg'){
        die('Você não pode fazer upload deste tipo de arquivo, apenas JPG');
   }else{
     echo "Upload da imagem feito com sucesso!, mas algo digitado contem caracter especial, DEU ERRO!!! ";
   }
  
   $insert = "INSERT INTO filmes (nome_f, cla_etaria_f, descricao_f, ano_public_f, capa_f, link_f, genero_f, path) VALUES('$nome','$classificacao','$descricao','$ano','$nomeDoArquivo','$link','$genero','$path')";
   
   if (mysqli_query($conn, $insert)) {  
      header("Location: sucesso_addFilme.php?msg=OK");   
  } else {
   ?>
      <div class="alert alert-danger" role="alert">
              <?php echo "<strong>Não é possível conectar o servidor de banco de dados. <strong><br>";?>
      </div>
      <?php
  }

?>