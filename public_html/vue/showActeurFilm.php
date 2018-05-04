<?php session_start(); ?>
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
                 <?php $ii = PAsserelle::getOneFilm($info->getIdFilm());
              
                 ?>
        </div>
        <?php                $id2=($oneActeur->getId2())?>
           <?php  echo "<a rel=\"external\" href=\"javascript:deleteEntry3($id2)\">Supprimer cette saisie</a>";
           ?>
             
    <?php }?>
    </ul>
   <?php var_dump($_SESSION['film']=$film->getId()); ?>