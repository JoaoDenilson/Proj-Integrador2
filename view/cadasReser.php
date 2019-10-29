<!--https://www.devmedia.com.br/forum/combo-box-com-estados-e-cidades/598701-->
<?php
$v->layout("_themeProf");?>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("home");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Solicitar Reserva </li>
</ol>


<form action="<?=url("reserva/cadastrar");?>" method="POST">
  <div class="caixa1">
    
    <div class="col-8"> <label> Selecione o Curso: </label></div>
      <div class="col-2">
        <div class="btn-group dropright">
         <select class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="cursoDisc" id="cursoDisc" onchange="buscar_cursos()">

          <option selected="selected"  name="cursoDisc">
            Lista de Cursos
          </option>
          <div class="dropdown-menu">
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
          </div>
        </select>
       
      </div> 
    </div> 
    <div class="w-100"style="margin-bottom: 30px;"><!-- Quebra de Linha --></div>

      <!-- DISCIPLINA -->
      <div class="col-8"> <label> Selecione a Disciplina: </label></div>
      <div class="col-2">
        <div class="btn-group dropright">
         <select class="btn btn-primary" data-toggle="dropdown" 
         aria-haspopup="true" aria-expanded="false" name="cursoDisc">
          //<option selected="selected"  name="cursoDisc">
          Lista de Disciplinas
        </option>
        <div class="dropdown-menu">
              <?php
                  if($disciplinas):
                    foreach($disciplinas as $disciplina):
                  ?>
                  <?php
                    echo "<option value='{$disciplina->getIdDisc()}'> {$disciplina->getNomeDisc()}</option>";
                    ?>
                  <?php
                    endforeach;
                  else:
                      ?>
                      <h4> Não existem Cursos cadastrados </h4>
                    <?php
                  endif;?>
        </select>
        </div> 
      </div>  
      <div class="w-100"style="margin-bottom: 30px;"></div>
    
    <!-- TURNO -->
    <div class="col-8"> <label>Selecione o Turno: </label> </div>
      <div class="col-2">
        <div class="btn-group dropright" >
          <select class="btn btn-primary" data-toggle="dropdown" 
          aria-haspopup="true" aria-expanded="false" name ="cursoDisc">
            <option selected="selected"  name="cursoDisc">
              Lista de Turnos
            </option>
            <div class="dropdown-menu">
              <option value="1">Manhã</option>
              <option value="2">Tarde</option>
              <option value="3">Noite</option>
            </div>
          </select>
        </div>
      <div class="w-100" style="margin-bottom: 30px;"></div>
    </div>
  </div>

  <div class="caixa2">
    <div class="table-responsive">
      <label>Selecione o(s) Horario(s) da(s) aulas:: </label>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>                   
          <td>Segunda</td>
          <td>Terça</td>
          <td>Quarta</td>
          <td>Quinta</td>
          <td>Sexta</td>
        </tr>
        <tr>
          <td><input type="checkbox" id="horns" name="segundaA"></td>
          <td><input type="checkbox" id="horns" name="tercaA"></td>
          <td><input type="checkbox" id="horns" name="quartaA"></td>
          <td><input type="checkbox" id="horns" name="quintaA"></td>
          <td><input type="checkbox" id="horns" name="sextaA"></td>
        </tr>
        <tr>
          <td><input type="checkbox" id="horns" name="segundaB"></td>
          <td><input type="checkbox" id="horns" name="tercaB"></td>
          <td><input type="checkbox" id="horns" name="quartaB"></td>
          <td><input type="checkbox" id="horns" name="quintaB"></td>
          <td><input type="checkbox" id="horns" name="sextaB"></td>
        </tr>
        <tr>
          <td><input type="checkbox" id="horns" name="segundaC"></td>
          <td><input type="checkbox" id="horns" name="tercaC"></td>
          <td><input type="checkbox" id="horns" name="quartaC"></td>
          <td><input type="checkbox" id="horns" name="quintaC"></td>
          <td><input type="checkbox" id="horns" name="sextaC"></td>
        </tr>
        <tr>                   
          <td><input type="checkbox" id="horns" name="segundaD"></td>
          <td><input type="checkbox" id="horns" name="tercaD"></td>
          <td><input type="checkbox" id="horns" name="quartaD"></td>
          <td><input type="checkbox" id="horns" name="quintaD"></td>
          <td><input type="checkbox" id="horns" name="sextaD"></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="caixa3">
    <div class="form-group">
      <textarea class="form-control" id="exampleFormControlTextarea1" style="resize: none;" rows="3"></textarea>
      <label>Caso Necessite de Instalação de Programas, expecificar acima:</label>
    </div>
  </div>


<button type="submit" class="btn btn-primary">Pedir</button>


    </form>

<?= $v->start("scripts");?>
<?= $v->end();?>
