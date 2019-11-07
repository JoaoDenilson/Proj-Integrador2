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
                border: 1px solid black;
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
                <td >PROFESSOR: <?=$user;?></td>
            </tr>
            <tr>
                <td >E-mail: <?=$email;?></td>
            </tr>
            <tr>
                <td >Curso: <?=$reserva[0]['nomeCurso'];?></td>
            </tr>
            <tr>
                <td >Disciplina: <?=$reserva[0]['nomeDisciplina'];?></td>
            </tr>
            <tr>
                <th class="titulo"> Observação</th>
            </tr>
        </table>
        <div class="dadosp">
            <p>
                <?=$reserva[0]['observacaoReserva'];?>
            </p>

        </div>

        <table cellpadding='5' cellspacing='0' border="1">
            <tr>
                <th> RESERVA SOLICITADA EM: </th>
                <td>Data de Geracao desse documento *</td>
            </tr>
            <tr>
                <th> <?=$reserva[0]['dataReserva']." | ".$reserva[0]['horaReserva'];?> </th>
                <td> <?=$dataimpresao;?> </td>
            </tr>
        </table>
    </div>
    </body>
</html>


<?= $v->start("scripts");?>
<?= $v->end();?>
