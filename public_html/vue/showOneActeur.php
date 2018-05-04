
<?php
	echo("<form method='post' rel='external'  onsubmit='return checkForm2();'>");
	echo "<a rel=\"external\" href=\"javascript:deleteEntry2($id2)\">Supprimer cette saisie</a>";
	echo "<input type='hidden' name='action' value='update2'/>";
	echo "<input type='hidden' name='id2' value='".$contact->getId2()."'/>";
	echo "<fieldset>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='nomActeur'>Nom</label>";
	echo "<input type='text' name='nomActeur' maxlength='100' id='nomActeur' value='".$contact->getNomActeur()."' />";
	echo "</div>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='prenomActeur'>Prenom</label>";
	echo "<input type='text' name='prenomActeur' maxlength='200' id='prenomActeur' value='".$contact->getPrenomActeur()."' />";
	echo "</div>";
         echo "<div data-role='fieldcontain'>";
	echo "<label for='nationalite'>Nationalite</label>";
	echo "<input type='text' name='nationalite' maxlength='200' id='nationalite' value='".$contact->getNationaliteActeur()."' />";
	echo "</div>";
        echo "<div data-role='fieldcontain'>";
	echo "<label for='naissance'>Date de naissance</label>";
	echo "<input type='date' name='naissance' maxlength='200' id='naissance' value='".$contact->getNaissanceActeur()."' />";
	echo "</div>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='age'>Age</label>";
	echo "<input type='text' name='age' maxlength='200' id='age' value='".$contact->getAge()."' />";
	echo "</div>";
       
	echo "<fieldset>";
	echo "<button type=\"submit\" value=\"Save\">Sauvegarder l'Acteur</button>";	
	echo("</form>");
?>