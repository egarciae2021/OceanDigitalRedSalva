<!-- <?php
$jsonData2 = '[
  {
    "especialidad": "Ginecologia",
    "imagen": "images/paquetes/gineco_paquete_integral.png",
    "nombre": "Paquete Integral",
    "precio": 180,
    "servicios": [
      "CONSULTA GINECOLÓGICA",
      "ECOGRAFÍA TRANSVAGINAL",
      "ECOGRAFÍA DE MAMA",
      "PAPANICOLAOU",
      "COLPOSCOPIA",
      "CONSULTA DE RE EVALUACIÓN"
    ]
  },
  {
    "especialidad": "Ginecologia",
    "imagen": "images/paquetes/gineco_paquete_basico.png",
    "nombre": "Paquete Básico",
    "precio": 120,
    "servicios": [
      "CONSULTA GINECOLÓGICA",
      "ECOGRAFÍA DE MAMA",
      "PAPANICOLAOU",
      "COLPOSCOPIA O ECOGRAFÍA TRANSVAGINAL",
      "CONSULTA DE RE EVALUACIÓN"
    ]
  },
  {
    "especialidad": "Ginecologia",
    "imagen": "images/paquetes/gineco_paquete_preventivo.png",
    "nombre": "Paquete Preventivo",
    "precio": 90,
    "servicios": [
      "CONSULTA GINECOLÓGICA",
      "PAPANICOLAOU",
      "ECOGRAFÍA TRANSVAGINAL"
    ]
  },
  {
    "especialidad": "Pediatría",
    "imagen": "images/paquetes/pediatria_nino_sano.png",
    "nombre": "Paquete  Niño Sano",
    "precio": 90,
    "servicios": [
      "HEMOGRAMA",
      "GRUPO SANGUINEO Y FACTOR",
      "PARASITOLOGICO",
      "TEST DE GRAHAM",
      "EXAMEN DE ORINA COMPLETA",
      "CONSULTA MÉDICA"
    ]
  },
  {
    "especialidad": "Endocrinología",
    "imagen": "images/paquetes/endocrino_paquete_basico.png",
    "nombre": "Paquete Básico",
    "precio": 100,
    "servicios": [
      "ECOGRAFIA ABDOMINAL",
      "CONSULTA MÉDICA"
    ]
  },
  {
    "especialidad": "Endocrinología",
    "imagen": "images/paquetes/endocrino_paquete_completo.png",
    "nombre": "Paquete Completo",
    "precio": 120,
    "servicios": [
      "ECOGRAFIA ABDOMINAL",
      "TRIGLICERIDOS",
      "COLESTEROL",
      "HDL",
      "VLDL",
      "GLUCOSA",
      "CONSULTA MÉDICA"
    ]
  }
]';

$paquetes = json_decode($jsonData2, true);
if ($paquetes === null) {
    die("Error al decodificar JSON: " . json_last_error_msg());
}
?>
<script>
    console.log(<?php echo json_encode($paquetes, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE); ?>);
</script>

<div class="container py-4" style="margin-top: 200px !important;">
    <p style="font-size: 26px !important;" class="mb-5">
        Tu bienestar es nuestra prioridad. Aquí encontrarás paquetes diseñados para cuidar tu salud de manera integral,
        con evaluaciones preventivas y controles médicos adaptados a tus necesidades. Explora nuestras opciones y da el
        primer paso hacia una vida más saludable. ¡Tu salud en buenas manos!
    </p>
 

    <div id="paquetesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
        <div class="carousel-inner">
            <?php foreach ($paquetes as $index => $paquete): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card same-height-card"
                                style="border: 2px solid #00b59c; border-radius: 15px; overflow: hidden; ">
                                <div class="paquete-header"
                                    style="background-color: #00b59c; text-align: center; color: white; padding: 10px;">
                                    <h5 class="mb-0"
                                        style="padding: 10px !important; font-size: 26px !important; color: white !important;">
                                        <?php echo $paquete['especialidad']; ?>
                                    </h5>
                                </div>
                                <div class="p-0">
                                    <?php if (!empty($paquete['imagen'])): ?>
                                        <img src="<?php echo $paquete['imagen']; ?>" class="img-fluid"
                                            alt="<?php echo $paquete['nombre']; ?>">
                                    <?php endif; ?>
                                    <h4 class="text-center my-3"><b><?php echo $paquete['nombre']; ?></b></h4>
                                    <ul class="list-unstyled text-center servicio-lista" style="margin-bottom: 1rem;">
                                        <?php foreach ($paquete['servicios'] as $i => $servicio): ?>
                                            <li class="servicio-item"><?php echo $servicio; ?></li>
                                            <?php if ($i < count($paquete['servicios']) - 1): ?>
                                                <li class="servicio-mas">+</li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                    <h5 class="text-center precio-total">S/
                                        <?php echo number_format($paquete['precio'], 2); ?>
                                    </h5>

                                    <div style="text-align: center; margin: 25px;">
                                        <a href="https://api.whatsapp.com/send?phone=51921883459&text=Deseo%20más%20información"
                                            class="btn btn-reservar">Reservar</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

 
        <button class="carousel-control-prev" type="button" data-bs-target="#paquetesCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#paquetesCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    <a class="btn btn-primary mt-3 w-100 paquete-header" style="font-size:36px !important;cursor: pointer !important" href="/especialidades">Ver
        Todos los Paquetes</a>
