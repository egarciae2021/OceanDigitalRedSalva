<p class="color-azul h5">ENFERMEDADES DE OFTALMOLOGIA</p>
<div class="row">
	<?php
	$enfermedades = [
		[
			'nombre' => 'Catarata',
			'contenido' => 'La catarata es una opacidad en el cristalino del ojo, que causa visión borrosa o nublada. En Red Salva, realizamos cirugía para remover la catarata y mejorar su visión de manera efectiva.',
			'href' => '/especialidades/oftalmologia/catarata'
		],
		[
			'nombre' => 'Estrabismo',
			'contenido' => 'Es la desalineación de los ojos, lo que puede causar visión doble o pérdida de la percepción de profundidad. En nuestra clínica, ofrecemos tratamientos tanto quirúrgicos como no quirúrgicos para corregir esta condición.',
			'href' => '/especialidades/oftalmologia/estrabismo'
		],
		[
			'nombre' => 'Pterigión',
			'contenido' => 'Es una proliferación de tejido en la conjuntiva que puede afectar la córnea, causando molestias o visión alterada. Tratamos esta afección con cirugía si es necesario, para restaurar la salud ocular.',
			'href' => '/especialidades/oftalmologia/pterigion'
		],
		[
			'nombre' => 'Glaucoma',
			'contenido' => 'El glaucoma es una enfermedad ocular que daña el nervio óptico debido a la presión intraocular elevada, lo que puede llevar a pérdida de visión. En Red Salva, ofrecemos un manejo integral para controlar la presión ocular y prevenir el daño visual.',
			'href' => '/especialidades/oftalmologia/glaucoma'
		],
		[
			'nombre' => 'Cirugía de desprendimiento de retina',
			'contenido' => 'El desprendimiento de retina ocurre cuando la retina se separa de su capa de soporte, lo que puede llevar a la ceguera. Realizamos cirugías especializadas para reparar el desprendimiento y salvar la visión.',
			'href' => '/especialidades/oftalmologia/desprendimiento-de-retina'
		],
		[
			'nombre' => 'Tratamiento de Retinopatía Diabética',
			'contenido' => 'Es una complicación ocular de la diabetes que afecta los vasos sanguíneos de la retina, lo que puede causar ceguera. En nuestra clínica, proporcionamos tratamientos láser y otros métodos para controlar esta condición y preservar su visión.',
			'href' => '/especialidades/oftalmologia/retinopatia-diabetica'
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