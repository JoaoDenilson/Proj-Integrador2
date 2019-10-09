<?php
namespace Source\Controllers;
use League\Plates\Engine;
use Source\DAO\CursoDAO;
use Source\Models\Curso;

	class CursoController{

		private $curso;
		private $cursoDAO;

		public function __construct(){
			$this->cursoDAO= new CursoDAO;
			$this->curso = new Curso;
		}

		public function index(){
			$cursos = $this->cursoDAO->listarTudo();
			session_start();
			$_SESSION['cursos'] = $cursos;

			header('Location: View/listarCursos.php');
        }

		public function inicio(){
			header("Location: View/dashboard.php");
		}

        public function create(){
			header("Location: View/cadasCurso.php");
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