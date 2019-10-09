<?php
  require_once "../Model/cursoModel.php";

  session_start();
  if(!empty( $_SESSION['cursos'])){
     $cursos = $_SESSION['cursos'];
  }
  else{
    header("Location: ../indexCurso.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>

    <title>ResLab</title>

  </head>

  <body id="page-top">
    <?php
    include "menu/menu.php";
    ?>
    <li class="breadcrumb-item active">Listar Laboratórios</li>
  </ol>
    <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tabela de Dados</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nome</th>     
                    <th>Sigla</th>
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                    <th>Nome</th>     
                    <th>Sigla</th>
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </tfoot>

       <?php
          foreach($cursos as $aux){
            echo "<tr>";
            echo "<td>{$aux->getNomeCurso()}</td>";

            echo "<td>{$aux->getSiglaCurso()}</td>";
           
                
            echo '<td><a href="../indexCurso.php?classe=curso&metodo=edit&id='.$aux->getIdCurso().'">Editar</a></td>'; 
            
            echo '<td><a class="delete" delid="'.$aux->getIdCurso().'" href="../indexCurso.php?classe=curso&metodo=delete&id='.$aux->getIdCurso().'">Deletar</a></td>';
            echo "</tr>";
            
          }
        ?>

      </table>
     <a href="../indexCurso.php?classe=curso&metodo=create">Adicionar</a>
    

  
      
  <script>
    $(function(){
      $(".delete").on('click', function(e) {
        e.preventDefault();
        var delid = $(this).attr("delid");

        if (confirm('Deseja deletar esse Curso?')) {
            window.location.replace("../indexCurso.php?classe=curso&metodo=delete&id="+delid);
        }
      });
    });
  </script>   

  </body>

</html>
