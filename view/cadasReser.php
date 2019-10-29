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
          <td>Horário</td>                
          <td>Segunda</td>
          <td>Terça</td>
          <td>Quarta</td>
          <td>Quinta</td>
          <td>Sexta</td>
        </tr>
        <tr>
          <td>A</td>
          <td><input type="checkbox" name="segundaA"></td>
          <td><input type="checkbox" name="tercaA"></td>
          <td><input type="checkbox" name="quartaA"></td>
          <td><input type="checkbox" name="quintaA"></td>
          <td><input type="checkbox" name="sextaA"></td>
        </tr>
        <tr>
          <td>B</td>
          <td><input type="checkbox" name="segundaB"></td>
          <td><input type="checkbox" name="tercaB"></td>
          <td><input type="checkbox" name="quartaB"></td>
          <td><input type="checkbox" name="quintaB"></td>
          <td><input type="checkbox" name="sextaB"></td>
        </tr>
        <tr>
          <td>C</td>
          <td><input type="checkbox" name="segundaC"></td>
          <td><input type="checkbox" name="tercaC"></td>
          <td><input type="checkbox" name="quartaC"></td>
          <td><input type="checkbox" name="quintaC"></td>
          <td><input type="checkbox" name="sextaC"></td>
        </tr>
        <tr>
          <td>D</td>                
          <td><input type="checkbox" name="segundaD"></td>
          <td><input type="checkbox" name="tercaD"></td>
          <td><input type="checkbox" name="quartaD"></td>
          <td><input type="checkbox" name="quintaD"></td>
          <td><input type="checkbox" name="sextaD"></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="caixa3">
    <div class="form-group">
      <textarea name="observacao" class="form-control" id="exampleFormControlTextarea1" style="resize: none;" rows="3"></textarea>
      <label>Caso Necessite de Instalação de Programas, especificar acima:</label>
    </div>
  </div>


<button type="submit" class="btn btn-primary">Pedir</button>


    </form>

<?= $v->start("scripts");?>
<?= $v->end();?>
