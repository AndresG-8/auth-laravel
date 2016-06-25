<div class="table-responsive">
<table class="table">
	<thead>
		<th>Id</th>
		<th>Nombre</th>
		<th>Email</th>
		<th>Editar</th>
		<th>Eliminar</th>
	</thead>
	@foreach($users as $user)
		<tbody>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>
				<button value="{{ $user->id }}" OnClick='Mostrar(this);' 
				class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button>
			</td>
			<td>
				{!! Form::open(['route' => ['usuario.destroy', $user->id],'method'=>'DELETE']) !!}
					{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
				{!! Form::close() !!}
			</td>
		</tbody>
	@endforeach
	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
</table>

{!! $users->render() !!}

</div>



