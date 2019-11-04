<?php $v->layout("_themeAdm");?>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?=url("dashboard");?>">Painel de Controle</a>
    </li>
    <li class="breadcrumb-item active">Cadastrar Professor </li>
</ol>

    <div class="container">
      
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Cadastrar Laboratório </div>
        <div class="card-body">
          <form action="<?=url("professor/cadastrar");?>" method="post">
            <div class="form-group">
              <div class="form-row">

              <div class="col-md-6">
                <div class="form-label-group">
                  <input  type="text" id="nomeProf" class="form-control" placeholder="Nome do Professor" required="on" autofocus="autofocus" name="nomeProf">
                  <label for="loginProf">Nome do Professor</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-label-group">
                  <input  type="password" id="senhaProf" class="form-control" placeholder="Senha do Professor" required="on" autofocus="autofocus" name="senhaProf">
                  <label for="senhaProf">Senha do Professor</label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
              <div class="form-row">

                <div class="col-md-6">
                  <div class="form-label-group">
                    <input  type="text" id="celProf" class="form-control" placeholder="N° para contato do Professor" required="on" autofocus="autofocus" name="celProf">
                    <label for="celProf">N° para contato do Professor</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="email" class="form-control" id="emailProf" placeholder="Seu email" required="on" autofocus="autofocus" name="emailProf">
                    <label for="emailProf">Email do Professor</label>
                  </div>
                </div>
              
              </div>
          </div>
          </div>

              <input type="submit" value="Salvar" class="btn btn-primary">
              </form>

      </div>
    </div>
  </div>
  
</body>
</html>