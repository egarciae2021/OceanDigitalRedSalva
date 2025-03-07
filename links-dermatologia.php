<p class="color-azul h5">Enfermedades que trata la especialidad de <b>DERMATOLOGÍA</b></p>
<div class="row">
	<?php
	$enfermedades = [
		[
			'nombre' => 'Acné',
			'contenido' => 'Es una afección común de la piel que provoca la aparición de granos, espinillas o quistes, especialmente en la cara, espalda y hombros. En Red Salva, ofrecemos tratamientos para controlar el acné y mejorar la apariencia de su piel.',
			'href' => '/especialidades/dermatologia/acne'
		],
		[
			'nombre' => 'Psoriasis',
			'contenido' => 'Es una enfermedad autoinmune que causa manchas rojas y escamosas en la piel. Tratamos la psoriasis con terapias específicas para reducir la inflamación y mejorar la calidad de vida de nuestros pacientes.',
			'href' => '/especialidades/dermatologia/psoriasis'
		],
		[
			'nombre' => 'Eczema Dermatitis atópica',
			'contenido' => 'Es una afección de la piel que provoca picazón, enrojecimiento y sequedad. En Red Salva, brindamos tratamientos para aliviar los síntomas y prevenir brotes, ayudando a mantener su piel saludable.',
			'href' => '/especialidades/dermatologia/eczema'
		],
		[
			'nombre' => 'Dermatitis seborreica',
			'contenido' => 'Causa manchas rojas y escamosas en el cuero cabelludo, cara y otras zonas del cuerpo. Nuestro enfoque incluye tratamientos tópicos para controlar la inflamación y reducir la aparición de los síntomas.',
			'href' => '/especialidades/dermatologia/dermatitis-seborrica'
		],
		[
			'nombre' => 'Melasma',
			'contenido' => 'Es una afección caracterizada por manchas oscuras en la piel, comúnmente en la cara, debido a la exposición al sol o cambios hormonales. En Red Salva, ofrecemos tratamientos para reducir la apariencia de estas manchas y mejorar el tono de su piel.',
			'href' => '/especialidades/dermatologia/melasma'
		],

		[
			'nombre' => 'Infecciones cutáneas',
			'contenido' => 'Infecciones bacterianas, virales o fúngicas que afectan la piel, causando enrojecimiento, dolor o llagas. Ofrecemos diagnóstico y tratamiento adecuado para erradicar la infección y evitar complicaciones.',
			'href' => '/especialidades/dermatologia/infecciones-cutaneas'
		],
		[
			'nombre' => 'Cáncer de piel Melanoma y no melanoma',
			'contenido' => 'Son tipos de cáncer que afectan la piel y pueden ser peligrosos si no se detectan a tiempo. En nuestra clínica, realizamos evaluaciones regulares y ofrecemos tratamientos para eliminar los cánceres de piel en sus primeras etapas.',
			'href' => '/especialidades/dermatologia/cancer-de-piel'
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