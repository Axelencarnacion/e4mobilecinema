<?php session_start(); ?>
<?php
// Tout début du code PHP. Situé en haut de la page web
ini_set("display_errors",0);error_reporting(0);
?>
<h1>Liste des acteurs</h1>
<a data-rel="dialog" data-transition="pop" href="index.php?action=addnew3">Ajout d'un Acteur</a><br/><br/>
    <ul data-role="listview" class="ui-listview-outer"> 
    <?php foreach($contacts as $info){ ?>
        <div data-role="collapsible" >
             <h2>   
                <?php $oneActeur = Passerelle::getOneActeur($info->getIdAct());
                       echo $oneActeur->getNomActeur();
                       echo ' ';
                       echo $oneActeur->getPrenomActeur();
                 ?>
        </div>
        <?php               $id2=$info->getId3();
        $id2=$id2+0;
        ?>
           <?php  echo "<a rel=\"external\" href=\"javascript:deleteEntry3($id2)\">Supprimer cette saisie</a>";
           ?>
             
    <?php }?>
    </ul>
   <?php var_dump($_SESSION['film']=$film->getId()); ?>
<?php       var_dump($id2)?>