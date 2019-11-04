<?php $v->layout("_themeAdm");?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Lista de Disciplinas</li>
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
                    <th>Nome</th>     
                    <th>Sigla</th>
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                    <th>Nome</th>     
                    <th>Sigla</th>
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </tfoot>


                  <?php
                  if($disciplinas):
                    foreach($disciplinas as $aux):
                  ?>
                  <?php
                    echo "<tr>";
                    echo "<td>{$aux->getNomeDisc()}</td>";
                    echo "<td>{$aux->getSiglaDisc()}</td>";
                    ?>
                  <td><a href="<?= url("disciplina/editar/{$aux->getIdDisc()}");?>">Editar</a></td>
                  <td><a href="<?= url("disciplina/excluir/{$aux->getIdDisc()}");?>">Excluir</a></td>
                  <?="<tr>";?>
                  <?php
                    endforeach;
                  else:
                      ?>
                      <h4> Não existem Disciplinas cadastrados </h4>
                  <?php
                  endif;?>
      </table>
            </div>
          </div>
                <?= $v->start("scripts");?>
                <?= $v->end();?>


