<!--https://www.devmedia.com.br/forum/combo-box-com-estados-e-cidades/598701-->
<?php
$v->layout("_themeAdm");?>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Editar Reserva </li>
</ol>


<form action="<?=url("reserva/atualizar");?>" method="POST">
  <div class="caixa1">
    
    <div class="col-8"> <label> Selecione o Laboratório: </label></div>
      <div class="col-2">
        <div class="btn-group dropright">
         <select class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="idLab" id="idLaboratorio" onchange="buscar_cursos()">

          <option selected="selected" name="idLab">
            Lista de Laboratórios
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
                      <h4> Não existem Cursos cadastrados </h4>
                    <?php
                  endif;
            ?>
          </div>
        </select>

      </div>
    </div>

      <!-- STATUS -->
      <div class="col-8"> <label> Selecione o status da Reserva: </label></div>
      <div class="col-2">
          <div class="btn-group dropright" >
              <select class="btn btn-primary" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false" name ="status">
                  <option selected="selected"  name="status">
                      Status
                  </option>
                  <option value="Aceita">Aceita</option>
                  <option value="Negada">Negada</option>
              </select>
          </div>
      </div>

    <div class="col-8">
      <label> Curso selecionado: 
        <input type="text" name="curso" class="form-control" value="<?=$reserva[0]['nomeCurso'];?>" disabled="on">
      </label>
    </div>
    
    

      <!-- DISCIPLINA -->
      <div class="col-8"> 
        <label> Disciplina selecionado: 
          <input type="text" name="disciplina" class="form-control" value="<?=$reserva[0]['nomeDisciplina'];?>" disabled="on">
        </label>
      </div>
    
    <!-- TURNO -->
    <div class="col-8">
      <label> Turno selecionado: 
        <input type="text" name="turno" class="form-control" value="<?=$reserva[0]['turno'];?>" disabled="on">
      </label>
    </div>

      <!-- TURNO -->

          <label> Horario selecionado: </label><br>

              <?php foreach($horarios as $x){
                  echo $x."<br>";
              };?>

  </div>

  <div class="caixa2">

  </div>


    <div class="caixa3">
        <div class="form-group">
            <textarea name="observacao" class="form-control" style="resize: none;" rows="3" disabled="on" ></textarea>
            <label>Programas que foram exigidos no laboratório</label>
        </div>
    </div>

    <div class="caixa3">
        <div class="form-group">
            <textarea name="justificativa" class="form-control"  style="resize: none;" rows="3"></textarea>
            <label style="cursor:help;" title="Este campo deve ser usado para informar o por quê de ter negado ou não a reserva">Justificativa*</label>
        </div>
    </div>


  </div>

<input type="hidden" value= "<?= $reserva[0]['idReserva'];?>" name="idReserva">
<button type="submit" class="btn btn-danger">Voltar</button>
<button type="submit" class="btn btn-primary">Confirmar</button>

</form>

<?= $v->start("scripts");?>
<?= $v->end();?>
 
