<!--https://www.devmedia.com.br/forum/combo-box-com-estados-e-cidades/598701-->
<?php
$v->layout("_themeProf");?>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?=url("home");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">
      Solicitar Reserva 
    </li>
</ol>


<form action="<?=url("reserva/cadastrar");?>" method="POST">
  <div class="caixa1">
    
    <div class="col-8"> 
      <label> 
        Selecione o Curso: 
      </label>
    </div>

        <div class="col-2">
          <div class="btn-group dropright">
           <select class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="idCurso" id="cursoDisc" onchange="buscarDisciplina(this.value)">

            <option selected="selected" name="idCurso">
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
      <div class="col-8"> 
        <label> 
          Selecione a Disciplina: 
        </label>
      </div>

        <div class="col-2">
          <div class="btn-group dropright">

           <select class="btn btn-primary" data-toggle="dropdown" 
           aria-haspopup="true" aria-expanded="false" name="idDisc" id="idDisc">
            <option selected="selected"  name="idDisc">
              Lista de Disciplinas
            </option>
                
            </select>

            <script>
              function buscarDisciplina(curso) {

              fetch('./adicionar/listarDisciplinas/' + curso, {method: 'POST'}).then(function(response) {
                return response.json();
                }).then(function(data) {
                    var disciplinasDoCurso = data;
                    console.log('Resultado:', disciplinasDoCurso.listarDisc.disciplinas);
                    var lista = document.getElementById("idDisc");
                    if (disciplinasDoCurso.listarDisc.disciplinas.length > 0) {
                        lista.innerHTML = "";
                    for( let x = 0; x < disciplinasDoCurso.listarDisc.disciplinas.length; x++ ) {
                        lista.innerHTML += '<option value="'+ disciplinasDoCurso.listarDisc.disciplinas[x]["idDisciplina"] +'">'+ disciplinasDoCurso.listarDisc.disciplinas[x]["nomeDisciplina"] +'</option>';
                    }
                    } else {
                        lista.innerHTML = '<option selected="selected"  name="idDisc">Lista de Disciplinas</option>';
                    }
                });
            }
            </script>

          </div> 
        </div>


      <div class="w-100"style="margin-bottom: 30px;"></div>
    
    <!-- TURNO -->
    <div class="col-8">
      <label>
        Selecione o Turno: 
      </label> 
    </div>

        <div class="col-2">
          <div class="btn-group dropright" >
            <select class="btn btn-primary" data-toggle="dropdown" 
            aria-haspopup="true" aria-expanded="false" name ="idTurno">
              <option selected="selected"  name="idTurno">
                Lista de Turnos
              </option>
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Noite">Noite</option>
            </select>
          </div>
        </div>

    <div class="w-100" style="margin-bottom: 30px;"></div>
  </div>

      <div class="caixa2">
        <div class="table-responsive">
          <label>
            Selecione o(s) Horario(s) da(s) aulas:: 
          </label>
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
                  <td><input type="checkbox" name=horarios[] value="segundaA"></td>
                  <td><input type="checkbox" name=horarios[] value="tercaA"></td>
                  <td><input type="checkbox" name=horarios[] value="quartaA"></td>
                  <td><input type="checkbox" name=horarios[] value="quintaA"></td>
                  <td><input type="checkbox" name=horarios[] value="sextaA"></td>
                </tr>
                <tr>
                  <td>B</td>
                  <td><input type="checkbox" name=horarios[] value="segundaB"></td>
                  <td><input type="checkbox" name=horarios[] value="tercaB"></td>
                  <td><input type="checkbox" name=horarios[] value="quartaB"></td>
                  <td><input type="checkbox" name=horarios[] value="quintaB"></td>
                  <td><input type="checkbox" name=horarios[] value="sextaB"></td>
                </tr>
                <tr>
                  <td>C</td>
                  <td><input type="checkbox" name=horarios[] value="segundaC"></td>
                  <td><input type="checkbox" name=horarios[] value="tercaC"></td>
                  <td><input type="checkbox" name=horarios[] value="quartaC"></td>
                  <td><input type="checkbox" name=horarios[] value="quintaC"></td>
                  <td><input type="checkbox" name=horarios[] value="sextaC"></td>
                </tr>
                <tr>
                  <td>D</td>                
                  <td><input type="checkbox" name=horarios[] value="segundaD"></td>
                  <td><input type="checkbox" name=horarios[] value="tercaD"></td>
                  <td><input type="checkbox" name=horarios[] value="quartaD"></td>
                  <td><input type="checkbox" name=horarios[] value="quintaD"></td>
                  <td><input type="checkbox" name=horarios[] value="sextaD"></td>
                </tr>
                </tbody>
              </table>
        </div>
      </div>

      <div class="caixa3">
          <div class="form-group">
            <textarea name="observacao" class="form-control" id="exampleFormControlTextarea1" style="resize: none;" rows="3"></textarea>
            <label>
              Caso Necessite de Instalação de Programas, especificar acima:
            </label>
          </div>
      </div>

      <input type="hidden" name="metodo" value="store">
      <input type="hidden"  name="classe" value="reserva">
      <input type="submit" value="Pedir" class="btn btn-primary">

  </div>
</form>



<?= $v->start("scripts");?>
<?= $v->end();?>
 
