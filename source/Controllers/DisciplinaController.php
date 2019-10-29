<?php
namespace Source\Controllers;
use League\Plates\Engine;
use Source\DAO\DisciplinaDAO;
use Source\Models\Disciplina;
use Source\DAO\CursoDAO;
use Source\Models\Curso;

class DisciplinaController{
		private $disciplina;
		private $disciplinaDAO;
		private $curso;
		private $cursoDAO;
        private $view;
        private $router;
		public function __construct($router){
            $this->router = $router;
			$this->disciplinaDAO= new DisciplinaDAO();
			$this->disciplina = new Disciplina();
            $this->cursoDAO= new CursoDAO();
            $this->curso = new Curso();
            $this->view =Engine::create(__DIR__."/../../view","php");
		}
		
		public function index(){
            session_start();
            if (isset($_SESSION['adm']) or isset($_SESSION['prof'])){
                $disc = $this->disciplinaDAO->listarTudo();
                echo $this->view->render("listarDisc",[
                    "title"=>"Disciplina | ".SITE,
                    "disciplinas" => $disc
                ]);
            }else{
                $this->router->redirect("Web.login");
            }
        }

        public function create(){
            session_start();
            if (isset($_SESSION['adm'])){
                $curs = $this->cursoDAO->listarTudo();
                echo $this->view->render("cadasDisc",[
                    "title"=>"Adicionar Disci | ".SITE,
                    "cursos" => $curs
                ]);
            }else{
                $this->router->redirect("Web.login");
            }
		}

		public function store($data){
			$nomeDisciplina = $_POST['nomeDisc'];
			$siglaDisciplina = $_POST['siglaDisc'];
	        $cursoDisciplina = $_POST['cursoDisc'];

	        $this->disciplina->setNomeDisc($nomeDisciplina);
	        $this->disciplina->setSiglaDisc($siglaDisciplina);
	        $this->disciplina->setCursoDisc($cursoDisciplina);

	        $this->disciplinaDAO->insere($this->disciplina);
	        $this->index();
		}

		public function edit($id){
            session_start();
            if (isset($_SESSION['adm'])){
                $n = $id['id'];
                $disc = $this->disciplinaDAO->listaRegistro($n);
                $curs = $this->cursoDAO->listarTudo();
                echo $this->view->render("editarDisc",[
                    "title"=>"Disciplina | ".SITE,
                    "disciplina" => $disc,
                    "cursos" => $curs
                ]);
            }else{
                $this->router->redirect("Web.login");
            }
		}

		public function update($data){
			//recebe os novos dados do editarLab.php da View, chama o metodo atualizar do laboratorioDAO passando no parametro o objeto laboratório, para que os dados sejam substituidos no banco
			$idDisciplina = $_POST['id'];
			$nomeDisciplina = $_POST['nomeDisc'];
	        $siglaDisciplina = $_POST['siglaDisc'];
	        $cursoDisciplina = $_POST['cursoDisc'];
	        
	        $this->disciplina->setIdDisc($idDisciplina);
	        $this->disciplina->setNomeDisc($nomeDisciplina);
	        $this->disciplina->setSiglaDisc($siglaDisciplina);
	        $this->disciplina->setCursoDisc($cursoDisciplina);

	        $this->disciplinaDAO->atualizar($this->disciplina);
	        $this->index();
		}

		public function delete($id){
            $n = $id['id'];
			$this->disciplinaDAO->deleta($n);
			$this->index();
		}
    }