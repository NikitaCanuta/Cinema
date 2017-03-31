@extends('layouts.admin')

@if(Session::has('mensaje'))
<div class="alert alert-success" role="alert">
  </button>
  {{ Session::get('mensaje') }}
</div>
@endif

@section('content')
<button class="btn btn-primary">Nuevo</button>
	<table class="table">
		<thead>
			<th>Descripcion</th>
			<th>Modificar</th>
			<th>Eliminar</th>
		</thead>
		<tbody>
		@foreach($generos as $genero) 
			<tr>
				<th>{{ $genero->descripcion }}</th>
				<th>{{ link_to_route('genero.edit', $title = 'Editar', $parameters = [$genero->id], $attributes = ['class'=>'btn btn-success']) }}</th>
				<th>{{ link_to_route('genero.destroy', $title = 'Eliminar', $parameters = [$genero->id], $attributes = ['class'=>'btn btn-danger']) }}</th>
			</tr>
		@endforeach
		</tbody>
	</table>
@stop