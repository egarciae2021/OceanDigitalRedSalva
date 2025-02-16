<p class="color-azul h5">Enfermedades que trata la especialidad de UROLOGIA</p>
<div class="row">
	<?php
	$enfermedades = [
		[
			'nombre' => 'Infecciones respiratorias',
			'contenido' => 'Estas incluyen resfriados, gripe, bronquitis y neumonía. Son comunes en niños y causan síntomas como fiebre, tos y dificultad para respirar. En Red Salva, brindamos diagnóstico temprano y tratamiento adecuado para aliviar los síntomas y prevenir complicaciones.',
			'href' => '/especialidades/pediatria/infecciones-respiratorias'
		],
		[
			'nombre' => 'Asma',
			'contenido' => 'Es una afección crónica que causa dificultad para respirar debido a la inflamación de las vías respiratorias. En Red Salva, ayudamos a controlar los síntomas y mejorar la calidad de vida de su hijo mediante un plan de tratamiento personalizado.',
			'href' => '/especialidades/pediatria/asma'
		],
		[
			'nombre' => 'Alergias',
			'contenido' => 'Los niños pueden ser alérgicos a alimentos, polen, polvo o picaduras de insectos. En nuestra clínica, realizamos pruebas para identificar las alergias y proporcionamos un tratamiento adecuado para controlar los síntomas y evitar reacciones graves.',
			'href' => '/especialidades/pediatria/alergias'
		],
		[
			'nombre' => 'Meningitis',
			'contenido' => 'Es una infección grave de las membranas que rodean el cerebro y la médula espinal. En Red Salva, diagnosticamos rápidamente esta enfermedad y tratamos con antibióticos para evitar complicaciones a largo plazo.',
			'href' => '/especialidades/pediatria/meningitis'
		],
		[
			'nombre' => 'Enfermedades infecciosas comunes como varicela, paperas y sarampión',
			'contenido' => 'Son enfermedades contagiosas que afectan principalmente a los niños. En nuestra clínica, ofrecemos vacunas preventivas y tratamiento para aliviar los síntomas en caso de infección.',
			'href' => '/especialidades/pediatria/enfermedades-infecciosas-comunes'
		],
		[
			'nombre' => 'Trastornos de desarrollo',
			'contenido' => 'Incluyen condiciones como el autismo o retraso en el habla. En Red Salva, ofrecemos seguimiento y terapia para apoyar el desarrollo de su hijo, promoviendo su bienestar y habilidades sociales.',
			'href' => '/especialidades/pediatria/trastornos-de-desarrollo'
		],
		[
			'nombre' => 'Enfermedades gastrointestinales',
			'contenido' => 'Afecciones como diarrea, vómitos, estreñimiento y cólicos son comunes en la niñez. Proporcionamos un tratamiento adecuado y consejos de prevención para mantener la salud digestiva de su hijo.',
			'href' => '/especialidades/pediatria/enfermedades-gastrointestinales'
		],
		[
			'nombre' => 'Obesidad infantil',
			'contenido' => 'Es un problema creciente que puede afectar la salud a largo plazo. En Red Salva, diseñamos planes de nutrición y actividad física para ayudar a controlar el peso de su hijo y prevenir problemas asociados, como la diabetes.',
			'href' => '/especialidades/pediatria/obesidad-infantil'
		],
		[
			'nombre' => 'Dermatitis atópica eccema',
			'contenido' => 'Es una afección de la piel que causa enrojecimiento, picazón y sequedad. Ofrecemos tratamientos dermatológicos para aliviar los síntomas y mejorar la salud de la piel de su hijo.',
			'href' => '/especialidades/pediatria/dermatitis-atopica'
		],
		[
			'nombre' => 'Cólico del lactante',
			'contenido' => 'Son episodios de llanto excesivo en bebés. Aunque es una afección temporal, en Red Salva ofrecemos orientación a los padres para ayudar a calmar a su bebé y mejorar su bienestar.',
			'href' => '/especialidades/pediatria/colico-del-lactante'
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