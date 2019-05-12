<?php 
  session_start();
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo']!="Diretor"){
    header('Location: ../login.php');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="../estilo/img/favicon.png">

  <title>Diário Digital - A tecnologia a favor da educação.</title>

  <!-- Bootstrap CSS -->
  <link href="../estilo/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../estilo/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->   
  <link href="../estilo/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../estilo/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="../estilo/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="../estilo/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />  
  <!-- easy pie chart--> 
  <link href="../estilo/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="./estilo/css/owl.carousel.css" type="text/css">
  <link href="../estilo/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./estilo/css/fullcalendar.css">
  <link href="../estilo/css/widgets.css" rel="stylesheet">
  <link href="../estilo/css/style.css" rel="stylesheet">
  <link href="../estilo/css/style-responsive.css" rel="stylesheet" />
  <link href="../estilo/css/xcharts.min.css" rel=" stylesheet">
  <link href="../estilo/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Alternar navegação" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="indexDiretor.php" class="logo">Diário <span class="lite">Digital</span></a>
      <!--logo end-->    

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->   
        <ul class="nav top-menu"> 
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Pesquisar" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">                            
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">
                              <?php
                                if(isset($_SESSION['usuario'])){
                                  echo $_SESSION['usuario'];
                                }
                              ?>
                            </span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="perfilDiretor.php"><i class="icon_profile"></i> Meu perfil</a>
              </li>
              <li>
                <a href="#"><i class="social_rss_square"></i> Enviar comunicado</a>
              </li>
              <li>
                <a href="../logout.php"><i class="icon_close_alt2"></i> Sair</a>
              </li>                  
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="indexDiretor.php">
                          <i class="icon_house_alt"></i>
                          <span>Inicio</span>
          	</a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_group"></i>
                          <span>Funcionários</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
          	</a>
            <ul class="sub">
              <li><a class="" href="cadastrarFuncionario.php">Cadastrar</a></li>
              <li><a class="" href="alterarFuncionario.php">Alterar</a></li>
              <li><a class="" href="listarFuncionario.php">Listar</a></li>
              <li><a class="" href="desativarFuncionario.php">Desativar</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_paperclip"></i>
              <span>Turmas</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="cadastrarTurma.php">Cadastrar</a></li>
              <li><a class="" href="alterarTurma.php">Alterar</a></li>
              <li><a class="" href="listarTurma.php">Listar</a></li>
              <li><a class="" href="desativarTurma.php">Desativar</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_book_alt"></i>
                          <span>Disciplina</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="cadastrarDisciplina.pho">Cadastrar</a></li>
              <li><a class="" href="alterarDisciplina.php">Alterar</a></li>
              <li><a class="" href="listarDisciplina.php">Listar</a></li>
              <li><a class="" href="desativarDisciplina.php">Desativar</a></li>
            </ul>
          </li>
     
		      <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_info_alt"></i>
              <span>Informações</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="sensoAlunoDiretor.php">Senso Aluno</a></li>
              <li><a class="" href="sensoTurmaDiretor.php">Senso Turma</a></li>
              <li><a class="" href="sensoEscolaDiretor.php">Senso Escola</a></li>
              <li><a class="" href="relatorio.php">Relatório</a></li>              
            </ul>
          </li>      
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Painel de controle</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="indexDiretor.php">Inicio</a></li>
              <li><i class="fa fa-laptop"></i>Painel de Controle</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-child"></i>
              <div class="count">224</div>
              <div class="title">Alunos</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-users"></i>
              <div class="count">12</div>
              <div class="title">Funcionários</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-book"></i>
              <div class="count">8</div>
              <div class="title">Disciplinas</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-home"></i>
              <div class="count">10</div>
              <div class="title">Turmas</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->
          

        <div class="row">
          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Calendário</strong></h2>
                <div class="panel-actions">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>

              </div><br><br><br>
              <div class="panel-body">
                <!-- Widget content -->

                <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                <div id="calendar"></div>

              </div>
            </div>

          </div>         
        </div>
                
        <!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="../estilo/js/jquery.js"></script>
  <script src="../estilo/js/jquery-ui-1.10.4.min.js"></script>
  <script src="../estilo/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="../estilo/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="../estilo/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="../estilo/js/jquery.scrollTo.min.js"></script>
  <script src="../estilo/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="../estilo/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="../estilo/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="../estilo/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="../estilo/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="../estilo/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="../estilo/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../estilo/js/calendar-custom.js"></script>
    <script src="../estilo/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../estilo/js/jquery.customSelect.min.js"></script>
    <script src="../estilo/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="../estilo/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../estilo/js/sparkline-chart.js"></script>
    <script src="../estilo/js/easy-pie-chart.js"></script>
    <script src="../estilo/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../estilo/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../estilo/js/xcharts.min.js"></script>
    <script src="../estilo/js/jquery.autosize.min.js"></script>
    <script src="../estilo/js/jquery.placeholder.min.js"></script>
    <script src="../estilo/js/gdp-data.js"></script>
    <script src="../estilo/js/morris.min.js"></script>
    <script src="../estilo/js/sparklines.js"></script>
    <script src="../estilo/js/charts.js"></script>
    <script src="../estilo/js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
