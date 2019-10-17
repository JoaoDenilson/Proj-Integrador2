<?php
namespace Source\Controllers;
use League\Plates\Engine;
use Source\DAO\CursoDAO;
use Source\Models\Curso;

	class CursoController{

		private $curso;
		private $cursoDAO;
		private $view;
        private $router;

		public function __construct($router){
			$this->router = $router;
			$this->cursoDAO= new CursoDAO();
			$this->curso = new Curso();
			$this->view =Engine::create(__DIR__."/../../view","php");

		}

		public function index(){
			$cursos = $this->cursoDAO->listarTudo();
            echo $this->view->render("listarCursos",[
                "title"=>"Listar Cursos | ".SITE,
                "cursos" => $cursos
            ]);

        }

		public function inicio(){
            $this->router->redirect("Web.dashboard");
		}

        public function create(){

            session_start();
            if (isset($_SESSION['adm'])){
                echo $this->view->render("cadasCurso",[
                    "title"=>"Adicionar Curso | ".SITE
                ]);
            }else{
                $this->router->redirect("Web.login");
            }
		}

		public function store(){
			/* Recebe os dados dos inputs da tela cadasCurso.php
			*  Forma o objeto e chama o método de inserir do DAO
			*/

			$nomeCurso = $_POST['nomeCurso'];
	        $siglaCurso = $_POST['siglaCurso'];

	        $this->curso->setNomeCurso($nomeCurso);
	        $this->curso->setSiglaCurso($siglaCurso);
	        $this->cursoDAO->insere($this->curso);

	        $this->index();
		}

		public function edit($id){
			//atraves do ID seleciona os dados do registro e envia pela SESSION para o editarLab.php da View

			$curso = $this->cursoDAO->listaRegistro($id);
			session_start();
			$_SESSION['editaCurso'] = $curso;

			header("Location: View/editarCurso.php");
		}

		public function update(){

			/*
			*	Recebe os dados da tela editarCurso.php e atualiza os dados no banco
			*/

			$idCurso = $_POST['id'];
			$nomeCurso = $_POST['nomeCurso'];
	        $siglaCurso = $_POST['siglaCurso'];
	        
	        $this->curso->setIdCurso($idCurso);
	        $this->curso->setNomeCurso($nomeCurso);
	        $this->curso->setSiglaCurso($siglaCurso);
	        $this->cursoDAO->atualizar($this->curso);
	      
	        $this->index();
		}

		public function delete($id){
			$this->cursoDAO->deleta($id);
			$this->index();
		}
	}