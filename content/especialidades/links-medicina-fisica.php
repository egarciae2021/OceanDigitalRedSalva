<p class="color-azul h5">ENFERMEDADES DE MEDICINA FISICA Y REHABILITACION</p>
<div class="row">
	<?php
	$enfermedades = [
		[
			'nombre' => 'Lesiones musculoesqueléticas',
			'contenido' => 'Incluyen lesiones de huesos, músculos, ligamentos y tendones, como esguinces, distensiones o fracturas. Ofrecemos tratamientos personalizados, como fisioterapia y terapia física, para mejorar la movilidad y reducir el dolor.',
			'href' => '/especialidades/reumatologia/lesiones-musculoesqueleticas'
		],
		[
			'nombre' => 'Accidentes cerebrovasculares (ACV)',
			'contenido' => 'Un ACV puede afectar el movimiento, el habla y la coordinación. En Red Salva, ofrecemos rehabilitación para recuperar habilidades motoras y funcionales a través de terapia física, ocupacional y del habla.',
			'href' => '/especialidades/neurociencias/accidentes-cerebrovasculares'
		],
		[
			'nombre' => 'Artritis',
			'contenido' => 'La artritis es la inflamación de las articulaciones, que causa dolor y rigidez. Trabajamos en mejorar la movilidad articular y reducir el dolor mediante ejercicios de fortalecimiento y técnicas de fisioterapia.',
			'href' => '/especialidades/reumatologia/artritis'
		],
		[
			'nombre' => 'Lesiones deportivas',
			'contenido' => 'Son comunes en atletas y personas activas, e incluyen problemas como esguinces, tendinitis y desgarros musculares. En Red Salva, tratamos estas lesiones con un enfoque integral para asegurar una recuperación rápida y segura.',
			'href' => '/especialidades/reumatologia/lesiones-deportivas'
		],
		[
			'nombre' => 'Dolor crónico',
			'contenido' => 'Condiciones como la fibromialgia o dolor lumbar crónico afectan la calidad de vida. Ofrecemos programas de rehabilitación enfocados en aliviar el dolor y mejorar la función diaria mediante técnicas de manejo del dolor y ejercicios terapéuticos.',
			'href' => '/especialidades/reumatologia/dolor-cronico'
		],
		[
			'nombre' => 'Rehabilitación postquirúrgica',
			'contenido' => 'Después de una cirugía, es crucial recuperar la fuerza y movilidad. Proporcionamos un plan de rehabilitación especializado para mejorar la recuperación y asegurar que pueda retomar sus actividades cotidianas con éxito.',
			'href' => '/especialidades/reumatologia/rehabilitacion-postquirurgica'
		]
	]; 
	
	foreach ($enfermedades as $enfermedad):
		?>
		<div class="col-md-6">
			<div class="accordion" id="accordion<?= str_replace(' ', '', $enfermedad['nombre']) ?>">
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed" style="padding: 15px 32px !important" type="button"
							data-bs-toggle="collapse"
							data-bs-target="#collapse<?= str_replace(' ', '', $enfermedad['nombre']) ?>"
							aria-expanded="false"
							aria-controls="collapse<?= str_replace(' ', '', $enfermedad['nombre']) ?>">
							<i class="bi-house list-group-icon"></i> <?= $enfermedad["nombre"] ?>
						</button>
					</h2>
					<div id="collapse<?= str_replace(' ', '', $enfermedad['nombre']) ?>" class="accordion-collapse collapse"
						data-bs-parent="#accordion<?= str_replace(' ', '', $enfermedad['nombre']) ?>">
						<div class="accordion-body" style="padding-top:5px !important">
							<p class="list-group-item list-group-item-action link-pointer color-azul color-naranja-hover <?php if ($page == $enfermedad['href']) {
								echo 'active';
							} ?>" href="">
								<?= $enfermedad['contenido'] ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>