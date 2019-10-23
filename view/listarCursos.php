<?php $v->layout("_themeAdm");?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Lista de Cursos </li>
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
                  if($cursos):
                    foreach($cursos as $aux):
                  ?>
                  <?php
                    echo "<tr>";
                    echo "<td>{$aux->getNomeCurso()}</td>";
                    echo "<td>{$aux->getSiglaCurso()}</td>";
                    ?>
                  <td><a href="<?= url("curso/editar/{$aux->getIdCurso()}");?>">Editar</a></td>
                  <td><a href="<?= url("curso/excluir/{$aux->getIdCurso()}");?>">Excluir</a></td>
                  </tr>
                  <?php
                    endforeach;
                  else:
                      ?>
                      <h4> Não existem Disciplinas cadastrados </h4>
                  <?php
                  endif;?>
      </table>



  <script>
    $(function(){
      $(".delete").on('click', function(e) {
        e.preventDefault();
        var delid = $(this).attr("delid");

        if (confirm('Deseja deletar esse Curso?')) {
            window.location.replace("../indexCurso.php?classe=curso&metodo=delete&id="+delid);
        }
      });
    });
  </script>   


            </div>
          </div>
                <?= $v->start("scripts");?>
                <?= $v->end();?>









