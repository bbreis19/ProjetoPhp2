<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="assets/css/agency.min.css" rel="stylesheet">
    

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <!--<a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Modalidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Imagens</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Premios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Equipe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <form class="form-horizontal" action="/ci/index.php/usuario/cadastro/" method="post">
<fieldset>

<!-- Form Name -->
<legend>Cadastre-se</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nome: </label>  
  <div class="col-md-4">
  <input id="textinput" name="nome" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Senha</label>
  <div class="col-md-4">
    <input id="passwordinput" name="senha" type="password" placeholder="*****" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Email input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">E-mail</label>
  <div class="col-md-4">
    <input id="passwordinput" name="email" type="email" placeholder="exemple@exemple.com" class="form-control input-md" required="true">
    
  </div>
</div>

<!--sexo checkbox-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sexo">Sexo</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="feminino">
      <input type="radio" name="sexo" id="sexo_feminino" value="feminino" checked="checked">
      Feminino
    </label> 
    <label class="radio-inline" for="masculino">
      <input type="radio" name="sexo" id="sexo_masculino" value="masculino">
      Masculino
    </label> 
</div

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-10 control-label" for="Modalidade">modalidades</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="Modalidade-0">
      <input type="checkbox" name="Modalidade" id="Modalidade-0" value="futfem" checked="checked">
      Futsal Fem
    </label> 
    <label class="radio-inline" for="Modalidade-1">
      <input type="checkbox" name="futsal feminino" id="Modalidade-1" value="futmasc">
      Futsal Masc
    </label> 
    <label class="radio-inline" for="Modalidade-2">
      <input type="checkbox" name="handebol feminino" id="Modalidade-2" value="handfem">
      Handebol Fem
    </label> 
    <label class="radio-inline" for="Modalidade-3">
      <input type="checkbox" name="handebol masculino" id="Modalidade-3" value="handmasc">
      Handebol Masc
    </label> 
    <label class="radio-inline" for="Modalidade-4">
      <input type="checkbox" name="basquete masculino" value="basket">
      Basket Masc
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Curso">curso</label>
  <div class="col-md-4">
    <select id="Curso" name="curso" class="form-control">
      <option value="ge">GE</option>
      <option value="gp">GP</option>
      <option value="log">LOG</option>
      <option value="ads">ADS</option>
      <option value="si">SI</option>
    </select>
  </div>
</div>

 <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit" value="Cadastrar">Entrar</button>
 
</fieldset>
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
