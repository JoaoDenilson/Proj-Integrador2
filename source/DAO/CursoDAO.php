<?php
	require_once "conf/database.class.php";
	require_once "Model/cursoModel.php";
	
	class CursoDAO{

		public function listarTudo(){
			$pdo = Database::conexao(); //Variavel que armazena a conexão do banco
			
			$result = $pdo->query("SELECT * FROM tb_curso");
			$linhas = $result->fetchAll(PDO::FETCH_ASSOC);
			
			for($i = 0; $i<count($linhas); $i++){
				$curso[$i] = new Curso;

				$curso[$i]->setIdCurso($linhas[$i]['idCurso']);
				$curso[$i]->setNomeCurso($linhas[$i]['nomeCurso']);
				$curso[$i]->setSiglaCurso($linhas[$i]['siglaCurso']);
		
			}	
	  		return $curso;
		}
		
		public function listaRegistro($id){

			$idCurso = $_GET['id'];
			$pdo = Database::conexao();
			$result = $pdo->query("SELECT * FROM tb_curso WHERE idCurso='$idCurso'");
			$linha = $result->fetchAll(PDO::FETCH_ASSOC);

			return $linha;
		}

		public function insere($curso){
			$pdo = Database::conexao();

			$nomeCurso = $curso->getNomeCurso();
			$siglaCurso = $curso->getSiglaCurso();
			

			$query = "INSERT INTO tb_curso (nomeCurso, siglaCurso) VALUES (?,?)";
    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $nomeCurso);
    		$stmt->bindParam(2, $siglaCurso);

    		$ok = $stmt->execute();

    		//header("Location: View/listarCursos.php");
		}

		public function atualizar($curso){
			$pdo = Database::conexao();

			$idCurso = $curso->getIdCurso();
			$nomeCurso = $curso->getNomeCurso();
			$siglaCurso = $curso->getSiglaCurso();
		
			$query = "UPDATE tb_curso SET nomeCurso=?, siglaCurso=? WHERE idCurso=?";

    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $nomeCurso);
    		$stmt->bindParam(2, $siglaCurso);
    		$stmt->bindParam(3, $idCurso);
    		
    		$ok = $stmt->execute();
    		
		}

			public function deleta($id){
				$pdo = Database::conexao();
				
				$query = ("DELETE FROM tb_curso WHERE idCurso=?");
				$stmt = $pdo->prepare($query);
    			$stmt->bindParam(1, $id);
    			$ok = $stmt->execute();

		}
	}
	
			

			
