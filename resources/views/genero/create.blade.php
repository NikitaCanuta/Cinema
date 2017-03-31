@extends('layouts.admin')

@section('content')

{!! Form::open(['route'=>'genero.store','method'=>'POST']) !!}
	<div class="form-group">
			{!! Form::label('Nombre:') !!}
			{!! Form::text('description', null, ['class'=>'form-control', 'placeholder'=>'Escriba la descripcion']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('Estado:') !!}
			{!! Form::text('status', null, ['class'=>'form-control', 'placeholder'=>'Escriba el estado']) !!}
		</div>
		{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@stop