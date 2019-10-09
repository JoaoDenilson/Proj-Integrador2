<?php
require_once "Model/reservaModel.class.php";

    class Reserva{
        private $idReserva;
        private $dataReserva;
        private $horaReserva;
        private $statusReserva;
        private $justificativaReserva;
        private Curso $idCurso;
    

        public function getIdReserva()
        {
            return $this->idReserva;
        }
        
        public function setIdReserva($idReserva)
        {
            return $this->idReserva = $idReserva;
        }

        public function getDataReserva()
        {
            return $this->dataReserva;
        }
        
        public function setDataReserva($dataReserva)
        {
            return $this->dataReserva = $dataReserva;
        }

        public function getHoraReserva()
        {
            return $this->horaReserva;
        }
        
        public function setHoraReserva($horaReserva)
        {
            return $this->horaReserva = $horaReserva;
        }

        public function getStatusReserva()
        {
            return $this->statusReserva;
        }
        
        public function setStatusReserva($statusReserva)
        {
            return $this->statusReserva = $statusReserva;
        }

        public function getJustificativaReserva()
        {
            return $this->justificativaReserva;
        }
        
        public function setJustificativaReserva($justificativaReserva)
        {
            return $this->justificativaReserva = $justificativaReserva;
        }


        public function getIdCurso()
        {
            return $this->idCurso;
        }
        
        public function setIdCurso(Curso $idCurso)
        {
            return $this->idCurso = $idCurso;
        }idCurso
    }