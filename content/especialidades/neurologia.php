<?php

$procedimientos = [
	[
		"nombre" => "Electroencefalograma digital",
		"contenido" => ""
	],
	[
		"nombre" => "Electroenfalograma prolongado 12 hrs.",
		"contenido" => ""
	],
	[
		"nombre" => "Electroenfalograma prolongado 2 hrs.",
		"contenido" => ""
	],
	[
		"nombre" => "Electroenfalograma prolongado 6 hrs.",
		"contenido" => ""
	],
	[
		"nombre" => "Electroenfalograma prolongado 1 hrs.",
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
		"nombre" => "Electromiografía y velocidad de conducción MMSS",
		"contenido" => ""
	],
	[
		"nombre" => "Terapia del dolor",
		"contenido" => ""
	],
	[
		"nombre" => "Certificado de discapacidad mental",
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
	style="background: linear-gradient(90deg, rgba(4,147,167,1) 29%, rgba(41,83,160,1) 68%) !important; max-height: 65vh !important; position: relative;">

	<div class="container pt-3 mb-n5 h-100 position-relative d-flex">
		<div class="row h-100 w-100">

			<div class="col-md-7 d-flex justify-content-center align-items-center">
				<div class="bg-img-center card-img text-center"
					style="position: relative; left: 50%; transform: translateX(-25%);">
					<img class="img-fluid rounded-3"
						style="max-width: 150%; height: auto;max-height: 45vh !important;object-fit: fill;"
						src="/images/Especialidades/Neurología.png">
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
				<p>Red salva cuenta con especialistas en neurología con muchos años de experiencia ofreciendo atención
					especializada en el diagnóstico, tratamiento y seguimiento de trastornos del sistema nervioso
					central y periférico. Nuestro equipo de neurólogos altamente capacitados se dedica a proporcionar
					cuidados personalizados a pacientes de todas las edades con una amplia gama de afecciones
					neurológicas. Realizamos evaluaciones exhaustivas para diagnosticar trastornos neurológicos,
					utilizando tecnologías avanzadas, pruebas neuropsicológicas y otros estudios especializados</p>


				<div style="margin:20px 0px !important">
					<p class="color-azul h5">LE BRINDRAMOS LOS SIGUIENTES <b>PROCEDIMIENTOS DE NEUROLOGIA</b></p>
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



				<?php require_once('links-neurologia.php'); ?>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php'); ?>