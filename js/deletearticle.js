//Delete Article

$(document).ready(function(){

	// $('.confirm').click(function(e){
	// 	e.preventDefault();
	// 	var confirmation = confirm("Êtes vous sûr de vouloir supprimer ce paragraphe ?!");

	// 	if (confirmation) {
			
	// 		document.location.href= $(this).attr("href");
	// 	}

	// });

	$('.delete').click(function(){
		var donnees = "id="+$(this).attr('art');
		$.ajax({
			url: "../vues/deletearticle.php",
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