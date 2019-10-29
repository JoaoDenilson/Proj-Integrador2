<?php
$v->layout("_themeProf");?>

<!-- Breadcrumbs-->
<!--           <?php
            if($cursos):
             foreach($cursos as $curso):
           ?>
          <?php
             echo "<a class='dropdown-item' value='{$curso->getIdCurso()}>' {$curso->getNomeCurso()}</option>;"
          ?>
          <?php
            endforeach;
            else:
          ?>
          <h4> Não existem Cursos cadastrados </h4>
          
          <?php
            endif;
          ?>
          -->

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Solicitar Reserva </li>
</ol>


<form action="<?=url("disciplina/atualizar");?>" method="POST">
<<<<<<< HEAD
  <div class="caixa1">
    <div class="row">    
      <div class="col-8"> <label> Selecione o Curso: </label> </div>
      <div class="col-2">
        <div class="btn-group dropright">
          <button type="button" class="btn btn-info btn-sm dropdown-toggle" 
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
          name="cursoDisc">Cursos
          </button>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a> 
          </div>
        </div>
      </div>
      <div class="w-100" style="margin: 2px;"><!-- Quebra de Linha --></div>

      
      <div class="col-8"> <label> Selecione a Diciplina: </label></div>
      <div class="col-2">
        <div class="btn-group dropright">
          <button type="button" class="btn btn-info btn-sm dropdown-toggle" 
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
          name="cursoDisc">Diciplinas
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a> 
          </div>
        </div> 
      </div>  
      <div class="w-100" style="margin: 2px;"></div>
    
    <div class="col-8"> <label>Selecione o Turno: </label> </div>
      <div class="col-2">
        <div class="btn-group dropright" >
          <button type="button" class="btn btn-info btn-sm dropdown-toggle" 
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
          name ="cursoDisc"> Turnos
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" value="1">Manhã</a>
            <a class="dropdown-item" value="2">Tarde</a>
            <a class="dropdown-item" value="3">Noite</a>
          </div>
        </div>
      </div>
            <div class="w-100"></br></div>
    </div>
  </div>

  <div class="caixa2">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>                   
          <td class="dropdown-item">Segunda</td>
          <td>Terça</td>
          <td>Quarta</td>
          <td>Quinta</td>
          <td>Sexta</td>
        </tr>
        <tr>
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
        </tr>
        <tr>
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
        </tr>
        <tr>
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
        </tr>
        <tr>                   
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
          <td><input type="checkbox" id="horns" name="horns"></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="caixa1">
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Caso Necessite de Instalação de Programas, expecificar abaixo:</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

<input type="hidden" name="id" value="<?=url($disciplina[0]['idDisciplina']);?>">

<button type="submit" class="btn btn-primary">Pedir</button>

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
