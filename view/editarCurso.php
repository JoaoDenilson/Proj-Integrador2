<?php $v->layout("_themeAdm");?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active"> Editar Curso </li>
</ol>

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Editar Curso</div>
      <div class="card-body">

        <form action="<?=url("curso/atualizar");?>" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" placeholder="Nome do Curso" required="on" autofocus="autofocus" name="nomeCurso" value= "<?=$curso[0]['nomeCurso'];?>">
                  <label for="firstName">Nome do Curso</label>
                </div>
                </div>
              
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" class="form-control" placeholder="Sigla do Curso" name="siglaCurso" required="on" value="<?= $curso[0]['siglaCurso'];?>">
                  <label for="lastName">Sigla do Curso</label>
                </div>
              </div>
            </div>
          </div>
        <input type="hidden" name="id" value="<?=url($curso[0]['idCurso']);?>">

        <button type="submit" class="btn btn-primary">Alterar</button>

    </form>
  </div>
      </div>
    </div>

<?= $v->start("scripts");?>
<?= $v->end();?>
