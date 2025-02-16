<p class="color-azul h5">Enfermedades que trata la especialidad de UROLOGIA</p>
<div class="row">
	<?php
	$enfermedades = [
		[
			'nombre' => 'Infecciones urinarias ITU',
			'contenido' => 'Las infecciones del tracto urinario son comunes y ocurren cuando bacterias afectan las vías urinarias. En nuestra clínica, ofrecemos tratamiento para aliviar síntomas como ardor al orinar y frecuencia urinaria, y prevenimos complicaciones.',
			'href' => '/especialidades/urologia/infecciones-urinarias'
		],
		[
			'nombre' => 'Cálculos renales piedras en los riñones',
			'contenido' => 'Los cálculos renales son depósitos duros de minerales que se forman en los riñones. Ofrecemos diagnóstico y tratamiento para reducir el dolor y evitar la obstrucción renal.',
			'href' => '/especialidades/urologia/calculos-renales'
		],
		[
			'nombre' => 'Hiperplasia prostática benigna HPB',
			'contenido' => 'Es el agrandamiento no canceroso de la próstata que causa dificultad para orinar. En Red Salva, brindamos opciones de tratamiento para mejorar el flujo urinario y aliviar los síntomas.',
			'href' => '/especialidades/urologia/hiperplasia-prostatica-benigna'
		],
		[
			'nombre' => 'Cáncer de próstata',
			'contenido' => 'El cáncer de próstata es una de las formas más comunes de cáncer en hombres. En nuestra clínica, realizamos pruebas para la detección temprana y proporcionamos tratamientos personalizados, como cirugía o radioterapia, según el estadio de la enfermedad.',
			'href' => '/especialidades/urologia/cancer-de-prostata'
		],
		[
			'nombre' => 'Disfunción eréctil',
			'contenido' => 'La disfunción eréctil se refiere a la incapacidad para mantener una erección lo suficientemente firme para una relación sexual. En Red Salva, tratamos esta afección con opciones que incluyen medicamentos y terapias especializadas.',
			'href' => '/especialidades/urologia/disfuncion-erectil'
		],
		[
			'nombre' => 'Incontinencia urinaria',
			'contenido' => 'La incontinencia urinaria es la pérdida involuntaria de orina, que puede ocurrir debido a debilidad en los músculos que controlan la vejiga. Ofrecemos diagnóstico y tratamiento para mejorar el control urinario y la calidad de vida.',
			'href' => '/especialidades/urologia/incontinencia-urinaria'
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