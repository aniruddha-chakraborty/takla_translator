$(document).ready(function(){


	 $('#language').keyup(function(){

	 	var language = $(this).val();

	 	$.post('ajax/hit.php' , { language:language } , function(data){

	 			$('#translate').html(data);
	 	});

	 });
});