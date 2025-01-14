<?php

session_start();
@include 'conectar.php';

   $email = $_POST['email'];
   $pass = md5($_POST['senha']);

   $select = " SELECT * FROM cadastro WHERE email = '$email' and senha = '$pass' ";

   if($result=mysqli_query($conn, $select)){

    $linha = mysqli_fetch_array($result); 
    if(!empty($linha)){
        $_SESSION['nome'] = $linha['nome'];
        $_SESSION['email'] = $linha['email'];
        $_SESSION['id_cod'] = $linha['id_cod'];
        header("Location: home.php");
    }else{
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        unset($_SESSION['id_cod']);
        header("Location: login.php?msg=LOGIN_ERROR");
    }
   }
   else{
      header("Location: login.php?msg=ERRO");
   }
   
?>