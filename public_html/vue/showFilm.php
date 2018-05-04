<?php session_start(); ?>
<div>
<a data-rel="dialog" data-transition="pop" href="index.php?action=addnew">Ajout d'un Film</a><br/><br/>

  </div>
    <ul data-role="listview" class="ui-listview-outer"> 
    <?php foreach($contacts as $info){ ?>
        <div data-role="collapsible" >
             <h2><?php echo $info->getNomFilm(); ?></h2>

            <div class='ui-field-contain'>
                <label for='Acteurs'>Acteurs: </label>
                <?php // echo $info->getActeur(); ?> 
            </div>
            <div class='ui-field-contain'>
                <label for='DateSortie'>Date de Sortie: </label>
                <?php echo $info->getDateSortie();  ?>
            </div>
            <div class='ui-field-contain'>
                <label for='genre'>Genre: </label>
                <?php echo $info->getGenre(); ?>
            </div>
             <div class='ui-field-contain'>
                <label for='nation'>Nation: </label>
                <?php echo $info->getNation(); ?>
            </div>
             <?php $_SESSION['film']=$info->getId();?>
             
<?php var_dump($_SESSION)['film'] ?>
             <a class="modPrescL" data-rel="dialog" data-transition="pop"  href="index.php?action=details1&id=
             <?php echo $info->getId();?>">Modifier le film "  <?php echo $info->getNomFilm(); ?>" </a>
             <br>
             <a class="modPrescL" data-rel="dialog" data-transition="pop"  href="index.php?action=details3&id=
             <?php echo $info->getId();?>">Liste des acteurs de "  <?php echo $info->getNomFilm(); ?>" </a>
             </div>
    <?php }?>
        
    </ul>
