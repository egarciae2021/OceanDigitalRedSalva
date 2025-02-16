<?php

$procedimientos = [
    [
        "nombre" => "Extracción de lunares o verrugas",
        "contenido" => "En construcción"
    ],
    [
        "nombre" => "Biopsias de piel",
        "contenido" => "En construcción"
    ],
    [
        "nombre" => "Cirugía de Mohs",
        "contenido" => "En construcción"
    ],
    [
        "nombre" => "Fototerapia",
        "contenido" => "En construcción"
    ],
    [
        "nombre" => "Peeling Químico",
        "contenido" => "En construcción"
    ],
    [
        "nombre" => "Cirugía láser",
        "contenido" => "En construcción"
    ],
    [
        "nombre" => "Depilación láser",
        "contenido" => "En construcción"
    ],
    [
        "nombre" => "Crioterapia",
        "contenido" => "En construcción"
    ],
    [
        "nombre" => "Infiltraciones",
        "contenido" => "En construcción"
    ],
    [
        "nombre" => "Eliminación de tatuajes",
        "contenido" => "En construcción"
    ],
    [
        "nombre" => "Dermoabrasión",
        "contenido" => "En construcción"
    ],
    [
        "nombre" => "Onicectomía",
        "contenido" => "En construcción"
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
                    style="position: relative; left: 50%; transform: translateX(-25%);">
                    <img class="img-fluid rounded-3"
                        style="max-width: 150%; height: auto;max-height: 45vh !important;object-fit: fill;"
                        src="/images/Especialidades/Dermatología.png">
                </div>
            </div>

            <div class="col-md-5 d-flex align-items-center ps-5"
                style="position: relative; left: 60%; transform: translateX(-270%);">
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
                <p>La Dermatología es la especialidad médica que se dedica al diagnóstico, tratamiento y prevención de
                    enfermedades de la piel, cabello y uñas. Los dermatólogos tratan una amplia gama de afecciones, como
                    acné, eczema, psoriasis, infecciones cutáneas, dermatitis y cáncer de piel.</p>
                <p>Además, realizan procedimientos como biopsias, cirugía dermatológica y tratamientos para
                    rejuvenecimiento cutáneo.</p>
                <p>La dermatología no solo aborda enfermedades visibles, sino también afecciones relacionadas con la
                    salud general, ya que la piel es un reflejo importante del bienestar interno.</p>

                <!-- PROCEDIMIENTOS -->
                <div style="margin:20px 0px !important">
                    <p class="color-azul h5">LE BRINDRAMOS LOS SIGUIENTES <b>PROCEDIMIENTOS DE
                            <?php echo strtoupper($h1); ?>
                        </b></p>
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
                                                    <?= $procedimiento["nombre"] ?>
                                                </button>
                                            </h2>
                                            <div id="collapse<?= str_replace(' ', '', $procedimiento['nombre']) ?>"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#accordion<?= str_replace(' ', '', $procedimiento['nombre']) ?>">
                                                <div class="accordion-body" style="padding-top:5px !important">
                                                    <?= $procedimiento["contenido"] ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
                <!-- FIN DE PROCEDIMIENTOS -->

                <?php require_once('links-dermatologia.php'); ?>
            </div>
        </div>
    </div>
</section>
<?php require_once('formulario.php'); ?>