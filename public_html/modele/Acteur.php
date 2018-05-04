<?php
class Acteur{
	private $id2;
	private $nomActeur;
        private $prenomActeur;
	private $nationalite;
	private $naissance;
        private $age;
                
	function __construct($id2,$nomActeur,$prenomActeur,$nationalite,$naissance,$age){
		$this->id2 = $id2;
		$this->nomActeur = $nomActeur;
                $this->prenomActeur = $prenomActeur;
                $this->nationalite = $nationalite;
		$this->naissance = $naissance;
                $this->age = $age;
	}
	
	public function getId2(){
		return $this->id2;
	}
	
	public function getNomActeur(){
		return $this->nomActeur;
	}
        
        public function getPrenomActeur(){
		return $this->prenomActeur;
	}
        public function getNationaliteActeur(){
		return $this->nationalite;
	}
	
	public function getNaissanceActeur(){
		return $this->naissance;
	}
        
        public function getAge(){
		return $this->age;
	}
}
?>