<?php
class Passerelle{
        static private $mysql_link;
//  SELECT acteur_nom FROM acteur AS a,acteurfilm AS b WHERE b.id_act=a.acteur_id 
//        SELECT film_nom FROM acteur AS a,acteurfilm AS b,film AS c WHERE b.id_act=a.acteur_id AND b.id_film=c.film_id tout les films qu ils ont jouer
//SELECT acteur_nom,acteur_prenom FROM acteurfilm AS a,acteur AS b WHERE b.acteur_id=a.id_act AND id_film= "59"

	static function connexion($mysql_hote,$mysql_db,$mysql_user,$mysql_pass){
		Passerelle::$mysql_link = new PDO("mysql:host=$mysql_hote;dbname=$mysql_db", "$mysql_user", "$mysql_pass");
	}
	static function addFilm($nomFilm,$dateSortie,$genre,$nation){
            $sql = "insert film(film_id, film_nom, film_dateSortie, film_genre, film_nation	) values (NULL,'$nomFilm','$dateSortie','$genre','$nation')";
            $result = Passerelle::$mysql_link->exec($sql);           
            if ($result == 1){
                    return "SUCCESS";
            }
            else{
                    return "ERREUR";
            }
        }
        static function addActeur($nomActeur,$prenomActeur,$nationalite,$naissance,$age){
            $sql = "insert acteur(acteur_id, acteur_nom, acteur_prenom, acteur_nation, acteur_datenaiss,acteur_age	) values (NULL,'$nomActeur','$prenomActeur','$nationalite','$naissance','$age')";
            $result = Passerelle::$mysql_link->exec($sql);           
            if ($result == 1){
                    return "SUCCESS";
            }
            else{
                    return "ERREUR";
            }
        }
        static function addActeurFilm($idfilm,$idact){
            $sql = "insert acteurfilm(id_actfilm, film_id, id_act) values (NULL,'$idfilm','$idact')";
            $result = Passerelle::$mysql_link->exec($sql);           
            if ($result == 1){
                    return "SUCCESS";
            }
            else{
                    return "ERREUR";
            }
        }
        static function getFilm(){
            $film = array();
            
            $sql ="select * from film   ";
            $result = Passerelle::$mysql_link->query($sql);
            var_dump($sql);
            while ($row = $result->fetch()) {
                            $id = $row['film_id'];
                            $nomFilm = $row['film_nom'];
                            $dateSortie = $row['film_dateSortie'];
                            $genre = $row['film_genre'];
                            $nation = $row ['film_nation'];
                            
                            $film = new Film($id,$nomFilm,$dateSortie,$genre,$nation);
                            $films[] = $film;
            }		
            return $films;
        }

