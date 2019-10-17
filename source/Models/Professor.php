<?php

namespace Source\Models;

class Professor{
    private $idProf;
    private $nomeProf;
    //private $loginProf;
    private $senhaProf;
    private $celProf;
    private $emailProf;

    public function getIdProf()
    {
    return $this->idProf;
    }

    public function setIdProf($idProf)
    {
    $this->idProf = $idProf;
    }

    public function getNomeProf()
    {
    return $this->nomeProf;
    }

    public function setNomeProf($nomeProf)
    {
    $this->nomeProf = $nomeProf;
    }

    /*public function getLoginProf()
    {
    return $this->loginProf;
    }

    public function setLoginProf($loginProf)
    {
    $this->loginProf = $loginProf;
    }
    */
    public function getSenhaProf()
    {
    return $this->senhaProf;
    }

    public function setSenhaProf($senhaProf)
    {
    $this->senhaProf = $senhaProf;
    }

    public function getCelProf()
    {
    return $this->celProf;
    }

    public function setCelProf($celProf)
    {
    $this->celProf = $celProf;
    }

    public function getEmailProf()
    {
    return $this->emailProf;
    }

    public function setEmailProf($emailProf)
    {
    $this->emailProf = $emailProf;
    }
}