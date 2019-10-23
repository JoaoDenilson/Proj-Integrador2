<?php $v->layout("_themeAdm");?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Cadastrar Disciplina</li>
</ol>
    <!-- Navbar -->
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header"> Cadastrar Disciplina </div>
        <div class="card-body">
          <form action="<?=url("disciplina/cadastrar");?>" method="post">
            
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input  type="text" id="firstName" class="form-control" placeholder="First name" required="on" autofocus="autofocus" name="nomeDisc">
                    <label for="firstName">Nome da Disciplina</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" maxlength="6" placeholder="Sigla da Diciplina" name="siglaDisc" required="on">
                    <label for="lastName">Sigla da Diciplina</label>
                  </div>
                </div>
              </div>
            </div>
              <select class="btn btn-info dropdown-toggle" name ="cursoDisc">
                  <option selected="selected" name="cursoDisc"> Curso da Disciplina</option>
                  <?php
                  if($cursos):
//                      var_dump($cursos);
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


        </div>
        
        <input type="hidden" name="metodo" value="store">
	     <input type="hidden"  name="classe" value="disciplina">
        <input type="submit" value="Salvar" class="btn btn-primary">
        
      </form>

      </div>
    </div>
    </div>

<?= $v->start("scripts");?>
<?= $v->end();?>