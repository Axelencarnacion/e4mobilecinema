<?php
require('modele/dbParametres.php');
require('modele/Film.php');
require('modele/Acteur.php');
require('modele/ActeurFilm.php');
require('modele/Passerelle.php');
require('vue/header.php');
?>
<div data-role="page">
    <div data-role="header" data-theme="b">
        <h1>Studio 65</h1>
         <a href="http://localhost/SIO2/e4MobileFilm/public_html/" data-theme="c" data-icon="home" data-ajax='false'>Home</a>
    </div>
    <div data-role="content">
    <?php 
    
    Passerelle::connexion($MYSQL_HOTE,$MYSQL_DB,$MYSQL_USER,$MYSQL_PASS);
    if (isset ($_REQUEST['action'])){
            $action = $_REQUEST['action'];
    }
    else {
            $action = "";            
    }
    switch ($action) {
            case 'choix1'      :
                                    $contacts = Passerelle::getLesActeurs();
                                    require('vue/showActeur.php'); 
                                     break;
                                    
            case 'choix2'      :
                                    $contacts = Passerelle::getFilm();
                                    require('vue/showFilm.php');
                                    break;
            case 'addnew' 	:  
                                    require('vue/addFilm.php');
                                    break;
            case 'addnew2' 	:  
                                    require('vue/addActeur.php');
                                    break;
            case 'addnew3'      : 
                
                                    $acteur = Passerelle::getLesActeurs();
                                    require ('vue/addActeurFilm.php');
                                    
                                    break;
                                
            case 'insert' 	:   $nomFilm = $_REQUEST['nomFilm'];
                                    $dateSortie = $_REQUEST['date'];
                                    $genre = $_REQUEST['genre'];
                                    $nation = $_REQUEST['nation'];
                                    Passerelle::addFilm($nomFilm, $dateSortie, $genre, $nation); 
                                    $contacts = Passerelle::getFilm();
                                    require ('vue/showFilm.php');
                                    break;
            case 'insert2' 	:   $nomActeur = $_REQUEST['nomActeur'];
                                    $prenomActeur = $_REQUEST['prenomActeur'];
                                    $nationalite = $_REQUEST['nationalite'];
                                    $naissance = $_REQUEST['naissance'];
                                    $age = $_REQUEST['age'];
                                    Passerelle::addActeur($nomActeur, $prenomActeur, $nationalite, $naissance,$age); 
                                    $contacts = Passerelle::getLesActeurs();
                                    require ('vue/showActeur.php');
                                    break;
                                
            case 'insert3' 	:   $idfilm = $_REQUEST['idfilm'];
                                    $idact = $_REQUEST['idact'];
                                    $acteur = Passerelle::getLesActeurs();
                                    $id = $_REQUEST['id'];
                                    $contact = Passerelle::getOneFilm($id);
                                    
                                    Passerelle::addActeurFilm($idfilm, $idact);
                                    require ('vue/showActeurFilm.php');
                                    break;
                                
            case 'details1' 	:   $id = $_REQUEST['id'];
                                    $contact = Passerelle::getOneFilm($id);
                                    require('vue/showOneFilm.php');
                                    break;
                                
            case 'details2' 	:   $id2 = $_REQUEST['id2'];
                                    $contact = Passerelle::getOneActeur($id2);
                                    require('vue/showOneActeur.php');
                                    break;
                                
            case 'details3' 	:   $id = $_REQUEST['id'];
                                    $contacts = Passerelle::getLesActeursFilm($id);
                                    $film =   Passerelle::getOneFilm($id);
                                    require('vue/showActeurFilm.php');      
                                    break;
                                
            case 'update' 	:   $id = $_REQUEST['id'];
                                    $nomFilm = $_REQUEST['nomFilm'];
                                    $dateSortie = $_REQUEST['date'];
                                    $genre = $_REQUEST['genre'];
                                    $nation = $_REQUEST['nation'];
                                    Passerelle::updateFilm($id, $nomFilm, $dateSortie, $genre, $nation); 
                                    $contacts = Passerelle::getFilm();
                                    require('vue/showFilm.php');
                                    break;
            case 'update2' 	:   $id2 = $_REQUEST['id2'];
                                    $nomActeur = $_REQUEST['nomActeur'];
                                    $prenomActeur = $_REQUEST['prenomActeur'];
                                    $nationalite = $_REQUEST['nationalite'];
                                    $naissance = $_REQUEST['naissance'];
                                    $age = $_REQUEST['age'];
                                    Passerelle::updateActeur($id2,$nomActeur, $prenomActeur, $nationalite, $naissance,$age); 
                                    $contacts = Passerelle::getLesActeurs();
                                    require('vue/showActeur.php');
                                    break;
            case 'delete'	:   $id = $_REQUEST['id'];
                                    Passerelle::deleteFilm($id); 
                                    $contacts = Passerelle::getFilm();
                                    require('vue/showFilm.php');
                                    break;  
                                
            case 'delete2'	:   $id2 = $_REQUEST['id2'];
                                    Passerelle::deleteActeur($id2); 
                                    $contacts = Passerelle::getLesActeurs();
                                    require('vue/showActeur.php');
                                    break;
                                
            case 'delete3'	:   
                                    $idact = $_REQUEST['idact'];
                                    Passerelle::deleteActeurFilm($idact);  
                                    break;
                                
                              
            default             :   
                                    require('vue/Choix.php');
                break;
    }
    ?>
    </div>
</div>
</body>
</html>

