<p class="color-azul h5">ENFERMEDADES DE NEUMOLOGIA</p>
<div class="row">
	<?php
	$enfermedades = [
		[
			'nombre' => 'Asma bronquial',
			'contenido' => 'El asma es una afección que provoca dificultad para respirar debido a la inflamación y estrechamiento de las vías respiratorias. En Red Salva, le ofrecemos diagnóstico y tratamiento para controlar los síntomas y mejorar su calidad de vida.',
			'href' => '/especialidades/neumologia/asma-bronquial'
		],
		[
			'nombre' => 'Patología Pulmonar Infecciosa',
			'contenido' => 'Las infecciones pulmonares, como la neumonía o la tuberculosis, afectan los pulmones y pueden causar tos, fiebre y dificultad para respirar. En Red Salva, brindamos tratamiento especializado para eliminar la infección y mejorar su salud respiratoria.',
			'href' => '/especialidades/neumologia/patologia-pulmonar-infecciosa'
		],
		[
			'nombre' => 'Cáncer de pulmón',
			'contenido' => 'El cáncer de pulmón se origina en los pulmones y puede causar síntomas como tos persistente, dificultad para respirar y pérdida de peso. Ofrecemos diagnóstico temprano y opciones de tratamiento para mejorar el pronóstico y la calidad de vida.',
			'href' => '/especialidades/neumologia/cancer-de-pulmon'
		],
		[
			'nombre' => 'Enfermedad Pulmonar Obstructiva Crónica (EPOC)',
			'contenido' => 'La EPOC es una afección progresiva que dificulta la respiración, generalmente causada por el tabaquismo. En nuestra clínica, trabajamos en el manejo de los síntomas para mejorar la función pulmonar y la calidad de vida a largo plazo.',
			'href' => '/especialidades/neumologia/enfermedad-pulmonar-obstructiva-cronica'
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