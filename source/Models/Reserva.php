<?php

namespace Source\Models;
use Source\Models\Curso;

class Reserva{
        private $idReserva;
        private $dataReserva;
        private $horaReserva;
        private $statusReserva;
        private $justificativaReserva;
        private $observacaoReserva;
        private $idDisciplinaFk;
        private $idUsuarioFk;
        private $idLabFk;

        //Get e Set IdReerva
        public function getIdReserva()
        {
            return $this->idReserva;
        }
        
        public function setIdReserva($idReserva)
        {
            return $this->idReserva = $idReserva;
        }

        //Get e Set DataReerva
        public function getDataReserva()
        {
            return $this->dataReserva;
        }
        
        public function setDataReserva($dataReserva)
        {
            return $this->dataReserva = $dataReserva;
        }

        //Get e Set HoraReerva
        public function getHoraReserva()
        {
            return $this->horaReserva;
        }
        
        public function setHoraReserva($horaReserva)
        {
            return $this->horaReserva = $horaReserva;
        }

        //Get e Set StatusReerva
        public function getStatusReserva()
        {
            return $this->statusReserva;
        }
        
        public function setStatusReserva($statusReserva)
        {
            return $this->statusReserva = $statusReserva;
        }

        //Get e Set JustificativaReerva
        public function getJustificativaReserva()
        {
            return $this->justificativaReserva;
        }
        
        public function setJustificativaReserva($justificativaReserva)
        {
            return $this->justificativaReserva = $justificativaReserva;
        }

        //Get e Set ObservacaoReerva
        public function getObservacaoReserva()
        {
            return $this->observacaoReserva;
        }

        public function setObservacaoReserva($observacaoReserva)
        {
            return $this->observacaoReserva = $observacaoReserva;
        }

        //Get e Set IdDisciplina
        public function getIdDisciplinaFk()
        {
            return $this->idDisciplinaFk;
        }

        public function setIdDisciplinaFk(Disciplina $idDisciplinaFk)
        {
            return $this->idDisciplinaFk = $idDisciplinaFk;
        }

        //Get e Set IdUsuário
        public function getIdUsuarioFk()
        {
            return $this->idUsuarioFk;
        }

        public function setIdUsuarioFk($idUsuarioFk)
        {
            return $this->idUsuarioFk = $idUsuarioFk;
        }

        //Get e Set IdLaborátorio
        public function getIdLabFk()
        {
            return $this->idLabFk;
        }

        public function setIdLabFk($idLabFk)
        {
            return $this->idLabFk = $idLabFk;
        }
    }