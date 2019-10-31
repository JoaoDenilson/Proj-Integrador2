<?php
namespace Source\DAO;
use Source\Database;
use Source\Models\Reserva;
	
	class ReservaDAO{

		public function listarTudo(){

			$pdo = Database::conexao();
			$result = $pdo->query("SELECT * FROM tb_reserva");
			$linhas = $result->fetchAll(\PDO::FETCH_ASSOC);
			
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
			$linha = $result->fetchAll(\PDO::FETCH_ASSOC);

			return $linha;
		}

		public function insere($reserva){
			$pdo = Database::conexao();

			$dataReserva = $reserva->getDataReserva();
			$horaReserva = $reserva->getHoraReserva();
			$horarios = $reserva->getHorarios();
			//$statusReserva =$reserva-> getStatusReserva();
			$observacaoReserva = $reserva->getObservacaoReserva();
			//$justificativaReserva= $reserva->getJustificativaReserva();
			$idProfessor = $reserva->getIdUsuarioFk();
			//$idLaboratorio = $reserva->getIdLabFk();
			$idDisciplina = $reserva->getIdDisciplinaFk();
            $turno = $reserva->getTurno();

			$query = "INSERT INTO tb_reserva ( dataReserva, horaReserva, observacaoReserva, idUsuarioFk, idDisciplinaFk, horarios, turno) VALUES (?,?,?,?,?,?,?)";

    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $dataReserva);
    		$stmt->bindParam(2, $horaReserva);
            $stmt->bindParam(3, $observacaoReserva);
            $stmt->bindParam(4, $idProfessor);
    		//$stmt->bindParam(5, $idLaboratorio);
    		$stmt->bindParam(5, $idDisciplina);
            $stmt->bindParam(6, $horarios);
            $stmt->bindParam(7, $turno);
    		$stmt->execute();

		}

		public function atualizar($reserva){
			$pdo = Database::conexao();

			$idReserva = $reserva->getIdReserva();
            $dataReserva = $reserva->getDataReserva();
            $horaReserva = $reserva->getHoraReserva();
            $horarios = $reserva->getHorarios();
            //$statusReserva =$reserva-> getStatusReserva();
            //$observacaoReserva = $reserva->getObservacaoReserva();
            $justificativaReserva= $reserva->getJustificativaReserva();
            $idProfessor = $reserva->getIdUsuarioFk();
            //$idLaboratorio = $reserva->getIdLabFk();
            $idDisciplina = $reserva->getIdDisciplinaFk();
            $turno = $reserva->getTurno();

            //dataReserva, horaReserva, observacaoReserva, idUsuarioFk, idDisciplinaFk, horarios, turno
			$query = "UPDATE tb_reserva SET dataReserva=?, horaReserva=?, justificativaReserva=?, idUsuarioFk=?, idDisciplinaFk=?, 	idLabFk=?, horarios=?, turno=? WHERE idReserva=?";

            $stmt = $pdo->prepare($query);
            $stmt->bindParam(1, $dataReserva);
            $stmt->bindParam(2, $horaReserva);
            $stmt->bindParam(3, $justificativaReserva);
            $stmt->bindParam(4, $idProfessor);
            $stmt->bindParam(5, $idLaboratorio);
            $stmt->bindParam(6, $idDisciplina);
            $stmt->bindParam(7, $horarios);
            $stmt->bindParam(8, $turno);
            $stmt->bindParam(9, $idReserva);
            $stmt->execute();

            $stmt->execute();
		}
        /*
        public function deleta($id){

        $pdo = Database::conexao();
        $query = ("DELETE FROM professor WHERE idProf=?");
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(1, $id);
        $ok = $stmt->execute();

    }*/

		
	}
	
			

			
