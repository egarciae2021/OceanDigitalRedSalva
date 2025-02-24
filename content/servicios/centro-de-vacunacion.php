<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1; ?></h1>
			</div>
			<div class="mb-0">
				<a class="link  color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i>
					Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/servicios"><i
						class="fa fa-arrow-left small me-1"></i> Servicios</a>
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
					style="position: relative; left: 50%; transform: translateX(-5%);">
					<img class="img-fluid rounded-3"
						style="max-width: 150%; height: auto;max-height: 45vh !important;object-fit: fill;"
						src="/images/Servicios/Centro de vacunación.png">
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
				<p>El Centro de Vacunación del Policlínico Red Salva es un servicio integral dedicado a la prevención de
					enfermedades infecciosas mediante la aplicación de vacunas a la población. Con un enfoque en la
					salud pública y el bienestar de la comunidad, este centro proporciona un acceso rápido y seguro a
					inmunizaciones de alta calidad para todas las edades.</p>
				<p><strong>Características del servicio:</strong></p>
				<ul>
					<li><strong>Vacunación para todas las edades:</strong> El centro ofrece un amplio catálogo de
						vacunas, tanto para niños como para adultos, que incluye las que forman parte del calendario
						nacional de vacunación, así como otras opcionales, como la de la influenza, el tétanos, la
						hepatitis B y la neumonía, entre otras.</li>
					<li><strong>Atención profesional y personalizada:</strong> El personal altamente capacitado y
						experimentado del Policlínico Red Salva, compuesto por médicos y enfermeras, brinda atención
						profesional, realizando una evaluación previa para garantizar que las personas reciban las
						vacunas más adecuadas según su edad, estado de salud y necesidades individuales.</li>
					<li><strong>Espacio adecuado y seguro:</strong> El Centro de Vacunación está equipado con los
						estándares más altos de seguridad e higiene, con refrigeración adecuada para mantener las
						vacunas en las condiciones óptimas que garanticen su efectividad.</li>
					<li><strong>Facilidad de acceso y horarios flexibles:</strong> La Policlínica Red Salva facilita el
						acceso a la población mediante horarios extendidos, permitiendo que los pacientes reciban
						atención sin mayores inconvenientes. Además, ofrece campañas de vacunación en diferentes épocas
						del año, adaptándose a las necesidades de la comunidad.</li>
					<li><strong>Control y registro de vacunas:</strong> Se lleva un registro detallado de las vacunas
						administradas, lo que permite hacer un seguimiento adecuado y garantizar que los pacientes
						completen su esquema de inmunización de manera oportuna.</li>
				</ul>
				<p>Este servicio del Centro de Vacunación de la Policlínica Red Salva juega un papel fundamental en la
					mejora de la salud pública, contribuyendo a la prevención de brotes de enfermedades y fortaleciendo
					la protección colectiva contra diversas infecciones.</p>
			</div>

		</div>
	</div>
</section>
<?php require_once('formulario.php'); ?>