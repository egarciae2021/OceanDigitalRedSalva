<?php
$procedimientos = [
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
    style="background: linear-gradient(90deg, rgba(4,147,167,1) 29%, rgba(41,83,160,1) 68%) !important; max-height: 65vh !important; position: relative;margin-top:70px">

    <div class="container pt-3 mb-n5 h-100 position-relative d-flex">
        <div class="row h-100 w-100">

            <div class="col-md-7 d-flex justify-content-center align-items-center">
                <div class="bg-img-center card-img text-center"
                    style="position: relative; left: 50%; transform: translateX(-25%);">
                    <img class="img-fluid rounded-3"
                        style="max-width: 150%; height: auto;max-height: 45vh !important;object-fit: fill;"
                        src="/images/Especialidades/Nutrición.png">
                </div>
            </div>

            <div class="col-md-5 d-flex align-items-center ps-5"
                style="position: relative; left: 60%; transform: translateX(-290%);">
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
                <p>La nutrición es una pieza clave en la prevención y tratamiento de múltiples enfermedades. Nuestro
                    equipo de especialistas trabaja contigo para desarrollar un plan de alimentación adaptado a tus
                    necesidades individuales, mejorando tu calidad de vida y promoviendo hábitos saludables.</p>

                <p>¿Por qué es importante la nutrición? Una alimentación balanceada no solo ayuda a mantener un peso
                    saludable, sino que también es fundamental para prevenir enfermedades crónicas como diabetes,
                    hipertensión y problemas cardiovasculares. Además, influye en la salud digestiva, el sistema
                    inmunológico y el bienestar emocional.</p>

                <ul>
                    <li>Nuestros servicios incluyen:</li>
                    <li>Evaluación nutricional personalizada: Analizamos tu estado de salud, hábitos alimenticios y
                        objetivos.</li>
                    <li>Planes de alimentación especializados: Diseñamos dietas para el control de peso, enfermedades
                        crónicas, alergias e intolerancias alimentarias.</li>
                    <li>Asesoría en nutrición clínica: Apoyo para pacientes con condiciones médicas específicas como
                        diabetes, hipertensión o enfermedades gastrointestinales.</li>
                </ul>

                <p>En Red Salva al Paciente, creemos que una buena alimentación es la base para una vida plena y
                    saludable. Agenda tu consulta y comienza tu camino hacia el bienestar.</p>



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
                                <!-- Título general (puedes ajustarlo o quitarlo) -->
                                <h4 class="text-primary mb-3">Paquetes disponibles</h4>

                                <div class="row">
                                    <?php foreach ($item['paquetes'] as $paquete): ?>
                                        <div class="col-md-4 mb-3">
                                            <!-- Tarjeta con esquinas redondeadas -->
                                            <div class="card h-100"
                                                style="border: 2px solid #00b59c; border-radius: 15px; overflow: hidden;">

                                                <!-- Encabezado de la tarjeta con el gradiente -->
                                                <div style="
                  background: linear-gradient(90deg, rgba(4,147,167,1) 29%, rgba(41,83,160,1) 68%) !important; 
                  max-height: 65vh !important; 
                  position: relative; 
                  padding: 10px; 
                  text-align: center;">
                                                    <h5 class="mb-0" style="color: #fff;">
                                                        <?php echo $paquete['nombre']; ?>
                                                    </h5>
                                                </div>

                                                <!-- Contenido principal -->
                                                <div class="p-3">
                                                    <!-- Lista de servicios (con viñetas) -->
                                                    <ul style="list-style-type: disc; padding-left: 20px; margin-bottom: 1rem;">
                                                        <?php foreach ($paquete['servicios'] as $servicio): ?>
                                                            <li><?php echo $servicio; ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>

                                                    <!-- Precio en grande, centrado, color principal -->
                                                    <h5 class="text-center" style="color: #00b59c; font-weight: 600;">
                                                        S/ <?php echo number_format($paquete['precio'], 2); ?>
                                                    </h5>

                                                    <!-- Botón Reservar con degradado -->
                                                    <div class="text-center mt-3">
                                                        <a href="https://api.whatsapp.com/send?phone=51921883459&text=Deseo%20m%C3%A1s%20informaci%C3%B3n"
                                                            class="btn"
                                                            style="background: linear-gradient(to right, #00b59c, #009fff); color: #fff; border: none; border-radius: 20px; padding: 8px 20px;">
                                                            Reservar
                                                        </a>

                                                    </div>
                                                </div> <!-- fin .p-3 -->
                                            </div> <!-- fin .card -->
                                        </div> <!-- fin .col-md-4 -->
                                    <?php endforeach; ?>
                                </div> <!-- fin .row -->
                            </div> <!-- fin .mb-4 -->

                            <?php
                        endif;
                    endforeach;
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once('formulario.php'); ?>