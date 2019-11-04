<?php
namespace Source\DAO;
use Source\Database;
use Source\Models\Reserva;
	
	class ReservaDAO{

        //Traz uma Lista contendo apenas as solicitações de reserva.
		public function listarTudo(){
			$pdo = Database::conexao();
			$result = $pdo->query("SELECT r.*, u.idUsuario, u.nomeUsuario,d.nomeDisciplina, d.idDisciplina, c.idCurso, c.nomeCurso FROM tb_reserva r, tb_usuario u, tb_disciplina d, tb_curso c
            WHERE statusReserva='Aguardando' AND u.idUsuario=r.idUsuarioFk and d.idDisciplina=r.idDisciplinaFk AND c.idCurso= d.idCursoFk");
			$linhas = $result->fetchAll(\PDO::FETCH_ASSOC);
		   return $linhas;
		}

        //Traz uma Lista contendo apenas as reservas aceitas.
        public function listarAceitas(){
            $pdo = Database::conexao();
            $result = $pdo->query("SELECT r.*, u.idUsuario, u.nomeUsuario FROM tb_reserva r, tb_usuario u WHERE statusReserva='Aceita' AND u.idUsuario=r.idUsuarioFk");
            $linhas = $result->fetchAll(\PDO::FETCH_ASSOC);
            return $linhas;
        }

        //Traz uma Lista contendo apenas as reservas negadas
        public function listarNegadas(){
            $pdo = Database::conexao();
            $result = $pdo->query("SELECT r.*, u.idUsuario, u.nomeUsuario FROM tb_reserva r, tb_usuario u WHERE statusReserva='Negada' AND u.idUsuario=r.idUsuarioFk");
            $linhas = $result->fetchAll(\PDO::FETCH_ASSOC);
            return $linhas;
        }

		//Traz uma Lista contendo apenas as solicitações de resrva de um usuário específico.
        public function listarSolicitadas($id){
            $pdo = Database::conexao();
            $result = $pdo->query(" SELECT r.*, d.nomeDisciplina, d.idDisciplina, c.idCurso, c.nomeCurso FROM tb_reserva r, tb_disciplina d, tb_curso c WHERE idUsuarioFk='$id' AND d.idDisciplina=r.idDisciplinaFk AND c.idCurso= d.idCursoFk");
            $linhas = $result->fetchAll(\PDO::FETCH_ASSOC);
            return $linhas;
        }

        //Traz uma solicitação de reserva.
		public function listaRegistro($id){
            $pdo = Database::conexao();
            $result = $pdo->query("SELECT r.*, d.nomeDisciplina, d.idDisciplina, c.idCurso, c.nomeCurso FROM tb_reserva r, tb_disciplina d, tb_curso c WHERE idReserva='$id' AND d.idDisciplina=r.idDisciplinaFk AND c.idCurso= d.idCursoFk ");
            $linha = $result->fetchAll(\PDO::FETCH_ASSOC);
            return $linha;
		}

        //Cadastrar uma solicitação de reserva uma soliticalçao de reserva
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

        //Editar a reserva
		public function atualizar($reserva){
			$pdo = Database::conexao();
            //var_dump($reserva);
			$idReserva = $reserva->getIdReserva();
            //$dataReserva = $reserva->getDataReserva();
            //$horaReserva = $reserva->getHoraReserva();
            //$horarios = $reserva->getHorarios();
            //$statusReserva =$reserva-> getStatusReserva();
            //$observacaoReserva = $reserva->getObservacaoReserva();
            $justificativaReserva= $reserva->getJustificativaReserva();
            //$idProfessor = $reserva->getIdUsuarioFk();
            $idLaboratorio = $reserva->getIdLabFk();
            //$idDisciplina = $reserva->getIdDisciplinaFk();
            //$turno = $reserva->getTurno();

            //dataReserva, horaReserva, observacaoReserva, idUsuarioFk, idDisciplinaFk, horarios, turno
			//$query = "UPDATE tb_reserva SET dataReserva=?, horaReserva=?, justificativaReserva=?, idUsuarioFk=?, idDisciplinaFk=?, 	idLabFk=?, horarios=?, turno=? WHERE idReserva=?";
            $query = "UPDATE tb_reserva SET justificativaReserva=?, idLabFk=?WHERE idReserva=?";

            $stmt = $pdo->prepare($query);

            //$stmt->bindParam(1, $dataReserva);
            //$stmt->bindParam(2, $horaReserva);
            $stmt->bindParam(1, $justificativaReserva);
            //$stmt->bindParam(4, $idProfessor);
            //$stmt->bindParam(5, $idDisciplina);
            $stmt->bindParam(2, $idLaboratorio);
            //$stmt->bindParam(7, $horarios);
            //$stmt->bindParam(8, $turno);
            $stmt->bindParam(3, $idReserva);

            $stmt->execute();
		}

        public function deleta($id){

            $pdo = Database::conexao();
            $query = ("DELETE FROM tb_reserva WHERE idReserva='$id'");
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(1, $id);
            $stmt->execute();

        }
	}
	
			

			
