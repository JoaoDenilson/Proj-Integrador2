<?php
namespace Source\Controllers;
use League\Plates\Engine;
use Source\DAO\ReservaDAO;
use Source\Models\Reserva;
use Source\DAO\CursoDAO;
use Source\DAO\DisciplinaDAO;
use Source\Models\Curso;
use Source\Models\Disciplina;


	class ReservaController{
        private $view;
        private $router;
		private $reserva;
		private $reservaDAO;
        private $CursoDAO;
        private $DisciplinaDAO;

		public function __construct($router){
            $this->router = $router;
			$this->reservaDAO= new ReservaDAO();
            $this->disciplinaDAO = new DisciplinaDAO();
            $this->cursoDAO = new CursoDAO();
			$this->reserva = new Reserva();
            $this->view =Engine::create(__DIR__."/../../view","php");
		}
		
		public function index(){
            session_start();
            if (isset($_SESSION['prof']) || isset($_SESSION['adm'])){
                echo "Página de Listar";
            }else{
                $this->router->redirect("Web.login");
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
            //Evitar problema de pegar data de outro local.
            date_default_timezone_set('America/Fortaleza');
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
			$res = $this->professorDAO->listaRegistro($id);
			session_start();
			$_SESSION['editaReserva'] = $res;

			header("Location: View/editarProf.php");
		}
		public function update(){
			
			$idProf = $_POST['id'];
			$cursoProf = $_POST['cursoProf'];
	        $loginProf = $_POST['loginProf'];
	        $senhaProf = $_POST['senhaProf'];
	        $celProf = $_POST['celProf'];
	        $emailProf = $_POST['emailProf'];

	        $this->reserva->setIdProf($idProf);
	        $this->reserva->setCursoProf($cursoProf);
	        $this->reserva->setLoginProf($loginProf);
	        $this->reserva->setSenhaProf($senhaProf);
	        $this->reserva->setCelProf($celProf);
	        $this->reserva->setEmailProf($emailProf);

	        $this->reservaDAO->atualizar($this->reserva);

	        $this->index();
		}
		public function delete($id){
			$this->reservaDAO->deleta($id);

			$this->index();
		}

	

	}