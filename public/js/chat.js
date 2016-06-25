/*		$(document).ready(function(){
            setInterval("cargar()",2500);
            $('#texto_chat').keypress(function(event) {
                if (event.which == 13) {
                    chatear();
                };
            }); 
        });

        function cargar(){
            $("#texto").load("chat/cargar.php");
            
        };

        function chatear(){
            texto_chat = $("#texto_chat").val();
            chat_user = $("#chat_user").val();
            $("#texto").load("chat/chat.php",{texto:texto_chat,chat_user:chat_user});
            texto_chat = $("#texto_chat").val("");
            $('#resultado').animate({scrollTop: $('#resultado').get(0).scrollHeight}, 2500);
        };
*/
$(document).ready(function(){
	setInterval("cargar()", 2500);
	/*$('#texto_chat').keypress(function(event) {
        if (event.which == 13) {
            chatear();
        };
    }); */
});

$("#btn-chat").click(function(){
	chatear();
});

$("#refreshChat").click(function(){
	cargar();
});
function cargar(){
	var mensajes = $("#datos");
	var route = "mensajes";
	
	$.get(route, function(res){
		$("#datos").empty();
		$(res).each(function(key, value){
			mensajes.append("<tr><td> <ul class='chat' id='ul-texto'><li class='left clearfix'><span class='chat-img pull-left'><img src='http://placehold.it/50/55C1E7/fff' alt='User Avatar' class='img-circle' /></span><div class='chat-body clearfix'><div class='header'><strong class='primary-font'>"+value.name+"</strong><small class='pull-right text-muted'><i class='fa fa-clock-o fa-fw'></i>"+value.created_at +"</small></div><p>"+value.message+"</p></div></li></ul></td></tr>");
		});
	});
}

function chatear(){
	var parametros ={ 
		"user_id" : $("#user_id").val(),
		"message" : $("#btn-input").val()
	};
	var route = "chat";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data: parametros,
		success: function(){
			$("#btn-input").val("");
			$('.panel-body').animate({scrollTop: $('.panel-body').get(0).scrollHeight}, 2500);
			/*cargar();
			$("#msj").html(msj.responseJSON.genre);*/
		},
		error:function(msj){
			$("#rpta-msj-error").html("<strong>No se pudo enviar el mensaje</strong>")
			$("#msj-error").fadeIn();
		}
	});
}
