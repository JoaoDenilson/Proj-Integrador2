<?php

namespace Source\Models;

class Professor{
    private $idProf;
    private $cursoProf;
    private $loginProf;
    private $senhaProf;
    private $celProf;
    private $emailProf;

    private $emailProf;

    public function getIdProf()
    {
    return $this->idProf;
    }

    public function setIdProf($idProf)
    {
    $this->idProf = $idProf;
    }

    public function getCursoProf()
    {
    return $this->cursoProf;
    }

    public function setCursoProf($cursoProf)
    {
    $this->cursoProf = $cursoProf;
    }

    public function getLoginProf()
    {
    return $this->loginProf;
    }

    public function setLoginProf($loginProf)
    {
    $this->loginProf = $loginProf;
    }

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