        static function getOneFilm($id){
            $film = null;
            if ($id != -1) {
                    $sql ="select * from film where film_id=".$id;
                    
                    $result = Passerelle::$mysql_link->query($sql);
                    if ($result){
                            $row = $result->fetch();
                            $id = $row['film_id'];
                            $nomFilm = $row['film_nom'];
                            $dateSortie = $row['film_dateSortie'];
                            $genre = $row['film_genre'];
                            $nation = $row ['film_nation'];
                            $film = new Film($id,$nomFilm,$dateSortie,$genre,$nation);		
                    }
            }
            return $film;
        }
        static function getOneActeur($id2){
            $acteur = null;
            if ($id2 != -1) {
                    $sql ="select * from acteur where acteur_id=".$id2;
                    $result = Passerelle::$mysql_link->query($sql);
                    if ($result){
                            $row = $result->fetch();
                            $id2 = $row['acteur_id'];
                            $nomActeur = $row['acteur_nom'];
                            $prenomActeur = $row['acteur_prenom'];
                            $nationalite = $row['acteur_nation'];
                            $naissance = $row ['acteur_datenaiss'];
                            $age = $row ['acteur_age'];
                            $acteur = new Acteur($id2,$nomActeur,$prenomActeur,$nationalite,$naissance,$age);		
                    }
            }
            return $acteur;
        }
//          $sql ="SELECT acteur_nom,acteur_prenom FROM acteurfilm AS a,acteur AS b WHERE b.acteur_id=a.id_act AND id_film= ".$id;
 static function getLesActeursFilm($id){
            
            $acteurfilm = array();
                
                    $sql ="SELECT * FROM acteurfilm WHERE film_id= ".$id;
                    
                    $result = Passerelle::$mysql_link->query($sql);
                    var_dump($sql);
                    while ($row = $result->fetch()) { 
                        
                            $id = $row['id_actfilm'];
                            $idfilm = $row['film_id'];
                            $idact = $row['id_act'];
                            var_dump($idact);
                            $acteurfilm = new ActeurFilm($id,$idfilm,$idact);	
                            $acteursfilm[] = $acteurfilm;	
                    }
                    
            return $acteursfilm;
        
        }
        static function getLesActeursFilm2($id3){
            
            $acteurfilm = array();
                
                    $sql ="SELECT * FROM acteurfilm   WHERE  film_id=  ".$id3;
                    $result = Passerelle::$mysql_link->query($sql);
//                    var_dump($sql);
                    while ($row = $result->fetch()) { 
                        
                            $id3 = $row['id_actfilm'];
                            $idfilm = $row['film_id'];
                            $idact = $row['id_act'];    
                            $nomActeur = $row['acteur_nom'];
                            $prenomActeur = $row['acteur_prenom'];
                            var_dump($nomActeur);
                            $acteurfilm = new ActeurFilm($id3,$idfilm,$idact,$nomActeur,$prenomActeur);	
                            $acteursfilm[] = $acteurfilm;	
                    }
                    
            return $acteursfilm;
        
        }
        
        static function getLesActeurs(){
            $acteur = array();
                    $sql ="SELECT * FROM acteur order by acteur_id DESC";
                    $result = Passerelle::$mysql_link->query($sql);
                     while ($row = $result->fetch()) {
                            $id2 = $row['acteur_id'];
                            $nomActeur = $row['acteur_nom'];
                            $prenomActeur = $row['acteur_prenom'];
                            $nationalite = $row['acteur_nation'];
                            $naissance = $row ['acteur_datenaiss'];
                            $age = $row ['acteur_age'];
                            $acteur = new Acteur($id2,$nomActeur,$prenomActeur,$nationalite,$naissance,$age);	
                            $acteurs[] = $acteur;	
                    }
            
            return $acteurs;
        }
        
        	
        static function updateFilm($id,$nomFilm,$dateSortie,$genre,$nation){
            $sql="UPDATE `film` SET  `film_nom`='".$nomFilm."', `film_dateSortie` ='$dateSortie',film_genre   ='$genre',film_nation ='$nation'  WHERE film_id=".$id;
            
            $result = Passerelle::$mysql_link->exec($sql);  
        }
        static function updateActeur($id2,$nomFilm,$dateSortie,$genre,$nation){
            $sql="UPDATE `acteur` SET  `film_nom`='".$nomFilm."', `film_dateSortie` ='$dateSortie',film_genre   ='$genre',film_nation ='$nation'  WHERE film_id=".$id;
            
            $result = Passerelle::$mysql_link->exec($sql);  
        }
        
       static function deleteFilm($id){
            $sql="DELETE FROM `film` WHERE film_id=".$id;           
            $result = Passerelle::$mysql_link->exec($sql);  
        } 
        static function deleteActeur($id2){
            $sql="DELETE FROM `acteur` WHERE acteur_id=".$id2;           
            $result = Passerelle::$mysql_link->exec($sql);  
        }
        static function deleteActeurFilm($idact){
            $sql="DELETE FROM `acteurfilm` WHERE id_act=".$idact;           
            $result = Passerelle::$mysql_link->exec($sql);  
        }
}
?>
