<p class="color-azul h5">ENFERMEDADES DE GINECOLOGIA</p>
<div class="row">
	<?php
	$enfermedades = [
		[
			'nombre' => 'Artritis reumatoide',
			'contenido' => 'Es una enfermedad autoinmune que causa inflamación y dolor en las articulaciones. El tratamiento adecuado puede ayudar a controlar la inflamación y prevenir el daño articular a largo plazo.',
			'href' => '/especialidades/reumatologia/artritis-reumatoide'
		],
		[
			'nombre' => 'Lupus eritematoso sistémico',
			'contenido' => 'Es una enfermedad autoinmune que afecta diversos órganos del cuerpo, como la piel, los riñones y las articulaciones. En Red Salva le ofrecemos un enfoque integral para controlar los síntomas y mejorar su calidad de vida.',
			'href' => '/especialidades/reumatologia/lupus-eritematoso-sistemico'
		],
		[
			'nombre' => 'Osteoartritis',
			'contenido' => 'Es el desgaste del cartílago de las articulaciones, lo que causa dolor y rigidez. En nuestra clínica, le ayudamos a manejar los síntomas y a mejorar su movilidad a través de tratamientos personalizados.',
			'href' => '/especialidades/reumatologia/osteoartritis'
		],
		[
			'nombre' => 'Gota',
			'contenido' => 'Esta condición provoca dolor intenso e inflamación en las articulaciones debido a un exceso de ácido úrico en el cuerpo. En Red Salva, le guiamos en el tratamiento adecuado para reducir los ataques y prevenir complicaciones.',
			'href' => '/especialidades/reumatologia/gota'
		],
		[
			'nombre' => 'Espondilitis anquilosante',
			'contenido' => 'Es una enfermedad crónica que afecta la columna vertebral y las articulaciones sacroilíacas. En nuestra clínica, trabajamos para aliviar el dolor y mejorar la movilidad mediante terapias específicas.',
			'href' => '/especialidades/reumatologia/espondilitis-anquilosante'
		],
		[
			'nombre' => 'Fibromialgia',
			'contenido' => 'Es una afección que causa dolor musculoesquelético generalizado y fatiga. En Red Salva, ofrecemos un enfoque de tratamiento que incluye manejo del dolor y mejora de la calidad de vida.',
			'href' => '/especialidades/reumatologia/fibromialgia'
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