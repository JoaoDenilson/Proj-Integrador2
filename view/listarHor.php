<?php $v->layout("_themeAdm");?>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Hoário</li>
</ol>

<form action="<?=url("reserva/atualizar");?>" method="POST">  
    <div class="col-8"> <label> Selecione o Laboratório: </label></div>
      <div class="col-2">
        <div class="btn-group dropright">
         <select class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="idLab" id="idLaboratorio" onchange="buscar_cursos()">

          <option selected="selected" name="idLab">
            Lista de Laboratórios
          </option>
          <div class="dropdown-menu">
            <?php
                if($laboratorios):
                foreach($laboratorios as $lab):
                  ?>
                  <?php
                    echo "<option value='{$lab->getIdLab()}'> {$lab->getNomeLab()}</option>";
                    ?>
                  <?php
                    endforeach;
                  else:
                      ?>
                      <h4> Não existem Cursos cadastrados </h4>
                    <?php
                  endif;
            ?>
          </div>
        </select>
       
      </div> 
    </div> 
  </form>
 
    <div class="card mb-3">
          <div class="card-header">
            Tabela de Dados - Turno: Manhã</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" > <!--id="dataTable"-->
                <thead>
                  <tr>
                   <!-- <th>Curso</th> -->
                      <th>Horário</th>
                      <th>Segunda</th>
                      <th>Terça</th>
                      <th>Quarta</th>
                      <th>Quinta</th>
                      <th>Sexta</th>
                  </tr>
                </thead>
                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>

                 <tr>
                  <th scope="row">4</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>


                <tfoot>
                   <tr>
                   <!-- <th>Curso</th> -->
                      <th>Horário</th>
                      <th>Segunda</th>
                      <th>Terça</th>
                      <th>Quarta</th>
                      <th>Quinta</th>
                      <th>Sexta</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>

            <div class="card mb-3">
          <div class="card-header">
            Tabela de Dados - Turno: Tarde</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" > <!--id="dataTable"-->
                <thead>
                  <tr>
                   <!-- <th>Curso</th> -->
                      <th>Horário</th>
                      <th>Segunda</th>
                      <th>Terça</th>
                      <th>Quarta</th>
                      <th>Quinta</th>
                      <th>Sexta</th>
                  </tr>
                </thead>

                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>

                 <tr>
                  <th scope="row">4</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>

                <tfoot>
                   <tr>
                   <!-- <th>Curso</th> -->
                      <th>Horário</th>
                      <th>Segunda</th>
                      <th>Terça</th>
                      <th>Quarta</th>
                      <th>Quinta</th>
                      <th>Sexta</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>

            <div class="card mb-3">
          <div class="card-header">
            Tabela de Dados - Turno: Noite</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" > <!--id="dataTable"-->
                <thead>
                  <tr>
                   <!-- <th>Curso</th> -->
                      <th>Horário</th>
                      <th>Segunda</th>
                      <th>Terça</th>
                      <th>Quarta</th>
                      <th>Quinta</th>
                      <th>Sexta</th>
                  </tr>
                </thead>

                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>

                 <tr>
                  <th scope="row">4</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>


                <tfoot>
                   <tr>
                   <!-- <th>Curso</th> -->
                      <th>Horário</th>
                      <th>Segunda</th>
                      <th>Terça</th>
                      <th>Quarta</th>
                      <th>Quinta</th>
                      <th>Sexta</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>

        <?= $v->start("scripts");?>

        <?= $v->end();?>
