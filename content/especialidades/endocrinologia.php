<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1; ?></h1>
			</div>
			<div class="mb-0">
				<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i>
					Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades"><i
						class="fa fa-arrow-left small me-1"></i> Especialidades</a>
			</div>
		</div>
	</div>
</section>
<img src="<?php echo $page_image; ?>" class="img-fluid mt-n5 d-block d-md-none" alt="<?php echo $h1; ?>">

<section class="fondo-azul content-space-1 d-none d-md-block"
	style="background: linear-gradient(90deg, rgba(4,147,167,1) 29%, rgba(41,83,160,1) 68%) !important; max-height: 65vh !important; position: relative;margin-top:70px">

	<div class="container pt-3 mb-n5 h-100 position-relative d-flex">
		<div class="row h-100 w-100">

			<div class="col-md-7 d-flex justify-content-center align-items-center">
				<div class="bg-img-center card-img text-center"
					style="position: relative; left: 50%; transform: translateX(-25%);">
					<img class="img-fluid rounded-3"
						style="max-width: 150%; height: auto;max-height: 45vh !important;object-fit: fill;"
						src="/images/Especialidades/Endocrinología.png">
				</div>
			</div>

			<div class="col-md-5 d-flex align-items-center ps-5"
				style="position: relative; left: 60%; transform: translateX(-290%);">
				<div class="fondo-celeste-bajo rounded-3 zi-1 p-4 shadow-lg d-flex flex-column justify-content-center align-items-start"
					style="width: auto; height: auto; max-width: 320px;">

					<div class="mb-0">
						<h1 class="h4 color-azul"><?php echo $h1; ?></h1>
					</div>
					<div class="mt-2">
						<a class="link color-azul color-naranja-hover" href="/">
							<i class="fa fa-arrow-left small me-1"></i> Inicio
						</a>
						<a class="link color-azul color-naranja-hover ms-3" href="/especialidades"><i
								class="fa fa-arrow-left small me-1"></i> Especialidades</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-lg-1">


				<p>La Endocrinología es la especialidad médica que se enfoca en el diagnóstico y tratamiento de
					enfermedades relacionadas con las glándulas endocrinas y las hormonas, como la diabetes, trastornos
					tiroideos, obesidad y problemas de crecimiento.</p>
				<p>Los endocrinólogos gestionan condiciones que afectan el metabolismo, la energía y la función hormonal
					del cuerpo.</p>


				<div style="margin:20px 0px !important">
					<p class="color-azul h5">Procedimientos de <b>ENDOCRINOLOGÍA</b></p>
					<div class="container">
						<div class="row">

							<?php foreach ($procedimientos_endocrinologia as $procedimiento): ?>
								<div class="col-md-6">
									<div class="accordion"
										id="accordion<?= str_replace(' ', '', $procedimiento['nombre']) ?>">
										<div class="accordion-item">
											<h2 class="accordion-header">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse"
													data-bs-target="#collapse<?= str_replace(' ', '', $procedimiento['nombre']) ?>"
													aria-expanded="false"
													aria-controls="collapse<?= str_replace(' ', '', $procedimiento['nombre']) ?>">
													<?= $procedimiento["nombre"] ?>
												</button>
											</h2>
											<div id="collapse<?= str_replace(' ', '', $procedimiento['nombre']) ?>"
												class="accordion-collapse collapse"
												data-bs-parent="#accordion<?= str_replace(' ', '', $procedimiento['nombre']) ?>">
												<div class="accordion-body">
													<?= $procedimiento["contenido"] ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>

						</div>
					</div>
				</div>

				<?php require_once('links-endocrinologia.php'); ?>

				<div class="container py-4">
					<?php
					// Variable para saber si encontramos la especialidad con paquetes
					$especialidadConPaquetes = false;

					foreach ($especialidades as $item):
						// Verifica si la especialidad coincide y tiene paquetes
						if (strtoupper($item['especialidad']) === strtoupper($h1) && !empty($item['paquetes'])):
							$especialidadConPaquetes = true;
							?>

							<div class="mb-4">
								<p class="color-azul h5 mb-3">Paquetes disponibles</p>
								<div class="row">
									<?php foreach ($item['paquetes'] as $paquete): ?>
										<div class="col-md-4 mb-3">
											<div class="card h-100"
												style="border: 2px solid #00b59c; border-radius: 15px; overflow: hidden;">
												<div class="paquete-header">
													<h5 class="mb-0" style="color: #fff;">
														<?php echo $paquete['nombre']; ?>
													</h5>
												</div>
												<div class="p-3">
													<ul class="list-unstyled text-center servicio-lista"
														style="margin-bottom: 1rem;">
														<?php foreach ($paquete['servicios'] as $index => $servicio): ?>
															<li class="servicio-item">
																<?php echo $servicio; ?>
															</li>
															<?php if ($index < count($paquete['servicios']) - 1): ?>
																<li class="servicio-mas">+</li>
															<?php endif; ?>
														<?php endforeach; ?>
													</ul>
													<h5 class="text-center precio-total">
														S/ <?php echo number_format($paquete['precio'], 2); ?>
													</h5>
													<div class="text-center mt-3">
														<a href="https://api.whatsapp.com/send?phone=51921883459&text=Deseo%20m%C3%A1s%20informaci%C3%B3n"
															class="btn btn-reservar">
															Reservar
														</a>
													</div>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>

							<?php
						endif;
					endforeach;
					?>

				</div>
 


			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php'); ?>