</div>

<style>
    .carousel-control-prev,
    .carousel-control-next {
        width: 5%; 
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5); 
        border-radius: 50%; 
        padding: 10px; 
    }

    .btn-reservar {
        display: inline-block;
    }

    .carousel-inner {
        height: 1100px !important;
    }

    .paquetesCarousel {
        height: 1100px !important;
    }

    .same-height-card {
        display: flex;
        flex-direction: column;
        position: relative;
        height: 1100px !important;
    }

    .paquete-header {
        background-color: #00b59c;
        text-align: center;
        color: white !important;
        padding: 10px;
    }

    .card img {
        width: 100%;
        height: auto;
        display: block;
        margin: 0;
        object-fit: cover;
    }

    html,
    body {
        overflow-anchor: none !important;
    }
</style>

<script>
    function setEqualHeight(selector) {
        var elements = document.querySelectorAll(selector);
        var maxHeight = 0; 
        elements.forEach(function (el) {
            el.style.height = 'auto';
            if (el.offsetHeight > maxHeight) {
                maxHeight = el.offsetHeight;
            }
        });  
        elements.forEach(function (el) {
            el.style.height = maxHeight + 'px';
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        setEqualHeight('.same-height-card');
    });

    window.addEventListener('resize', function () {
        setEqualHeight('.same-height-card');
    });
</script>  
 
 -->
<div class="container py-4" style="margin-top: 200px !important;">
    <p style="font-size: 26px !important;" class="mb-5">
        Tu bienestar es nuestra prioridad. Aquí encontrarás paquetes diseñados para cuidar tu salud de manera integral,
        con evaluaciones preventivas y controles médicos adaptados a tus necesidades. Explora nuestras opciones y da el
        primer paso hacia una vida más saludable. ¡Tu salud en buenas manos!
    </p>

    <div id="paquetesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"
        >
        <div class="carousel-inner">
            <?php
            $totalPaquetes = count($paquetes);
            for ($i = 0; $i < $totalPaquetes; $i++) {
                $active = ($i === 0) ? 'active' : '';
                echo '<div class="carousel-item ' . $active . '">';
                echo '<div class="row justify-content-center">';
                for ($j = 0; $j < 3; $j++) {
                    $index = ($i + $j) % $totalPaquetes;
                    $paquete = $paquetes[$index];
                    echo '<div class="col-md-4">';
                    echo '<div class="card same-height-card" style="border: 2px solid #00b59c; border-radius: 15px; overflow: hidden;">';
                    echo '<div class="paquete-header" style="background-color: #00b59c; text-align: center; color: white; padding: 10px;">';
                    echo '<h5 class="mb-0" style="padding: 10px !important; font-size: 26px !important; color: white !important;">' . $paquete['especialidad'] . '</h5>';
                    echo '</div>';
                    echo '<div class="p-0">';
                    if (!empty($paquete['imagen'])) {
                        echo '<img src="' . $paquete['imagen'] . '" class="img-fluid" alt="' . $paquete['nombre'] . '">';
                    }
                    echo '<h4 class="text-center my-3"><b>' . $paquete['nombre'] . '</b></h4>';
                    echo '<ul class="list-unstyled text-center servicio-lista" style="margin-bottom: 1rem;">';
                    foreach ($paquete['servicios'] as $servicio) {
                        echo '<li class="servicio-item">' . $servicio . '</li>';
                        if ($servicioIndex < count($paquete['servicios']) - 1) {
                            echo '<li class="servicio-mas">+</li>';
                        }
                    }
                    echo '</ul>';
                    echo '<h5 class="text-center precio-total">S/ ' . number_format($paquete['precio'], 2) . '</h5>';
                    echo '<div style="text-align: center; margin: 25px;">';
                    echo '<a href="https://api.whatsapp.com/send?phone=51921883459&text=Deseo%20más%20información" class="btn btn-reservar">Reservar</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#paquetesCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#paquetesCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    <a class="btn btn-primary mt-3 w-100 paquete-header" style="font-size:36px !important;cursor: pointer !important"
        href="/especialidades">Ver Todos los Paquetes</a>
</div>
<style>
    .carousel-control-prev,
    .carousel-control-next {
        width: 5%;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        padding: 10px;
    }

    .btn-reservar {
        display: inline-block;
    }

    .carousel-inner {
        height: 1000px !important;
    }

    .paquetesCarousel {
        height: 1000px !important;
    }

    .same-height-card {
        display: flex;
        flex-direction: column;
        position: relative;
        height: 1000px !important;
    }

    .paquete-header {
        background-color: #00b59c;
        text-align: center;
        color: white !important;
        padding: 10px;
    }

    .card img {
        width: 100%;
        height: auto;
        display: block;
        margin: 0;
        object-fit: cover;
    }

    html,
    body {
        overflow-anchor: none !important;
    }
</style>

<script>
    function setEqualHeight(selector) {
        var elements = document.querySelectorAll(selector);
        var maxHeight = 0;
        elements.forEach(function (el) {
            el.style.height = 'auto';
            if (el.offsetHeight > maxHeight) {
                maxHeight = el.offsetHeight;
            }
        });
        elements.forEach(function (el) {
            el.style.height = maxHeight + 'px';
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        setEqualHeight('.same-height-card');
    });

    window.addEventListener('resize', function () {
        setEqualHeight('.same-height-card');
    });
</script>