<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1;?></h1>
			</div>
			<div class="mb-0">
				<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/servicios"><i class="fa fa-arrow-left small me-1"></i> Servicios</a>
			</div>
		</div>
	</div>
</section>
<img src="<?php echo $page_image;?>" class="img-fluid mt-n5 d-block d-md-none" alt="<?php echo $h1;?>">
 
<section class="fondo-azul content-space-1 d-none d-md-block"
	style="background: linear-gradient(90deg, rgba(4,147,167,1) 29%, rgba(41,83,160,1) 68%) !important; max-height: 65vh !important; position: relative;">

	<div class="container pt-3 mb-n5 h-100 position-relative d-flex">
		<div class="row h-100 w-100">

			<div class="col-md-7 d-flex justify-content-center align-items-center">
				<div class="bg-img-center card-img text-center"
					style="position: relative; left: 50%; transform: translateX(-30%);">
					<img class="img-fluid rounded-3"
						style="max-width: 150%; height: auto;max-height: 45vh !important;object-fit: fill;"
						src="/images/Servicios/Centro de imágenes.png">
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
						<a class="link color-azul color-naranja-hover ms-3" href="/servicios">
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
				<p>Amplia experiencia en estudios anatomopatológicos bajo protocolos americanos. Comprometidos para ofrecerles, un servicio de calidad basada en seguridad, confianza y rapidez.</p>
				<p>Brindamos Servicios de:</p>
				<ul>
					<li>Estudios anatomopatológicos</li>
					<li>Estudios moleculares (PCR de mama y COBAS)</li>
					<li>Estudios de Inmunohistoquímica e Histoquímica</li>
					<li>Estudios citológicos de Papanicolaou</li>
					<li>Estudio por congelación</li>
					<li>Biopsias por aspiración</li>
					<li>Revisión por 2da opinión (muestra lámina y cassette)</li>
				</ul>
				<p>Profesional a cargo:</p>
				<p>Dr. Luis Taxa Rojas CMP 26314 RNE 12938<br>Médico Patólogo Oncólogo</p>
				<p>Especialista en Ginecología, Urología, Patología mamaria, Gastroenterología y Dermatopatología Oncológica.</p>
				<p>Experiencia laboral y formación en prestigiosas instituciones nacionales e internacionales.</p>
				<p>Actualmente, se desempeña como jefe del equipo funcional de Patología Quirúrgica del INEN.</p>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php');?>