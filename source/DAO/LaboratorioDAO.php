<?php
namespace Source\DAO;
use Source\Database;
use Source\Models\Laboratorio;

class LaboratorioDAO{

		public function listarTudo(){

			$pdo = Database::conexao(); //Variavel que armazena a conexão do banco
			$result = $pdo->query("SELECT * FROM tb_laboratorio");
			$linhas = $result->fetchAll(\PDO::FETCH_ASSOC);
			
			for($i = 0; $i<count($linhas); $i++){
                $laboratorios[$i] = new Laboratorio();
				$laboratorios[$i]->setIdLab($linhas[$i]['idLab']);
				$laboratorios[$i]->setNomeLab($linhas[$i]['nomeLab']);
				$laboratorios[$i]->setQtdComputadores($linhas[$i]['qtdcompLab']);
				$laboratorios[$i]->setCodLab($linhas[$i]['codLab']);
			}	
	  		return $laboratorios;
		}
		
		public function listaRegistro($n){
			$pdo = Database::conexao();
			$result = $pdo->query("SELECT * FROM tb_laboratorio WHERE idLab='$n'");
			$linha = $result->fetchAll(\PDO::FETCH_ASSOC);

			return $linha;
		}

		public function insere($laboratorio){
			$pdo = Database::conexao();
			$nomeLaboratorio = $laboratorio->getNomeLab();
			$codigoLaboratorio = $laboratorio->getCodLab();
			$qtdComputadoresLab = $laboratorio->getQtdComputadores();

			$query = "INSERT INTO tb_laboratorio (nomeLab, codLab, qtdcompLab) VALUES (?,?,?)";

    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $nomeLaboratorio);
    		$stmt->bindParam(2, $codigoLaboratorio);
    		$stmt->bindParam(3, $qtdComputadoresLab);

    		$stmt->execute();

		}

		public function atualizar($laboratorio){
			$pdo = Database::conexao();			
			$idLaboratorio = $laboratorio->getIdLab();
			$nomeLaboratorio = $laboratorio->getNomeLab();
			$codigoLaboratorio = $laboratorio->getCodLab();
			$qtd = 	$laboratorio->getQtdComputadores();
			
			$query = "UPDATE tb_laboratorio SET nomeLab=?, codLab=?, qtdcompLab=? WHERE idLab=?";
    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $nomeLaboratorio);
    		$stmt->bindParam(2, $codigoLaboratorio);
    		$stmt->bindParam(3, $qtd);
    		$stmt->bindParam(4, $idLaboratorio);
    		
    		$stmt->execute();
		}

			public function deleta($id){

			$pdo = Database::conexao();
			$query = ("DELETE FROM tb_laboratorio WHERE idLab=?");
			$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $id);
    	    $stmt->execute();

		}
	}
	
			

			
