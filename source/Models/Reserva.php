<?php

namespace Source\Models;
use Source\DAO\CursoDAO;

class Reserva{
        private $idReserva;
        private $dataReserva;
        private $horaReserva;
        private $horarios;
        private $turno;
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

        //Get e Set Turno
        public function getTurno()
        {
            return $this->turno;
     }

        public function setTurno($turno)
        {
            return $this->turno = $turno;
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

        //Get e Set Horarios
        public function getHorarios()
        {
            return $this->horarios;
        }

        public function setHorarios($horarios)
        {
            return $this->horarios = $horarios;
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

        public function setIdDisciplinaFk($idDisciplinaFk)
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