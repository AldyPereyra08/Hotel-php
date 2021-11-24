

<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Gestor de Habitación Triple</h1>

	</section>

	<section class="content">
			
		<div class="row">
			
			<div class="col-md-6 col-xs-12">
				
				<div class="box box-danger">
					
					<div class="box-header with-border">
						
						<h2>Datos de Inicio</h2>

					</div>

					<div class="box-body">

						<?php

						$verHT = new HTripleC();
						$verHT -> VerHTripleC();

						?> 
						

					</div>

					<div class="box-footer">
						
						<button class="btn btn-success EditarHT btn-lg" data-toggle="modal" data-target="#EditarHT"><i class="fa fa-pencil"></i> Editar</button>

					</div>

				</div>

			</div>

		</div>

	</section>

</div>


<div id="EditarHT" class="modal fade" role="dialog">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form role="form" method="post" enctype="multipart/form-data">

				<?php

				$editarht = new HTripleC();
				$editarht -> EditarHTripleC();

				?>
				
				<div class="modal-footer">
					
					<button type="submit" class="btn btn-success">GUARDAR</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>

				</div>

			</form>

		</div>

	</div>

</div>

<?php
	
$actualizarHT = new HTripleC();
$actualizarHT -> ActualizarHTripleC();

?>