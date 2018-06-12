<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Atlética Fatec Santos</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?= base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/agency.css" rel="stylesheet">
    

  </head>

  <body id="page-top">

  
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Atletica Fatec Baixada Santista</div>
          <div class="intro-heading text-uppercase">Seja BEM-VINDO</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#contact">Login/a>
        </div>
      </div>
    </header>

   

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Login</h2>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate" action="/ci/index.php/cadastro/auth" method="post"> 
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Por favor digite seu email">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="senha" name="senha" type="password" placeholder="Senha *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <div class="links">
                    <a href="/ci/index.php/cadastrar/">Cadastre-se</a> <p class="divisoria"> |||| </p>
                    <a href="/ci/index.php/loginAdm/">Entrar como Administrador</a>
                  </div>
                  <button id="sendMessageButton" value="Login" class="btn btn-primary btn-xl text-uppercase" type="submit">Entrar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  

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
