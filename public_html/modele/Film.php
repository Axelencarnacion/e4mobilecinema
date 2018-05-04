<?php
class Film{
	private $id;
	private $nomFilm;
	private $dateSortie;
	private $genre;
        private $nation;
                
	function __construct($id,$nomFilm,$dateSortie,$genre,$nation){
		$this->id = $id;
		$this->nomFilm = $nomFilm;
		$this->dateSortie = $dateSortie;
                $this->genre = $genre;
                $this->nation = $nation;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getNomFilm(){
		return $this->nomFilm;
	}
        
	
	public function getDateSortie(){
		return $this->dateSortie;
	}
        
        public function getGenre(){
		return $this->genre;
	}
	
	public function getNation(){
		return $this->nation;
	}
}
?>