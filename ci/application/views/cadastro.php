<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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

   <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Cadastre-se</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nome: </label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Senha</label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="*****" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Telefone">tel</label>  
  <div class="col-md-4">
  <input id="Telefone" name="Telefone" type="text" placeholder="(xx)xxxxx-xxxx" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Ciclo">ciclo</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="Ciclo-0">
      <input type="checkbox" name="Ciclo" id="Ciclo-0" value="1">
      1
    </label>
    <label class="checkbox-inline" for="Ciclo-1">
      <input type="checkbox" name="Ciclo" id="Ciclo-1" value="2">
      2
    </label>
    <label class="checkbox-inline" for="Ciclo-2">
      <input type="checkbox" name="Ciclo" id="Ciclo-2" value="3">
      3
    </label>
    <label class="checkbox-inline" for="Ciclo-3">
      <input type="checkbox" name="Ciclo" id="Ciclo-3" value="4">
      4
    </label>
    <label class="checkbox-inline" for="Ciclo-4">
      <input type="checkbox" name="Ciclo" id="Ciclo-4" value="5">
      5
    </label>
    <label class="checkbox-inline" for="Ciclo-5">
      <input type="checkbox" name="Ciclo" id="Ciclo-5" value="6">
      6
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Modalidade">modalidades</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="Modalidade-0">
      <input type="radio" name="Modalidade" id="Modalidade-0" value="futfem" checked="checked">
      Futsal Fem
    </label> 
    <label class="radio-inline" for="Modalidade-1">
      <input type="radio" name="Modalidade" id="Modalidade-1" value="futmasc">
      Futsal Masc
    </label> 
    <label class="radio-inline" for="Modalidade-2">
      <input type="radio" name="Modalidade" id="Modalidade-2" value="handfem">
      Handebol Fem
    </label> 
    <label class="radio-inline" for="Modalidade-3">
      <input type="radio" name="Modalidade" id="Modalidade-3" value="handmasc">
      Handebol Masc
    </label> 
    <label class="radio-inline" for="Modalidade-4">
      <input type="radio" name="Modalidade" id="Modalidade-4" value="basket">
      Basket Masc
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Curso">curso</label>
  <div class="col-md-4">
    <select id="Curso" name="Curso" class="form-control">
      <option value="ge">GE</option>
      <option value="gp">GP</option>
      <option value="log">LOG</option>
      <option value="ads">ADS</option>
      <option value="si">SI</option>
    </select>
  </div>
</div>

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
