<?php
$procedimientos = [
	[
		"nombre" => "Terapia física x 1 sesión",
		"contenido" => "La terapia varía según la indicación médica"
	],
	[
		"nombre" => "Terapia física x 3 sesiones",
		"contenido" => "La terapia varía según la indicación médica"
	],
	[
		"nombre" => "Terapia física x 6 sesiones",
		"contenido" => "La terapia varía según la indicación médica"
	],
	[
		"nombre" => "Terapia física x 10 sesiones",
		"contenido" => "La terapia varía según la indicación médica"
	],
	[
		"nombre" => "Terapia física doble sesión adulto x 1",
		"contenido" => "La terapia varía según la indicación médica"
	],
	[
		"nombre" => "Terapia física doble sesión adulto x 5",
		"contenido" => "La terapia varía según la indicación médica"
	],
	[
		"nombre" => "Terapia física neurológica x 1 sesión",
		"contenido" => "La terapia varía según la indicación médica"
	],
	[
		"nombre" => "Terapia física neurológica x 10 sesiones",
		"contenido" => "La terapia varía según la indicación médica"
	],
	[
		"nombre" => "Terapia pediátrica x 1 sesión",
		"contenido" => "La terapia varía según la indicación médica"
	],
	[
		"nombre" => "Terapia pediátrica x 6 sesiones",
		"contenido" => "La terapia varía según la indicación médica"
	],
	[
		"nombre" => "Terapia pediátrica x 12 sesiones",
		"contenido" => "La terapia varía según la indicación médica"
	],
	[
		"nombre" => "Magnetoterapia",
		"contenido" => "Tratamiento que utiliza campos magnéticos de baja frecuencia para estimular la regeneración de tejidos, reducir la inflamación y aliviar el dolor en afecciones musculoesqueléticas como artritis, fracturas y lesiones musculares."
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
						src="/images/Especialidades/Medicina Física y Rehabilitación.png">
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
			<div class="col-md-10 offset-lg-1">
				<p>La Medicina Física y Rehabilitación se especializa en el diagnóstico, tratamiento y prevención de
					discapacidades físicas causadas por enfermedades o lesiones.</p>
				<p>Los médicos en esta área utilizan terapias como fisioterapia, ejercicios terapéuticos y manejo del
					dolor para mejorar la movilidad, la independencia y la calidad de vida de los pacientes.</p>
				<p>Su objetivo es recuperar o mejorar la función física, ayudando a los pacientes a reintegrarse a sus
					actividades diarias y prevenir complicaciones.</p>

				<div style="margin:20px 0px !important">
					<p class="color-azul h5">Procedimientos de <b>MEDICINA FÍSICA Y
							REHABILITACIÓN</b></p>
					<div class="container">
						<div class="row">

							<?php foreach ($procedimientos as $procedimiento): ?>
								<div class="col-md-6">

									<div class="accordion"
										id="accordion<?= str_replace(' ', '', $procedimiento['nombre']) ?>">
										<div class="accordion-item">
											<h2 class="accordion-header">
												<button class="accordion-button collapsed"
													style="padding: 15px 32px !important" type="button"
													data-bs-toggle="collapse"
													data-bs-target="#collapse<?= str_replace(' ', '', $procedimiento['nombre']) ?>"
													aria-expanded="false"
													aria-controls="collapse<?= str_replace(' ', '', $procedimiento['nombre']) ?>">
													<i class="bi-house list-group-icon"></i> <?= $procedimiento["nombre"] ?>
												</button>
											</h2>
											<div id="collapse<?= str_replace(' ', '', $procedimiento['nombre']) ?>"
												class="accordion-collapse collapse"
												data-bs-parent="#accordion<?= str_replace(' ', '', $procedimiento['nombre']) ?>">
												<div class="accordion-body" style="padding-top:5px !important">
													<p class="list-group-item list-group-item-action link-pointer color-azul color-naranja-hover"
														href="">
														<?= $procedimiento['contenido'] ?>
													</p>
												</div>
											</div>
										</div>
									</div>

								</div>
							<?php endforeach; ?>

						</div>
					</div>
				</div>
				<?php require_once('links-medicina-fisica.php'); ?>

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
								<!-- Título general (puedes ajustarlo o quitarlo) -->
								<h4 class="text-primary mb-3">Paquetes disponibles</h4>

								<div class="row">
									<?php foreach ($item['paquetes'] as $paquete): ?>
										<div class="col-md-4 mb-3">
											<!-- Tarjeta con esquinas redondeadas -->
											<div class="card h-100"
												style="border: 2px solid #00b59c; border-radius: 15px; overflow: hidden;">

												<!-- Encabezado de la tarjeta con el gradiente -->
												<div style="
				  background: linear-gradient(90deg, rgba(4,147,167,1) 29%, rgba(41,83,160,1) 68%) !important; 
				  max-height: 65vh !important; 
				  position: relative; 
				  padding: 10px; 
				  text-align: center;">
													<h5 class="mb-0" style="color: #fff;">
														<?php echo $paquete['nombre']; ?>
													</h5>
												</div>

												<!-- Contenido principal -->
												<div class="p-3">
													<!-- Lista de servicios (con viñetas) -->
													<ul style="list-style-type: disc; padding-left: 20px; margin-bottom: 1rem;">
														<?php foreach ($paquete['servicios'] as $servicio): ?>
															<li><?php echo $servicio; ?></li>
														<?php endforeach; ?>
													</ul>

													<!-- Precio en grande, centrado, color principal -->
													<h5 class="text-center" style="color: #00b59c; font-weight: 600;">
														S/ <?php echo number_format($paquete['precio'], 2); ?>
													</h5>

													<!-- Botón Reservar con degradado -->
													<div class="text-center mt-3">
														<a href="https://api.whatsapp.com/send?phone=51921883459&text=Deseo%20m%C3%A1s%20informaci%C3%B3n"
															class="btn"
															style="background: linear-gradient(to right, #00b59c, #009fff); color: #fff; border: none; border-radius: 20px; padding: 8px 20px;">
															Reservar
														</a>

													</div>
												</div> <!-- fin .p-3 -->
											</div> <!-- fin .card -->
										</div> <!-- fin .col-md-4 -->
									<?php endforeach; ?>
								</div> <!-- fin .row -->
							</div> <!-- fin .mb-4 -->

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