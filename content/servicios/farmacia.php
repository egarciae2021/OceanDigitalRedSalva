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
						src="/images/Servicios/Farmacia.png">
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
				<p>Nuestra farmacia se caracteriza por el compromiso con los pacientes a los que atendemos con profesionalismo y dedicación.</p>
				<p>En nuestra farmacia usted encontrará lo que su médico le recete. Productos farmacéuticos, dispositivos médicos y otros productos sanitarios.</p>
				<p>Ofrecemos una variedad de medicamentos de calidad para la atención médica, ambulatoria, hospitalaria y de emergencia. Contamos con una amplia gama de medicamentos para el tratamiento de fertilidad, diversos accesorios maternos y de lactancia materna, como crema de lanolina, compresas, formador de pezones, protegepezones, bolsas y envases recolectoras de leche materna, biberones para lactancia natural, extractores eléctricos y manuales, soportes maternos, fajas, post cesárea, parto normal y post operatorias, regalos de bebes, cuidado personal del recién nacido, y de la mujer, etc.</p>
				<p>Garantizamos la cadena de frio para aquellos medicamentos que necesiten una temperatura controlada.</p>
				<p>Nuestro horario de atención al público es de lunes a viernes de 8:20 am a 21:30 pm. Sábados de 8:20 am a 15:00 pm. Domingos de 8:20 a 13:00 pm. Feriados de 09:00 am a 13:00 pm</p>
				<p>Hospitalización y Emergencia las 24 horas del día.</p>
				<p>Anexo: 142 para consultas telefónicas.</p>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php');?>