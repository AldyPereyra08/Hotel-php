<div class="services py-5" id="services">
		<div class="container py-md-3">
		<div class="w3-head-all mb-3 w3-head-col">
		         <h3>Nuestros Servicios</h3>
		       </div>
			<div class="row w3-services-grids mt-md-5 mt-0">

                <?php

                $servicios = new ServiciosC();
                $servicios -> VerServiciosC();

                ?>
				
			</div>
		</div>
	</div>