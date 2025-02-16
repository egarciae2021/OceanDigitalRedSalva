<p class="color-azul h5">ENFERMEDADES DE GINECOLOGIA</p>
<div class="row">
	<?php
	$enfermedades = [
		[
			'nombre' => 'Endometriosis',
			'contenido' => 'Es una condición en la que el tejido que normalmente recubre el interior del útero crece fuera de él, causando dolor pélvico, reglas abundantes y, en algunos casos, infertilidad. En Red Salva, ofrecemos tratamiento para aliviar los síntomas y mejorar la calidad de vida.',
			'href' => '/especialidades/ginecologia/endometriosis'
		],
		[
			'nombre' => 'Miomas uterinos',
			'contenido' => 'Son tumores no cancerosos que se desarrollan en el útero, a menudo causando sangrados irregulares, dolor pélvico o problemas durante el embarazo. Brindamos opciones de tratamiento, desde medicación hasta cirugía, según la gravedad del caso.',
			'href' => '/especialidades/ginecologia/miomas-uterinos'
		],
		[
			'nombre' => 'Síndrome de ovario poliquístico (SOP)',
			'contenido' => 'Es un trastorno hormonal que afecta la ovulación, causando ciclos menstruales irregulares, aumento de peso y acné. Ofrecemos tratamiento para regular los ciclos menstruales y mejorar los síntomas.',
			'href' => '/especialidades/ginecologia/sindrome-de-ovario-poliquistico'
		],
		[
			'nombre' => 'Infecciones vaginales',
			'contenido' => 'Son infecciones comunes causadas por bacterias, hongos o virus, que pueden causar picazón, ardor o flujo anormal. En Red Salva, tratamos estas infecciones de manera rápida y eficaz para evitar complicaciones.',
			'href' => '/especialidades/ginecologia/infecciones-vaginales'
		],
		[
			'nombre' => 'Cáncer ginecológico',
			'contenido' => 'El cáncer de cuello uterino, ovario, endometrio o vulva puede ser detectado a través de exámenes de rutina como el Papanicolaou. Proporcionamos un diagnóstico temprano y tratamiento especializado para mejorar los resultados.',
			'href' => '/especialidades/ginecologia/cancer-ginecologico'
		],
		[
			'nombre' => 'Disfunciones del suelo pélvico',
			'contenido' => 'Estas condiciones incluyen problemas como la incontinencia urinaria o el prolapso de órganos pélvicos, que afectan la calidad de vida. En Red Salva, trabajamos en terapias físicas y otras opciones de tratamiento para mejorar la función del suelo pélvico.',
			'href' => '/especialidades/ginecologia/disfunciones-del-suelo-pelvico'
		],
		[
			'nombre' => 'Amenorrea',
			'contenido' => 'Es la ausencia de menstruación durante un período prolongado, que puede estar relacionada con desequilibrios hormonales o problemas de salud subyacentes. Ofrecemos evaluación y tratamiento para restaurar el ciclo menstrual normal.',
			'href' => '/especialidades/ginecologia/amenorrea'
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
							} ?>" href="">
								<?= $enfermedad['contenido'] ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>