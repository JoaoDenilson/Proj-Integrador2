<?php
namespace Source\Controllers;
use League\Plates\Engine;
use Source\DAO\DisciplinaDAO;
use Source\Models\Disciplina;

use Source\Models\CursoDAO;
use Source\Models\Curso;

class DisciplinaController{
		private $disciplina;
		private $disciplinaDAO;
        private $view;
        private $router;
		public function __construct($router){
            $this->router = $router;
			$this->disciplinaDAO= new DisciplinaDAO();
			$this->disciplina = new Disciplina();
            $this->view =Engine::create(__DIR__."/../../view","php");
		}
		
		public function index(){
            session_start();
            if (isset($_SESSION['adm'])){
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
                echo $this->view->render("cadasDisc",[
                    "title"=>"Adicionar Disci | ".SITE
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
			//atraves do ID seleciona os dados do registro e envia pela SESSION para o editarLab.php da View
            $n = $id['id'];
            $disc = $this->disciplinaDAO->listaRegistro($n);
            echo $this->view->render("editarDisc",[
                "title"=>"Disciplina | ".SITE,
                "disciplina" => $disc
            ]);
		}

		public function update($data){
			//recebe os novos dados do editarLab.php da View, chama o metodo atualizar do laboratorioDAO passando no parametro o objeto laboratório, para que os dados sejam substituidos no banco
			$idDisciplina = $_POST['id'];
			$nomeDisciplina = $_POST['nomeDisciplina'];
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