<p class="color-azul h5">ENFERMEDADES DE GASTROENTEOROLOGIA</p>
<div class="row">
	<?php
	$enfermedades = [
		[
			'nombre' => 'Cáncer de colon',
			'contenido' => 'El cáncer de colon es un crecimiento anormal de células en el intestino grueso, que puede causar síntomas como sangrado y dolor abdominal. Realizamos diagnósticos tempranos y ofrecemos tratamientos como cirugía y quimioterapia para mejorar su pronóstico.',
			'href' => '/especialidades/gastroenterologia/cancer-de-colon'
		],
		[
			'nombre' => 'Cáncer de estómago',
			'contenido' => 'El cáncer de estómago es una enfermedad donde se desarrollan células malignas en el revestimiento del estómago. En Red Salva, ofrecemos exámenes de diagnóstico como endoscopias y un tratamiento integral para manejar esta condición.',
			'href' => '/especialidades/gastroenterologia/cancer-de-estomago'
		],
		[
			'nombre' => 'Enfermedad por reflujo gastroesofágico',
			'contenido' => 'Esta enfermedad ocurre cuando el ácido del estómago fluye hacia el esófago, causando acidez y molestias. Ofrecemos tratamientos farmacológicos y cambios en el estilo de vida para aliviar los síntomas y evitar complicaciones.',
			'href' => '/especialidades/gastroenterologia/enfermedad-por-reflujo-gastroesofagico'
		],
		[
			'nombre' => 'Gastritis',
			'contenido' => 'La gastritis es la inflamación del revestimiento del estómago, que puede ser causada por infecciones o consumo excesivo de medicamentos. En nuestra clínica, tratamos la gastritis con medicamentos y recomendaciones dietéticas para aliviar los síntomas.',
			'href' => '/especialidades/gastroenterologia/gastritis'
		],
		[
			'nombre' => 'Hemorroides',
			'contenido' => 'Las hemorroides son venas inflamadas en el recto o ano que pueden causar dolor y sangrado. En Red Salva, ofrecemos tratamientos médicos y quirúrgicos para aliviar los síntomas y mejorar la calidad de vida.',
			'href' => '/especialidades/gastroenterologia/hemorroides'
		],
		[
			'nombre' => 'Úlcera péptica',
			'contenido' => 'Las úlceras pépticas son heridas abiertas en el revestimiento del estómago o el duodeno, causadas generalmente por infecciones bacterianas o el uso prolongado de medicamentos antiinflamatorios. Tratamos las úlceras con medicamentos para reducir la acidez y promover la curación.',
			'href' => '/especialidades/gastroenterologia/ulcera-peptica'
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