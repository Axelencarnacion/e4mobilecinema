<?php
	echo("<form method='post' rel='external'  onsubmit='return checkForm();'>");
	echo "<a rel=\"external\" href=\"javascript:deleteEntry($id)\">Supprimer cette saisie</a>";
	echo "<input type='hidden' name='action' value='update'/>";
	echo "<input type='hidden' name='id' value='".$contact->getId()."'/>";
	echo "<fieldset>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='nomFilm'>Nom</label>";
	echo "<input type='text' name='nomFilm' maxlength='100' id='nomFilm' value='".$contact->getNomFilm()."' />";
	echo "</div>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='date'>Date de sortie</label>";
	echo "<input type='date' name='date' maxlength='200' id='date' value='".$contact->getDateSortie()."' />";
	echo "</div>";
         echo "<div data-role='fieldcontain'>";
	echo "<label for='genre'>Genre</label>";
	echo "<input type='text' name='genre' maxlength='200' id='genre' value='".$contact->getGenre()."' />";
	echo "</div>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='nation'>Nation</label>";
	echo "<input type='text' name='nation' maxlength='200' id='nation' value='".$contact->getNation()."' />";
	echo "</div>";
       
	echo "<fieldset>";
	echo "<button type=\"submit\" value=\"Save\">Sauvegarder le Film</button>";	
	echo("</form>");
?>