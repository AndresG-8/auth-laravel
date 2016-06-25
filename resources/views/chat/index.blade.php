@extends('layouts.admin')

@section('script_head')
    <!--<script type="text/javascript">
        $(document).ready(function(){
            setInterval("cargar()",5000);
            $('#btn-input').keypress(function(event) {
                if (event.which == 13) {
                    chatear();
                };
            }); 
        });

        function cargar(){
            $("#ul-texto").load("chat/cargar.php");
        };

        function chatear(){
            texto_chat = $("#texto_chat").val();//coge el texto
            chat_user = $("#chat_user").val();//coge el id del usuario
            $("#texto").load("chat/chat.php",{texto:texto_chat,chat_user:chat_user});
            texto_chat = $("#texto_chat").val("");
            $('#resultado').animate({scrollTop: $('#resultado').get(0).scrollHeight}, 2500);
        };
    </script>-->
@endsection

@section('content')
	<div class="row row-content">
		<div class="col-xs-12 col-sm-4 col-sm-offset-2">
			aca van los conectados
		</div>
	</div>
    <div class="row row-content">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <!-- /.panel -->
            <div class="chat-panel panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-comments fa-fw"></i>
                    Chat
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu slidedown">
                            <li>
                                <a id="refreshChat" href="#">
                                    <i class="fa fa-refresh fa-fw"></i> Refresh
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-check-circle fa-fw"></i> Available
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <th>Mensajes</th>
                            <div class="alert alert-danger alert-dismissible" role="alert" style="display:none">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <div id="rpta-msj-error"></div>
                            </div>
                        </thead>
                        <tbody id="datos">
                            
                        </tbody>
                    </table>
                    
                </div>
                <!-- /.panel-body -->
                <div class="panel-footer">
                {!!Form::open()!!}
                    <div class="input-group">           
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                        <input type='hidden' id='user_id' name='user_id' value="{!! Auth::user()->id !!}">
                        {!!Form::text('message',null,['class'=>'form-control input-sm', 'id'=>'btn-input', 'placeholder'=>'No le des enter... :('])!!}
                        <span class="input-group-btn">
                            {!!Form::button('Send',['class'=>'btn btn-warning btn-sm', 'id' =>'btn-chat'])!!}
                        </span>
                    </div> 
                {!!Form::close()!!}
                </div>
                <!-- /.panel-footer -->
            </div>
            <!-- /.panel .chat-panel -->
        </div>
    </div>
@endsection

 @section('scripts')
    {!! Html::script('js/chat.js') !!}
 @endsection