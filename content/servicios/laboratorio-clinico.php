<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1; ?></h1>
			</div>
			<div class="mb-0">
				<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i>
					Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/servicios"><i
						class="fa fa-arrow-left small me-1"></i> Servicios</a>
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
					style="position: relative; left: 50%; transform: translateX(-5%);">
					<img class="img-fluid rounded-3"
						style="max-width: 150%; height: auto;max-height: 45vh !important;object-fit: fill;"
						src="/images/Servicios/Laboratorio.png">
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
						<a class="link color-azul color-naranja-hover ms-3" href="/servicios_detalle">
							<i class="fa fa-arrow-left small me-1"></i> Servicios
						</a>
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
				<p>En Red Salva, nos especializamos en ofrecer diagnósticos confiables a través de pruebas de
					laboratorio que respaldan el cuidado de tu salud. Contamos con equipos de última tecnología y un
					equipo de profesionales altamente capacitados para realizar una amplia gama de análisis clínicos,
					esenciales para la prevención, diagnóstico y monitoreo de diversas condiciones de salud.</p>
				<p>Nos comprometemos a garantizar que cada prueba sea realizada con los más altos estándares de calidad,
					brindando resultados oportunos y detallados que permiten a los médicos tomar decisiones informadas
					sobre tu tratamiento. Además, trabajamos de manera coordinada con el resto de los servicios del
					policlínico, como consultas externas y el centro de imágenes, para asegurar un enfoque integral en
					tu atención médica.</p>
				<p>En Red Salva, tu salud es nuestra prioridad. Nos aseguramos de ofrecerte un servicio accesible y
					confiable, facilitando tu camino hacia una mejor salud con diagnósticos certeros que apoyen tu
					bienestar.</p>
			</div>

		</div>
	</div>
</section>
<?php require_once('formulario.php'); ?>