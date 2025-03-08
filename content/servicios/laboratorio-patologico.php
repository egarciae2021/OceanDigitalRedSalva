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
						src="/images/Servicios/Tópico.png">
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
				<p>En Red Salva, contamos con un laboratorio patológico de vanguardia, diseñado para ofrecerte
					diagnósticos rápidos, precisos y confiables. Sabemos lo importante que es para ti recibir la mejor
					atención médica, y por eso nuestro laboratorio está equipado con tecnología de última generación y
					un equipo de profesionales altamente capacitados en el análisis de muestras biológicas.</p>
				<p>Nuestros servicios incluyen:</p>
				<ul>
					<li><strong>Análisis de muestras de tejidos:</strong> Realizamos estudios exhaustivos de biopsias y
						muestras de tejidos para identificar cualquier alteración celular, como la presencia de cáncer,
						enfermedades infecciosas o trastornos inflamatorios.</li>
					<li><strong>Citología:</strong> Con pruebas como el Papanicolau y otros análisis citológicos,
						podemos detectar células anormales que podrían ser indicativas de enfermedades graves, ayudando
						a una detección temprana y tratamiento adecuado.</li>
					<li><strong>Estudios de sangre y fluidos corporales:</strong> Llevamos a cabo pruebas para evaluar
						tu salud general, identificar infecciones, desórdenes hematológicos y otros trastornos
						metabólicos.</li> 
					<li><strong>Pruebas moleculares y genéticas:</strong> Ofrecemos análisis avanzados que permiten
						detectar alteraciones genéticas y predisposiciones a enfermedades, brindando información crucial
						para planes de tratamiento más personalizados.</li>
				</ul>
				<p>En Red Salva, nuestra misión es proporcionarte diagnósticos oportunos y de calidad, para que tú y tu
					médico puedan tomar decisiones informadas para tu bienestar. Tu salud es nuestra prioridad, y
					nuestro laboratorio patológico está aquí para brindarte la mejor atención.</p>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php'); ?>