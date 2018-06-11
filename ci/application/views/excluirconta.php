<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Atlética Fatec Santos</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="assets/css/agency.css" rel="stylesheet">
    

  </head>

  <body id="page-top">

  
  <form class="form-horizontal col-md-6" action="/ci/index.php/excluir" method="post" style="
    border: groove;
    margin-top: 20%;
    margin-left: 25%;
">

<!-- Form Name -->
<legend>Confirme seu email e senha para excluir sua conta</legend>


<!-- Email input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">E-mail</label>
  <div class="col-md-6">
    <input id="passwordinput" name="email" type="email" placeholder="exemple@exemple.com" class="form-control input-md" required="true">
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Senha</label>
  <div class="col-md-6">
    <input id="passwordinput" name="senha" type="password" placeholder="*****" class="form-control input-md" required="true">
    
  </div>
</div>
 <input type="submit" class="btn btn-primary btn-xl text-uppercase" />
 
</form>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
