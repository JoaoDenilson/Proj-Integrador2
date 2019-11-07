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
                $laboratorio = $this->LaboratorioDAO->listarTudo();
                $linhasManha = $this->horarioDAO->horario("manha", 1);
                //$linhasManha = $this->horarioDAO->horarioManha();
                //$linhasTarde = $this->horarioDAO->horarioTarde();
                //$linhasNoite = $this->horarioDAO->horarioNoite();
                // echo "<pre>";
                //var_dump($linhasManha[0]["horarios"]);
                //var_dump($linhasManha);
                //die();
                //var_dump($linhasManha[0]);
                // $arr = explode("&", $linhasManha[0]["horarios"]);
                // $s = array_search('tercaA', $arr);
                // var_dump($s);
                // echo "</pre>";
                // die();

                $horaA = array(
                    array("-","-"),
                    array("-","-"),
                    array("-","-"),
                    array("-","-"),
                    array("-","-"));
                $horaB = array(
                    array("-","-"),
                    array("-","-"),
                    array("-","-"),
                    array("-","-"),
                    array("-","-"));
                $horaC = array(
                    array("-","-"),
                    array("-","-"),
                    array("-","-"),
                    array("-","-"),
                    array("-","-"));
                $horaD = array(
                    array("-","-"),
                    array("-","-"),
                    array("-","-"),
                    array("-","-"),
                    array("-","-"));

                //var_dump($horaA);
                for($i = 0; $i < count($linhasManha); $i++){
                    //var_dump($linhasManha[$i]["horarios"]);
                    //var_dump($linhasManha[$i]["nomeDisciplina"]);
                    //var_dump($linhasManha[$i]["nomeUsuario"]);
                    $arr = explode("&", $linhasManha[$i]["horarios"]);
                    $p = $linhasManha[$i]["nomeUsuario"];
                    $d = $linhasManha[$i]["nomeDisciplina"];
                    //var_dump($arr);

                    for ($x = 0; $x < count($arr); $x++){
                        //var_dump($arr[$x]);
                        //$s = array_search('tercaA', $arr);
                        //Linha 1° Horário
                        if ($horaA[0]){
                            if ($arr[$x] == 'segundaA'){
                                $horaA[0] = array($p,$d);
                            }
                            if($arr[$x] === 'tercaA'){
                                $horaA[1] = array($p,$d);
                                //var_dump($horaA[1]);
                                //die();
                            }
                            if($arr[$x] == 'quartaA'){
                                $horaA[2] = array($p,$d);
                            }
                            if($arr[$x] == 'quintaA'){
                                $horaA[3] = array($p,$d);
                            }
                            if($arr[$x] == 'sextaA'){
                                $horaA[4] = array($p,$d);
                            }
                        }

                        //Linha 2° Horário
                        if ($horaB[0]){
                            if ($arr[$x] == 'segundaB'){
                                $horaB[0] = array($p,$d);
                            }
                            if($arr[$x] === 'tercaB'){
                                $horaB[1] = array($p,$d);
                                //var_dump($horaA[1]);
                                //die();
                            }
                            if($arr[$x] == 'quartaB'){
                                $horaB[2] = array($p,$d);
                            }
                            if($arr[$x] == 'quintaB'){
                                $horaB[3] = array($p,$d);
                            }
                            if($arr[$x] == 'sextaB'){
                                $horaB[4] = array($p,$d);
                            }
                        }

                        //Linha 3° Horário
                        if ($horaC[0]){
                            if ($arr[$x] == 'segundaC'){
                                $horaC[0] = array($p,$d);
                            }
                            if($arr[$x] === 'tercaC'){
                                $horaC[1] = array($p,$d);
                                //var_dump($horaA[1]);
                                //die();
                            }
                            if($arr[$x] == 'quartaC'){
                                $horaC[2] = array($p,$d);
                            }
                            if($arr[$x] == 'quintaC'){
                                $horaC[3] = array($p,$d);
                            }
                            if($arr[$x] == 'sextaC'){
                                $horaC[4] = array($p,$d);
                            }
                        }

                        //Linha 4° Horário
                        if ($horaD[0]){
                            if ($arr[$x] == 'segundaD'){
                                $horaD[0] = array($p,$d);
                            }
                            if($arr[$x] === 'tercaD'){
                                $horaD[1] = array($p,$d);
                                //var_dump($horaA[1]);
                                //die();
                            }
                            if($arr[$x] == 'quartaD'){
                                $horaD[2] = array($p,$d);
                            }
                            if($arr[$x] == 'quintaD'){
                                $horaD[3] = array($p,$d);
                            }
                            if($arr[$x] == 'sextaD'){
                                $horaD[4] = array($p,$d);
                            }
                        }
                    }
                }

                echo $this->view->render("listarHor",[
                    "title"=>"Listar Cursos | ".SITE,
                    "horaA" => $horaA,
                    "horaB" => $horaB,
                    "horaC" => $horaC,
                    "horaD" => $horaD,
                    "laboratorios" => $laboratorio
                ]);

            }else{
                $this->router->redirect("Web.login");
            }
        }


		//Gerar PDF com os horarios
		public function schedule(){
			
		}

		//Função apenas para anotações
		public function index2(){
            $K = $linhasManha[0]['horarios'];
            //var_dump($K);
            $horarios_separado = explode("&", $K);
            //var_dump($horarios_separado);
            //die();
            //Terar


            $K = $linhasManha[0]['horarios'];
            //var_dump($K);
            $horarios_separado = explode("&", $K);
            //var_dump($horarios_separado);
            //die();

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


        }
	}