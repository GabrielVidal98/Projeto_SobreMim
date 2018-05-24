<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:100,200,400,600">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Creepster:100,200,400,600">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

    <link rel="stylesheet" href="http://localhost:8088/AboutMe/css/about.css"/>
    
    <title>About Gabriel Vidal</title>

    <script src="jquery-3.3.1.js"></script>
      <script type="text/javascript">

      $(document).ready(function(){
        $('.menu1').hide();
        $('.menu').hover(function(){
        $(this).find('.menu1').slideDown(20);
        },
        function(){
          $(this).find('.menu1').slideUp(20);
        });
      }); 

    </script>
</head>
<body class="back-page-sobre">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost:8088/AboutMe/index.php"><i class="fab fa-jedi-order"></i> About Me</a>
    </div>
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="menu">
          <li><span class="cor"><i class="fa fa-user-astronaut" ></i> Meus trabalhos</span></li>
            <div class="menu1">
              <ul class="opc">
                <li><a href="http://localhost:8088/AboutMe/pages/portfolio.php"><span class="cor1">Portfolio</span></a></li>
                <li><a href="http://localhost:8088/AboutMe/pages/music.php"><span class="cor1">Músicas</span></a></li>
              </ul>
            </div>
        </div>
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost:8088/AboutMe/pages/sobre.php"><i class="fa fa-info-circle" ></i> Sobre</a></li>
        <li><a href="http://localhost:8088/AboutMe/pages/contato.php"><i class="fa fa-phone" ></i> Contato</a></li>       
    </ul>
    </div><!-- /.navbar-collapse -->
    </div>
  </div><!-- /.container-fluid -->
</nav>

  <footer class="main-footer footer-landpage">
        <div class="pull-right hidden-xs">
          <div style="text-align: right;">
            <strong>Curso de Análise e Desenvolvimento de Sistemas.&nbsp;&nbsp;&nbsp;</strong>
            <br>
            <strong>Desenvolvido por: Gabriel Vidal.&nbsp;&nbsp;&nbsp;</strong>
          </div>
        </div>
        <div class="pull-left hidden-xs">
          <div style="text-align: left;">
            <strong>&nbsp;&nbsp;&nbsp;Fatec Taubaté.</strong>
            <br>
            <strong>&nbsp;&nbsp;&nbsp;&copy; <?php echo date('Y'); ?> All rights reserved.</strong>
          </div>
        </div>
    </footer>

    <div class="stext">Meu nome é João Gabriel Monte Vidal, tenho 20 anos e moro em Pindamonhangaba,
        interior de São Paulo. Atualmente, trabalho como auxiliar escolar na escola Sônia Maria, em
        Taubaté - SP, pela Fundação Universitária de Taubaté (FUST).<br> Estou cursando o 5º semestre de
        Análise e Desenvolvimento de Sistemas, na Faculdade de Tecnologia de Taubaté (Fatec Taubaté).<br>
        Pretendo seguir carreira na área de desenvolvimento de games.
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>