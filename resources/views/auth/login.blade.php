@extends('layouts.app')

    @section('content') 
        @include('alerts.errors')
        @include('alerts.request')
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-ms-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Login
                </div>
                <div class="panel-body">
                    {!! Form::open(['route'=>'store', 'method'=>'POST' ]) !!}
                        <div class="form-group">
                            {!! Form::label('email','Correo:')!!}  
                            {!! Form::email('email',null,['class'=>'form-control', 'id'=>'user_email', 'placeholder'=>'Ingresa tu correo']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password','Contraseña:')!!}  
                            {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña']) !!}
                        </div>
                        {!! Form::submit('Iniciar',['class'=>'btn btn-outline btn-primary btn-lg btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    @endsection