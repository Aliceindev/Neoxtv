<?php

@include 'conectar.php';

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
   
   if($extensao != 'jpg'){
        die('Você não pode fazer upload deste tipo de arquivo');
   }else{
     echo "Upload da imagem feito com sucesso!1, mas algo digitado contem caracter especial DEU ERRO ";
   }
         $insert = "INSERT INTO series (nome_s, cla_etaria_s, descricao_s, ano_public_s, total_eps_s, total_temp_s, capa_s, link_s, genero_s, path) VALUES('$nome','$classificacao','$descricao','$ano','$totalEpp','$totalTemp','$nomeDoArquivo','$link','$genero', '$path')";

         if (mysqli_query($conn, $insert)) {  
            header("Location: sucesso_addSerie.php?msg=OK");  
        } else {
         ?>
            <div class="alert alert-danger" role="alert">
                    <?php echo "<strong>Não é possível conectar o servidor de banco de dados. <strong><br>";?>
            </div>
            <?php
        }
      
      ?>