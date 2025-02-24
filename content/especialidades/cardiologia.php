<?php

$procedimientos = [
	[
		"nombre" => "Riesgo Quirúrgico",
		"contenido" => "El riesgo quirúrgico es la posibilidad de complicaciones durante o después de la cirugía. Evaluamos su salud para minimizar estos riesgos y asegurar una cirugía segura."
	],
	[
		"nombre" => "Prueba de Esfuerzo",
		"contenido" => "La prueba de esfuerzo mide cómo responde su corazón al ejercicio, ayudándonos a detectar posibles problemas cardíacos. Durante la prueba, se monitorizan su ritmo cardíaco y otros signos mientras realiza ejercicio físico."
	],
	[
		"nombre" => "Estudio de Mapa 24 horas",
		"contenido" => "El estudio de mapa (24 horas) consiste en llevar un monitor portátil que registra su ritmo cardíaco durante todo un día. Esto nos ayuda a detectar irregularidades o problemas cardíacos que puedan ocurrir en su actividad diaria."
	],
	[
		"nombre" => "Estudio de Holter 24 horas",
		"contenido" => "El estudio de Holter (24 horas) es un monitoreo continuo de su ritmo cardíaco durante un día completo, utilizando un pequeño dispositivo que se coloca en su pecho. Esto nos permite detectar irregularidades cardíacas mientras realiza sus actividades cotidianas."
	],
	[
		"nombre" => "Electrocardiograma",
		"contenido" => "El electrocardiograma (ECG) es un examen rápido y no invasivo que mide la actividad eléctrica de su corazón. Nos ayuda a detectar problemas como arritmias, infartos o alteraciones en el ritmo cardíaco."
	],
	[
		"nombre" => "Ecocardiograma Doppler",
		"contenido" => "El ecocardiograma Doppler es un examen no invasivo que utiliza ondas sonoras para observar cómo fluye la sangre a través de su corazón. Nos ayuda a detectar problemas en las válvulas o el flujo sanguíneo."
	],
	[
		"nombre" => "Eco Doppler Venoso MMII",
		"contenido" => "El Eco Doppler venoso de miembros inferiores es un examen no invasivo que utiliza ultrasonido para evaluar el flujo sanguíneo en las venas de sus piernas. Nos ayuda a detectar problemas como varices o trombosis."
	],
	[
		"nombre" => "Eco Doppler Arterial MMII",
		"contenido" => "El Eco Doppler arterial de miembros inferiores es un examen no invasivo que utiliza ultrasonido para evaluar el flujo sanguíneo en las arterias de sus piernas. Nos ayuda a detectar problemas como obstrucciones o insuficiencia arterial."
	],
	[
		"nombre" => "Eco Doppler Carotideo y Vertebral",
		"contenido" => "El Eco Doppler carotideo y vertebral es un examen no invasivo que usa ultrasonido para evaluar el flujo sanguíneo en las arterias del cuello y la cabeza. Nos ayuda a detectar posibles obstrucciones o problemas en el suministro de sangre al cerebro."
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
					style="position: relative; left: 50%; transform: translateX(-25%);">
					<img class="img-fluid rounded-3"
						style="max-width: 150%; height: auto;max-height: 45vh !important;object-fit: fill;"
						src="/images/Especialidades/Cardiología.png">
				</div>
			</div>

			<div class="col-md-5 d-flex align-items-center ps-5"
				style="position: relative; left: 60%; transform: translateX(-270%);">
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
				<p>La Cardiología es la especialidad médica que se dedica al diagnóstico, tratamiento y prevención de
					las enfermedades del corazón y los vasos sanguíneos.</p>
				<p>Los cardiólogos manejan una amplia variedad de condiciones, como hipertensión, insuficiencia
					cardíaca, arritmias, enfermedades coronarias y problemas de las válvulas cardíacas.</p>
				<p>Además, se especializan en la realización de pruebas diagnósticas, como electrocardiogramas,
					ecocardiogramas y pruebas de esfuerzo, para evaluar la función cardíaca.</p>

				<!-- PROCEDIMIENTOS -->
				<div style="margin:20px 0px !important">
					<p class="color-azul h5">LE BRINDRAMOS LOS SIGUIENTES <b>PROCEDIMIENTOS DE
							<?php echo strtoupper($h1); ?>
						</b></p>
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

				<?php require_once('links-cardiologia.php'); ?>

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