<?php
$procedimientos = [
	[
		"nombre" => "Inyecciones de cortisona",
		"contenido" => "En construcción"
	],
	[
		"nombre" => "Inyecciones de cortisona guiadas por ultrasonido",
		"contenido" => "En construcción"
	],
	[
		"nombre" => "Infiltración articular o periarticular",
		"contenido" => "En construcción"
	],
	[
		"nombre" => "Lavados articulares de rodilla",
		"contenido" => "En construcción"
	],
	[
		"nombre" => "Bloqueos de facetas articulares de columna vertebral",
		"contenido" => "En construcción"
	],
	[
		"nombre" => "Artrocentesis o punción evacuadora",
		"contenido" => "En construcción"
	],
	[
		"nombre" => "Terapias biológicas inmunosupresoras y corticoides por vía intravenosa",
		"contenido" => "En construcción"
	],

	[
		"nombre" => "Viscosuplementación o infiltración articular con ácido hialurónico",
		"contenido" => "En construcción"
	]
];


// Convertir a JSON (opcional)
$json_procedimientos = json_encode($procedimientos);

?>


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
	style="background: linear-gradient(90deg, rgba(4,147,167,1) 29%, rgba(41,83,160,1) 68%) !important; max-height: 65vh !important; position: relative;">

	<div class="container pt-3 mb-n5 h-100 position-relative d-flex">
		<div class="row h-100 w-100">

			<div class="col-md-7 d-flex justify-content-center align-items-center">
				<div class="bg-img-center card-img text-center"
					style="position: relative; left: 50%; transform: translateX(5%);">
					<img class="img-fluid rounded-3"
						style="max-width: 150%; height: auto;max-height: 45vh !important;object-fit: fill;"
						src="/images/Especialidades/Reumatología.png">
				</div>
			</div>

			<div class="col-md-5 d-flex align-items-center ps-5"
				style="position: relative; left: 60%; transform: translateX(-250%);">
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

			<div class="col-md-10">


				<p>La Reumatología es la especialidad médica que se enfoca en el diagnóstico y tratamiento de
					enfermedades que afectan las articulaciones, músculos, huesos y tejidos conectivos.</p>
				<p>Los reumatólogos tratan condiciones como la artritis, lupus, osteoartritis y enfermedades
					autoinmunes, buscando aliviar el dolor, mejorar la movilidad y prevenir daños a largo plazo en los
					pacientes.</p>
			</div>

			<!-- PROCEDIMIENTOS -->
			<div style="margin:20px 0px !important">
				<p class="color-azul h5">Procedimientos de <b><?php echo strtoupper($h1); ?>
					</b></p>
				<div class="container">
					<div class="row">

						<?php foreach ($procedimientos as $procedimiento): ?>
							<div class="col-md-6">
								<div class="accordion" id="accordion<?= str_replace(' ', '', $procedimiento['nombre']) ?>">
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button collapsed" style="padding: 15px 32px !important"
												type="button" data-bs-toggle="collapse"
												data-bs-target="#collapse<?= str_replace(' ', '', $procedimiento['nombre']) ?>"
												aria-expanded="false"
												aria-controls="collapse<?= str_replace(' ', '', $procedimiento['nombre']) ?>">
												<?= $procedimiento["nombre"] ?>
											</button>
										</h2>
										<div id="collapse<?= str_replace(' ', '', $procedimiento['nombre']) ?>"
											class="accordion-collapse collapse"
											data-bs-parent="#accordion<?= str_replace(' ', '', $procedimiento['nombre']) ?>">
											<div class="accordion-body" style="padding-top:5px !important">
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
			<!-- FIN DE PROCEDIMIENTOS -->

			<?php require_once('links-reumatologia.php'); ?>
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
												<ul class="list-unstyled text-center servicio-lista" style="margin-bottom: 1rem;">
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
</section>
<?php require_once('formulario.php'); ?>