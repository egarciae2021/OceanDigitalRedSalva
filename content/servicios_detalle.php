<?php
$jsonData = '{
"servicios": [
        { "nombre": "Consultas externas", "enlace": "/servicios/consultas-externas", "imagen": "icon-consultas.png" },
        { "nombre": "Farmacia", "enlace": "/servicios/farmacia", "imagen": "icon-farmacia.png" },
        { "nombre": "Laboratorio clínico", "enlace": "/servicios/laboratorio-clinico", "imagen": "icon-laboratorio.png" },
        { "nombre": "Centro de vacunación", "enlace": "/servicios/centro-de-vacunacion", "imagen": "icon-vacunacion.png" },
        { "nombre": "Centro de Imágen", "enlace": "/servicios/imagenes", "imagen": "icon-imagenes.png" },
        { "nombre": "Tópico Red Salva", "enlace": "/servicios/topico", "imagen": "icon-topico.png" },
        { "nombre": "Laboratorio patológico", "enlace": "/servicios/laboratorio-patologico", "imagen": "icon-laboratorio-patologico.png" }
    ]
}';

$servicios = json_decode($jsonData, true);
?>


<div class="fondo-azul"
	style="background: linear-gradient(90deg, rgba(4,147,167,1) 29%, rgba(41,83,160,1) 68%) !important; max-height: 65vh !important; position: relative;">
	<div class="container content-space-t-lg-4 content-space-b-1">
		<h1 class="display-5 color-white">Servicios</h1>
		<div class="mb-3">
			<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i>
				Inicio</a>
		</div>
	</div>
</div>
<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p>Red Salva es un centro de salud comprometido con la excelencia en la atención médica. Contamos con un
					equipo de especialistas altamente capacitados y tecnología de última generación para garantizar un
					servicio de calidad. Nuestra prioridad es el bienestar de cada paciente, ofreciendo un enfoque
					integral y humano en el cuidado de su salud.
					En Red Salva contamos con una variedad de servicios diseñados para garantizar la mejor atención a
					nuestros pacientes:
				</p>

				<div class="container">
					<div class="row g-4">
						<?php foreach ($servicios['servicios'] as $esp): ?>
							<div class="col-md-4">
								<a href="<?= $esp['enlace'] ?>" class="text-decoration-none">
									<div class="specialty-card">
										<div class="specialty-text"><?= $esp['nombre'] ?></div>
										<div class="specialty-icon">
											<img src="/images/icono-servicios/<?= $esp['imagen'] ?>"
												alt="<?= $esp['nombre'] ?>">
										</div>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
</section>

<section class="py-5 fondo-celeste-bajo">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card mb-3">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img class="img-fluid" src="/images/mision.webp" alt="Card image cap">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Misión</h5>
								<p class="card-text">Ofrecemos servicios médicos especializados para la mujer y su
									familia, destacándonos por nuestro profesionalismo, ética y trato cálido. Nos
									enfocamos en brindar atención integral a la salud en cada etapa de la vida.
								</p>
								<br>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card mb-3">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img class="img-fluid" src="/images/pilares.webp" alt="Card image cap">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Pilares</h5>
								<ul>
									<li>Servicio individualizado</li>
									<li>Equipo altamente capacitado</li>
									<li>Infraestructura moderna y tecnología avanzada</li>
									<li>Espacios confortables</li>
									<li>Garantía de seguridad médica</li>
									<li>Compromiso con la ética profesional</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<style>
	/* .specialty-card {
		display: flex;
		align-items: center;
		justify-content: space-between;
		width: 100%;
		height: 80px;
		border: 3px solid rgb(35, 85, 179);
		border-radius: 15px;
		overflow: hidden;
		background-color: white;
		padding: 10px;
		transition: transform 0.2s ease-in-out;
	}

	.specialty-card:hover {
		transform: scale(1.05);
	} */

	.specialty-text {
		flex: 1;
		text-align: center;
		font-weight: bold;
		color: rgb(35, 85, 179)
	}

	.specialty-icon {
		width: 40%;
		height: 100%;
		/* background: linear-gradient(90deg, rgba(41,83,160,1) 29%, rgba(41,83,160,1) 68%) !important; */
		background: white !important;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.specialty-icon img {
		width: 75px;
		height: 75px;
	}

	.specialty-card {
		display: flex;
		align-items: center;
		justify-content: space-between;
		width: 100%;
		height: 120px;
		/* Aumenta la altura */
		border: 4px solid rgb(35, 85, 179);
		/* Borde más grueso */
		border-radius: 20px;
		/* Bordes más redondeados */
		overflow: hidden;
		background-color: white;
		padding: 15px;
		/* Más espacio interno */
		transition: transform 0.2s ease-in-out;
	}

	.specialty-card:hover {
		transform: scale(1.08);
		/* Mayor efecto al pasar el mouse */
	}
</style>


<?php require_once('formulario.php'); ?>