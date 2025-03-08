<?php
$jsonData = '{
    "especialidades": [
        { "nombre": "Cardiología", "enlace": "/especialidades/cardiologia", "imagen": "icon-cardiologia.png" },
        { "nombre": "Dermatología", "enlace": "/especialidades/dermatologia", "imagen": "icon-dermatologia.png" },
        { "nombre": "Endocrinología", "enlace": "/especialidades/endocrinologia", "imagen": "icon-endocrinologia.png" },
        { "nombre": "Gastroenterología", "enlace": "/especialidades/gastroenterologia", "imagen": "icon-gastroenterologia.png" },
        { "nombre": "Ginecología y obstetricia", "enlace": "/especialidades/ginecologia", "imagen": "icon-ginecologia.png" },
        { "nombre": "Inmunizaciones pediátricas", "enlace": "/especialidades/Inmunizaciones-pediatricas", "imagen": "icon-inmunizaciones.png" },
        { "nombre": "Medicina Física y Rehabilitación", "enlace": "/especialidades/medicina-fisica-rehabilitacion", "imagen": "icon-medicina-fisica.png" },
        { "nombre": "Medicina General", "enlace": "/especialidades/medicina-general", "imagen": "icon-medicina-general.png" },
        { "nombre": "Medicina Interna", "enlace": "/especialidades/medicina-interna", "imagen": "icon-medicina-interna.png" },
        { "nombre": "Neumología", "enlace": "/especialidades/neumologia", "imagen": "icon-neumologia.png" },
        { "nombre": "Neurología", "enlace": "/especialidades/neurologia", "imagen": "icon-neurologia.png" },
        { "nombre": "Nutrición", "enlace": "/especialidades/nutricion", "imagen": "icon-nutricion.png" },
        { "nombre": "Oftalmología", "enlace": "/especialidades/oftalmologia", "imagen": "icon-oftalmologia.png" },
        { "nombre": "Oncología", "enlace": "/especialidades/oncologia", "imagen": "icon-oncologia.png" },
        { "nombre": "Otorrinolaringología", "enlace": "/especialidades/otorrinolaringologia", "imagen": "icon-otorrino.png" },
        { "nombre": "Pediatría", "enlace": "/especialidades/pediatria", "imagen": "icon-pediatria.png" },
        { "nombre": "Psicología", "enlace": "/especialidades/psicologia", "imagen": "icon-psicologia.png" },
        { "nombre": "Reumatología", "enlace": "/especialidades/reumatologia", "imagen": "icon-reumatologia.png" },
        { "nombre": "Terapia del lenguaje", "enlace": "/especialidades/terapia-del-lenguaje", "imagen": "icon-terapia-lenguaje.png" },
        { "nombre": "Traumatología", "enlace": "/especialidades/traumatologia", "imagen": "icon-traumatologia.png" },
        { "nombre": "Urología", "enlace": "/especialidades/urologia", "imagen": "icon-urologia.png" }
    ]
}';

$especialidades = json_decode($jsonData, true);
?>

<div class="fondo-azul"
	style="background: linear-gradient(90deg, rgba(4,147,167,1) 29%, rgba(41,83,160,1) 68%) !important; max-height: 65vh !important; position: relative;margin-top:70px">
	<div class="container content-space-t-lg-4 content-space-b-1">
		<h1 class="display-5 color-white">Especialidades</h1>
		<div class="mb-3 ">
			<a class="link color-white color-naranja-hover " href="/"><i class="fa fa-arrow-left small me-1"></i>
				Inicio</a>
		</div>
	</div>
</div>
<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p>Bienvenidos al Policlínico Red Salva, un centro de salud integral dedicado a ofrecer atención médica
					de calidad con un equipo altamente especializado. Nuestro compromiso es brindar bienestar a cada
					paciente con tecnología de vanguardia y un enfoque humano en el cuidado de la salud.
					Nuestro policlínico cuenta con una amplia variedad de especialidades para cubrir todas las
					necesidades de nuestros pacientes
				</p>

				<div class="container">
					<div class="row g-4">
						<?php foreach ($especialidades['especialidades'] as $esp): ?>
							<div class="col-md-4">
								<a href="<?= $esp['enlace'] ?>" class="text-decoration-none">
									<div class="specialty-card">
										<div class="specialty-text"><?= $esp['nombre'] ?></div>
										<div class="specialty-icon">
											<img src="/images/iconos-especialidades/<?= $esp['imagen'] ?>"
												alt="<?= $esp['nombre'] ?>">
										</div>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>


				<div class="row justify-content-center" style="margin-top:30px  !important">
					<div class="col-md-6 d-flex justify-content-center">
						<div class="card">
							<img class="card-img shadow-sm mx-auto d-block" src="/images/nosotros.jpg" alt="Nosotros">
						</div>
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
		color: rgb(35, 85, 179);
		font-size: 1.5rem;
		/* Aumenta el tamaño de la letra */
	}




	.specialty-icon {
		width: 50%;
		/* Aumenta el ancho del contenedor */
		height: 100%;
		/* Mantiene el alto */
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.specialty-icon img {
		width: 120px;
		/* Aumenta el tamaño del icono */
		height: 120px;
		max-width: 100%;
		/* Evita que se desborde */
		max-height: 100%;
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