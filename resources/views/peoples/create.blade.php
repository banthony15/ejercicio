@extends('template.footer')
@extends('template.aside')
@extends('template.contenido')
@extends('template.header')
@extends('template.layouts')



{{-- @section('content')

<div id="page-wrapper">
	<div class= "container ">
		<div class="col-md-12 col-md-offset-0" >
	 		<form  class="form-horizontal" action="{{ route('peoples.store') }}" method="post">
	 		{{ csrf_field() }}		
			 	<div class= "panel panel-primary" >
			 		<div class= "panel-heading">
			 			<h3 class= "panel-title fa fa-user"> Datos Basicos</h3>
			 		</div>
			 					
			 			<div class="panel-body">


							<div class="form-group">
								<label class="control-label col-sm-2 fa fa-credit-card">credencial</label>
									<div class="col-sm-3">								
										<input type="text" id="credencial" value="{{ old('credencial') }}" class="form-control" name="credencial" placeholder="credencial" title="credencial">										
									</div> 	
								<label class="control-label col-sm-2 fa fa-credit-card">cedula</label>
									<div class="col-sm-3">								
										<input type="text" id="cedula" value="{{ old('cedula') }}" class="form-control" name="cedula" placeholder="cedula" title="cedula">										
									</div> 			

								
							</div>


					<div class="form-group">
						<label class="control-label col-sm-2 fa fa fa-certificate">Primer Nombre</label>
							<div class="col-sm-3">						
								<input type="text" id="name_1" value="{{ old('name_1') }}" class="form-control" name="name_1" placeholder="Primer Nombre" title="name_1">								
							</div>
						<label class="control-label col-sm-2 fa fa-circle-o-notch">Segundo Nombre</label>							
							<div class="col-sm-3">								
								<input type="text" id="name_2" value="{{ old('name_2') }}" class="form-control" name="name_2" placeholder=" Segundo Nombre" title="name_2">									
							</div>
						</div>

					<div class="form-group">
						<label class="control-label col-sm-2 fa fa fa-certificate">Primer Apellido</label>
							<div class="col-sm-3">
								<input type="text" id="lastname_1" value="{{ old('lastname_1') }}" class="form-control" name="lastname_1" placeholder="Primer apellido" title="lastname_1">									
							</div>
						<label class="control-label col-sm-2 fa fa-circle-o-notch">Segundo Apellido</label>							
							<div class="col-sm-3">						
								<input type="text" id="lastname_2" value="{{ old('lastname_2') }}" class="form-control" name="lastname_2" placeholder=" Segundo apellido" title="lastname_2">									
							</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 fa fa-venus-mars">Sexo</label>
							<div class="col-sm-3">
								<select class="form-control"  name="sexo_id" id="sexo_id">
									<option>Seleccione...</option>
									@foreach($sexo as $sexo)
									<option value="{{ $sexo->id }}">{{ $sexo->descripcion }}</option>
									@endforeach									
								</select>
							</div>
						<label class="control-label col-sm-2 fa fa-venus-mars">status</label>
							<div class="col-sm-3">
								<select class="form-control"  name="status_id" id="status_id">
									<option>Seleccione...</option>
									@foreach($status as $status)
									<option value="{{ $status->id}}">{{ $status->descripcion }}</option>
									@endforeach
								</select>																	
							</div>							
					</div>

					<div class="col-sm-offset-5">
						<input type="submit" value="Registrar" class="btn btn-primary">
					</div>

		 		</div>
		 	</div>
		 </form>
		</div>
	</div>
</div>

@endsection

 --}}