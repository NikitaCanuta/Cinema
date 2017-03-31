@extends('layouts.admin')

@section('content')

{!! Form::open(['route'=>'genero.store','method'=>'POST']) !!}
		@include('genero.forms.genero')	
		{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@stop