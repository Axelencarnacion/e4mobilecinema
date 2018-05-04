<form method='post' rel='external' onsubmit='return checkForm2();'>

      <input type='hidden' name='action' value='insert2'/>
            <input type='hidden' name='id2' value='-1'/>
            <fieldset>
                <div class='ui-field-contain'>
                    <label for='nomActeur'>Nom de l'Acteur:</label>
                    <input type='text' name='nomActeur' maxlength='100' id='nomActeur' value='' />
                </div>
               

                <div class='ui-field-contain'>
                    <label for='prenomActeur'>Prenom de l'Acteur:</label>
                    <input type='text' name='prenomActeur' id='prenomActeur' value='' />
                </div>

                <div class='ui-field-contain'>
                    <label for='nationalite'>Nationalite:</label>
                    <input type='text' name='nationalite' maxlength='200' id='nationalite' value='' />
                </div>
                
                <div class='ui-field-contain'>
                    <label for='naissance'>Date de naissance:</label>
                    <input type='date' name='naissance' maxlength='200' id='naissance' value='' />
                </div>
                
                <div class='ui-field-contain'>
                    <label for='age'>Age:</label>
                    <input type='text' name='age' maxlength='200' id='age' value='' />
                </div>
                
            <fieldset>


            <button type="submit" value="Save"  >Sauvegarder l'acteur</button>
        </form>
