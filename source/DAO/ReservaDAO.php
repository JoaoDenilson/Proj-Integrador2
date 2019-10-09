<?php
	require_once "conf/database.class.php";
	require_once "Model/reservaModel.class.php";
	
	class ReservaDAO{

		public function listarTudo(){

			$pdo = Database::conexao();
			$result = $pdo->query("SELECT * FROM reserva");
			$linhas = $result->fetchAll(PDO::FETCH_ASSOC);
			
			for($i = 0; $i<count($linhas); $i++){
				$reserva[$i] = new Reserva;

				$reserva[$i]->setIdRes($linhas[$i]['idReserva']);
				$reserva[$i]->setDataRes($linhas[$i]['dataRes']);
				$reserva[$i]->setHoraRes($linhas[$i]['horaRes']);
				$reserva[$i]->setIdProf($linhas[$i]['fk_Professor_idProf']);
				$reserva[$i]->setIdLab($linhas[$i]['fk_Laboratorio_idLab']);
				$reserva[$i]->setIdAdmin($linhas[$i]['fk_Administrador_idAdmin']);							
			}	
	  		return $reserva;
		}
		
		public function listaRegistro($id){

			$resId = $_GET['id'];
			$pdo = Database::conexao();
			$result = $pdo->query("SELECT * FROM reserva WHERE idReserva='$resId'");
			$linha = $result->fetchAll(PDO::FETCH_ASSOC);

			return $linha;
		}

		public function insere($reserva){
			$pdo = Database::conexao();

			$idReserva = $reserva->getIdRes();
			$dataReserva = $reserva->getDataRes();
			$horaReserva = $reserva->getHoraRes();
			$idProfessor = $reserva->getIdProf();
			$idLaboratorio = $reserva->getIdLab();
			$idAdministrador = $reserva->getIdAdmin();

			$query = "INSERT INTO reserva ( idReserva, dataRes, horaRes, fk_Professor_idProf, fk_Laboratorio_idLab, fk_Administrador_idAdmin VALUES (?,?,?,?,?,?)";

    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1,$idReserva);
    		$stmt->bindParam(2, $dataReserva);
    		$stmt->bindParam(3, $horaReserva);
    		$stmt->bindParam(4, $idProfessor);
    		$stmt->bindParam(5, $idLaboratorio);
    		$stmt->bindParam(6, $idAdministrador);

    		$ok = $stmt->execute();

		}

		/*public function atualizar($reserva){
			$pdo = Database::conexao();	

			$idReserva = $reserva->getIdRes();
			$dataReserva = $reserva->getDataRes();
			$horaReserva = $reserva->getHoraRes();
			$idProfessor = $reserva->getIdProf();
			$idLaboratorio = $reserva->getIdLab();
			$idAdministrador = $reserva->getIdAdmin();

			$query = "UPDATE reserva SET cursoProf=?, loginProf=?, senhaProf=?,celProf=?, emailProf=? WHERE idProf=?";

			$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1,$cursoProfessor);
    		$stmt->bindParam(2, $loginProfessor);
    		$stmt->bindParam(3, $senhaProfessor);
    		$stmt->bindParam(4, $celProfessor);
    		$stmt->bindParam(5, $emailProfessor);
    		$stmt->bindParam(6, $idProfessor);

    		
    		$ok = $stmt->execute();
		}

			public function deleta($id){

			$pdo = Database::conexao();
			$query = ("DELETE FROM professor WHERE idProf=?");
			$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $id);
    		$ok = $stmt->execute();

		}*/

		
	}
	
			

			
