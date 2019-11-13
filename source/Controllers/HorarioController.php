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

                echo $this->view->render("listarHor",[
                    "title"=>"Listar Cursos | ".SITE,
                    "laboratorios" => $laboratorio
                ]);

            }else{
                $this->router->redirect("Web.login");
            }
        }

        public function timetable($data){
            $lab_id = $data['lab_id'];
            $turno = "Manhã";
            session_start();
            if (isset($_SESSION['adm'])){

                $linhasManha = $this->horarioDAO->horario($turno, $lab_id);


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

                for($i = 0; $i < count($linhasManha); $i++){
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

                $hours = array(
                    "horaA" => $horaA,
                    "horaB" => $horaB,
                    "horaC" => $horaC,
                    "horaD" => $horaD,
                );

                if (isset($_SESSION['adm']) || isset($_SESSION['prof'])){
                    header('Content-Type: application/json');
                    echo json_encode(array("listHours" => $hours));
                    die();
                }else{
                    header("HTTP/1.0 404 Not Found");
                    echo "Nenhuma horario encontrado.\n";
                    die();
                }

            }else{
                $this->router->redirect("Web.login");
            }
        }

		//Gerar PDF com os horarios
		public function schedule(){
			
		}

	}