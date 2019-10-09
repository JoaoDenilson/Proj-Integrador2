<?php
	class Curso{
		private $idCurso;
		private $nomeCurso;
		private $siglaCurso;

		public function getIdCurso(){
			return $this->idCurso;
		}
		public function setIdCurso($idCurso){
			$this->idCurso = $idCurso;
		}

		public function getNomeCurso(){
			return $this->nomeCurso;
		}
		public function setNomeCurso($nomeCurso){
			$this->nomeCurso = $nomeCurso;
		}

		public function getSiglaCurso(){
			return $this->siglaCurso;
		}
		public function setSiglaCurso($siglaCurso){
			$this->siglaCurso = $siglaCurso;
		}

}