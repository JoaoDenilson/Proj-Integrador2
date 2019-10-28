<?php $v->layout("_themeAdm");

use Source\Models\Curso; ?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
          <li class="breadcrumb-item">
          <a href="<?=url("dashboard");?>">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Reservar Laboratório</li>
        </ol>

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Reservar Laboratório</div>
          <div class="card-body">
            <form action="<?=url("laboratorio/cadastrar");?>" method="POST">

              <div class="form-group">
                <div class="form-row">

                  <div class="col-md-6">
                    <div class="form-label-group">
                      <label for="lastName">Curso: </label>
                      <select class="btn btn-info dropdown-toggle" name ="cursoDisc">
                      <option selected="selected" value="<?=$disciplina[0]['idCursoFk'];?>" name="cursoDisc">Selecione o Curso</option>
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
                  </div>


                  <div class="col-md-6">
                    <div class="form-label-group">
                      <input type="text" id="lastName" class="form-control" maxlength="6" placeholder="Código do Laboratório" name="codeLab" required="on">
                      <label for="lastName">Código do Laboratório</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input input type="number" min="1" max="30" id="inputEmail" class="form-control" placeholder="Quantidade de Computadores" name="qtdComputadores" required="on">
                  <label for="inputEmail">Quantidade de Computadores</label>
                </div>
              </div>

          </div>
            <input type="submit" value="Salvar" class="btn btn-primary">

        </form>
      </div>
      </div>
</div>

<?= $v->start("scripts");?>
<?= $v->end();?>