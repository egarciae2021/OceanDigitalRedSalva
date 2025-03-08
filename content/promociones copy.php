<?php 
$especialidades = json_decode($jsonData, true);
if ($especialidades === null) {
    die("Error al decodificar JSON: " . json_last_error_msg());
}

$especialidades = array_filter($especialidades, function($item) {
    $nombre = strtolower($item['especialidad']);
    return in_array($nombre, ['ginecologia', 'endocrinología', 'pediatría']);
});

$especialidades = array_values($especialidades);

$jsonEspecialidades = json_encode($especialidades, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>
 
<script>
    console.log(<?php echo $jsonEspecialidades; ?>);
</script>

<div class="container py-4" style="margin-top: 200px !important;">

    <p style="font-size: 26px !important;" class="mb-5">Tu bienestar es nuestra prioridad. Aquí encontrarás paquetes
        diseñados para cuidar tu salud de manera integral,
        con evaluaciones preventivas y controles médicos adaptados a tus necesidades. Explora nuestras opciones y da el
        primer paso hacia una vida más saludable.

        ¡Tu salud en buenas manos!</p>

    <?php foreach ($especialidades as $item): ?>
        <?php if (!empty($item['paquetes'])): ?>
            <div class="mb-4">
                <?php
                $numPaquetes = count($item['paquetes']);
                if ($numPaquetes > 3):
                    $chunks = array_chunk($item['paquetes'], 3);
                    $carouselId = 'carousel_' . preg_replace('/\s+/', '_', strtolower($item['especialidad']));
                    $interval = 3000;
                    ?>
                    <div id="<?php echo $carouselId; ?>" class="carousel slide" data-bs-ride="carousel"
                        data-bs-interval="<?php echo $interval; ?>">
                        <div class="carousel-inner">
                            <?php foreach ($chunks as $index => $chunk): ?>
                                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                    <div class="row card-group">
                                        <?php foreach ($chunk as $paquete): ?>
                                            <div class="col-md-4 mb-3">
                                                <div class="card same-height-card" 
                                                    style="border: 2px solid #00b59c; border-radius: 15px; overflow: hidden;height :500px !important">
                                                    <div class="paquete-header"
                                                        style="background-color: #00b59c; text-align: center; color: white; padding: 10px;">
                                                        <h5 class="mb-0" style="color:white !important; padding: 10px !important;">
                                                            <?php echo $item['especialidad']; ?>
                                                        </h5>
                                                    </div>
                                                    <div class="p-3">
                                                        <?php if (!empty($paquete['imagen'])): ?>
                                                            <img src="<?php echo $paquete['imagen']; ?>" class="img-fluid"
                                                                alt="<?php echo $paquete['nombre']; ?>">
                                                        <?php endif; ?>
                                                        <h4 class="text-center my-3"><b><?php echo $paquete['nombre']; ?></b> </h4>
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
                                                        <div class="text-center mb-3">
                                                            <a href="https://api.whatsapp.com/send?phone=51921883459&text=Deseo%20más%20información"
                                                                class="btn btn-reservar">Reservar</a>
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $carouselId; ?>"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $carouselId; ?>"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>
                <?php else: ?>
                    <div class="row card-group">
                        <?php foreach ($item['paquetes'] as $paquete): ?>
                            <div class="col-md-4 mb-3">
                                <div class="card same-height-card"
                                    style="position: relative; border: 2px solid #00b59c; border-radius: 15px; overflow: hidden;">
                                    <div class="paquete-header"
                                        style="background-color: #00b59c; text-align: center; color: white; padding: 10px;">
                                        <h5 class="mb-0" style="color:white !important; padding: 10px !important;">
                                            <?php echo $item['especialidad']; ?>
                                        </h5>
                                    </div>
                                    <div class="p-0">
                                        <?php if (!empty($paquete['imagen'])): ?>
                                            <img src="<?php echo $paquete['imagen']; ?>" class="img-fluid"
                                                alt="<?php echo $paquete['nombre']; ?>">
                                        <?php endif; ?>
                                        <h4 class="text-center my-3"><b><?php echo $paquete['nombre']; ?></b> </h4>
                                        <ul class="list-unstyled text-center servicio-lista" style="margin-bottom: 1rem;">
                                            <?php foreach ($paquete['servicios'] as $i => $servicio): ?>
                                                <li class="servicio-item"><?php echo $servicio; ?></li>
                                                <?php if ($i < count($paquete['servicios']) - 1): ?>
                                                    <li class="servicio-mas">+</li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                        <h5 class="text-center precio-total"
                                            style="position: absolute; bottom: 70px; left: 50%; transform: translateX(-50%);">S/
                                            <?php echo number_format($paquete['precio'], 2); ?>
                                        </h5>
                                        <div class="text-center mb-3"
                                            style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                                            <a href="https://api.whatsapp.com/send?phone=51921883459&text=Deseo%20más%20información"
                                                class="btn btn-reservar">Reservar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>



<style>
    .card {
        display: flex;
        flex-direction: column;
    }

    .card .p-3 {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 0;
        /* Elimina el padding del .p-3 */
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

    .card .p-3 img {
        margin-bottom: 0;
    }

    html {
        overflow-anchor: none !important;
    }
</style>



<script>
    function setEqualHeight(groupSelector, cardSelector) {
        const currentScroll = window.scrollY;

        const groups = document.querySelectorAll(groupSelector);
        groups.forEach(group => {
            const cards = group.querySelectorAll(cardSelector);
            let maxHeight = 0;
            cards.forEach(card => {
                card.style.height = 'auto';
                maxHeight = Math.max(maxHeight, card.offsetHeight);
            });
            cards.forEach(card => {
                card.style.height = (maxHeight + 140) + 'px';
            });
        });

        window.scrollTo(0, currentScroll);
    }


    document.addEventListener('DOMContentLoaded', function () {
        setEqualHeight('.card-group', '.same-height-card');

        document.querySelectorAll('.carousel').forEach(carousel => {
            carousel.addEventListener('slide.bs.carousel', function () {
                setEqualHeight('.card-group', '.same-height-card');
            });
        });
    });

    window.addEventListener('resize', function () {
        setEqualHeight('.card-group', '.same-height-card');
    });
</script>