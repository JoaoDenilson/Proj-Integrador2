<?php
$v->layout("_themeProf");?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Solicitar Reserva </li>
</ol>


<form action="<?=url("disciplina/atualizar");?>" method="POST">
  <div class="row">    
    <div class="col-2">
      <label>Selecione o Curso:</label>
    </div>

    <div class="col">
      <div class="btn-group dropright">
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="cursoDisc">
        Cursos
        </button>
        <div class="dropdown-menu">
          <?php
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
        </div>
      </div>
    </div>
    <div class="w-100"></div>

    <div class="col-2">
      <label>Selecione a Diciplina: </label>
    </div>
  
    <div class="col">
      <div class="btn-group dropright">
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="cursoDisc">
        Diciplinas
        </button>
        <div class="dropdown-menu">
          <?php
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
        </div>
      </div> 
    </div>  
    <div class="w-100"></div>
  <div class="col-2">
      <label>Selecione o Turno: </label>
    </div>
    <div class="col">
      <div class="btn-group dropright" >
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name ="cursoDisc">
          Turnos
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" value="1">Manhã</a>
          <a class="dropdown-item" value="2">Tarde</a>
          <a class="dropdown-item" value="3">Noite</a>
        </div>
      </div>
    </div>

  </div>


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


<input type="hidden" name="id" value="<?=url($disciplina[0]['idDisciplina']);?>">

<button type="submit" class="btn btn-primary">Pedir</button>

    </form>



 <form action="<?=url("disciplina/atualizar");?>" method="POST">
        <div class="form-group">
        	<div class="form-row">



<?= $v->start("scripts");?>
<?= $v->end();?>
