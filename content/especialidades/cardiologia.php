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
<section class="fondo-azul content-space-1 d-none d-md-block" style=" background: rgb(4,147,167) !important;
background: linear-gradient(90deg, rgba(4,147,167,1) 29%, rgba(41,83,160,1) 68%)  !important;height:480px !important">
	<div class="container pt-3 mb-n5">
		<div class="row position-relative">
			<div class="position-md-absolute top-0 col-md-7 offset-md-5 h-100">
				<div class="bg-img-center card-img">
					<img class="img-fluid rounded-3" style="height:400px !important"
						src="/images/Especialidades/Cardiología.jpg">

				</div>
			</div>
			<div class="col-10 col-md-7 col-lg-6 offset-1 offset-md-0 content-space-md-1">
				<div class="position-relative fondo-celeste-bajo rounded-3 zi-1 p-6 mt-5 mb-5 pe-6  shadow-sm">
					<div class="mb-2 mt-5">
						<h1 class="h4 color-azul"><?php echo $h1; ?></h1>
					</div>
					<div class="mb-5">
						<a class="link color-azul color-naranja-hover" href="/"><i
								class="fa fa-arrow-left small me-1"></i> Inicio</a>
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
				<p>Red salva, cuenta con especialistas en Cardiología con muchos años de experiencia y amplia
					trayectoria. Este servicio se enfoca en el diagnóstico y tratamiento individualizado de diversas
					patologías del sistema cardio-circulatorio; además, con el fin de brindar la mejor atención médica,
					contamos con la mejor tecnología de diagnóstico no invasivo: Electrocardiograma de reposo y de
					ritmo, Electrocardiograma Holter de 24 Horas, Monitoreo Ambulatorio de Presión Arterial de 24 horas,
					Ecocardiografía Doppler Color y Ecografía Doppler vascular.</p>
				<?php require_once('links-cardiologia.php'); ?>
			</div>
		</div>
	</div>
</section>

<div class="bard_container">
	<div class="bard_bottom_bar" style="margin:00px 0px !important">
		<p style="margin: 20px 480px !important">Le brindamos los siguientes <b>procedimientos de Cardiología</b></p>
		<div class="bard_bottom_bar_content" style="padding:10px">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="bard_item">Procedimientos</div>
						<div class="bard_item">Riesgo Quirúrgico</div>
						<div class="bard_item">Prueba de Esfuerzo</div>
						<div class="bard_item">Estudio de Mapa (24 Horas)</div>
					</div>
					<div class="col-md-4">
						<div class="bard_item">Estudio de Holter (24 Horas)</div>
						<div class="bard_item">Electrocardiograma</div>
						<div class="bard_item">Ecocardiograma Doppler</div>
					</div>
					<div class="col-md-4">
						<div class="bard_item">Eco Doppler Venoso MMII</div>
						<div class="bard_item">Eco Doppler Arterial MMII</div>
						<div class="bard_item">Eco Doppler Carotideo y Vertebral</div>
						<div class="bard_item">Levantamiento de Observaciones</div>
						<div class="bard_item">Informe Médico</div>
						<div class="bard_item">Descanso Médico</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php require_once('formulario.php'); ?>