<?php
$menuItems = array(
	'Especialidades' => array(
		'__enlace__' => '/especialidades',
		'Cardiología' => '/especialidades/cardiologia',
		'Dermatología' => '/especialidades/dermatologia',
		'Endocrinología' => '/especialidades/endocrinologia',
		'Gastroenterología' => '/especialidades/gastroenterologia',
		'Ginecología y obstetricia' => '/especialidades/ginecologia',
		'Inmunizaciones pediátricas' => '/especialidades/Inmunizaciones-pediatricas',
		'Medicina Física' => '/especialidades/medicina-fisica-rehabilitacion',
		'Medicina General' => '/especialidades/medicina-general',
		'Neumología' => '/especialidades/neumologia',
		'Neurología' => '/especialidades/neurologia',
		'Oftalmología' => '/especialidades/oftalmologia',
		'Pediatría' => '/especialidades/pediatria',
		'Reumatología' => '/especialidades/reumatologia',
		'Terapia del lenguaje' => '/especialidades/terapida-del-lenguaje',
		'Urología' => '/especialidades/urologia',

	),
	'Staff médico' => '/staff-medico',
	'Servicios' => array(
		'__enlace__' => '/servicios',
		'Consultas externa' => '/servicios/consultas-externas',
		'Farmacia' => '/servicios/farmacia',
		'Laboratorio clínico' => '/servicios/laboratorio-clinico',
		'Centro de vacunación' => '/servicios/centro-de-vacunacion',
		'Centro de Imágen' => '/servicios/imagenes',
		'Tópico Red Salva' => '/servicios/topico',
		'Laboratorio patológico' => '/servicios/laboratorio-patologico'
	),
	'Paquetes' => array(
		'__enlace__' => '/servicios',
		'Centro obstétrico' => '/servicios/centro-obstetrico',
		'Centro quirúrgico' => '/servicios/centro-quirurgico',
		'Consultas externa' => '/servicios/consultas-externas',
		'Centro de vacunación' => '/servicios/centro-de-vacunacion',
		'Emergencia' => '/servicios/emergencia',
		'Farmacia' => '/servicios/farmacia',
		'Hospitalización' => '/servicios/hospitalizacion',
		'Imágenes' => '/servicios/imagenes',
		'Laboratorio clínico' => '/servicios/laboratorio-clinico',
		'Laboratorio patológico' => '/servicios/laboratorio-patologico',
		'UCI neonatal' => '/servicios/uci-neonatal',
		'Tamizaje neonatal' => '/servicios/tamizaje-neonatal',
		'Visita guiada' => '/servicios/visita-guiada'
	),
	'Blog' => '/blog'
);
?>

<header id="header"
	class="navbar navbar-expand-lg navbar-end navbar-shadow navbar-light bg-white navbar-absolute-top navbar-show-hide"
	data-hs-header-options='{
	"fixMoment": 0,
	"fixEffect": "slide"
}' style>
	<div class="container">
		<nav class="js-mega-menu navbar-nav-wrap">
			<a class="navbar-brand" href="/" aria-label="Red salva" style="margin-top:-10px !important">
				<img class="navbar-brand-logo" src="/images/logo.svg" alt="Red salva">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-default">
					<i class="fa fa-bars"></i>
				</span>
				<span class="navbar-toggler-toggled">
					<i class="fa fa-close"></i>
				</span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<div class="navbar-absolute-top-scroller">
					<ul class="navbar-nav nav-pills w-100 justify-content-center">
						<?php
						foreach ($menuItems as $label => $link) {
							if (is_array($link)) {
								echo '<li class="hs-has-mega-menu nav-item" data-hs-mega-menu-item-options=\'{"desktop": {"maxWidth": "40rem"}}\'>';
								echo '<a class="hs-mega-menu-invoker nav-link dropdown-toggle" href="javascript:void(0);" role="button" aria-expanded="false" >' . $label . ' <i class="fa fa-angle-down ps-2"></i></a>';
								echo '<div class="hs-mega-menu dropdown-menu w-100"  aria-labelledby="' . str_replace(' ', '', $label) . 'MegaMenu" style="min-width: 140%;">';
								echo '<div class="row">';
								foreach ($link as $subLabel => $subLink) {
									if ($subLabel !== '__enlace__') {
										echo '<div class="col-md-3 py-2">';
										echo '<a class="dropdown-item"  style="font-size:140% !important" href="' . $subLink . '">';
										echo $subLabel;
										echo '</a>';
										echo '</div>';
									}
								}
								echo '</div>';
								echo '</div>';
								echo '</li>';
							} else {
								echo '<li class="nav-item"><a class="nav-link" href="' . $link . '">' . $label . '</a></li>';
							}
						}
						?>
						<li class="nav-item">
							<!-- <a target="_blank" class="btn btn-naranja d-none d-lg-inline-block rounded-pill" href="https://api.whatsapp.com/send?phone=51921883459&text=Deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20servicios."><span>Reservar cita</span></a> -->
						<li class="nav-item">
							<a target="_blank"
								href="https://api.whatsapp.com/send?phone=51921883459&text=Deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20servicios."
								class="">
								<!-- <img src="/images/boton_reserva.png" alt="WhatsApp Icon"
									style="width:150px !important;heigth:250px !important"> -->
								<span class="btn btn-naranja d-none d-lg-inline-block rounded-pill">Reservar cita</span>
							</a>
						</li>

						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
<main id="content" role="main">
