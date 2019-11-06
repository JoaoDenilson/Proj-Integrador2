<?php
namespace Source\DAO;
use Source\Database;
use Source\Models\Reserva;
	
	class HorarioDAO{

        public function horarioManha(){
            $pdo = Database::conexao();
            $result = $pdo->query("SELECT r.*, u.idUsuario, u.nomeUsuario,d.nomeDisciplina, d.idDisciplina, l.idLab, l.nomeLab FROM tb_reserva r, tb_usuario u, tb_disciplina d, tb_laboratorio l WHERE statusReserva='Aguardando' AND u.idUsuario=r.idUsuarioFk and d.idDisciplina=r.idDisciplinaFk AND l.idLab = r.idLabFk and r.turno='Manha'");
            $linhas = $result->fetchAll(\PDO::FETCH_ASSOC);
           return $linhas;
        }

        public function horarioTarde(){
            $pdo = Database::conexao();
            $result = $pdo->query("SELECT r.*, u.idUsuario, u.nomeUsuario,d.nomeDisciplina, d.idDisciplina, l.idLab, l.nomeLab FROM tb_reserva r, tb_usuario u, tb_disciplina d, tb_laboratorio l WHERE statusReserva='Aguardando' AND u.idUsuario=r.idUsuarioFk and d.idDisciplina=r.idDisciplinaFk AND l.idLab = r.idLabFk and r.turno='Tarde'");
            $linhas = $result->fetchAll(\PDO::FETCH_ASSOC);
           return $linhas;
        }

        public function horarioNoite(){
            $pdo = Database::conexao();
            $result = $pdo->query("SELECT r.*, u.idUsuario, u.nomeUsuario,d.nomeDisciplina, d.idDisciplina, l.idLab, l.nomeLab FROM tb_reserva r, tb_usuario u, tb_disciplina d, tb_laboratorio l WHERE statusReserva='Aguardando' AND u.idUsuario=r.idUsuarioFk and d.idDisciplina=r.idDisciplinaFk AND l.idLab = r.idLabFk and r.turno='Noite'");
            
            $linhas = $result->fetchAll(\PDO::FETCH_ASSOC);
           return $linhas;
        }
	}
	
			

			
