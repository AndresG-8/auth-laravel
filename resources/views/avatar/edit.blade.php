@extends('layouts.admin')

@section('content')

	@include('alerts.request')

	<div class="col-xs-12 col-sm-4">
		<label for="">Imagen actual:</label>
		<img src="/images/{{ $avatar->path }}" alt="avatar" style="width:100px; height=100px;">
	</div>


	<div class="col-xs-12 col-sm-4">
		{!!Form::model($avatar,['route'=> ['avatar.update',$avatar->id],'method'=>'PUT','files' => true])!!}
			
			<div class="form-group">
				{!!Form::text('user_id', null, ['class'=>'form-control', 'id'=>'user_id'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('path','Avatar:')!!}
				{!!Form::file('path')!!}
			</div>	

			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

		{!!Form::close()!!}
	</div>
@endsection
