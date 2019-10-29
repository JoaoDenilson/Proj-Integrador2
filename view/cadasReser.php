<?php
$v->layout("_themeProf");?>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("home");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Solicitar Reserva </li>
</ol>


<form action="<?=url("disciplina/atualizar");?>" method="POST">
  <div class="caixa1">
    
    <div class="col-8"> <label> Selecione o Curso: </label></div>
      <div class="col-2">
        <div class="btn-group dropright">
         <select class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" 
         aria-haspopup="true" aria-expanded="false" name="cursoDisc" id="cmdCurso">
          <option selected="selected" value="<?=$disciplina[0]['idCursoFk'];?>" name="cursoDisc"> 
          Curso
        </option>
        <div class="dropdown-menu">
              <option class="dropdown-item" value="1">1</option>
              <option class="dropdown-item" value="2">2</option>
              <option class="dropdown-item" value="3">3</option>
            </div>
        </select>
        <input type="button" value="Carregar Curso" id="btnCurso" class="botao"/>
      </div> 
    </div> 
    <div class="w-100" style="margin: 2px;"><!-- Quebra de Linha --></div>

      <!-- DISCIPLINA -->
      <div class="col-8"> <label> Selecione a Diciplina: </label></div>
      <div class="col-2">
        <div class="btn-group dropright">
         <select class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" 
         aria-haspopup="true" aria-expanded="false" name="cursoDisc">
          <option selected="selected" value="<?=$disciplina[0]['idCursoFk'];?>" name="cursoDisc"> 
          Disciplina
        </option>
        <div class="dropdown-menu">
              <option class="dropdown-item" value="1">1</option>
              <option class="dropdown-item" value="2">2</option>
              <option class="dropdown-item" value="3">3</option>
            </div>
        </select>

          
        </div> 
      </div>  
      <div class="w-100" style="margin: 2px;"></div>
    
    <!-- TURNO -->
    <div class="col-8"> <label>Selecione o Turno: </label> </div>
      <div class="col-2">
        <div class="btn-group dropright" >
          <select class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" 
          aria-haspopup="true" aria-expanded="false" name ="cursoDisc">
            <option selected="selected" value="<?=$disciplina[0]['idCursoFk'];?>" name="cursoDisc"> 
              Turno
            </option>
            <div class="dropdown-menu">
              <option class="dropdown-item" value="1">Manhã</option>
              <option class="dropdown-item" value="2">Tarde</option>
              <option class="dropdown-item" value="3">Noite</option>
            </div>
          </select>
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
      <textarea class="form-control" id="exampleFormControlTextarea1" style="resize: none;" rows="3"></textarea>
    </div>

<input type="hidden" name="id" value="<?=url($disciplina[0]['idDisciplina']);?>">

<button type="submit" class="btn btn-primary">Pedir</button>


    </form>

<?= $v->start("scripts");?>
<?= $v->end();?>
