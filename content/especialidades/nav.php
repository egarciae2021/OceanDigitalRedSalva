<?php
$menuItems = array(
	'Especialidades' => array(
		'__enlace__' => '/especialidades',
		'Anestesiología' => '/especialidades/anestesiologia',
		'Cardiología' => '/especialidades/cardiologia',
		'Cirugía bariátrica y metabólica' => '/especialidades/cirugia-bariatrica-y-metabolica',
		'Cirugía general' => '/especialidades/cirugia-general',
		'Cirugía plastica' => '/especialidades/cirugia-plastica',
		'Dermatologia' => '/especialidades/dermatologia',
		'Endocrinología' => '/especialidades/endocrinologia',
		'Gastroenterología' => '/especialidades/gastroenterologia',
		'Ginecología' => '/especialidades/ginecologia',
		'Mastología y cáncer de piel' => '/especialidades/mastologia-y-cancer-de-piel',
		'Neumología' => '/especialidades/neumologia',
		'Neurología' => '/especialidades/neurologia',
		'Obstetricia' => '/especialidades/obstetricia',
		'Oftalmología' => '/especialidades/oftalmologia',
		'Otorrinolaringología' => '/especialidades/otorrinolaringologia',
		'Pediatría' => '/especialidades/pediatria',
		'Pediatría vacunas' => '/especialidades/pediatria-vacunas',
		'Traumatología' => '/especialidades/traumatologia',
		'Terapia del lenguaje' => '/especialidades/terapida-del-lenguaje',
		'Inmunizaciones pediatricas' => '/especialidades/inmunizaciones-pediatricas',

	),
	'Staff médico' => '/staff-medico',
	'Servicios' => array(
		'__enlace__' => '/servicios',
		'Centro obstetrico' => '/servicios/centro-obstetrico',
		'Centro quirurgico' => '/servicios/centro-quirurgico',
		'Consulta externa' => '/servicios/consultas-externas',
		'Emergencia' => '/servicios/emergencia',
		'Farmacia' => '/servicios/farmacia',
		'Hospitalización' => '/servicios/hospitalizacion',
		'Laboratorio clínico' => '/servicios/laboratorio-clinico',
		'Laboratorio patológico' => '/servicios/laboratorio-patologico',
		'Neonatología' => '/servicios/neonatologia',
		'Tamizaje neonatal' => '/servicios/tamizaje-neonatal',
		'Visita guiada' => '/servicios/visita-guiada'
	),
	'Paquetes' => array(
		'__enlace__' => '/servicios',
		'Centro obstetrico' => '/servicios/centro-obstetrico',
		'Centro quirurgico' => '/servicios/centro-quirurgico',
		'Consulta externa' => '/servicios/consultas-externas',
		'Emergencia' => '/servicios/emergencia',
		'Farmacia' => '/servicios/farmacia',
		'Hospitalización' => '/servicios/hospitalizacion',
		'Laboratorio clínico' => '/servicios/laboratorio-clinico',
		'Laboratorio patológico' => '/servicios/laboratorio-patologico',
		'Neonatología' => '/servicios/neonatologia',
		'Tamizaje neonatal' => '/servicios/tamizaje-neonatal',
		'Visita guiada' => '/servicios/visita-guiada'
	),

);
?>
<header id="header"
	class="navbar navbar-expand-lg navbar-end navbar-shadow navbar-light bg-white navbar-absolute-top navbar-show-hide"
	data-hs-header-options='{
	"fixMoment": 0,
	"fixEffect": "slide"
}'>
	<div class="container">
		<nav class="js-mega-menu navbar-nav-wrap">
			<a class="navbar-brand" href="/" aria-label="Red Salva">
				<img class="navbar-brand-logo" src="/images/logo.png" alt="Red Salva">
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
								echo '<a class="hs-mega-menu-invoker nav-link dropdown-toggle" href="javascript:void(0);" role="button" aria-expanded="false">' . $label . ' <i class="fa fa-angle-down ps-2"></i></a>';
								echo '<div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="' . str_replace(' ', '', $label) . 'MegaMenu" style="min-width: 100%;">';
								echo '<div class="row">';
								foreach ($link as $subLabel => $subLink) {
									if ($subLabel !== '__enlace__') {
										echo '<div class="col-md-3 py-2">';
										echo '<a class="dropdown-item" href="' . $subLink . '">';
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
							<a target="_blank" class="btn btn-naranja d-none d-lg-inline-block rounded-pill"
								href="https://api.whatsapp.com/send?phone=51921883459&text=Deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20servicios."><span>Reservar
									cita</span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
<main id="content" role="main">