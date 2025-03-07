<?php
$procedimientos = [
	["nombre" => "Cauterización", "contenido" => "La cauterización ginecológica es un procedimiento médico que se realiza para eliminar lesiones en el cuello uterino o verrugas genitales."],
	["nombre" => "Cauterización con nitrato", "contenido" => "Aplicación de nitrato de plata para tratar lesiones en el cuello uterino o vagina, favoreciendo la regeneración del tejido."],
	["nombre" => "Ecografía transvaginal", "contenido" => "Ultrasonido realizado a través de la vagina para obtener imágenes detalladas del útero, ovarios y otras estructuras pélvicas."],
	["nombre" => "Colocación de DIU", "contenido" => "Inserción de un dispositivo intrauterino de cobre u hormonal como método anticonceptivo de larga duración."],
	["nombre" => "Otoscopia magnificada", "contenido" => "Examen detallado del oído con un otoscopio de aumento para evaluar el canal auditivo y el tímpano."],
	["nombre" => "Audiometría tonal", "contenido" => "Prueba que mide la capacidad auditiva detectando distintos tonos y frecuencias."],
	["nombre" => "Cauterización de faringe", "contenido" => "Aplicación de calor o sustancias químicas en la faringe para tratar infecciones crónicas o reducir inflamación."],
	["nombre" => "Curación de oído", "contenido" => "Limpieza y tratamiento de infecciones o lesiones en el canal auditivo."],
	["nombre" => "Cauterización nasal", "contenido" => "Procedimiento para detener hemorragias nasales recurrentes mediante calor o agentes químicos."],
	["nombre" => "Extracción de biopsia", "contenido" => "Obtención de una muestra de tejido de la garganta, nariz u oído para análisis patológico."],
	["nombre" => "Extracción de cuerpo extraño", "contenido" => "Retiro de objetos atascados en el oído, nariz o garganta."],
	["nombre" => "Fijación de fractura nasal", "contenido" => "Procedimiento para estabilizar y corregir fracturas en los huesos de la nariz."],
	["nombre" => "Laringoscopia directa", "contenido" => "Examen con un laringoscopio insertado en la garganta para observar las cuerdas vocales y la laringe."],
	["nombre" => "Laringoscopia indirecta", "contenido" => "Inspección de la laringe con un espejo o fibra óptica sin necesidad de introducir un laringoscopio rígido."],
	["nombre" => "Lavado de oído unilateral", "contenido" => "Limpieza de un solo oído para eliminar cerumen o residuos."],
	["nombre" => "Lavado de oído bilateral", "contenido" => "Limpieza de ambos oídos para mejorar la audición y prevenir infecciones."],
	["nombre" => "Pruebas vestibulares", "contenido" => "Evaluación del equilibrio y función del sistema vestibular para detectar vértigo o trastornos del equilibrio."],
	["nombre" => "Reducción de fractura hueso nasal", "contenido" => "Reposición manual o quirúrgica de los huesos nasales fracturados."],
	["nombre" => "Taponamiento nasal", "contenido" => "Colocación de material en la nariz para detener sangrados intensos o tratar fracturas."],
	["nombre" => "Timpanometría", "contenido" => "Prueba que mide la movilidad del tímpano y la función del oído medio."],
	["nombre" => "Nasofibroscopía", "contenido" => "Exploración de la nariz, garganta y laringe con un endoscopio flexible."],
	["nombre" => "Potenciales evocados auditivos", "contenido" => "Prueba que evalúa la respuesta del cerebro a estímulos sonoros para detectar problemas auditivos."],
	["nombre" => "Logoaudiometría", "contenido" => "Examen para evaluar la capacidad de comprensión del lenguaje hablado."],
	["nombre" => "Impedanciometría", "contenido" => "Prueba que mide la resistencia del oído medio para diagnosticar problemas auditivos o de la trompa de Eustaquio."]
];

// Convertir a JSON (opcional)
$json_procedimientos = json_encode($procedimientos, JSON_PRETTY_PRINT);
?>


<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1; ?></h1>
			</div>
			<div class="mb-0">
				<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i>
					Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades"><i
						class="fa fa-arrow-left small me-1"></i> Especialidades</a>
			</div>
		</div>
	</div>
</section>
<img src="<?php echo $page_image; ?>" class="img-fluid mt-n5 d-block d-md-none" alt="<?php echo $h1; ?>">



