<?php  
  session_start();
  
  require_once("../model/funcionario.php");

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo']!="Diretor"){    //verifica login
    header('Location: login.php');
    exit();
  }
  
  if(isset($_SESSION['funcTemp'])){      //verifica tentativa falha de cadastro
    $uTemp=unserialize($_SESSION['funcTemp']);
    //unset($_SESSION['funcTemp']);
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
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Cadastrar Funcionário | Diário Digital</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->;
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

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
    <!--header start-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Alternar Navegação" data-placement="bottom"><i class="icon_menu"></i></div>
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
                <a href="logout.php"><i class="icon_close_alt2"></i> Sair</a>
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
              <li><a class="" href="cadastrarDisciplina.php">Cadastrar</a></li>
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
              <li><a class="" href="senso.php">Senso</a></li>
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
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_plus_alt2"></i> Cadastrar Funcionário</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Inicio</a></li>
              <li><i class="icon_group"></i>Funcionários</li>
              <li><i class="icon_plus_alt2"></i>Cadastrar</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <form role="form" method="POST" action="controller/controleFuncionario.php" enctype="multipart/form-data">
            <input type="hidden" name="metodo" value="inserir">
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Preencha o formulário com as informações do funcionário que deseja cadastrar
              </header>

              <?php if(isset($_SESSION['msgErro'])){ ?>
                <header class="panel-heading">
                  
                    <div class="alert alert-danger alert-dismissible" style="text-align: center;">
                      <?php 
                      echo $_SESSION['msgErro']; 
                      ?>
                    </div>
                    <?php
                      unset($_SESSION['msgErro']);
                  ?>
                </header>
              <?php } ?>
              <?php if(isset($_SESSION['msgSucesso'])){ ?>
                <header class="panel-heading">
                  
                    <div class="alert alert-success alert-dismissible" style="text-align: center;">
                      <?php 
                      echo $_SESSION['msgSucesso']; 
                      ?>
                    </div>
                    <?php
                      unset($_SESSION['msgSucesso']);
                  ?>
                </header>
              <?php } ?>

              <div class="panel-body">                
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Cargo</label>
                    <select class="form-control" id="inputCargo" name="cargo">
                      <option 
                          <?php 
                            if(isset($uTemp)){
                              echo $uTemp->getCargo()=='Coordenador'?'selected':'';
                            }
                          ?>
                      >Coordenador</option>
                      <option 
                          <?php 
                            if(isset($uTemp)){
                              echo $uTemp->getCargo()=='Professor'?'selected':'';
                            }
                          ?>
                      >Professor</option>
                      <option 
                          <?php 
                            if(isset($uTemp)){
                              echo $uTemp->getCargo()=='Secretário'?'selected':'';
                            }
                          ?>
                      >Secretário</option>
                    </select>
                  </div>  
                  <div class="form-group">
                    <label for="inputCarga">Carga horária (horas)</label>
                    <input type="number" required="required" name="carga" class="form-control" id="inputCarga"  placeholder="Ex.: 40"
                      <?php  
                        if(isset($uTemp)){
                      ?>
                        value="<?php echo $uTemp->getCargaHoraria(); ?>"

                      <?php
                        }
                      ?>
                    >
                  </div>        
                  <div class="form-group">
                    <label for="inputNome">Nome</label>
                    <input type="text" required="required" name="nome" class="form-control" id="inputNome" placeholder="Nome do funcionário"
                      <?php  
                        if(isset($uTemp)){
                      ?>
                        value="<?php echo $uTemp->getNome(); ?>"

                      <?php
                        }
                      ?>
                    >
                  </div>
                  <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input id="cpf" class="form-control" name="cpf" required="required" placeholder="Ex.: 000.000.000-00" type="text" onkeyup="cpfCheck(this)" maxlength="14" onkeydown="javascript: fMasc( this, mCPF );"
                      <?php  
                        if(isset($uTemp)){
                      ?>
                        value="<?php echo $uTemp->getCpf(); ?>"

                      <?php
                        }
                      ?>
                    >
                    <span id="cpfResponse"></span>
                  </div>
                  <div class="form-group">
                    <label for="inputRg">RG</label>
                    <input type="text" required="required" name="rg" class="form-control" id="inputRg" placeholder="RG do funcionário"
                      <?php  
                        if(isset($uTemp)){
                      ?>
                        value="<?php echo $uTemp->getRg(); ?>"

                      <?php
                        }
                      ?>
                    >
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Sexo</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="sexo">
                      <option 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getSexo()=='Masculino'?'selected':'';
                          }
                        ?>
                      >Masculino</option>
                      <option 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getSexo()=='Feminino'?'selected':'';
                          }
                        ?>
                      >Feminino</option>
                      <option 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getSexo()=='Outro'?'selected':'';
                          }
                        ?>
                      >Outro</option>                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputCor">Cor da pele</label>
                    <select class="form-control" id="inputCor" name="cor">
                      <option 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getCorDaPele()=='Amarela'?'selected':'';
                          }
                        ?>
                      >Amarela</option>
                      <option 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getCorDaPele()=='Branca'?'selected':'';
                          }
                        ?>
                      >Branca</option>
                      <option 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getCorDaPele()=='Indígena'?'selected':'';
                          }
                        ?>
                      >Indígena</option>
                      <option 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getCorDaPele()=='Parda'?'selected':'';
                          }
                        ?>
                      >Parda</option>  
                      <option 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getCorDaPele()=='Preta'?'selected':'';
                          }
                        ?>
                      >Preta</option>                                                                                              
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputNomeMae">Nome da mãe</label>
                    <input type="text" required="required" name="nomeMae" class="form-control" id="inputNomeMae" placeholder="Nome da mãe"
                      <?php  
                        if(isset($uTemp)){
                      ?>
                        value="<?php echo $uTemp->getNomeMae(); ?>"

                      <?php
                        }
                      ?>
                    >
                  </div>
                  <div class="form-group">
                    <label for="inputNomePai">Nome do pai</label>
                    <input type="text" required="required" name="nomePai" class="form-control" id="inputNomePai" placeholder="Nome do pai"
                      <?php  
                        if(isset($uTemp)){
                      ?>
                        value="<?php echo $uTemp->getNomePai(); ?>"

                      <?php
                        }
                      ?>
                    >
                  </div>
                  <div class="form-group">
                    <label for="inputEndereco">Endereço</label>
                    <input type="text" required="required" name="endereco" class="form-control" id="inputEndereco" placeholder="Ex.: Rua da Independência, 455, Centro"
                      <?php  
                        if(isset($uTemp)){
                      ?>
                        value="<?php echo $uTemp->getEndereco(); ?>"

                      <?php
                        }
                      ?>
                    >
                  </div>
                  <div class="form-group">
                    <label for="inputCidade">Cidade</label>
                    <input type="text" required="required" name="cidade" class="form-control" id="inputCidade" placeholder="Ex.: Fortaleza"
                      <?php  
                        if(isset($uTemp)){
                      ?>
                        value="<?php echo $uTemp->getCidade(); ?>"

                      <?php
                        }
                      ?>
                    >
                  </div>
                  <div class="form-group">
                    <label for="inputCep">CEP</label>
                    <input type="text" required="required" name="cep" class="form-control" id="inputCep" placeholder="Ex.: 62900-000"
                      <?php  
                        if(isset($uTemp)){
                      ?>
                        value="<?php echo $uTemp->getCep(); ?>"

                      <?php
                        }
                      ?>
                    >
                  </div>
                  <div class="form-group">
                    <label for="inputEstado">Estado</label>
                    <select class="form-control" name="estado" id="inputEstado"
                      <?php  
                        if(isset($uTemp)){
                      ?>
                        value="<?php $uTemp->getEstado(); ?>"

                      <?php
                        }
                      ?>
                    >
                      <option value="AC" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='AC'?'selected':'';
                          }
                        ?>
                      >Acre</option>
                      <option value="AL" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='AL'?'selected':'';
                          }
                        ?>
                      >Alagoas</option>
                      <option value="AP" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='AP'?'selected':'';
                          }
                        ?>
                      >Amapá</option>
                      <option value="AM" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='AM'?'selected':'';
                          }
                        ?>
                      >Amazonas</option>
                      <option value="BA" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='BA'?'selected':'';
                          }
                        ?>
                      >Bahia</option>
                      <option value="CE" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='CE'?'selected':'';
                          }
                        ?>
                      >Ceará</option>
                      <option value="DF" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='DF'?'selected':'';
                          }
                        ?>
                      >Distrito Federal</option>
                      <option value="ES" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='ES'?'selected':'';
                          }
                        ?>
                      >Espírito Santo</option>
                      <option value="GO" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='GO'?'selected':'';
                          }
                        ?>
                      >Goiás</option>
                      <option value="MA" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='MA'?'selected':'';
                          }
                        ?>
                      >Maranhão</option>
                      <option value="MT" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='MT'?'selected':'';
                          }
                        ?>
                      >Mato Grosso</option>
                      <option value="MS" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='MS'?'selected':'';
                          }
                        ?>
                      >Mato Grosso do Sul</option>
                      <option value="MG" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='MG'?'selected':'';
                          }
                        ?>
                      >Minas Gerais</option>
                      <option value="PA" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='PA'?'selected':'';
                          }
                        ?>
                      >Pará</option>
                      <option value="PB" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='PB'?'selected':'';
                          }
                        ?>
                      >Paraíba</option>
                      <option value="PR" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='PR'?'selected':'';
                          }
                        ?>
                      >Paraná</option>
                      <option value="PE" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='PE'?'selected':'';
                          }
                        ?>
                      >Pernambuco</option>
                      <option value="PI" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='PI'?'selected':'';
                          }
                        ?>
                      >Piauí</option>
                      <option value="RJ" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='RJ'?'selected':'';
                          }
                        ?>
                      >Rio de Janeiro</option>
                      <option value="RN" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='RN'?'selected':'';
                          }
                        ?>
                      >Rio Grande do Norte</option>
                      <option value="RS" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='RS'?'selected':'';
                          }
                        ?>
                      >Rio Grande do Sul</option>
                      <option value="RO" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='RO'?'selected':'';
                          }
                        ?>
                      >Rondônia</option>
                      <option value="RR" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='RR'?'selected':'';
                          }
                        ?>
                      >Roraima</option>
                      <option value="SC" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='SC'?'selected':'';
                          }
                        ?>
                      >Santa Catarina</option>
                      <option value="SP"
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='SP'?'selected':'';
                          }
                        ?>
                      >São Paulo</option>
                      <option value="SE" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='SE'?'selected':'';
                          }
                        ?>
                      >Sergipe</option>
                      <option value="TO" 
                        <?php 
                          if(isset($uTemp)){
                            echo $uTemp->getEstado()=='TO'?'selected':'';
                          }
                        ?>
                      >Tocantins</option>
                    </select>
                  </div>    
                  <div class="form-group">
                    <label for="inputTelefone">Telefone</label>
                    <input type="text" class="form-control" id="inputTelefone" name="telefone" placeholder="(99) 99999-9999" pattern="(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})" title="Número de telefone precisa ser no formato (99) 99999-9999" required="required" /
                      <?php  
                        if(isset($uTemp)){
                      ?>
                        value="<?php echo $uTemp->getTelefone(); ?>"

                      <?php
                        }
                      ?>
                    >
                  </div>              
                  <div class="form-group">
                    <label for="inputData">Data de nascimento</label>
                     <input type="date" class="form-control" id="inputData" name="dataNascimento"
                      <?php  
                        if(isset($uTemp)){
                      ?>
                        value="<?php echo $uTemp->getDataNascimento(); ?>"

                      <?php
                        }
                      ?>
                     >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="nome@mail.com"
                      <?php  
                        if(isset($uTemp)){
                      ?>
                        value="<?php echo $uTemp->getEmail(); ?>"

                      <?php
                        }
                      ?>
                    >
                  </div>        
                  <div class="form-group">
                    <label for="inputForm">Formação acadêmica</label>
                    <input type="text" required="required" name="formacao" class="form-control" id="inputForm" placeholder="Ex.: Licenciatura em física"
                      <?php  
                        if(isset($uTemp)){
                      ?>
                        value="<?php echo $uTemp->getFormacao(); ?>"

                      <?php
                        }
                        unset($_SESSION['usuarioTemp']);
                      ?>
                    >
                  </div>         
 
                  <div class="form-group">
                    <label for="inputSenha">Senha</label>
                    <input name="senha" type="password" class="form-control" id="inputSenha" placeholder="************">
                  </div>                            
                <button type="submit" class="btn btn-primary">Enviar</button>  
              
              </div>
            </section>
          </div>
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Anexar documentos
              </header>
              <div class="panel-body">
                  <div class="form-group">
                    <label for="inputDocRg" class="col-lg-2 control-label">RG</label>
                    <div class="col-lg-10">
                      <input type="file" class="form-control" name="imgRg">                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputDocRg" class="col-lg-2 control-label">Título</label>
                    <div class="col-lg-10">
                      <input type="file"  class="form-control" name="imgTitulo">
                    </div>                    
                  </div>
                   <div class="form-group">                    
                    <label for="inputDocCert" class="col-lg-2 control-label">Certificado</label>                    
                    <div class="col-lg-10">
                      <input type="file"  class="form-control" name= "imgCertificado">
                    </div>
                  </div>
                </div>
            </section>
          </div>
        </form>
        </div>  
      </section>
    </section>

    <!--main content end-->    
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- gritter -->

  <!-- custom gritter script for this page only-->
  <script src="js/gritter.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>  
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/bootstrap-datepicker.pt-BR.min"></script>

  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>

  <!-- Script validação de CPF-->
  <script type="text/javascript">
          function is_cpf (c) {

        if((c = c.replace(/[^\d]/g,"")).length != 11)
          return false

        if (c == "00000000000")
          return false;

        var r;
        var s = 0;

        for (i=1; i<=9; i++)
          s = s + parseInt(c[i-1]) * (11 - i);

        r = (s * 10) % 11;

        if ((r == 10) || (r == 11))
          r = 0;

        if (r != parseInt(c[9]))
          return false;

        s = 0;

        for (i = 1; i <= 10; i++)
          s = s + parseInt(c[i-1]) * (12 - i);

        r = (s * 10) % 11;

        if ((r == 10) || (r == 11))
          r = 0;

        if (r != parseInt(c[10]))
          return false;

        return true;
      }


      function fMasc(objeto,mascara) {
      obj=objeto
      masc=mascara
      setTimeout("fMascEx()",1)
      }

        function fMascEx() {
      obj.value=masc(obj.value)
      }

      function mCPF(cpf){
      cpf=cpf.replace(/\D/g,"")
      cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
      cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
      cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
      return cpf
      }

      cpfCheck = function (el) {
          document.getElementById('cpfResponse').innerHTML = is_cpf(el.value)? '<span style="color:green">Válido</span>' : '<span style="color:red">Inválido</span>';
          if(el.value=='') document.getElementById('cpfResponse').innerHTML = '';
      }

      function MascaraCep(cep){
        if(mascaraInteiro(cep)==false){
          event.returnValue = false;
        }    
        return formataCampo(cep, '00.000-000', event);
      }
  </script>
 
    
  <script type="text/javascript">
    $('#data').datepicker({
      format: 'dd/mm/yyyy',
      language: "pt-BR"      
    });
  </script>
</body>
</html>
