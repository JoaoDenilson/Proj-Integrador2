<?php
	require_once "DAO/reservaDAO.php";

	class ReservaController{
		
		private $reserva;
		private $reservaDAO;

		public function __construct(){
			$this->reservaDAO= new ProfessorDAO;
			$this->reserva = new Professor;
		}
		
		public function index(){
			$res = $this->resreservaervaDAO->listarTudo();
			session_start();
			$_SESSION['reservas'] = $res;

			header('Location: View/listarProf.php');

        }
		
		public function inicio(){
			header("Location: View/dashboard.php");
		}
        

        public function create(){
			header("Location: View/cadasProf.php");
		}

		public function store(){
			$cursoProf = $_POST['cursoProf'];
			$loginProf = $_POST['loginProf'];
			//md5 é para criptografar a senha
	        $senhaProf = md5($_POST['senhaProf']);
	        $celProf = $_POST['celProf'];
	        $emailProf = $_POST['emailProf'];

	        $this->professor->setCursoProf($cursoProf);
	        $this->professor->setLoginProf($loginProf);
	        $this->professor->setSenhaProf($senhaProf);
	        $this->professor->setCelProf($celProf);
	        $this->professor->setEmailProf($emailProf);
	   
	        $this->professorDAO->insere($this->professor);
	        $this->index();
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