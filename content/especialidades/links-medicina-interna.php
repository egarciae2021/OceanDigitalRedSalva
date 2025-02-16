<p class="color-azul h5">ENFERMEDADES DE MEDICINA INTERNA</p>
<div class="row">
	<?php
	$enfermedades = [
		[
			'nombre' => 'Hipertensión arterial',
			'contenido' => 'Es el aumento de la presión sanguínea, lo que puede dañar el corazón, riñones y vasos sanguíneos si no se controla. En nuestra clínica, ofrecemos un manejo integral para controlar la presión y prevenir complicaciones.',
			'href' => '/especialidades/cardiologia/hipertension-arterial'
		],
		[
			'nombre' => 'Enfermedades cardiovasculares',
			'contenido' => 'Incluyen afecciones como insuficiencia cardíaca, angina de pecho y arritmias, que afectan al corazón. En Red Salva, realizamos estudios avanzados para el diagnóstico temprano y brindamos tratamiento personalizado.',
			'href' => '/especialidades/cardiologia/enfermedades-cardiovasculares'
		],
		[
			'nombre' => 'Enfermedad pulmonar obstructiva crónica (EPOC)',
			'contenido' => 'Es una enfermedad progresiva que afecta los pulmones y dificulta la respiración, generalmente causada por el tabaquismo. Ofrecemos tratamientos para aliviar los síntomas y mejorar la calidad de vida.',
			'href' => '/especialidades/neumologia/epoc'
		],
		[
			'nombre' => 'Diabetes mellitus tipo 2',
			'contenido' => 'Es una enfermedad metabólica en la que el cuerpo no utiliza adecuadamente la insulina, lo que eleva los niveles de glucosa en sangre. En Red Salva, trabajamos con usted para controlar la diabetes y prevenir complicaciones a largo plazo.',
			'href' => '/especialidades/endocrinologia/diabetes-mellitus-tipo-2'
		],
		[
			'nombre' => 'Infecciones respiratorias',
			'contenido' => 'Abarcan desde resfriados comunes hasta infecciones más graves como neumonía. En nuestra clínica, tratamos eficazmente estas condiciones con antibióticos y otras opciones de tratamiento para asegurar su recuperación.',
			'href' => '/especialidades/neumologia/infecciones-respiratorias'
		],
		[
			'nombre' => 'Trastornos metabólicos',
			'contenido' => 'Incluyen condiciones como la dislipidemia (colesterol y triglicéridos elevados) y el síndrome metabólico. En Red Salva, diseñamos planes de tratamiento para equilibrar su metabolismo y reducir riesgos de enfermedades cardiovasculares.',
			'href' => '/especialidades/endocrinologia/trastornos-metabolicos'
		],
		[
			'nombre' => 'Acidosis y trastornos electrolíticos',
			'contenido' => 'Son desequilibrios en los niveles de ácido y electrolitos en el cuerpo, lo que puede afectar a muchos órganos. Ofrecemos un tratamiento preciso y monitorización para restaurar el equilibrio necesario.',
			'href' => '/especialidades/internistas/acidosis-y-trastornos-electroliticos'
		],
		[
			'nombre' => 'Enfermedades renales',
			'contenido' => 'Afectan los riñones, impidiendo que filtren adecuadamente los desechos del cuerpo. En nuestra clínica, brindamos diagnóstico y manejo temprano para evitar el daño renal progresivo.',
			'href' => '/especialidades/nefrologia/enfermedades-renales'
		],
		[
			'nombre' => 'Trastornos gastrointestinales',
			'contenido' => 'Enfermedades como el reflujo gastroesofágico, úlceras o colitis, que afectan el sistema digestivo. En Red Salva, tratamos estas afecciones con medicamentos y cambios en el estilo de vida para mejorar su bienestar digestivo.',
			'href' => '/especialidades/gastroenterologia/trastornos-gastrointestinales'
		],
		[
			'nombre' => 'Enfermedades autoinmunes',
			'contenido' => 'El sistema inmune ataca por error los propios tejidos del cuerpo, como en el lupus o la artritis reumatoide. Ofrecemos diagnósticos precisos y tratamientos para controlar la actividad de la enfermedad y mejorar su calidad de vida.',
			'href' => '/especialidades/rheumatologia/enfermedades-autoinmunes'
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