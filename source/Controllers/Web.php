<?php

namespace Source\Controllers;
use Source\Database;
use League\Plates\Engine;

class Web{
    private $view;
    private $router;

    public function __construct($router){
        $this->router = $router;
        $this->view =Engine::create(__DIR__."/../../view","php");
    }

    public function login(): void {
        echo $this->view->render("login",[
            "title"=>"login | ".SITE
        ]);
    }

    public function dashboard(): void {
        session_start();
        if (isset($_SESSION['adm'])){
            echo $this->view->render("dashboard",[
                "title"=>"dashboard | ".SITE
            ]);
        }else{
            $this->router->redirect("Web.login");
        }
    }

    public function home(): void {
        session_start();
        if (isset($_SESSION['prof'])){
            echo $this->view->render("home",[
                "title"=>"Home | ".SITE
            ]);
        }else{
            $this->router->redirect("Web.login");
        }
    }

    public function authentication(): void {
        //Recebendo os dados.
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        //Fazer a chamada no banco.
        $con = Database::conexao();
        $query = "SELECT * FROM tb_usuario WHERE emailUsuario = ? AND senhaUsuario= ? "; // usuario= :email AND senha= :senha
        //Evitar SQL INJECTION
        $stmt = $con->prepare($query);
        $stmt->bindParam(1,$email); // ou bindValue quando não quer usar uma variável
        $stmt->bindParam(2,$senha);
        $ok = $stmt->execute();
        //Mostrando a tabela fazendo associação
        $linhas = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        //Faltar fazer a vereficação.
        if(count($linhas)>0){
            $nome  = $linhas[0]['nomeUsuario'];
            $nivel = $linhas[0]['nivelUsuario'];
            $idUser = $linhas[0]['idUsuario'];

            session_start();

            if ($nivel == true){
                //echo "Usuário Adm: ".$nome;
                $_SESSION['adm'] = $nome;

                $this->router->redirect("Web.dashboard");
                //$this->dashboard();
            }
            else {
                //echo "Usuário Professor: ".$nome;
                $_SESSION['idProf']= $idUser;
                $_SESSION['prof'] = $nome;
                $this->router->redirect("Web.home");
                //$this->home();
            }
        }
        else{
            $this->router->redirect("Web.login");
        }

    }

    public function logout(): void {
        session_start();
        if (isset($_SESSION['adm'])){
            session_destroy();
            $this->router->redirect("Web.login");
        }
        elseif(isset($_SESSION['prof'])){
            session_destroy();
            $this->router->redirect("Web.login");
        }
        else{
            $this->router->redirect("Web.login");
        }

    }

    public function error(array $data): void {
        echo $this->view->render("error",[
            "title"=>"Error {$data["errcode"]}".SITE,
            "error"=> $data["errcode"]
        ]);
    }
}