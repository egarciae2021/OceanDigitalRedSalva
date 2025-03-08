<?php
$procedimientos = [
	[
		"nombre" => "Cauterización",
		"contenido" => ""
	],
	[
		"nombre" => "Cauterización con nitrato",
		"contenido" => ""
	],
	[
		"nombre" => "Ecografía transvaginal",
		"contenido" => ""
	],
	[
		"nombre" => "Colocación de DIU",
		"contenido" => ""
	],
	[
		"nombre" => "Colposcopia",
		"contenido" => ""
	],
	[
		"nombre" => "Cono LEEP",
		"contenido" => ""
	],
	[
		"nombre" => "Ameu",
		"contenido" => ""
	],
	[
		"nombre" => "Drenaje y curación de hematoma vulvar",
		"contenido" => ""
	],
	[
		"nombre" => "Ecografía Doppler 4d",
		"contenido" => ""
	],
	[
		"nombre" => "Ecografía Doppler ovárica",
		"contenido" => ""
	],
	[
		"nombre" => "Ecografía Doppler uterina",
		"contenido" => ""
	],
	[
		"nombre" => "Ecografía Doppler útero  ovario",
		"contenido" => ""
	],
	[
		"nombre" => "Ecografía de mama",
		"contenido" => ""
	],
	[
		"nombre" => "Ecografía morforfológica Doppler",
		"contenido" => ""
	],
	[
		"nombre" => "Ecografía obstétrica Doppler",
		"contenido" => ""
	],
	[
		"nombre" => "Ecografía pélvica",
		"contenido" => ""
	],
	[
		"nombre" => "Ecografía perfil biofísico",
		"contenido" => ""
	],
	[
		"nombre" => "Ecografía transvaginal Doppler",
		"contenido" => ""
	],
	[
		"nombre" => "Ecografía 4D gemelar",
		"contenido" => ""
	],
	[
		"nombre" => "Ecografía genética",
		"contenido" => ""
	],
	[
		"nombre" => "Ecografía obstétrica gemelar",
		"contenido" => ""
	],
	[
		"nombre" => "Ecografía obstétrica",
		"contenido" => ""
	],
	[
		"nombre" => "Electro cauterización cervical",
		"contenido" => ""
	],
	[
		"nombre" => "Exeresis de pólipo cervical",
		"contenido" => ""
	],
	[
		"nombre" => "Exeresis de tumoración vulvar",
		"contenido" => ""
	],
	[
		"nombre" => "Exeresis de fibroadenoma de mama",
		"contenido" => ""
	],
	[
		"nombre" => "Histerosonografía",
		"contenido" => ""
	],
	[
		"nombre" => "Marsupializacion de Bartolino",
		"contenido" => ""
	],
	[
		"nombre" => "Monitoreo ovulatorio",
		"contenido" => ""
	],
	[
		"nombre" => "Electroencefalograma digital",
		"contenido" => ""
	],
	[
		"nombre" => "Electroenfalograma prolongado 12 hrs",
		"contenido" => ""
	],
	[
		"nombre" => "Electroenfalograma prolongado 2 hrs",
		"contenido" => ""
	],
	[
		"nombre" => "Electroenfalograma prolongado 6 hrs",
		"contenido" => ""
	],
	[
		"nombre" => "Electroenfalograma prolongado 1 hrs",
		"contenido" => ""
	],
	[
		"nombre" => "Electromiografia y velocidad de conducción 4 extremidades",
		"contenido" => ""
	],
	[
		"nombre" => "Electromiografia y velocidad de conducción MMII",
		"contenido" => ""
	],
	[
		"nombre" => "Terapia del dolor",
		"contenido" => ""
	],
	[
		"nombre" => "Certificado de discapacidad mental",
		"contenido" => ""
	],
	[
		"nombre" => "Electromiografía y velocidad de conducción MMSS",
		"contenido" => ""
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
	style="background: linear-gradient(90deg, rgba(4,147,167,1) 29%, rgba(41,83,160,1) 68%) !important; max-height: 65vh !important; position: relative;margin-top:70px">

	<div class="container pt-3 mb-n5 h-100 position-relative d-flex">
		<div class="row h-100 w-100">

			<div class="col-md-7 d-flex justify-content-center align-items-center">
				<div class="bg-img-center card-img text-center"
					style="position: relative; left: 50%; transform: translateX(-25%);">
					<img class="img-fluid rounded-3"
						style="max-width: 150%; height: auto;max-height: 45vh !important;object-fit: fill;"
						src="/images/Especialidades/Urología.png">
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
			<div class="col-md-10  ">


				<p>La Urología es la especialidad médica que se enfoca en el diagnóstico, tratamiento y prevención de
					enfermedades del sistema urinario en ambos sexos y del sistema reproductivo masculino.</p>
				<p>Los urólogos tratan afecciones como infecciones urinarias, cálculos renales, problemas de próstata,
					disfunción eréctil, infertilidad masculina, y cánceres del tracto urinario, entre otros.</p>
				<p>Además, realizan procedimientos quirúrgicos, como la extracción de cálculos renales o la cirugía de
					próstata. Los urólogos también manejan trastornos del suelo pélvico y están involucrados en la
					atención de problemas de incontinencia urinaria y alteraciones en la micción.</p>


				<div style="margin:20px 0px !important">
					<p class="color-azul h5">Procedimientos de <b>UROLOGIA</b></p>
					<div class="container">
						<div class="row">

							<?php foreach ($procedimientos as $procedimiento): ?>
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
				<?php require_once('links-urologia.php'); ?>

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