<section class="newsletter text-center py-5">
	<div class="container py-lg-3">

		<div class="subscribe_inner">
			<h4 class="mb-4">Suscripción</h4>
			<p class="mb-4">Suscríbete a nuestro Newsletter para obtener las últimas ofertas de nuestro Hotel. </p>

			<form action="#" method="post" class="subscribe_form">
				<input class="form-control" name="emailS" type="email" placeholder="Ingrese su Email..." required="">
				<button type="submit" class="btn1 btn-primary submit"><i class="fas fa-paper-plane" aria-hidden="true"></i></button>
			</form>

			<?php

			$suscriptor = new SuscriptoresC();
			$suscriptor -> EnviarSuscriptorC();

			?>

			<div class="social mt-5">
				<ul class="d-flex mt-4 justify-content-center">

					<?php

					$redes = new InicioC();
					$redes -> VerRedesC();

					?>

				</ul>
			</div>
		</div>
		<div class="copyright mt-5">
			<p>© 2021 Hotel zone. Todos los derechos reservados | Design by	Aldy♥</p>
	</div>
</section>