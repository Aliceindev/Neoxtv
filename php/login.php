
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/index.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Login</title>
</head>
<body>

<?php
if(!empty($_GET['msg'])){
         
         if ($_GET['msg'] == "OK"){
     ?>
             <div class="alert alert-info" role="alert">
                 <?php echo "<strong> Cadastro Feito com Sucesso!!. Agora faça o login</strong>"; ?>
             </div>
     <?php
         }
         else if($_GET['msg'] == "LOGIN_ERROR"){
             ?>
             <div class="alert alert-danger" role="alert">
                 <?php echo "<strong>Nome de usuário (seu e-mail) ou senha incorretos.</strong>"; ?>
             </div>
     <?php
         }
         else
         {
     ?>
             <div class="alert alert-danger" role="alert">
                 <?php echo "<strong> Não é possível conectar o servidor de banco de dados. <strong><br>";?>
             </div>
     <?php
         }
         unset($_GET['msg']);
     }
     ?>

  <div class="main-login">
    <div class="left-login">
      <h1>Faça o cadastro e entre <br>para a nossa comunidade
       <br class="h2">E assista filmes e séries de graça!!</br></h1>
    </div>

  <form method="POST" action="customerLogin.php"> 
    <div class="right-login">
      <div class="card-login">
        <h1>NEOXTV</h1>
          <div class="textfield">
            <label for="email">Email</label>
            <input type="text" name="email" required placeholder="Digite seu email">
          </div>
          <div class="textfield">
            <label for="senha">Senha</label>
            <input type="password" name="senha" required placeholder="Senha">
          </div>
          <div class="textfield_submit"> 
              <input type="submit" class="btn-login" value="Login" id="login" name="submit" /> 
          </div>
            <a href="../html/cadastro.html" class="link-acount">Cadastre-se agora!</a>
      </div> 
    </div>
  </form>
    
  </div>
</body>
</html>