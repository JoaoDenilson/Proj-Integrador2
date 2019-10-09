<?php $v->layout("_themeAdm");?>

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

        <form action="<?=url("disciplina/atualizar");?>" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <input type="text" id="firstName" class="form-control" placeholder="First name" required="on" autofocus="autofocus" name="nomeDisciplina" value= "<?=$disciplina[0]['nomeDisciplina'];?>">
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
          </div>

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


          <!-- <select class="btn btn-info dropdown-toggle" name ="cursoDisc">
            <option> Curso da Disciplina</option>
<<<<<<< HEAD
            <option value="1" >BSI</option>
            <option value="2" >Física</option>
            <option value="3" >Mecatronica</option>
            <option value="4" >Matemática</option>
          </select>
=======
            <option value="bsis" >BSI</option>
            <option value="lfis" >Física</option>
            <option value="tmec" >Mecatronica</option>
            <option value="lmat" >Matemática</option>
          </select>-->
>>>>>>> 611e21f3af19359ad5317bea6c38d8ff7288cbe6

        <input type="hidden" name="id" value="<?=url($disciplina[0]['idDisciplina']);?>">

        <button type="submit" class="btn btn-primary">Alterar</button>

    </form>
  </div>
      </div>
    </div>
<?= $v->start("scripts");?>
<?= $v->end();?>