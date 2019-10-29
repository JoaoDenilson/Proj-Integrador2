<?php
$v->layout("_themeProf"); 

use Source\Models\Curso; ?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Solicitar Reserva </li>
</ol>


<form action="<?=url("disciplina/atualizar");?>" method="POST">
          <div class="form-group">
            <div class="form-row">         

              <select class="btn btn-info dropdown-toggle" name ="cursoDisc">
                  <option selected="selected" value="<?=$disciplina[0]['idCursoFk'];?>" name="cursoDisc"> Selecione o Curso</option>
                  <?php
                  if($cursos):
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


              <select class="btn btn-info dropdown-toggle" name ="cursoDisc">
                  <option selected="selected" value="<?=$disciplina[0]['idCursoFk'];?>" name="cursoDisc"> Selecione a Dsiciplina</option>
                  <?php
                  if($cursos):
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


              <select class="btn btn-info dropdown-toggle" name ="cursoDisc">
                  <option selected="selected" value="<?=$disciplina[0]['idCursoFk'];?>" name="cursoDisc"> Selecione o Turno</option>
                  <option value="1">Manhã</option>
                  <option value="2">Tarde</option>
                  <option value="3">Noite</option>
              </select>

              <input type="date" name="">

        <input type="hidden" name="id" value="<?=url($disciplina[0]['idDisciplina']);?>">

        <button type="submit" class="btn btn-primary">Alterar</button>

    </form>



 <form action="<?=url("disciplina/atualizar");?>" method="POST">
        <div class="form-group">
        	<div class="form-row">



<?= $v->start("scripts");?>
<?= $v->end();?>
