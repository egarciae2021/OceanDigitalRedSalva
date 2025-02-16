<p class="color-azul h5">Enfermedades que trata la especialidad de NEUROLOGIA</p>
<div class="row">
	<?php
	$enfermedades = [
		[
			'nombre' => 'Cefaleas y Migrañas',
			'contenido' => 'Las cefaleas y migrañas son dolores de cabeza recurrentes que pueden ir acompañados de náuseas, sensibilidad a la luz y ruidos. En nuestra clínica, evaluamos las causas y ofrecemos tratamientos para reducir la frecuencia e intensidad de estos episodios.',
			'href' => '/especialidades/neurologia/cefaleas-y-migranas'
		],
		[
			'nombre' => 'Demencias',
			'contenido' => 'Las demencias, como la enfermedad de Alzheimer, son trastornos que afectan la memoria y las capacidades cognitivas. En Red Salva, diagnosticamos y gestionamos estos trastornos con el objetivo de mejorar la calidad de vida y el bienestar del paciente.',
			'href' => '/especialidades/neurologia/demencias'
		],
		[
			'nombre' => 'Enfermedad de Parkinson',
			'contenido' => 'Es un trastorno neurodegenerativo que afecta el movimiento, causando temblores, rigidez muscular y dificultad para caminar. En Red Salva, ofrecemos tratamiento para controlar los síntomas y mejorar la movilidad y calidad de vida.',
			'href' => '/especialidades/neurologia/enfermedad-de-parkinson'
		],
		[
			'nombre' => 'Epilepsia',
			'contenido' => 'La epilepsia es una afección en la que el cerebro experimenta convulsiones recurrentes debido a actividad eléctrica anormal. En nuestra clínica, diagnosticamos tipos de epilepsia y ofrecemos tratamiento médico para controlar las crisis y prevenir complicaciones.',
			'href' => '/especialidades/neurologia/epilepsia'
		],
		[
			'nombre' => 'Neuralgia del Trigémino',
			'contenido' => 'Es un dolor intenso y punzante en la cara, causado por la irritación del nervio trigémino. En Red Salva, ofrecemos opciones de tratamiento para aliviar el dolor y mejorar la calidad de vida de quienes padecen esta condición.',
			'href' => '/especialidades/neurologia/neuralgia-del-trigemino'
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