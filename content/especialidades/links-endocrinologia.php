<p class="color-azul h5">ENFERMEDADES DE ENDOCRINOLOGIA</p>
<div class="row">
	<?php
	$enfermedades = [
		[
			'nombre' => 'Acromegalia',
			'contenido' => 'Es una condición rara donde la glándula pituitaria produce demasiada hormona del crecimiento, lo que provoca un crecimiento anormal de los huesos y tejidos. En nuestra clínica, ofrecemos diagnóstico y tratamientos para controlar esta enfermedad.',
			'href' => '/especialidades/endocrinologia/acromegalia'
		],
		[
			'nombre' => 'Cáncer de tiroides',
			'contenido' => 'Es un tumor maligno en la glándula tiroides que puede causar nódulos en el cuello. Ofrecemos diagnóstico temprano mediante análisis y ecografías, así como opciones de tratamiento como cirugía o terapia con yodo radiactivo.',
			'href' => '/especialidades/endocrinologia/cancer-de-tiroides'
		],
		[
			'nombre' => 'Diabetes mellitus',
			'contenido' => 'Es un trastorno metabólico donde el cuerpo no produce suficiente insulina o no la utiliza adecuadamente, elevando los niveles de glucosa. En Red Salva, proporcionamos manejo personalizado para controlar la diabetes y prevenir complicaciones.',
			'href' => '/especialidades/endocrinologia/diabetes-mellitus'
		],
		[
			'nombre' => 'Diabetes gestacional',
			'contenido' => 'Es la diabetes que se desarrolla durante el embarazo y puede afectar tanto a la madre como al bebé. Tratamos esta condición con seguimiento cercano de los niveles de glucosa y estrategias para asegurar un embarazo saludable.',
			'href' => '/especialidades/endocrinologia/diabetes-gestacional'
		],
		[
			'nombre' => 'Dislipidemias',
			'contenido' => 'Se refiere a niveles anormales de lípidos en la sangre, como el colesterol elevado, que aumentan el riesgo de enfermedades cardiovasculares. En nuestra clínica, ofrecemos un enfoque integral para el manejo de las dislipidemias a través de dieta, ejercicio y medicamentos.',
			'href' => '/especialidades/endocrinologia/dislipidemias'
		],
		[
			'nombre' => 'Enfermedad de Addison',
			'contenido' => 'Es una condición rara donde las glándulas suprarrenales no producen suficientes hormonas, lo que puede causar fatiga, pérdida de peso y presión baja. En Red Salva, tratamos esta enfermedad con reemplazo hormonal adecuado.',
			'href' => '/especialidades/endocrinologia/enfermedad-de-addison'
		],
		[
			'nombre' => 'Hipotiroidismo e hipertiroidismo',
			'contenido' => 'El hipotiroidismo es la producción insuficiente de hormonas tiroideas, mientras que el hipertiroidismo es la producción excesiva. Ambas condiciones afectan el metabolismo y el bienestar general, por lo que en nuestra clínica le brindamos tratamiento adecuado para equilibrar las hormonas tiroideas.',
			'href' => '/especialidades/endocrinologia/hipotiroidismo-hipertiroidismo'
		],
		[
			'nombre' => 'Síndrome de Cushing',
			'contenido' => 'Se produce cuando el cuerpo está expuesto a niveles altos de cortisol, lo que puede causar aumento de peso, presión alta y debilidad muscular. En Red Salva, diagnosticamos y tratamos el síndrome de Cushing con opciones como cirugía o medicamentos para regular los niveles hormonales.',
			'href' => '/especialidades/endocrinologia/sindrome-de-cushing'
		],
		[
			'nombre' => 'Síndrome de ovario poliquístico (SOP)',
			'contenido' => 'Es un trastorno hormonal que afecta a las mujeres en edad fértil, causando ciclos menstruales irregulares y la formación de quistes en los ovarios. Ofrecemos tratamiento para regular el ciclo menstrual, reducir los síntomas y mejorar la fertilidad.',
			'href' => '/especialidades/endocrinologia/sindrome-de-ovario-poliquistico'
		],
		[
			'nombre' => 'Sobrepeso y obesidad',
			'contenido' => 'El sobrepeso y la obesidad son problemas metabólicos que aumentan el riesgo de enfermedades crónicas. En Red Salva, brindamos un enfoque integral que incluye orientación nutricional, ejercicio y, si es necesario, tratamientos médicos para ayudar a alcanzar un peso saludable.',
			'href' => '/especialidades/endocrinologia/sobrepeso-y-obesidad'
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