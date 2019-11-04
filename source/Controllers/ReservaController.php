<?php
namespace Source\Controllers;
use League\Plates\Engine;
use Source\DAO\ReservaDAO;
use Source\Models\Reserva;
use Source\DAO\CursoDAO;
use Source\DAO\DisciplinaDAO;
use Source\Models\Curso;
use Source\Models\Disciplina;
use Source\DAO\LaboratorioDAO;
use Source\Models\Laboratorio;

	class ReservaController{
        private $view;
        private $router;
		private $reserva;
		private $reservaDAO;
        private $cursoDAO;
        private $disciplinaDAO;
        private $LaboratorioDAO;
        private $Laboratorio;

		public function __construct($router){
            $this->router = $router;
			$this->reservaDAO= new ReservaDAO();
            $this->disciplinaDAO = new DisciplinaDAO();
            $this->cursoDAO = new CursoDAO();
			$this->reserva = new Reserva();
            $this->reserva = new Laboratorio();
			$this->LaboratorioDAO = new LaboratorioDAO();
            $this->view =Engine::create(__DIR__."/../../view","php");
            //Evitar problema de pegar data de outro local.
            date_default_timezone_set('America/Fortaleza');
		}

		public function reservations(){
            session_start();
            $linhas = $this->reservaDAO->listarTudo();
            /*
            for($i = 0; $i<count($linhas); $i++){
              $reserva[$i] = new Reserva();

              //$reserva[$i]->setIdReserva($linhas[$i]['idReserva']);
              $reserva[$i]->setTurno($linhas[$i]['turno']);
              $reserva[$i]->setDataReserva($linhas[$i]['dataReserva']);
              $reserva[$i]->setHoraReserva($linhas[$i]['horaReserva']);
              $reserva[$i]->setHorarios($linhas[$i]['horarios']);

              //$reserva[$i]->setIdProf($linhas[$i]['fk_Professor_idProf']);
              $reserva[$i]->setIdLabFk($linhas[$i]['idLabFk']);
              //$reserva[$i]->setIdAdmin($linhas[$i]['fk_Administrador_idAdmin']);
          }*/
            if (isset($_SESSION['prof']) || isset($_SESSION['adm'])){
                echo $this->view->render("listarReservaAdm",[
                    "title"=> "Reservas Solicitadas |".SITE,
                    "reservas"=>$linhas
                ]);
            }else{
                $this->router->redirect("Web.login");
            }
        }

        public function index(){
            session_start();
            $id = (int)$_SESSION['prof'][0];
            if (isset($_SESSION['prof'])){
                $linhas = $this->reservaDAO->listarSolicitadas($id);
                /*
                 *
                 for($i = 0; $i<count($linhas); $i++){
                    $reser[$i] = new Reserva();
                    $dis[$i] = new Disciplina();
                    $curs[$i] = new  Curso();
                    $reser[$i]->setIdReserva($linhas[$i]['idReserva']);
                    $reser[$i]->setStatusReserva($linhas[$i]['statusReserva']);
                    $reser[$i]->setTurno($linhas[$i]['turno']);
                    $dis[$i]->setNomeDisc($linhas[$i]['nomeCurso']);
                    $curs[$i]->setNomeCurso($linhas[$i]['nomeCurso']);
                }
               */
                echo $this->view->render("listarReservaProf",[
                    "title"=> "Reservas Solicitadas |".SITE,
                    "reservas"=>$linhas
                    /*
                    "reservas"=>$reser,
                    "cursos"=>$curs,
                    "disciplinas"=>$dis
                    */
                ]);
            }
        }

        public function create(){
            session_start();
            if (isset($_SESSION['prof'])){
                $cursos = $this->cursoDAO->listarTudo();
                $disc = $this->disciplinaDAO->listarTudo();
                echo $this->view->render("cadasReser",[
                    "title"=>"Solicitar Reserva | ".SITE,
                    "disciplinas" => $disc,
                    "cursos" => $cursos
                ]);
            }else{
                $this->router->redirect("Web.login");
            }
		}

		public function store($data){
            session_start();
            $idDisc = (int)$_POST['idDisc'];
            $idUser = (int)$_SESSION['prof'][0];
            //var_dump($idUser);
            //$idLab = $_POST['idLab'];
            //Só testanto o cadastro com id fixo de lab
            //$idLab = 1;
            $dataReserva = date("d-m-Y");
            $horaReserva = date("H:i:s");
            $observacaoReserva = $_POST['observacao'];
            //$idCurso = (int)$_POST['idCurso'];
            $horarios= implode("&", $_POST['horarios']);
            //var_dump($horarios);
            $turno = $_POST['idTurno'];

	        $this->reserva->setDataReserva($dataReserva);
	        $this->reserva->setHoraReserva($horaReserva);
	        $this->reserva->setIdDisciplinaFk($idDisc);
	        //$this->reserva->setIdLabFk( $idLab);
            $this->reserva->setIdUsuarioFk($idUser);
	        $this->reserva->setObservacaoReserva($observacaoReserva);
            $this->reserva->setHorarios($horarios);
            $this->reserva->setTurno($turno);

            $this->reservaDAO->insere($this->reserva);
            $this->index();
            //$this->router->redirect("ReservaController:index");
		}

		public function edit($id){
            $n = $id;
		   //Usar o explode na View
            //$horarios_explode = explode("&", $horarios);
            session_start();
            if (isset($_SESSION['adm'])){
                $res = $this->reservaDAO->listaRegistro($n);
                $lab = $this->reservaDAO->listarTudo();
                echo "Tela de editar ";
                var_dump($res);
                /*
                echo $this->view->render("editarReser",[
                    "title"=>"Editar Reserva | ".SITE,
                    "reserva" => $res,
                    "Laboratorios"=> $lab
                ]);
                */
            }else{
                $this->router->redirect("Web.login");
            }
		}

		public function update($data){

            session_start();
            $idDisc = (int)$_POST['idDisc'];
            //var_dump($idUser);
            //$idLab = $_POST['idLab'];
            //Só testanto o cadastro com id fixo de lab
            //$idLab = 1;
            $dataReserva = date("d-m-Y");
            $horaReserva = date("H:i:s");
            $observacaoReserva = $_POST['observacao'];
            //$idCurso = (int)$_POST['idCurso'];
            $horarios= implode("&", $_POST['horarios']);
            //var_dump($horarios);
            $turno = $_POST['idTurno'];

            $this->reserva->setDataReserva($dataReserva);
            $this->reserva->setHoraReserva($horaReserva);
            $this->reserva->setIdDisciplinaFk($idDisc);
            //$this->reserva->setIdLabFk( $idLab);
            $this->reserva->setIdUsuarioFk($idUser);
            $this->reserva->setObservacaoReserva($observacaoReserva);
            $this->reserva->setHorarios($horarios);
            $this->reserva->setTurno($turno);

            $this->reservaDAO->insere($this->reserva);
            $this->index();
	        $this->reservaDAO->atualizar($this->reserva);

	        $this->index();
		}

		public function delete($id){
			$this->reservaDAO->deleta($id);
			$this->index();
		}

	

	}