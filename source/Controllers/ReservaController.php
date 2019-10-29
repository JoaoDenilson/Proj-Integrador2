<?php
namespace Source\Controllers;
use League\Plates\Engine;
use Source\DAO\ReservaDAO;
use Source\Models\Reserva;

	class ReservaController{
        private $view;
        private $router;
		private $reserva;
		private $reservaDAO;

		public function __construct($router){
            $this->router = $router;
			$this->reservaDAO= new ReservaDAO();
			$this->reserva = new Reserva();
            $this->view =Engine::create(__DIR__."/../../view","php");
		}
		
		public function index(){
            session_start();
            if (isset($_SESSION['prof']) or isset($_SESSION['adm'])){
                echo "Página de Listar";
            }else{
                $this->router->redirect("Web.login");
            }
        }

        public function create(){
            session_start();
            if (isset($_SESSION['prof'])){
                echo $this->view->render("cadasReser",[
                    "title"=>"Solicitar Reserva | ".SITE

                ]);
            }else{
                $this->router->redirect("Web.login");
            }
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