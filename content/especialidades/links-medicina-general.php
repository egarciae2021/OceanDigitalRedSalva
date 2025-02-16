<p class="color-azul h5"> Enfermedades que trata la especialidad de MEDICINA GENERAL</p>
<div class="row">
	<?php
	$enfermedades = [
		[
			'nombre' => 'Gripe (Influenza)',
			'contenido' => 'Es una infección viral que afecta las vías respiratorias y causa fiebre, dolor muscular, tos y cansancio. En Red Salva, tratamos los síntomas y ofrecemos medidas preventivas como la vacunación para proteger su salud.',
			'href' => '/especialidades/general/gripe'
		],
		[
			'nombre' => 'Hipertensión arterial (presión alta)',
			'contenido' => 'Esta condición ocurre cuando la presión en las arterias es consistentemente alta, lo que aumenta el riesgo de enfermedades del corazón. Ofrecemos diagnóstico y tratamiento personalizado para controlar su presión arterial y prevenir complicaciones graves.',
			'href' => '/especialidades/cardiologia/hipertension-arterial'
		],
		[
			'nombre' => 'Diabetes tipo 2',
			'contenido' => 'Es una enfermedad crónica que afecta cómo el cuerpo utiliza el azúcar (glucosa). En Red Salva, le proporcionamos un enfoque integral que incluye tratamiento médico, orientación nutricional y control regular para gestionar la diabetes.',
			'href' => '/especialidades/endocrinologia/diabetes-tipo-2'
		],
		[
			'nombre' => 'Colesterol alto (hipercolesterolemia)',
			'contenido' => 'Niveles elevados de colesterol en la sangre pueden aumentar el riesgo de enfermedades cardíacas. En nuestra clínica, evaluamos sus niveles de colesterol y ofrecemos estrategias de tratamiento, incluyendo cambios en la dieta y medicación.',
			'href' => '/especialidades/cardiologia/colesterol-alto'
		],
		[
			'nombre' => 'Infecciones del tracto urinario (ITU)',
			'contenido' => 'Las infecciones en las vías urinarias son comunes y causan dolor al orinar, urgencia y enrojecimiento. Tratamos estas infecciones con antibióticos adecuados para prevenir complicaciones.',
			'href' => '/especialidades/urologia/infecciones-del-tracto-urinario'
		],
		[
			'nombre' => 'Alergias estacionales',
			'contenido' => 'Causadas por sustancias como el polen, las alergias estacionales afectan la nariz y los ojos, provocando estornudos, picazón y congestión. En Red Salva, ofrecemos diagnósticos y tratamientos para controlar los síntomas y mejorar su calidad de vida.',
			'href' => '/especialidades/neumologia/alergias-estacionales'
		],
		[
			'nombre' => 'Trastornos digestivos',
			'contenido' => 'Condiciones como el reflujo gastroesofágico, gastritis o síndrome del intestino irritable (SII) afectan el sistema digestivo. En nuestra clínica, le proporcionamos tratamiento para aliviar los síntomas y mejorar su bienestar digestivo.',
			'href' => '/especialidades/gastroenterologia/trastornos-digestivos'
		],
		[
			'nombre' => 'Resfriado común',
			'contenido' => 'Infección viral leve que causa congestión, dolor de garganta, estornudos y tos. Ofrecemos tratamientos sintomáticos para aliviar los malestares y acelerar su recuperación.',
			'href' => '/especialidades/general/resfriado-comun'
		],
		[
			'nombre' => 'Dolor muscular y articular',
			'contenido' => 'El dolor en los músculos o las articulaciones puede ser causado por lesiones, tensiones o afecciones como la artritis. En Red Salva, trabajamos para diagnosticar la causa y ofrecerle soluciones para reducir el dolor y mejorar su movilidad.',
			'href' => '/especialidades/rheumatologia/dolor-muscular-y-articular'
		],
		[
			'nombre' => 'Obesidad',
			'contenido' => 'Es una condición crónica que implica un exceso de grasa corporal y está relacionada con muchos problemas de salud. En Red Salva, proporcionamos planes personalizados de manejo de peso, incluyendo asesoramiento nutricional y apoyo médico.',
			'href' => '/especialidades/endocrinologia/obesidad'
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