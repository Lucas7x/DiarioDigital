<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="./estilo/img/favicon.png">

  <title>Bem-vindo ao Diário Digital</title>

  <!-- Bootstrap CSS -->
  <link href="./estilo/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="./estilo/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="./estilo/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="./estilo/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="./estilo/css/style.css" rel="stylesheet">
  <link href="./estilo/css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">					
    <form class="login-form" action="login.php" method="POST">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>

                  <?php
                      if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="alert alert-danger alert-dismissible" style="text-align: center;">
                      
                      <strong>Erro!</strong> Usuário ou senha inválidos.
                    </div>
                    <?php
                      endif;
                      unset($_SESSION['nao_autenticado']);
                  ?>                  
        <div class="input-group">          
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input name="login" type="text" class="form-control" placeholder="Usuário" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input name="senha" type="password" class="form-control" placeholder="Senha">
        </div>
        <label class="checkbox">                
                <span class="pull-right"> <a href="esqueceuSenha.php"> Esqueceu a senha?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Entrar</button>
        <!--<button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>-->
      </div>
    </form>
    <!--
    <div class="text-right">
      <div class="credits">   
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </div>-->


</body>

</html>
