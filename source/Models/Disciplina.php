<?php
namespace Source\Models;

class Disciplina{
    private $idDisc;
   // private $cursoDisc;
    private $nomeDisc;
    private $siglaDisc;
    private $idCurso;

    public function getIdDisc(){
        return $this->idDisc;
    }
    
    public function setIdDisc($idDisc){
        $this->idDisc = $idDisc;
    }

    public function getNomeDisc(){
        return $this->nomeDisc;
    }
    
    public function setNomeDisc($nomeDisc){
        $this->nomeDisc = $nomeDisc;
    }

    public function getSiglaDisc(){
        return $this->siglaDisc;
    }
    
    public function setSiglaDisc($siglaDisc){
        $this->siglaDisc = $siglaDisc;
    }

    public function getCursoDisc(){
        return $this->cursoDisc;
    }
    
    public function setCursoDisc($cursoDisc){
        $this->cursoDisc = $cursoDisc;
    }

    public function getIdCurso()
    {
        return $this->idCurso;
    }
    
    public function setIdCurso(Curso $idCurso)
    {
        return $this->idCurso = $idCurso;
    }
}