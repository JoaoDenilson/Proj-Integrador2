<?php
namespace Source\Controllers;
use League\Plates\Engine;
use Source\DAO\ReservaDAO;
use Source\Models\Reserva;
use Source\DAO\DisciplinaDAO;
use Source\Models\Disciplina;
use Source\DAO\LaboratorioDAO;
use Source\DAO\HorarioDAO;
use Source\Models\Laboratorio;
use Dompdf\Dompdf; 

class HorarioController{
		private $view;
        private $router;
		private $reserva;
		private $disciplinaDAO;
        private $LaboratorioDAO;
        private $reservaDAO;
        private $dompdf;

		public function __construct($router){
			$this->reserva = new reserva();
			$this->disciplinaDAO = new DisciplinaDAO();
			$this->LaboratorioDAO = new LaboratorioDAO();
			$this->reservaDAO = new ReservaDAO();
			$this->horarioDAO = new HorarioDAO();
			$this->router = $router;
			$this->view =Engine::create(__DIR__."/../../view","php");
		}

		public function index(){
            session_start();
            if (isset($_SESSION['adm'])){
                $linhasManha = $this->horarioDAO->horarioManha();
                $linhasTarde = $this->horarioDAO->horarioTarde();
                $linhasNoite = $this->horarioDAO->horarioNoite();
                //var_dump($linhas);
                //die();
                $K = $linhasManha[0]['horarios'];
				//var_dump($K);
                $horarios_separado = explode("&", $K);
                //var_dump($horarios_separado);
                //die();
                echo $this->view->render("listarHor",[
                    "title"=>"Listar Cursos | ".SITE,
                    "horarios" => $horarios_separado

                //Terar 
                $M = $linhasManha[0]['horarios'];
                $T = $linhasTarde[0]['horarios'];
                $N = $linhasNoite[0]['horarios'];
				//var_dump($K);
                $horariosManha = explode("&", $M);
                $horariosTarde = explode("&", $T);
                $horarioNoite = explode("&", $N);

               //var_dump($horarios_separado);
                //die();
                echo $this->view->render("listarHor",[
                    "title"=>"Listar Cursos | ".SITE,
                    "dadosManha" => $linhasManha,
                    "dadosTarde" => $linhasTarde,
                    "dadosNoite" => $linhasNoite,
                    "horariosManha" => $horariosManha,
                    "horariosTarde" => $horariosTarde,
                    "horariosNoite" => $horarioNoite,
                ]);
            }else{
                $this->router->redirect("Web.login");
            }
        }


		//Gerar PDF com os horarios
		public function schedule(){
			
		}
	}