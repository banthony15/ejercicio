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
					<th >Acciones</th>					
				</tr>

			</thead>
			<tbody>
				@foreach($peoples as $peoples)
				<tr>
					<td> {{$peoples->id}} </td>

					<td>
						<strong> {{$peoples->name_1}} </strong>
						<strong> {{$peoples->name_1}} </strong>
					</td>
					<td>

					</td>
				</tr>		
				@endforeach
			</tbody>
	
		</table>	

	</div>


@endsection