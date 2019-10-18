<?php $v->layout("_themeAdm");?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Editar Professor</li>
</ol>

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Editar Professor</div>
        <div class="card-body">

            <form action="<?=url("professor/atualizar");?>" method="POST">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="firstName" class="form-control" placeholder="Nome do Professor" required="on" autofocus="autofocus" name="loginProf" value= "<?= $professor[0]['nomeUsuario'];?>">
                                <label for="firstName">Nome do Professor</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="tel" id="lastName" class="form-control" placeholder="Celular do Professor" name="celProf" required="on" value="<?= $professor[0]['telefoneUsuario'];?>" >
                                <label for="lastName">Celular do Professor</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="form-group">
                    <div class="form-label-group">
                        <input input type="text" min="1" id="inputEmail" class="form-control" placeholder="Curso do Professor" name="cursoProf" required="on" value="/*</?=$professor[0]['cursoProf'];?>*/">
                        <label for="inputEmail">Curso do Professor</label>
                    </div>
                </div>
                -->
                <div class="form-group">
                    <div class="form-label-group">
                        <input input type="email" min="1" id="inputEmail" class="form-control" placeholder="E-mail do Professor" name="emailProf" required="on" value="<?=$professor[0]['emailUsuario'];?>">
                        <label for="inputEmail">E-mail do Professor</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input input type="text" min="1" id="inputEmail" class="form-control" placeholder="Senha do Professor" name="senhaProf" required="on" value="<?=$professor[0]['senhaUsuario'];?>">
                        <label for="inputEmail">Senha do Professor</label>
                    </div>
                </div>
          
      </div>

        <input type="hidden" value= "<?= $professor[0]['idUsuario'];?>" name="idProf">

        <input type="submit" value="Salvar" class="btn btn-primary">


    </form>
  </div>
  </div>
</div>

<?= $v->start("scripts");?>

<?= $v->end();?>
