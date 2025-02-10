<?php
$procedimientos = [
	[
		"nombre" => "Colocación de enema",
		"contenido" => ""
	],
	[
		"nombre" => "Colonoscopia completa",
		"contenido" => ""
	],
	[
		"nombre" => "Colonoscopia izquierda",
		"contenido" => ""
	],
	[
		"nombre" => "Dilatación de estenosis con balón hidrostático",
		"contenido" => ""
	],
	[
		"nombre" => "Endoscopia alta",
		"contenido" => ""
	],
	[
		"nombre" => "Sigmoidoscopia flexible",
		"contenido" => ""
	],
	[
		"nombre" => "Test ureasa",
		"contenido" => ""
	],
	[
		"nombre" => "Test aliento",
		"contenido" => ""
	],
	[
		"nombre" => "Paracentesis",
		"contenido" => ""
	],
	[
		"nombre" => "Ligadura de hemorroides",
		"contenido" => ""
	],
	[
		"nombre" => "Poliptemia en estomago",
		"contenido" => ""
	],
	[
		"nombre" => "Ligadura de varices esofágica",
		"contenido" => ""
	],
	[
		"nombre" => "Polipectomía en colon",
		"contenido" => ""
	],
	[
		"nombre" => "Polipectomía con asa fría",
		"contenido" => ""
	],
	[
		"nombre" => "Polipectomía con pinza de biopsia",
		"contenido" => ""
	],
	[
		"nombre" => "Mucosectomía en estómago",
		"contenido" => ""
	],
	[
		"nombre" => "Mucosectomia en colon",
		"contenido" => ""
	],
	[
		"nombre" => "Extracción de cuerpo extraño por endoscopía",
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
						src="/images/Especialidades/Gastroenterología.png">
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
				<p>La gastroenterología es la especialidad médica que se ocupa del diagnóstico y tratamiento de las
					enfermedades del sistema digestivo, incluyendo el esófago, estómago, intestinos, hígado, páncreas y
					vesícula biliar. Los gastroenterólogos tratan una amplia variedad de condiciones, como la enfermedad
					por reflujo gastroesofágico, úlceras pépticas, enfermedades inflamatorias intestinales (como la
					enfermedad de Crohn y la colitis ulcerosa), así como trastornos hepáticos y pancreáticos.</p>
				<p>En la Red salva, ofrecemos un enfoque integral y personalizado para el cuidado de la salud digestiva.
					Contamos con un equipo de gastroenterólogos altamente capacitados y tecnología de última generación
					para realizar procedimientos diagnósticos como la colonoscopia, endoscopia y el descarte de
					helicobacter pylori. Nos especializamos en el tratamiento de enfermedades comunes y complejas del
					sistema digestivo, garantizando una atención de alta calidad y un seguimiento continuo para mejorar
					la calidad de vida de nuestros pacientes. Desde la detección temprana de cánceres digestivos hasta
					el manejo de trastornos crónicos, nuestro objetivo es proporcionar un cuidado efectivo y compasivo.
				</p>


				<div style="margin:20px 20px !important">
					<p class="color-azul h5">LE BRINDRAMOS LOS SIGUIENTES <b>PROCEDIMIENTOS DE GASTROENTEOROLOGIA</b></p>
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
				


				<?php require_once('links-gastroenterologia.php'); ?>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php'); ?>