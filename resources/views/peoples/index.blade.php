@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Listado de Productos
			<a href="{{ route('peoples.create') }}" class="btn btn-primary pull-ritgh">Nuevo</a>
		</h2>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Cedula</th>
					<th>Nombre y Apellido del Funcionario</th>
					<th>status</th>			
					<th >Acciones</th>					
				</tr>

			</thead>
			<tbody>
				@foreach($peoples as $peoples)
				<tr>
					<td> {{$peoples->id}} </td>
					<td>{{$peoples->cedula}}</td>

					<td>
						<strong> {{$peoples->name_1}} </strong>
						<strong> {{$peoples->name_2}} </strong>
						<strong> {{$peoples->lastname_1}} </strong>
						<strong> {{$peoples->lastname_2}} </strong>
					</td>
					<td>
						{{$peoples->Reference->descripcion}}
					</td>
					<td>

						{{ $peoples->referenceSexo->descripcion}}

					</td>
				</tr>		
				@endforeach
			</tbody>
	
		</table>	

	</div>


@endsection