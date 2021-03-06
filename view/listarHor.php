<?php $v->layout("_themeAdm");?>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Hoário</li>
</ol>

<form action="<?=url("");?>" method="POST" >
    <div class="col-8"> <label> Selecione o Laboratório: </label></div>
      <div class="col-2">
        <div class="btn-group dropright">
         <select class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="idLab" id="idLaboratorio" onchange="buscarHorario(this.value)">

        <option selected="selected" name="idLab">

          </option>
          <div class="dropdown-menu">
            <?php
                if($laboratorios):
                foreach($laboratorios as $lab):
                  ?>
                  <?php
                    echo "<option value='{$lab->getIdLab()}'> {$lab->getNomeLab()}</option>";
                    ?>
                <?php
                endforeach;
                else:
                    ?>
                    <h4> Não existem Professores cadastrados </h4>
                    <?php
                endif;?>
            ?>
          </div>
        </select>
       
      </div> 
    </div>

</form>
 <br>
    <div class="card mb-3">
          <div class="card-header">
            Tabela de Dados - Turno: Manhã</div>
          <div class="card-body">
            <div class="table-responsive">
                <script>
                    function buscarHorario(lab) {
                        fetch('./horario/listarHorarios/' + lab, {method: 'POST'}).then(function(response) {
                            return response.json();
                        }).then(function(data) {
                            var listHours = data;
                            console.log('Resultado:', listHours.listarDisc.disciplinas);

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
                <!--
              <table class="table table-bordered" > id="dataTable"-->
                <!--
               <thead>
                 <tr>-->
                   <!-- <th>Curso</th> -->
                <!--
                      <th>Horário</th>
                      <th>Segunda</th>
                      <th>Terça</th>
                      <th>Quarta</th>
                      <th>Quinta</th>
                      <th>Sexta</th>
                  </tr>
                </thead>


                <tr>
                  <th scope="row">1 </th>
                   -->
                <!-- <?php
                    if($horaA):
                        foreach($horaA as $h):
                    ?><?php
                            echo "<td style='text-align: center'> $h[1] <br> $h[0]</td>";
                            ?>
                        <?php
                        endforeach;
                    else:
                        ?>
                        <h4> Não existem Professores cadastrados </h4>
                    <?php
                    endif;?>
                </tr>
                <tr>
                    <th scope="row">2 </th>
                    <?php
                    if($horaB):
                        foreach($horaB as $h):
                            ?><?php
                            echo "<td style='text-align: center'>$h[1] <br> $h[0]</td>";
                            ?>
                        <?php
                        endforeach;
                    else:
                        ?>
                        <h4> Não existem Professores cadastrados </h4>
                    <?php
                    endif;?>
                </tr>
                <tr>
                    <th scope="row">3 </th>
                    <?php
                    if($horaC):
                        foreach($horaC as $h):
                            ?><?php
                            echo "<td style='text-align: center'>$h[1] <br> $h[0] </td>";
                            ?>
                        <?php
                        endforeach;
                    else:
                        ?>
                        <h4> Não existem Professores cadastrados </h4>
                    <?php
                    endif;?>
                </tr>

                 <tr>
                     <th scope="row">4 </th>
                     <?php
                     if($horaD):
                         foreach($horaD as $h):
                             ?><?php
                             echo "<td style='text-align: center'>$h[1] <br> $h[0] </td>";
                             ?>
                         <?php
                         endforeach;
                     else:
                         ?>
                         <h4> Não existem Professores cadastrados </h4>
                     <?php
                     endif;?>
                </tr>


                <tfoot>
                   <tr>
                   -->
                   <!-- <th>Curso</th> -->
    <!--<th>Horário</th>
    <th>Segunda</th>
    <th>Terça</th>
    <th>Quarta</th>
    <th>Quinta</th>
    <th>Sexta</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
-->
<!--
            <div class="card mb-3">
          <div class="card-header">
            Tabela de Dados - Turno: Tarde</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" > --><!--id="dataTable"-->
<!--
                <thead>
                  <tr>
                  -->
                   <!-- <th>Curso</th> -->
<!--
                      <th>Horário</th>
                      <th>Segunda</th>
                      <th>Terça</th>
                      <th>Quarta</th>
                      <th>Quinta</th>
                      <th>Sexta</th>
                  </tr>
                </thead>

                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>

                 <tr>
                  <th scope="row">4</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>

                <tfoot>
                   <tr>
                   -->
                   <!-- <th>Curso</th> -->
                       <!--
                      <th>Horário</th>
                      <th>Segunda</th>
                      <th>Terça</th>
                      <th>Quarta</th>
                      <th>Quinta</th>
                      <th>Sexta</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>

            <div class="card mb-3">
          <div class="card-header">
            Tabela de Dados - Turno: Noite</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" >
               --> <!--id="dataTable"-->
                       <!--
                <thead>
                  <tr>
                  -->
                   <!-- <th>Curso</th> -->
                      <!--
                      <th>Horário</th>
                      <th>Segunda</th>
                      <th>Terça</th>
                      <th>Quarta</th>
                      <th>Quinta</th>
                      <th>Sexta</th>
                  </tr>
                </thead>

                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>

                 <tr>
                  <th scope="row">4</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>


                <tfoot>
                   <tr>
                   -->
                   <!-- <th>Curso</th> -->
                      <!--
                      <th>Horário</th>
                      <th>Segunda</th>
                      <th>Terça</th>
                      <th>Quarta</th>
                      <th>Quinta</th>
                      <th>Sexta</th>
                  </tr>
                </tfoot>
              </table>

            </div>
          </div>
        </div>
    -->
        <?= $v->start("scripts");?>

        <?= $v->end();?>