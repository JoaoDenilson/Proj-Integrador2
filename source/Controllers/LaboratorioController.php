<?php

namespace Source\Controllers;
use League\Plates\Engine;
use Source\DAO\LaboratorioDAO;
use Source\Models\Laboratorio;

class LaboratorioController{
        private $lab;
        private $labDAO;
        private $view;
        private $router;

		public function __construct($router){
            $this->router = $router;
			$this->labDAO= new LaboratorioDAO();
            $this->lab = new Laboratorio();
           $this->view =Engine::create(__DIR__."/../../view","php");
           
		}

		public function index(): void{
            session_start();
            if (isset($_SESSION['adm'])){
                $laboratorio = $this->labDAO->listarTudo();
                echo $this->view->render("listarLab",[
                    "title"=>"Laboratorio | ".SITE,
                    "laboratorios" => $laboratorio
                ]);
            }else{
                $this->router->redirect("Web.login");
            }
        }

        public function edit($id){
            session_start();
            if (isset($_SESSION['adm'])){
                $n = $id['id'];
                $lab = $this->labDAO->listaRegistro($n);
                echo $this->view->render("editarLab",[
                    "title"=>"Laboratorio | ".SITE,
                    "laboratorio" => $lab
                ]);
            }else{
                $this->router->redirect("Web.login");
            }
        }
        
        public function update($data){
			//recebe os novos dados do editarLab.php da View, chama o metodo atualizar do laboratorioDAO passando no parametro o objeto laboratório, para que os dados sejam substituidos no banco
			$idLaboratorio = $_POST['idLab'];
			$nomeLaboratorio = $_POST['nomeLab'];
	        $codigoLaboratorio = $_POST['codLab'];
            $qtd = $_POST['qtdComputadores'];
            
	        $this->lab->setIdLab($idLaboratorio);
	        $this->lab->setNomeLab($nomeLaboratorio);
	        $this->lab->setCodLab($codigoLaboratorio);
	        $this->lab->setQtdComputadores($qtd);
	        $this->labDAO->atualizar($this->lab);

	        $this->index();
        }
        
        public function create(){
            if (isset($_SESSION['adm'])){
                echo $this->view->render("cadasLab",[
                    "title"=>"Adicionar Lab | ".SITE
                ]);
            }else{
                $this->router->redirect("Web.login");
            }
		}

        public function store($data){
            //recebe os dados do cadasLab.php da View, chama o metodo insere do LaboratorioDAO 
            //passando no parametro o objeto Laboratorio, para que os dados sejam guardados no banco

            $nomeLaboratorio = $_POST['nomeLab'];
	        $codigoLaboratorio = $_POST['codeLab'];
            $qtdCompLab = $_POST['qtdComputadores'];
            
	        $this->lab->setNomeLab($nomeLaboratorio);
	        $this->lab->setCodLab($codigoLaboratorio);
	        $this->lab->setQtdComputadores($qtdCompLab);
	   
            $this->labDAO->insere($this->lab);

            $this->index();
        }
        
        public function delete($id){
            $n = $id['id'];
            $this->labDAO->deleta($n);

			$this->index();
        }

}
