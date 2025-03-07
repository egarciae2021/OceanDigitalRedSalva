<?php
$procedimientos = [
    [
        "nombre" => "Cauterización",
        "contenido" => "La cauterización ginecológica es un procedimiento médico que se realiza para eliminar lesiones en el cuello uterino o verrugas genitales."
    ],
    [
        "nombre" => "Cauterización con nitrato",
        "contenido" => "Aplicación de nitrato de plata para tratar lesiones en el cuello uterino o vagina, favoreciendo la regeneración del tejido."
    ],
    [
        "nombre" => "Ecografía transvaginal",
        "contenido" => "Ultrasonido realizado a través de la vagina para obtener imágenes detalladas del útero, ovarios y otras estructuras pélvicas."
    ],
    [
        "nombre" => "Colocación de DIU",
        "contenido" => "Inserción de un dispositivo intrauterino de cobre u hormonal como método anticonceptivo de larga duración."
    ],
    [
        "nombre" => "Colposcopia",
        "contenido" => "Examen con un colposcopio (microscopio especializado) para observar el cuello uterino y detectar posibles lesiones o infecciones."
    ],
    [
        "nombre" => "Cono LEEP",
        "contenido" => "Procedimiento de escisión electroquirúrgica con asa para remover tejido anormal del cuello uterino en casos de displasia o lesiones precancerosas."
    ],
    [
        "nombre" => "Ameu",
        "contenido" => "Método utilizado para evacuar el contenido del útero en casos de aborto incompleto, sangrados anormales o estudios diagnósticos."
    ],
    [
        "nombre" => "Ecografía Doppler 4d",
        "contenido" => "Ultrasonido avanzado que permite visualizar imágenes en movimiento del feto en tiempo real y evaluar su circulación sanguínea."
    ],
    [
        "nombre" => "Ecografía Doppler ovárica",
        "contenido" => "Examen para estudiar el flujo sanguíneo en los ovarios y detectar alteraciones vasculares o problemas de fertilidad."
    ],
    [
        "nombre" => "Ecografía Doppler uterina",
        "contenido" => "Evaluación del flujo sanguíneo en el útero, útil en el control del embarazo y en estudios de infertilidad."
    ],
    [
        "nombre" => "Ecografía Doppler útero - ovario",
        "contenido" => "Análisis combinado del flujo sanguíneo en el útero y ovarios para evaluar su función y salud vascular."
    ],
    [
        "nombre" => "Ecografía de mama",
        "contenido" => "Estudio por ultrasonido del tejido mamario para detectar quistes, tumores u otras anomalías."
    ],
    [
        "nombre" => "Ecografía morforfológica Doppler",
        "contenido" => "Evaluación detallada del desarrollo fetal y de su sistema circulatorio, permitiendo detectar anomalías congénitas."
    ],
    [
        "nombre" => "Ecografía obstétrica Doppler",
        "contenido" => "Estudio de la circulación sanguínea en la placenta y el feto para monitorear su bienestar y desarrollo."
    ],
    [
        "nombre" => "Ecografía pélvica",
        "contenido" => "Ultrasonido realizado externamente sobre el abdomen para examinar órganos pélvicos como el útero, ovarios y vejiga."
    ],
    [
        "nombre" => "Ecografía perfil biofísico",
        "contenido" => "Evaluación del bienestar fetal mediante la observación de movimientos, respiración, tono muscular y cantidad de líquido amniótico."
    ],
    [
        "nombre" => "Ecografía transvaginal Doppler",
        "contenido" => "Examen que combina ultrasonido transvaginal con Doppler para evaluar la vascularización de los órganos reproductivos internos."
    ],
    [
        "nombre" => "Ecografía 4D gemelar",
        "contenido" => "Ultrasonido tridimensional en tiempo real para la evaluación de embarazos múltiples, permitiendo una observación detallada de los fetos."
    ],
    [
        "nombre" => "Ecografía genética",
        "contenido" => "Ultrasonido especializado para detectar posibles anomalías cromosómicas o estructurales en el feto."
    ],
    [
        "nombre" => "Ecografía obstétrica gemelar",
        "contenido" => "Seguimiento del desarrollo de gemelos en el embarazo, monitoreando su crecimiento y bienestar."
    ],
    [
        "nombre" => "Ecografía obstétrica",
        "contenido" => "Evaluación del desarrollo del bebé durante el embarazo, permitiendo observar su tamaño, movimientos y estado de salud."
    ],
    [
        "nombre" => "Electro cauterización cervical",
        "contenido" => "Uso de corriente eléctrica para eliminar lesiones en el cuello uterino y prevenir su progresión."
    ],
    [
        "nombre" => "Exeresis de pólipo cervical",
        "contenido" => "Extracción quirúrgica de pólipos benignos en el cuello uterino para evitar síntomas como sangrado anormal o molestias."
    ],
    [
        "nombre" => "Exeresis de tumoración vulvar",
        "contenido" => "Remoción quirúrgica de masas o tumores en la vulva, que pueden ser benignos o malignos."
    ],
    [
        "nombre" => "Exeresis de fibroadenoma de mama",
        "contenido" => "Cirugía para extraer un fibroadenoma, un tumor benigno frecuente en el tejido mamario."
    ],
    [
        "nombre" => "Histerosonografía",
        "contenido" => "Ultrasonido con la inyección de solución salina en el útero para evaluar su cavidad y detectar pólipos, miomas o adherencias."
    ],
    [
        "nombre" => "Marsupializacion de Bartolino",
        "contenido" => "Procedimiento quirúrgico para drenar quistes de la glándula de Bartolino y prevenir su recurrencia."
    ],
    [
        "nombre" => "Monitoreo ovulatorio",
        "contenido" => "Seguimiento ecográfico del crecimiento folicular y la ovulación, útil en tratamientos de fertilidad."
    ],
    [
        "nombre" => "Drenaje y curación de hematoma vulvar",
        "contenido" => "Procedimiento en el que se extrae sangre acumulada en la vulva debido a un traumatismo o complicación vascular, aliviando el dolor y reduciendo la inflamación."
    ]
];

// Convertir a JSON (opcional)
$json_procedimientos = json_encode($procedimientos);

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
                        src="/images/Especialidades/Ginecología.png">
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

                <p>La Ginecología es la especialidad médica que se ocupa de la salud del sistema reproductivo femenino,
                    incluyendo el diagnóstico, tratamiento y prevención de enfermedades en los órganos reproductivos,
                    como el útero, ovarios y vagina.</p>
                <p>Los ginecólogos realizan exámenes rutinarios, gestionan problemas como infecciones, trastornos
                    menstruales, y enfermedades como el cáncer ginecológico, además de brindar atención en temas de
                    fertilidad, anticoncepción y salud sexual.</p>


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



                <?php require_once('links-ginecologia.php'); ?>

            </div>
        </div>
    </div>
</section>
<?php require_once('formulario.php'); ?>