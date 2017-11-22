//Edit Article

$(document).ready(function(){

		//CONTENTEDITABLE


	$('.edit').click(function(e){

		$(this).css('display','none');
		$(this).closest('section').find('.valid').css('display','inline-block');
		$(this).closest('section').find('.contentedit').attr('contenteditable','true');
		$(this).closest('section').find('.contentedit').css('color','blue');

	});

	$('.valid').click(function(e){

		$(this).css('display','none');
		$(this).closest('section').find('.edit').css('display','inline-block');
		$(this).closest('section').find('.contentedit').attr('contenteditable','false');
		$(this).closest('section').find('.contentedit').css('color','black');
		// appel ajax pour enregistrer la ligne
		var donnees = "id="+$(this).attr('art'); //RECUPERER ID ARTICLE
		var vars = ["titre","contenu"];

		$(this).closest('section').find('.contentedit').each(function(index){
			donnees += "&"+vars[index]+"="+$(this).text();
		});

		console.log(donnees);
		//envoi ajax


		$.ajax({
			url: "../vues/editarticle.php",
			type: 'POST',
			data: donnees,
			dataType: 'html',
			success: function(retour){
				$('#affichage').html(retour);
			},
			error: function(retour, statut){
				$('#affichage').html('erreur appel ajax' + 'code retour = ' + retour + 'statut = ' + statut);
			}
		});

	});

});