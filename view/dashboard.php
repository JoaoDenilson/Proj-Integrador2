
<?php $v->layout("_themeAdm");?>
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?=url("dashboard");?>">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw"></i>
                </div>
                <div class="mr-5">Gerenciar Laboratórios</div>

              <!-- Imagem                  -->
              <div class="circle">
                <img src="<?=url("/../imagens/computer.png");?>">
              </div>
              </div>



              <a class="card-footer text-white clearfix small z-1" href="<?=url("laboratorio/adicionar");?>">
                <span class="float-left">Cadastrar Laboratório</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>

              <a class="card-footer text-white clearfix small z-1" href="<?=url("laboratorio");?>">
                <span class="float-left">Listar Laboratórios</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>


            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw"></i>
                
                </div >
                <div class="mr-5">Gerenciar Professor</div>

                <div class="circle">
                  <img src="<?=url("/../imagens/ai.png");?>">
                </div>

              </div>
              
              <a class="card-footer text-white clearfix small z-1" href="<?=url("professor/adicionar");?>">
                <span class="float-left">Cadastrar Professor</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>

              <a class="card-footer text-white clearfix small z-1" href="<?=url("professor");?>">
                <span class="float-left">Vizualizar Professores</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>


            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw "></i>
                </div>
                

                <div class="mr-5">Gerenciar Reservas</div>

                <!-- Imagem                  -->
                <div class="circle">
                  <img src="<?=url("/../imagens/checklist.png");?>">
                </div>


              </div>
              <a class="card-footer text-white clearfix small z-1" href="listarRes.php?classe=reserva&metodo=index">
                <span class="float-left">Vizualizar Reservas Pendentes</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
              
              <a class="card-footer text-white clearfix small z-1" href="listarRes.php?classe=reserva&metodo=index">
                <span class="float-left">Vizualizar Reservas Aceitas</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>

              <a class="card-footer text-white clearfix small z-1" href="listarRes.php?classe=reserva&metodo=index">
                <span class="float-left">Vizualizar Reservas Rejeitadas</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>

            </div>
          </div>
        </div>

    </div>

<?= $v->start("scripts");?>

<?= $v->end();?>

