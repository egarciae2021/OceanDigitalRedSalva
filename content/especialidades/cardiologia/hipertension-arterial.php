<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1;?></h1>
			</div>
			<div class="mb-0">
				<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades"><i class="fa fa-arrow-left small me-1"></i> Especialidades</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades/cardiologia"><i class="fa fa-arrow-left small me-1"></i> Cardiología</a>
			</div>
		</div>
	</div>
</section>
<img src="<?php echo $page_image;?>" class="img-fluid mt-n5 d-block d-md-none" alt="<?php echo $h1;?>">
<section class="fondo-azul content-space-1 d-none d-md-block" style=" background: rgb(4,147,167) !important;
background: linear-gradient(90deg, rgba(4,147,167,1) 29%, rgba(41,83,160,1) 68%)  !important;height:480px !important">
	<div class="container pt-3 mb-n5">
		<div class="row position-relative">
			<div class="position-md-absolute top-0 col-md-7 offset-md-5 h-100">
				<div class="bg-img-center card-img">
					<img class="img-fluid rounded-3" style="height:400px !important" src="/images/nosotros.jpg">
				</div>
			</div>
			<div class="col-10 col-md-7 col-lg-6 offset-1 offset-md-0 content-space-md-1">
				<div class="position-relative fondo-celeste-bajo rounded-3 zi-1 p-6 mt-5 mb-5 pe-6  shadow-sm">
					<div class="mb-2 mt-5">
						<h1 class="h4 color-azul"><?php echo $h1;?></h1>
					</div>
					<div class="mb-5">
						<a class="link color-azul color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
						<a class="link color-azul color-naranja-hover ms-3" href="/especialidades"><i class="fa fa-arrow-left small me-1"></i> Especialidades</a>
						<a class="link color-azul color-naranja-hover ms-3" href="/especialidades/cardiologia"><i class="fa fa-arrow-left small me-1"></i> Cardiología</a>
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
				<p>La hipertensión arterial, conocida comúnmente como presión arterial alta, es una condición crónica en la que la fuerza de la sangre contra las paredes de las arterias es demasiado alta. Esto puede llevar a problemas graves como enfermedades del corazón, accidentes cerebrovasculares y daño renal. La hipertensión a menudo no presenta síntomas claros, lo que la hace particularmente peligrosa ya que puede pasar desapercibida durante años.</p>
				<p>En la Red Salva, abordamos la hipertensión arterial con un enfoque integral. Realizamos evaluaciones exhaustivas para identificar las causas subyacentes y diseñar planes de tratamiento personalizados. Estos planes pueden incluir cambios en la dieta, aumento de la actividad física, manejo del estrés y, cuando es necesario, medicamentos antihipertensivos. Nuestro equipo de profesionales está comprometido en ayudar a los pacientes a controlar su presión arterial y reducir el riesgo de complicaciones a largo plazo.</p>
				<?php require_once('links-cardiologia.php');?>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php');?>