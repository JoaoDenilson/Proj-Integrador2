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
                    <h4> Não existem Professores cadastrados </h4>
                    <?php
                endif;?>
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
                  <th scope="row">1 <br> 07:20 Até 08:20</th>
                    <?php
                    if($horaA):
                        foreach($horaA as $h):
                    ?><?php
                            echo "<td style='text-align: center'>$h[0] <br>$h[1] </td>";
                            ?>
                        <?php
                        endforeach;
                    else:
                        ?>
                        <h4> Não existem Professores cadastrados </h4>
                    <?php
                    endif;?>
                </tr>
                <tr>
                    <th scope="row">2 <br> 08:20 Até 09:20</th>
                    <?php
                    if($horaB):
                        foreach($horaB as $h):
                            ?><?php
                            echo "<td style='text-align: center'>$h[0] <br>$h[1] </td>";
                            ?>
                        <?php
                        endforeach;
                    else:
                        ?>
                        <h4> Não existem Professores cadastrados </h4>
                    <?php
                    endif;?>
                </tr>
                <tr>
                    <th scope="row">3 <br> 09:40 Até 10:40</th>
                    <?php
                    if($horaC):
                        foreach($horaC as $h):
                            ?><?php
                            echo "<td style='text-align: center'>$h[0] <br>$h[1] </td>";
                            ?>
                        <?php
                        endforeach;
                    else:
                        ?>
                        <h4> Não existem Professores cadastrados </h4>
                    <?php
                    endif;?>
                </tr>

                 <tr>
                     <th scope="row">4 <br> 01:40 Até 11:40</th>
                     <?php
                     if($horaD):
                         foreach($horaD as $h):
                             ?><?php
                             echo "<td style='text-align: center'>$h[0] <br>$h[1] </td>";
                             ?>
                         <?php
                         endforeach;
                     else:
                         ?>
                         <h4> Não existem Professores cadastrados </h4>
                     <?php
                     endif;?>
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