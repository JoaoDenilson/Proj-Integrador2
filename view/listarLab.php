<?php $v->layout("_themeAdm");?>

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?=url("dashboard");?>">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Listar Laboratórios</li>
        </ol>

    <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Lista de Laboratorios
            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nome</th>     
                    <th>Código</th>
                    <th>Qtd. computadores</th> 
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                    <th>Nome</th>     
                    <th>Código</th>
                    <th>Qtd. computadores</th> 
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </tfoot>

            <?php
            if($laboratorios):
                foreach($laboratorios as $lab):
                    ?>

                    <?php
                    echo "<tr>";
                    echo "<td>{$lab->getNomeLab()}</td>";

                    echo "<td>{$lab->getCodLab()}</td>";

                    echo "<td>{$lab->getQtdComputadores()}</td>";
                    ?>
                    <td><a href="<?= url("laboratorio/editar/{$lab->getIdLab()}");?>">Editar</a></td>
                    <td><a href="<?= url("laboratorio/excluir/{$lab->getIdLab()}");?>">Excluir</a></td>
                    </tr>
                    
                    <?php
                endforeach;
            else:
                ?>
                <h4> Não existem Laboratorios cadastrados </h4>
            <?php
            endif;?>
      </table>
      <a class="btn btn-success" href="<?=url("laboratorio/adicionar");?>" role="button">Adicionar</a>
      </div>
    </div>
<?= $v->start("scripts");?>

<?= $v->end();?>
