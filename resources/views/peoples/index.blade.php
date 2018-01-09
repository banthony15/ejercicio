@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Funcionarios Registrados
			<a href="{{ route('peoples.create') }}" class="btn btn-primary pull-ritgh">Nuevo</a>
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th align="center">ID</th>
					<th align="center">Cedula</th>
					<th align="center">Credencial</th>
					<th align="center">Nombre y Apellido</th>
					<th align="center">status</th>
					<th align="center">sexo</th>										
					<th align="center">Acciones</th>					
				</tr>

			</thead>
			<tbody>
				@foreach($peoples as $peoples)
				<tr>
					<td> {{$peoples->id}} </td>
					<td> {{$peoples->cedula}} </td>
					<td> {{$peoples->credencial}} </td>
					<td>
						<strong> {{$peoples->name_1}} </strong>
						<strong> {{$peoples->name_2}} </strong>
						<strong> {{$peoples->lastname_1}} </strong>
						<strong> {{$peoples->lastname_2}} </strong>
					</td>
					<td>
						{{$peoples->referenceStatus->descripcion}}
					</td>
					<td>
						{{ $peoples->referenceSexo->descripcion}}

					</td>
					<td>
						<a href="{{ route('peoples.show', $peoples->id) }} " class="btn btn-link">Ver</a>
					</td>
				</tr>		
				@endforeach
			</tbody>
	
		</table>	

	</div>


@endsection