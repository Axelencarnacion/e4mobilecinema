<?php session_start(); ?>
<form method='post' rel='external' >

      <input type='hidden' name='action' value='insert3'/>
            <input type='hidden' name='id3' value='-1'/>
            <fieldset>      
               <div class='ui-field-contain'>
                    <label for="idact">Acteur</label>
                    <select name="idact"  data-iconpos="left">
                        <?php foreach($acteur as $info){
                                 echo "<option  value='".$info->getId2()."'>".$info->getNomActeur()." ".$info->getPrenomActeur()."</option>";
                                 
                                 }?>
                    </select>
                <div class='ui-field-contain'>
                    <label for='idfilm'>Date de Sortie</label>
                    <input type='hidden' name='idfilm' id='idfilm' value='<?php echo $_SESSION['film']->getId();?>' />
                </div>
            <button type="submit" value="Save"  >Sauvegarder l'acteur</button>
        </form>
