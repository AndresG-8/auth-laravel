$("#formLogin").submit(function(event) {
	event.preventDefault();
	submitForm();
});
function submitForm(){
	var parametros ={ 
		"email" : $("#email").val(),
		"password" : $("#password").val()
	};
	var route = "store";

	$.ajax({
		url: route,
		type: 'POST',
		dataType: 'json',
		data: parametros,
		success: function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.genre);
			$("#msj-error").fadeIn();
		}
	});
}
/*
$("#formLogin").submit(function(){
	var dato = $("#email").val();
	var route = "http://localhost:8000/genero";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data: {genre: dato},
		success:function(){
			$("#msj-success").fadeIn();
			$("#genre").val('');
		}
	});
});
/*$("#registro").click(function(){
	var dato = $("#genre").val();
	var route = "/genero";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data: {genre: dato},
		success:function(){
			$("#msj-success").fadeIn();
			$("#genre").val('');
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.genre);
			$("#msj-error").fadeIn();
		}
	});
});
*/

