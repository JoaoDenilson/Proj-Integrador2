<?php
namespace Source\DAO;
use Source\Database;
use Source\Models\Professor;
	
	class ProfessorDAO{

		public function listarTudo(){

			$pdo = Database::conexao(); //Variavel que armazena a conexão do banco
			$result = $pdo->query("SELECT * FROM tb_usuario");
			$linhas = $result->fetchAll(\PDO::FETCH_ASSOC);
			
			for($i = 0; $i<count($linhas); $i++){
				$professor[$i] = new Professor;
				$professor[$i]->setIdProf($linhas[$i]['idUsuario']);
				$professor[$i]->setNomeProf($linhas[$i]['nomeUsuario']);
				//$professor[$i]->setLoginProf($linhas[$i]['loginUsuario']);
				$professor[$i]->setSenhaProf($linhas[$i]['senhaUsuario']);
				$professor[$i]->setCelProf($linhas[$i]['telefoneUsuario']);
				$professor[$i]->setEmailProf($linhas[$i]['emailUsuario']);
			}	
	  		return $professor;
		}
		
		public function listaRegistro($id){

			$pdo = Database::conexao();
			$result = $pdo->query("SELECT * FROM tb_usuario WHERE idUsuario='$id'");
			$linha = $result->fetchAll(\PDO::FETCH_ASSOC);

			return $linha;
		}

		public function insere($professor){
			$pdo = Database::conexao();

			$nomeProfessor = $professor->getNomeProf();
			$nivelProfessor = $professor->getLoginProf();
			$senhaProfessor = $professor->getSenhaProf();
			$celProfessor = $professor->getCelProf();
			$emailProfessor = $professor->getEmailProf();	

			$query = "INSERT INTO tb_usuario (nomeUsuario, emailUsuario, nivelUsuario, senhaUsuario, telefoneUsuario,  ) VALUES (?,?,?, ?, ?)";

    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1,$nomeProfessor);
    		$stmt->bindParam(2, $emailProfessor);
    		$stmt->bindParam(3, $nivelProfessor);
    		$stmt->bindParam(4, $senhaProfessor);
    		$stmt->bindParam(5, $celProfessor);

    		$ok = $stmt->execute();

		}

		public function atualizar($professor){
			$pdo = Database::conexao();

			$idProfessor = $professor->getIdProf();
            $nomeProfessor = $professor->getNomeProf();
            $senhaProfessor = $professor->getSenhaProf();
            $celProfessor = $professor->getCelProf();
            $emailProfessor = $professor->getEmailProf();

            $query = "UPDATE tb_usuario SET nomeUsuario=?, senhaUsuario=?,telefoneUsuario=?, emailUsuario=? WHERE idUsuario=?";

			$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1,$nomeProfessor);
    		$stmt->bindParam(2, $senhaProfessor);
    		$stmt->bindParam(3, $celProfessor);
    		$stmt->bindParam(4, $emailProfessor);
    		$stmt->bindParam(5, $idProfessor);

    		
    		$ok = $stmt->execute();
		}

		public function deleta($id){

			$pdo = Database::conexao();
			$query = ("DELETE FROM tb_usuario WHERE idUsuario=?");
			$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $id);
    		$stmt->execute();

		}
	}
	
			

			
