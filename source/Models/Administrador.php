<?php

class Administrador{
    private $idAdmin;
    private $loginAdmin;
    private $senhaAdmin;

    //Gets e Sets
    public function getIdAdmin(){
        return $this->idAdmin;
    }
    public function setIdAdmin($idAdmin){
        $this->idAdmin = $idAdmin;
    }

    public function getLoginAdmin(){
        return $this->loginAdmin;
    }
    public function setLoginAdmin($loginAdmin){
        $this->loginAdmin = $loginAdmin;
    }

    public function getSenhaAdmin(){
        return $this->senhaAdmin;
    }
    public function setSenhaAdmin($senhaAdmin){
        $this->senhaAdmin = $senhaAdmin;
    }
}