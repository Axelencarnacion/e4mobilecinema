	<form method='post' rel='external'  onsubmit='return checkForm();'>
            <input type='hidden' name='action' value='insert'/>
            <input type='hidden' name='id' value='-1'/>
            <fieldset>
                <div class='ui-field-contain'>
                    <label for='nomFilm'>Film</label>
                    <input type='text' name='nomFilm' maxlength='100' id='nomFilm' value='' />
                </div>
               

                <div class='ui-field-contain'>
                    <label for='date'>Date de Sortie</label>
                    <input type='date' name='date' id='date' value='' />
                </div>

                <div class='ui-field-contain'>
                    <label for='genre'>genre</label>
                    <input type='text' name='genre' maxlength='200' id='genre' value='' />
                </div>
                
                <div class='ui-field-contain'>
                    <label for='nation'>nation</label>
                    <input type='text' name='nation' maxlength='200' id='nation' value='' />
                </div>
                
                
            <fieldset>
            <button type="submit" value="Save" >Sauvegarder le film</button>
        </form>
