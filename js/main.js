$(document).ready(function(){

	var choix = $('#choix').val();
	$.ajax({
		url :'controleurs/liste.php',
		type:'POST',
		data : "choix=" + choix,
		dataType : 'html',
		success :function(retour, statut){
					$("main").html(retour);
				},
		error :	function(resultat, statut, erreur){
					$("main").html('erreur ajax : code retour = '+retour+'statut='+statut);
				}
	});
	
	$('#choix').change(function(){
		var choix = $('#choix').val();
		$.ajax({
			url :'controleurs/liste.php',
			type:'POST',
			data : "choix=" + choix,
			dataType : 'html',
			success :function(retour, statut){
						$("main").html(retour);
					},
			error :	function(resultat, statut, erreur){
						$("main").html('erreur ajax : code retour = '+retour+'statut='+statut);
					}
		});
	});

});