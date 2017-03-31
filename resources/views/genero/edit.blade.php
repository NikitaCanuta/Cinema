@extends('layouts.admin')

@section('content')
{!! Form::model($generos,['route'=>['genero.update', $generos->id], 'method'=>'PUT']) !!}
	@include('genero.forms.genero')	
{!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@stop