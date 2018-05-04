function checkForm() {
	try {
		if ($.trim($('#nomFilm').val()) == "" ||
                        $.trim($('#genre').val()) == "" ||
                        $.trim($('#date').val()) == "" ||
			$.trim($('#nation').val()) == "") {
				alert("Tous les champs sont obligatoire");
				return false;
			}
	} catch (e) {
        
		alert(e);
		return false;
	}
	return true;
}
function checkForm2() {
	try {
		if ($.trim($('#nomActeur').val()) == "" ||
                        $.trim($('#prenomActeur').val()) == "" ||
                        $.trim($('#nationalite').val()) == "" ||
                        $.trim($('#naissance').val()) == "" ||
			$.trim($('#age').val()) == "") {
				alert("Tous les champs sont obligatoire");
				return false;
			}
	} catch (e) {
        
		alert(e);
		return false;
	}
	return true;
}
function checkForm3() {
	try {
		if ($.trim($('#idact').val()) == "" ) {
				alert("Tous les champs sont obligatoire");
				return false;
			}
	} catch (e) {
        
		alert(e);
		return false;
	}
	return true;
}
function deleteEntry(id) {
	try {
		var confirmString = "Supression d'un film.  Confirmez-vous ?\n";
		if (window.confirm(confirmString)) {
			window.location="index.php?action=delete&id=" + id;
		}
	} catch (e) {
		alert(e);
		return false;
	}
	return true;

}
function deleteEntry2(id2) {
	try {
		var confirmString = "Supression d'un acteur.  Confirmez-vous ?\n";
		if (window.confirm(confirmString)) {
			window.location="index.php?action=delete2&id2=" + id2;
		}
	} catch (e) {
		alert(e);
		return false;
	}
	return true;

}
function deleteEntry3(idact) {
	try {
		var confirmString = "Supression d'un acteur.  Confirmez-vous ?\n";
		if (window.confirm(confirmString)) {
			window.location="index.php?action=delete3&idact=" + idact;
		}
	} catch (e) {
		alert(e);
		return false;
	}
	return true;

}