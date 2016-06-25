@extends('layouts.admin')

@section('content')

	@include('alerts.request')

	{!!Form::open(['route'=>'avatar.store', 'method'=>'POST','files' => true])!!}
		<!--<div class="form-group">
			<input type="text" value="{!! Auth::user()->id !!}" class="form-control">
		</div>-->
		<div class="form-group">
			{!!Form::text('user_id', null, ['class'=>'form-control', 'id'=>'user_id'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('path','Avatar:')!!}
			{!!Form::file('path')!!}
		</div>	
		{!!Form::submit('Subir',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@endsection
@section('scripts')
	<script type="text/javascript">
        $(document).ready(function(){
            $("input[id=user_id]").attr("value", "{!! Auth::user()->id !!}");
        });
    </script>
@endsection