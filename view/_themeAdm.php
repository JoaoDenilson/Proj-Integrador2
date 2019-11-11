<?php
$a= $_SESSION['adm'][1];
?>
<!DOCTYPE html>
<html lang="PT-BR">
  <head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  	
    <title><?= $title;?></title>

    <!-- Custom fonts for this template-->
    <link href="<?=url("vendor/fontawesome-free/css/all.min.css");?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link type="text/css" href="<?=url("vendor/datatables/dataTables.bootstrap477.css") ;?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link type="text/css" href="<?=url("css/sb-admin.css");?>" rel="stylesheet">
    <link type="text/css" href="<?=url("css/sb-img.css");?>" rel="stylesheet">


  </head>

<body id="page-top">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="dashboard.php"></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="dashboard.php">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
      
        </div>
      </div>
    </form>

    <ul class="navbar-nav ml-auto ml-md-0">
      <div style="color: #fff;"id="notificacoes"></div> 

      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" >
                Olá <?=$a;?>
            </a>
          <a class="dropdown-item" href="#">Configurações</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
        </div>
      </li>
    </ul>

    <!-- Navbar -->

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?=url("dashboard")?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Painel de Controle</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Ger. Laboratório</span>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
         
          <h6 class="dropdown-header">Gerenciar Laboratório:</h6>
          <a class="dropdown-item" href="<?=url("laboratorio/adicionar");?>">Cadastrar</a>
          <a class="dropdown-item" href="<?=url("laboratorio");?>">Listar</a>
          <div class="dropdown-divider"></div>
        </div>

      </li>

      <li class="nav-item dropdown">
        
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Ger. Professor</span>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

          <h6 class="dropdown-header">Gerenciar Professor:</h6>
          <a class="dropdown-item" href="<?=url("professor/adicionar");?>">Cadastrar</a>
          <a class="dropdown-item" href="<?=url("professor");?>">Listar</a>
          <div class="dropdown-divider"></div>
        </div>

      </li>

      <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Ger. Reserva</span>
        </a>

        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Gerenciar Reservas: </h6>
            <a class="dropdown-item" href="<?=url("reserva/listReservas");?>">Reservas</a>
            <a class="dropdown-item" href="<?=url("reserva/listAceitas");?>">Aceitas</a>
            <a class="dropdown-item" href="<?=url("reserva/listNegadas");?>">Negadas</a>
        </div>

      </li>

        <!------------------------------------ CURSO   -------------------------------->

        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Ger. Curso</span>
            </a>

            <div class="dropdown-menu" aria-labelledby="pagesDropdown">

                <h6 class="dropdown-header">Gerenciar Curso:</h6>
                <a class="dropdown-item" href="<?=url("curso/adicionar");?>">Cadastrar</a>
                <a class="dropdown-item" href="<?=url("curso");?>">Listar</a>
                <div class="dropdown-divider"></div>
            </div>

        </li>

        <!------------------------------------ Disciplina -------------------------------->

        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Ger. Disciplina</span>
            </a>

            <div class="dropdown-menu" aria-labelledby="pagesDropdown">

                <h6 class="dropdown-header">Gerenciar Disciplina:</h6>
                <a class="dropdown-item" href="<?=url("disciplina/adicionar");?>">Cadastrar</a>
                <a class="dropdown-item" href="<?=url("disciplina");?>">Listar</a>
                <div class="dropdown-divider"></div>
            </div>

        </li>

                <!------------------------------------ HORARIO   -------------------------------->

        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Ger. Horário</span>
            </a>

            <div class="dropdown-menu" aria-labelledby="pagesDropdown">

                <h6 class="dropdown-header">Gerenciar Horário:</h6>
                <a class="dropdown-item" href="<?=url("horario");?>">Listar</a>
                <div class="dropdown-divider"></div>
            </div>

        </li>

    </ul>


    <div id="content-wrapper">

      <div class="container-fluid">
      <?= $v->section("content");?>

    <!--
      #Sticky Footer
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © <?= SITE;?> 2019</span>
          </div>
        </div>
      </footer>
      -->
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para encerrar sua sessão atual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="<?=url("sair");?>"> Sair  </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=url("vendor/jquery/jquery.min.js");?>"></script>
  <script src="<?=url("vendor/bootstrap/js/bootstrap.bundle.min.js");?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=url("vendor/jquery-easing/jquery.easing.min.js");?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?=url("vendor/datatables/jquery.dataTables.js");?>"></script>
  <script src="<?=url("vendor/datatables/dataTables.bootstrap4.js");?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=url("js/sb-admin.min.js");?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?=url("js/demo/datatables-demo.js");?>"></script>

  <!-- Notificações da página-->
  <script src="<?=url("js/jquery.min.js");?>"></script>
  <script>
  $(function(){
    $(".nolink").click(function(e){
      return false;
    });
  });

  function atualizarNotificacoes() {
      var url="<?=url("reserva/notificar");?>";
      jQuery("#notificacoes").load(url);
    }
  setInterval("atualizarNotificacoes()", 500);
  
  </script>
  <?= $v->section("scripts");?>


</body>

</html>
