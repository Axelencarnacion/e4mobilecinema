<?php
class ActeurFilm {
	private $id3;
        private $idfilm;
        private $idact;
                
	
        function __construct($id3,$idfilm,$idact){
		$this->id3 = $id3;
                $this->idfilm = $idfilm;
                $this->idact = $idact;
	}
	public function getId3(){
		return $this->id3;
	}
	public function getIdFilm(){
                return $this->idfilm;
        }
        public function getIdAct(){
            return $this->idact;
        }
}
?>