<section class="fondo-azul content-space-1 d-none d-md-block"
	style="background: linear-gradient(90deg, rgba(4,147,167,1) 29%, rgba(41,83,160,1) 68%) !important; max-height: 65vh !important; position: relative;">

	<div class="container pt-3 mb-n5 h-100 position-relative d-flex">
		<div class="row h-100 w-100">

			<div class="col-md-7 d-flex justify-content-center align-items-center">
				<div class="bg-img-center card-img text-center"
					style="position: relative; left: 50%; transform: translateX(5%);">
					<img class="img-fluid rounded-3"
						style="max-width: 150%; height: auto;max-height: 45vh !important;object-fit: fill;"
						src="/images/Especialidades/Otorrino.png">
				</div>
			</div>

			<div class="col-md-5 d-flex align-items-center ps-5"
				style="position: relative; left: 60%; transform: translateX(-250%);">
				<div class="fondo-celeste-bajo rounded-3 zi-1 p-4 shadow-lg d-flex flex-column justify-content-center align-items-start"
					style="width: auto; height: auto; max-width: 320px;">

					<div class="mb-0">
						<h1 class="h4 color-azul"><?php echo $h1; ?></h1>
					</div>
					<div class="mt-2">
						<a class="link color-azul color-naranja-hover" href="/">
							<i class="fa fa-arrow-left small me-1"></i> Inicio
						</a>
						<a class="link color-azul color-naranja-hover ms-3" href="/especialidades"><i
								class="fa fa-arrow-left small me-1"></i> Especialidades</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-lg-1">

				<div class="container py-4">
					<?php
					// Variable para saber si encontramos la especialidad con paquetes
					$especialidadConPaquetes = false;

					foreach ($especialidades as $item):
						// Verifica si la especialidad coincide y tiene paquetes
						if (strtoupper($item['especialidad']) === strtoupper($h1) && !empty($item['paquetes'])):
							$especialidadConPaquetes = true;
							?>

							<div class="mb-4">
								<p class="color-azul h5 mb-3">Paquetes disponibles</p>
								<div class="row">
									<?php foreach ($item['paquetes'] as $paquete): ?>
										<div class="col-md-4 mb-3">
											<div class="card h-100"
												style="border: 2px solid #00b59c; border-radius: 15px; overflow: hidden;">
												<div class="paquete-header">
													<h5 class="mb-0" style="color: #fff;">
														<?php echo $paquete['nombre']; ?>
													</h5>
												</div>
												<div class="p-3">
													<ul class="list-unstyled text-center servicio-lista"
														style="margin-bottom: 1rem;">
														<?php foreach ($paquete['servicios'] as $index => $servicio): ?>
															<li class="servicio-item">
																<?php echo $servicio; ?>
															</li>
															<?php if ($index < count($paquete['servicios']) - 1): ?>
																<li class="servicio-mas">+</li>
															<?php endif; ?>
														<?php endforeach; ?>
													</ul>
													<h5 class="text-center precio-total">
														S/ <?php echo number_format($paquete['precio'], 2); ?>
													</h5>
													<div class="text-center mt-3">
														<a href="https://api.whatsapp.com/send?phone=51921883459&text=Deseo%20m%C3%A1s%20informaci%C3%B3n"
															class="btn btn-reservar">
															Reservar
														</a>
													</div>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>

							<?php
						endif;
					endforeach;
					?>

				</div>

				<p>La Medicina Interna es la especialidad médica que se enfoca en el diagnóstico, tratamiento y
					prevención de enfermedades en adultos, particularmente aquellas que afectan a los órganos internos.
				</p>
				<p>Los internistas manejan condiciones complejas y crónicas que involucran varios sistemas del cuerpo,
					como enfermedades cardiovasculares, respiratorias y metabólicas.</p>
				<p>Su enfoque es integral, tratando al paciente en su totalidad y trabajando en la prevención, control
					de enfermedades crónicas y coordinación con otros especialistas cuando es necesario.</p>


					<div style="margin:20px 0px !important">
                    <p class="color-azul h5">Procedimientos de <b><?php echo strtoupper($h1); ?></b></p>
                    <div class="container">
                        <div class="row">

                            <?php foreach ($procedimientos as $procedimiento): ?>
                                <div class="col-md-6">

                                    <div class="accordion"
                                        id="accordion<?= str_replace(' ', '', $procedimiento['nombre']) ?>">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed"
                                                    style="padding: 15px 32px !important" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse<?= str_replace(' ', '', $procedimiento['nombre']) ?>"
                                                    aria-expanded="false"
                                                    aria-controls="collapse<?= str_replace(' ', '', $procedimiento['nombre']) ?>">
                                                    <i class="bi-house list-group-icon"></i> <?= $procedimiento["nombre"] ?>
                                                </button>
                                            </h2>
                                            <div id="collapse<?= str_replace(' ', '', $procedimiento['nombre']) ?>"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#accordion<?= str_replace(' ', '', $procedimiento['nombre']) ?>">
                                                <div class="accordion-body" style="padding-top:5px !important">
                                                    <p class="list-group-item list-group-item-action link-pointer color-azul color-naranja-hover"
                                                        href="">
                                                        <?= $procedimiento['contenido'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>



			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php'); ?>