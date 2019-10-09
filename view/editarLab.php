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
        <div class="card-header">Cadastrar Laboratório</div>
      <div class="card-body">
        <form action="<?=url("laboratorio/atualizar");?>" method="POST">
          <div class="form-group">
            <div class="form-row">
              
              <div class="col-md-6">
                <div class="form-label-group">
                  <input  value= "<?= $laboratorio[0]['nomeLab'];?>" type="text" id="firstName" class="form-control" placeholder="First name" required="on" autofocus="autofocus" name="nomeLab">
                  <label for="firstName">Nome do Laboratório</label>
                </div>
                </div>
              
              <div class="col-md-6">
                <div class="form-label-group">
                  <input value= "<?= $laboratorio[0]['codLab'];?>" type="text" id="lastName" class="form-control" maxlength="6" placeholder="Código do Laboratório" name="codLab" required="on">
                  <label for="lastName">Código do Laboratório</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input value= "<?= $laboratorio[0]['qtdcompLab'];?>" input type="number" min="1" max="30" id="inputEmail" class="form-control" placeholder="Quantidade de Computadores" name="qtdComputadores" required="on">
              <label for="inputEmail">Quantidade de Computadores</label>
            </div>
          </div>
          
      </div>

        <input type="hidden" value= "<?= $laboratorio[0]['idLab'];?>" name="idLab">

        <input type="submit" value="Salvar" class="btn btn-primary">


    </form>
  </div>
  </div>
</div>

<?= $v->start("scripts");?>

<?= $v->end();?>
