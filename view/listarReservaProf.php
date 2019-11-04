<?php $v->layout("_themeProf");?>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Listar Reserva do Professor(a)</li>
</ol>
    <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tabela de Dados</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                   <!-- <th>Curso</th> -->
                      <th>Curso</th>
                      <th>Disciplina</th>
                      <th>Turno</th>
                      <th>Status</th>
                      <th>Visualizar+</th>
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                   <!-- <th>Curso</th> -->
                      <th>Curso</th>
                      <th>Disciplina</th>
                      <th>Turno</th>
                      <th>Status</th>
                      <th>Visualizar+</th>
                  </tr>
                </tfoot>


        <!-- Aqui tem que mostar:
            o curso que o professor escolheu, 
            a disciplina, 
            o turno,
            o horario e as observações
        -->

       <?php
       if ($reservas):
           foreach($reservas as $aux):
               ?><?php
               echo "<tr>";
               echo "<td>{$aux['nomeCurso']}</td>";
               echo "<td>{$aux['nomeDisciplina']}</td>";
               echo "<td>{$aux['turno']}</td>";
               echo "<td>{$aux['statusReserva']}</td>";
               echo "</tr>";
               ?>
           <?php
           endforeach;
       else:
           ?>
           <h4> Não existem Reservas cadastradas </h4>
       <?php
       endif;
       ?>


      </table>
                <a class="btn btn-success" href="<?=url("reserva/adicionar");?>" role="button">Adicionar</a>
            </div>
          </div>
        <?= $v->start("scripts");?>

        <?= $v->end();?>
