$(document).on('click', '.pagination a', function(e){
	e.preventDefault();
	var page = $(this).attr('href').split('page=')[1];
	var route = "/usuario";

	$.ajax({
		url: route,
		data: {page: page},
		type: 'GET',
		dataType: 'json',
		success: function(data){
			$(".users").html(data);
		}
	});
});

$("#actualizar").click(function(){
	var value = $("#id").val();
	var parametro = {
		'name': $("#name").val(),
		'email': $("#email").val(),
		'password': $("#password").val(),
		'password_confirmation': $("#password_confirmation").val()
	};
	var route = "usuario/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: parametro,
		success: function(){
			$("#myModal").modal('toggle');
			$(".pagination a").click();
		}
	});
});
