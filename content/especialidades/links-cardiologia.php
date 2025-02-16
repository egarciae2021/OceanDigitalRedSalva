 
<p class="color-azul h5">ENFERMEDADES DE CARDIOLOGÍA</p>
<div class="row">
	<?php
	$enfermedades = [
		[
			'nombre' => 'Arritmia cardiaca',
			'contenido' => 'Es un trastorno del ritmo del corazón que puede causar latidos irregulares o anormales, generando síntomas como palpitaciones o mareos. En nuestra clínica, ofrecemos diagnóstico y tratamiento personalizado para controlar esta condición y mejorar su salud. Si presenta síntomas, le recomendamos una consulta con nuestra especialidad de Cardiología para evaluar su caso.',
			'href' => '/especialidades/cardiologia/arritmia-cardiaca'
		],
		[
			'nombre' => 'Cardiopatía coronaria',
			'contenido' => 'Ocurre cuando las arterias que suministran sangre al corazón se obstruyen o estrechan, lo que puede causar dolor en el pecho o aumentar el riesgo de un infarto. En nuestra clínica, diagnosticamos y tratamos esta afección para mejorar la circulación y prevenir complicaciones graves. Si experimenta síntomas, le invitamos a realizar una consulta para evaluar su salud cardíaca.',
			'href' => '/especialidades/cardiologia/cardiopatia-coronaria'
		],
		[
			'nombre' => 'Hipertensión arterial',
			'contenido' => 'Es una condición en la que la presión sanguínea está constantemente alta, lo que aumenta el riesgo de enfermedades cardíacas, accidentes cerebrovasculares y otros problemas. En nuestra clínica, realizamos un diagnóstico preciso y ofrecemos tratamientos para controlar su presión y prevenir complicaciones. Si tiene antecedentes o síntomas, le recomendamos una consulta para evaluar su salud.',
			'href' => '/especialidades/cardiologia/hipertension-arterial'
		],
		[
			'nombre' => 'Insuficiencia cardiaca',
			'contenido' => 'Ocurre cuando el corazón no puede bombear suficiente sangre, causando síntomas como fatiga y dificultad para respirar. En nuestra clínica, le ofrecemos diagnóstico y tratamiento para mejorar su salud cardíaca. Si presenta estos síntomas, consulte con nosotros.',
			'href' => '/especialidades/cardiologia/insuficiencia-cardiaca'
		],
		[
			'nombre' => 'Patología del sistema circulatorio',
			'contenido' => 'Afectan los vasos sanguíneos y el corazón, lo que puede generar problemas como hipertensión, infartos o accidentes cerebrovasculares. En nuestra clínica, diagnosticamos y tratamos estas condiciones para mejorar la circulación y prevenir complicaciones graves. Si experimenta síntomas como dolor en el pecho o dificultad para respirar, le recomendamos una consulta.',
			'href' => '/especialidades/cardiologia/patologia-del-sistema-circulatorio'
		],
		[
			'nombre' => 'Valvulopatías',
			'contenido' => 'Son afecciones en las válvulas del corazón que pueden causar un flujo sanguíneo anormal, generando síntomas como fatiga, dificultad para respirar o dolor en el pecho. En nuestra clínica, realizamos un diagnóstico completo y ofrecemos tratamientos adecuados para manejar esta condición. Si presenta síntomas, le invitamos a agendar una consulta para evaluar su salud cardíaca.',
			'href' => '/especialidades/cardiologia/valvulopatias'
		],
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
							<a class="list-group-item list-group-item-action link-pointer color-azul color-naranja-hover <?php if ($page == $enfermedad['href']) {
								echo 'active';
							} ?>"
								href="">
								<?= $enfermedad['contenido'] ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>