<?php

@include 'conectar.php';

   $name = $_POST['nome'];
   $idade = $_POST['idade'];
   $email = $_POST['email'];
   $pass = md5($_POST['senha']);

   $insert = "INSERT INTO cadastro (nome, idade, email, senha) VALUES('$name','$idade','$email','$pass')";


   if(mysqli_query($conn, $insert)){
      header("Location: login.php?msg=OK");
   }else{
      header("Location: login.php?msg=ERRO");
   }


?>