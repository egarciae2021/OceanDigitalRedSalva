<?php
$procedimientos = [
	[
		"nombre" => "Cauterización",
		"contenido" => "La cauterización ginecológica es un procedimiento médico que se realiza para eliminar lesiones en el cuello uterino o verrugas genitales."
	],
	[
		"nombre" => "Cauterización con nitrato",
		"contenido" => "Aplicación de nitrato de plata para tratar lesiones en el cuello uterino o vagina, favoreciendo la regeneración del tejido."
	],
	[
		"nombre" => "Ecografía transvaginal",
		"contenido" => "Ultrasonido realizado a través de la vagina para obtener imágenes detalladas del útero, ovarios y otras estructuras pélvicas."
	],
	[
		"nombre" => "Colocación de DIU",
		"contenido" => "Inserción de un dispositivo intrauterino de cobre u hormonal como método anticonceptivo de larga duración."
	],
	[
		"nombre" => "Otoscopia magnificada",
		"contenido" => "Examen detallado del oído con un otoscopio de aumento para evaluar el canal auditivo y el tímpano."
	],
	[
		"nombre" => "Audiometría tonal",
		"contenido" => "Prueba que mide la capacidad auditiva detectando distintos tonos y frecuencias."
	],
	[
		"nombre" => "Examen completo de la vista",
		"contenido" => "Evaluación integral de la visión y la salud ocular, incluyendo pruebas de refracción, presión ocular y fondo de ojo."
	],
	[
		"nombre" => "Agudeza visual",
		"contenido" => "Prueba para medir la claridad y nitidez de la visión a diferentes distancias."
	],
	[
		"nombre" => "Evaluación pupilar",
		"contenido" => "Análisis del tamaño, forma y respuesta de las pupilas a la luz para detectar posibles afecciones neurológicas u oculares."
	],
	[
		"nombre" => "Fondo de ojo",
		"contenido" => "Exploración del interior del ojo, incluyendo la retina, nervio óptico y vasos sanguíneos, para detectar enfermedades como retinopatía o glaucoma."
	],
	[
		"nombre" => "Biometría",
		"contenido" => "Medición de las estructuras del ojo, como la longitud axial y el grosor del cristalino, utilizada especialmente en cirugía de cataratas."
	],
	[
		"nombre" => "Paquimetría",
		"contenido" => "Medición del grosor de la córnea, útil en el diagnóstico de glaucoma y antes de cirugías refractivas."
	],
	[
		"nombre" => "Queratometría",
		"contenido" => "Evaluación de la curvatura corneal para el diagnóstico de astigmatismo y adaptación de lentes de contacto."
	],
	[
		"nombre" => "Gonioscopía",
		"contenido" => "Examen del ángulo de drenaje del ojo para detectar glaucoma u otras anomalías en el sistema de drenaje del humor acuoso."
	],
	[
		"nombre" => "Tonometría",
		"contenido" => "Medición de la presión intraocular para detectar o monitorear el glaucoma."
	],
	[
		"nombre" => "Extracción de cuerpos extraños",
		"contenido" => "Procedimiento para retirar objetos o partículas incrustadas en el ojo y prevenir infecciones o lesiones."
	],
	[
		"nombre" => "OCT - Tomografía de Coherencia Óptica",
		"contenido" => "Estudio de imágenes en alta resolución de la retina y el nervio óptico para detectar enfermedades como glaucoma o degeneración macular."
	]
];

// Convertir a JSON (opcional)
$json_procedimientos = json_encode($procedimientos, JSON_PRETTY_PRINT);

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
						src="/images/Especialidades/Oftalmología.png">
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

				<p>La Oftalmología es la especialidad médica que se ocupa del diagnóstico, tratamiento y prevención de
					enfermedades y trastornos relacionados con los ojos y la visión.</p>
				<p>Los oftalmólogos están capacitados para tratar una amplia variedad de condiciones, como cataratas,
					glaucoma, degeneración macular, enfermedades de la retina, estrabismo y problemas de refracción como
					la miopía y la hipermetropía.</p>
				<p>Además, realizan procedimientos quirúrgicos, como la cirugía de cataratas o la corrección de
					problemas de visión, y utilizan tecnologías avanzadas para examinar la salud ocular.</p>


				<div style="margin:20px 0px !important">
					<p class="color-azul h5">Procedimientos de <b><?php echo strtoupper($h1); ?></b></p>
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



				<?php require_once('links-oftalmologia.php'); ?>

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