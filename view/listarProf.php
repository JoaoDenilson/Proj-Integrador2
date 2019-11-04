<?php $v->layout("_themeAdm");?>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Listar Professores</li>
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
                      <th>Nome</th>
                      <th>Email</th>
                      <th>Celular</th>
                      <th>Editar</th>
                      <th>Excluir</th>
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                   <!-- <th>Curso</th> -->
                      <th>Nome</th>
                      <th>Email</th>
                      <th>Celular</th>
                      <th>Editar</th>
                      <th>Excluir</th>
                  </tr>
                </tfoot>

       <?php
       if ($professores):
          foreach($professores as $aux):
            ?><?php
            echo "<tr>";
            echo "<td>{$aux->getNomeProf()}</td>";
            echo "<td>{$aux->getEmailProf()}</td>";
            echo "<td>{$aux->getCelProf()}</td>";
            ?>
              <td><a href="<?= url("professor/editar/{$aux->getIdProf()}");?>">Editar</a></td>
              <td><a href="<?= url("professor/excluir/{$aux->getIdProf()}");?>">Excluir</a></td>
            <?="<tr>";?>
          <?php
          endforeach;
       else:
           ?>
           <h4> Não existem Professores cadastrados </h4>
       <?php
       endif;?>

      </table>
                <a class="btn btn-success" href="<?=url("professor/adicionar");?>" role="button">Adicionar</a>
            </div>
          </div>
        <?= $v->start("scripts");?>

        <?= $v->end();?>
