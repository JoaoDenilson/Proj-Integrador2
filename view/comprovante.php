<?php;?>
<html>
    <header>
        <style type="text/css">
            body{
                background: #ffffff;
                margin: 0 auto 0 auto;
                width:100%;
                margin: 20px 0px 20px 0px;
            }
            table, th, td {
                border: 1px solid black;
            }
            table{
                border-collapse: collapse;
                margin-top: 1em;
                width: 100%;
            }
            .dadosp{
                border: solid 1px;
                text-align: left;
            }
            .titulo{
                text-align: center;
            }
        </style>

        <title><?= $title;?></title>
    </header>
    <body>
    <div>
        <img src="./imagens/logoIFCE_2.jpg">
        <!--<img style="float: right;display: block" src="./imagens/IFCE_CEDRO.jpg">-->

        <table cellpadding='5' cellspacing='0' border="1">
            <tr>
                <th colspan='3'> INSTITUTO FEDERAL DO CEARÁ - IFCE  CAMPUS - CEDRO </th>
                <th colspan='2'> SISRES - SISTEMA DE RESERVA DE LABORATORIOS </th>
            </tr>
        </table>

        <table cellpadding='5' cellspacing='0' border="1" >
            <tr>
                <th class="titulo">Dados da Solicitação</th>
            </tr>
            <tr >
                <th >PROFESSOR: <?=$user;?></th>
            </tr>
            <tr>
                <th >E-mail: <?=$email;?></th>
            </tr>
            <tr>
                <th >Curso: <?=$reserva[0]['nomeCurso'];?></th>
            </tr>
            <tr>
                <th >Disciplina: <?=$reserva[0]['nomeDisciplina'];?></th>
            </tr>
            <tr>
                <th class="titulo"> Observação</th>
            </tr>
            <tr>
                <th cellspacing='2' rowspan='3' > <?=$reserva[0]['observacaoReserva'];?></th>
            </tr>

        </table>

        <table cellpadding='5' cellspacing='0' border="1">
            <tr>
                <th> RESERVA SOLICITADA EM: </th>
                <th>Data de Geracao desse documento *</th>
            </tr>
            <tr>
                <th> <?=$reserva[0]['dataReserva']." | ".$reserva[0]['horaReserva'];?> </th>
                <th> <?=$dataimpresao;?> </th>
            </tr>
        </table>
    </div>
    </body>
</html>


<?= $v->start("scripts");?>
<?= $v->end();?>
