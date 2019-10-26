<?php $v->layout("_themeAdm");

use Source\Models\Curso; ?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Editar Disciplinas</li>
</ol>
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Editar Disciplina</div>
      <div class="card-body">

        <form action="<?=url("disciplina/atualizar");?>" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <input type="text" id="firstName" class="form-control" placeholder="First name" required="on" autofocus="autofocus" name="nomeDisc" value= "<?=$disciplina[0]['nomeDisciplina'];?>">
                  <label for="firstName">Nome da Disciplina</label>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-label-group">
                <input type="text" id="lastName" class="form-control" placeholder="Sigla da Disciplina" name="siglaDisc" required="on"value= "<?=$disciplina[0]['siglaDisciplina'];?>" >
                  <label for="lastName">Sigla da Disciplina</label>
                </div>
              </div>
            </div>

              <select class="btn btn-info dropdown-toggle" name ="cursoDisc">
                  <option selected="selected" value="<?=$disciplina[0]['idCursoFk'];?>" name="cursoDisc"> Curso da Disciplina</option>
                  <?php
                  if($cursos):
//                      var_dump($cursos);
                    foreach($cursos as $curso):
                  ?>
                  <?php
                    echo "<option value='{$curso->getIdCurso()}'> {$curso->getNomeCurso()}</option>";
                    ?>
                  <?php
                    endforeach;
                  else:
                      ?>
                      <h4> Não existem Cursos cadastrados </h4>
                    <?php
                  endif;?>
              </select>
        <input type="hidden" name="id" value="<?=url($disciplina[0]['idDisciplina']);?>">

        <button type="submit" class="btn btn-primary">Alterar</button>

    </form>
  </div>
      </div>
    </div>
<?= $v->start("scripts");?>
<?= $v->end();?>