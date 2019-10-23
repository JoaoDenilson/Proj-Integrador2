<?php
namespace Source\Controllers;
use League\Plates\Engine;
use Source\DAO\ProfessorDAO;
use Source\Models\Professor;

class ProfessorController{
    private $prof;
    private $profDAO;
    private $view;
    private $router;

    public function __construct($router){
        $this->router = $router;
        $this->profDAO= new ProfessorDAO();
        $this->prof = new Professor();
        $this->view =Engine::create(__DIR__."/../../view","php");
    }


    public function index(){
        session_start();
        if (isset($_SESSION['adm'])){
            $professor = $this->profDAO->listarTudo();
            //echo var_dump($lab);
            echo $this->view->render("listarProf",[
                "title"=>"Professor | ".SITE,
                "professores" => $professor
            ]);
        }else{
            $this->router->redirect("Web.login");
        }
    }

    public function edit($id){
        session_start();
        if (isset($_SESSION['adm'])){
            $n = $id['id'];
            $prof = $this->profDAO->listaRegistro($n);
            echo $this->view->render("editarProf",[
                "title"=>"Professor | ".SITE,
                "professor" => $prof
            ]);
        }else{
            $this->router->redirect("Web.login");
        }
    }

    public function update($data){
        //recebe os novos dados do editarProf.php da View, chama o metodo atualizar do laboratorioDAO passando no parametro o objeto laboratório, para que os dados sejam substituidos no banco
        $idProf = $_POST['idProf'];
        $nomeProf = $_POST['nomeProf'];
        $senhaProf = $_POST['senhaProf'];
        $celProf = $_POST['celProf'];
        $emailProf = $_POST['emailProf'];

        $this->prof->setIdProf($idProf);
        $this->prof->setNomeProf($nomeProf);
        $this->prof->setSenhaProf($senhaProf);
        $this->prof->setCelProf($celProf);
        $this->prof->setEmailProf($emailProf);

        $this->profDAO->atualizar($this->prof);

        $this->index();
    }

    public function create(){
        session_start();
        if (isset($_SESSION['adm'])){
            echo $this->view->render("cadasProf",[
                "title"=>"Adicionar Prof | ".SITE

            ]);
        }else{
            $this->router->redirect("Web.login");
        }
    }

    public function store($data){
        $nomeProf = $_POST['nomeProf'];
        //md5 é para criptografar a senha
        $senhaProf = md5($_POST['senhaProf']);
        $celProf = $_POST['celProf'];
        $emailProf = $_POST['emailProf'];

        $this->prof->setNomeProf($nomeProf);
        $this->prof->setSenhaProf($senhaProf);
        $this->prof->setCelProf($celProf);
        $this->prof->setEmailProf($emailProf);

        $this->profDAO->insere($this->prof);

        $this->index();
    }

    public function delete($id){
        $n = $id['id'];
        $this->profDAO->deleta($n);
        $this->index();
    }
}