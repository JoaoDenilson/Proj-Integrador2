<?php

namespace Source\Models;

	class Laboratorio{
		private $idLab;
		private $nomeLab;
		private $codLab;
		private $qtdComputadores;

		public function getIdLab(){
			return $this->idLab;
		}
		public function setIdLab($idLab){
			$this->idLab = $idLab;
		}
		public function getNomeLab(){
			return $this->nomeLab;
		}
		public function setNomeLab($nomeLab){
			$this->nomeLab = $nomeLab;
		}
		public function getCodLab(){
			return $this->codLab;
		}
		public function setCodLab($codLab){
			$this->codLab = $codLab;
		}
		public function getQtdComputadores(){
			return $this->qtdComputadores;
		}
		public function setQtdComputadores($qtdComputadores){
			$this->qtdComputadores = $qtdComputadores;
		}

	}

?>
