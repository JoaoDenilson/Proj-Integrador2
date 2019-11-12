
<?php $v->layout("_themeAdm");?>

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?=url("dashboard");?>">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <!-- Local onde deve add conteúdo de inicio-->
        <h1 style="text-align: center"> SEJAM BEM VINDO !</h1>

<?= $v->start("scripts");?>
<!-- Notificações da página-->
<script src="<?=url("js/jquery.min.js");?>"></script>
<script>
    $(function(){
        $(".nolink").click(function(e){
            return false;
        });
    });

    function atualizarNotificacoes() {
        var url="<?=url("reserva/notificar");?>";
        jQuery("#notificacoes").load(url);
    }
    setInterval("atualizarNotificacoes()", 500);

</script>
<?= $v->end();?>

