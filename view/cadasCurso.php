<?php $v->layout("_themeAdm");?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Cadastrar Laboratório</li>
  </ol>

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Cadastrar Curso</div>
      <div class="card-body">
        <form action="<?=url("curso/adicionar");?>" method="post">
          <div class="form-group">
            <div class="form-row">
              
              <div class="col-md-6">
                <div class="form-label-group">
                  <input  type="text" id="firstName" class="form-control" placeholder="Nome do Curso" required="on" autofocus="autofocus" name="nomeCurso">
                  <label for="firstName">Nome do Curso</label>
                </div>
                </div>
              
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" class="form-control" maxlength="6" placeholder="Sigla do Curso" name="siglaCurso" required="on">
                  <label for="lastName">Sigla do Curso</label>
                </div>
              </div>
            </div>
          </div>
          
        
      </div>
      


        <input type="hidden" name="metodo" value="store">
	      <input type="hidden"  name="classe" value="curso">

        <input type="submit" value="Salvar" class="btn btn-primary">


    </form>
    </div>
    </div>
    </div>

<?= $v->start("scripts");?>
<?= $v->end();?>