
<a data-rel="dialog" data-transition="pop" href="index.php?action=addnew2">Ajout d'un Acteur</a><br/><br/>
    <ul data-role="listview" class="ui-listview-outer"> 
    <?php foreach($contacts as $info){ ?>
        <div data-role="collapsible" >
             <h2><?php echo $info->getNomActeur()," ", $info->getPrenomActeur();?></h2>
             
            <div class='ui-field-contain'>
                <label for='nation'>Nationalite: </label>
                <?php  echo $info->getNationaliteActeur(); ?> 
            </div>
            <div class='ui-field-contain'>
                <label for='dateNaiss'>Née le: </label>
                <?php echo $info->getNaissanceActeur();  ?>
            </div>
             <div class='ui-field-contain'>
                <label for='Age'>Age: </label>
                <?php echo $info->getAge(); ?>
            </div>
             <a class="modPrescL" data-rel="dialog" data-transition="pop"  href="index.php?action=details2&id2=
             <?php echo $info->getId2();?>">Modifier l'acteur "  <?php echo $info->getNomActeur(); ?>" </a>
    <?php }?>
       
    </ul>
