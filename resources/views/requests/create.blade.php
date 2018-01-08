@extends('layouts.app')

@section('content')

<div id="page-wrapper">
	<div class= "container ">
		<div class="col-md-12 col-md-offset-0" >
	 		<form  class="form-horizontal" action="{{ route('peoples.store') }}" method="post">
	 		{{ csrf_field() }}		
			 	<div class= "panel panel-primary" >
			 		<div class= "panel-heading">
			 			<h3 class= "panel-title fa fa-user"> Solicitudes</h3>
			 		</div>
			 					
			 			<div class="panel-body">


							<div class="form-group">
								<label class="control-label col-sm-5 fa fa-credit-card">Fecha de la solicitud</label>
									<div class="col-sm-3">								
										<input type="date" id="fecha" value="{{ old('fecha') }}" class="form-control" name="fecha" placeholder="fecha" title="fecha">										
									</div> 								
							</div>



					<div class="form-group">
						<label class="control-label col-sm-5 fa fa fa-certificate">Funcionario</label>
							<div class="col-sm-3">
								<select class="form-control"  name="sexo_id" id="sexo_id">
									
								</select>								
							</div>

					</div>

					
					<div class="form-group">
						<label class="control-label col-sm-5">Descripcion</label>
						<div class="col-sm-3">
							<textarea class="form-control">
								
							</textarea>							
						</div>												
					</div>

					<div class="form-group">
						<label class="control-label col-sm-1 fa fa-venus-mars">Coordinacion</label>
							<div class="col-sm-3">
								<select class="form-control"  name="sexo_id" id="sexo_id">
									
								</select>
							</div>
						<label class="control-label col-sm-1 fa fa-venus-mars">Direccion</label>
							<div class="col-sm-3">
								<select class="form-control"  name="status_id" id="status_id">

								</select>																	
							</div>
						<label class="control-label col-sm-1 fa fa-venus-mars">Division</label>
							<div class="col-sm-3">
								<select class="form-control"  name="status_id" id="status_id">

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

<script type="text/javascript">
    LoadDireccion('coordinacion','false');

$('#coordinacion').change(function(event) {
    
    LoadDireccion('direccion',$('#coordinacion').val());
});
$('#direccion').change(function(event) {
    
    LoadDireccion('division',$('#direccion').val());
});
</script>  
