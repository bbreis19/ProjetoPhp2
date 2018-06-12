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
    <link href="<?= base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/agency.css" rel="stylesheet">
    

  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Atletica Fatec Santos</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/ci/index.php/alterarsenha">Alterar Senha</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/ci/index.php/excluirconta">Excluir Conta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/ci/index.php/cadastro/logoff">Logoff</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase">Seja BEM-VINDO </div>
        </div>
      </div>
    </header>
    <?php $usuario = $this->session->userdata('usuario'); ?>
    <div class="col-md-4 cards">
      <h1>Futsal Feminino </h1>
    
      <a href="<?php echo base_url(); ?>modalidade/inscricao/1/<?php echo $usuario->id; ?>">Inscrever-se</a>
      <p>A equipe de futsal feminino é a atual campeã do campeonato SportSpan. Composta por 14 atletas do sexo feminino, sendo 12 fatecanas e 2 agregadas. Com Matheus Miranda como treinador do time, a equipe está de volta aos treinos para voltar com tudo no segundo semestre em busca de novos titulos. Os treinos acontecem todas as Quintas as 19h.</p>
    </div>
    
    <div class="col-md-4 cards">
      <h1>Futsal Masculino </h1>
      
        <a href="<?php echo base_url(); ?>modalidade/inscricao/2/<?php echo $usuario->id; ?>">Inscrever-se</a>
        <p>A equipe de futsal Masculino da Fatec Santos garante bom desempenho em todos os campeonatos que participa, mantendo sempre entre as três primeiras colocações. Diego Christo, o técnico, além de trabalhar a parte técnica com a equipe também ajuda com o preparo psicológico.</p>
    </div>
    
    <div class="col-md-4 cards">
      <h1>Handbol Feminino </h1>
      
        <a href="<?php echo base_url(); ?>modalidade/inscricao/3/<?php echo $usuario->id; ?>">Inscrever-se</a>
        <p>Composto pelo mesmo time da equipe de Futsal Feminino, o time de handbol feminino vem forte esse ano com promessa de ouro no InterFatec. Após a medalha de prata no InterFatec 2016, o time foi desestruturado e remasterizado, visando maior aproveitamento das atletas.</p>
    </div>
    
    <div class="col-md-4 cards">
      <h1>Handbol Masculino </h1>
      
        <a href="<?php echo base_url(); ?>modalidade/inscricao/4/<?php echo $usuario->id; ?>">Inscrever-se</a>
        <p>A equipe de Handbol Masculino é a atual campeã da modalidade no Interfatec, e com promessa de serem bi neste ano. Com grandes jogadores como Pirikito, Matheus Ruiz e Rodrigo Alvares, o time vem treinando e aperfeiçoando suas tecnicas para não perder a posição no campeonato.</p>
    </div>
    
    <div class="col-md-4 cards">
      <h1>Basquete </h1>
      
        <a href="<?php echo base_url(); ?>modalidade/inscricao/5/<?php echo $usuario->id; ?>">Inscrever-se</a>
        <p>A equipe de Basquete é uma das mais fortes de toda a atletica. Após a perda da final do InterFatec 2016 por dois pontos contra a Fatec São Paulo, o time ficou desistimulado e grandes atletas sairam da equipe. Neste ano, estão com tudo nos treinos procurando novos talentos para brilhar no time.    </div>
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
