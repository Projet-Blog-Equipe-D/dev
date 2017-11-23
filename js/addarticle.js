$(document).ready(function(){

	$('.enregistrer').click(function(e){
		// e.preventDefault();
		var titre = $('.addtitre').val();
		var contenu = $('.addcontenu').val();
		var categorie = $('.addcategorie').val();

		var donnees = "titre=" + titre + "&contenu=" + contenu + "&categorie=" + categorie;
		$.ajax({
			url: "../vues/addarticle.php",
			type: 'POST',
			data: donnees,
			dataType: 'html',
			success: function(retour){
				$('#affichage').html(retour);
				window.location.href = "../index.php";
			},
			error: function(retour, statut){
				$('#affichage').html('erreur appel ajax' + 'code retour = ' + retour + 'statut = ' + statut);
			}
		});
		
		
	});

});