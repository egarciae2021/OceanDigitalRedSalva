<?php require_once('variables.php'); ?>


<header id="header"
  class="navbar navbar-expand-lg navbar-end navbar-shadow navbar-light bg-white navbar-absolute-top navbar-show-hide"
  data-hs-header-options='{
  "fixMoment": 0,
  "fixEffect": "slide"
}' style="height:10% !important;">
  <div class="" style="width:100% !important">
    <nav class="js-mega-menu navbar-nav-wrap" style="margin-left:15% !important">
      <a class="navbar-brand" href="/" aria-label="Red Salva"
        style="margin-top:-10px !important;margin-right:5% !important">
        <img class="navbar-brand-logo" src="/images/logo2.png" alt="Red Salva" style="margin-top:-20px !important">
      </a>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-default">
          <i class="fa fa-bars"></i>
        </span>
        <span class="navbar-toggler-toggled">
          <i class="fa fa-close"></i>
        </span>
      </button> -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="navbar-absolute-top-scroller">
          <ul class="navbar-nav nav-pills w-100 justify-content-center gap-6">
            <?php
            foreach ($menuItems as $label => $link) {
              if (is_array($link)) {
                echo '<li class="hs-has-mega-menu nav-item" data-hs-mega-menu-item-options=\'{"desktop": {"maxWidth": "40rem"}}\'>';
                echo '<a class="hs-mega-menu-invoker nav-link dropdown-toggle" href="javascript:void(0);" role="button" aria-expanded="false" >' . $label . ' <i class="fa fa-angle-down ps-0"></i></a>';
                echo '<div class="hs-mega-menu dropdown-menu w-100"  aria-labelledby="' . str_replace(' ', '', $label) . 'MegaMenu" style="min-width: 120%">';
                echo '<div class="row" >';
                foreach ($link as $subLabel => $subLink) {
                  if ($subLabel !== '__enlace__') {
                    echo '<div class="col-md-3 py-1">';
                    echo '<a class="dropdown-item"  style="font-size:140% !important" href="' . $subLink . '">';
                    echo $subLabel;
                    echo '</a>';
                    echo '</div>';
                  }
                }
                echo '</div>';
                echo '</div>';
                echo '</li>';
              } else {
                echo '<li class="nav-item"><a class="nav-link" href="' . $link . '">' . $label . '</a></li>';
              }
            }
            ?>
            <li class="nav-item">
              <!-- <a target="_blank" class="btn btn-naranja d-none d-lg-inline-block rounded-pill" href="https://api.whatsapp.com/send?phone=51921883459&text=Deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20servicios."><span>Reservar cita</span></a> -->
            <li class="nav-item">
              <a target="_blank"
                href="https://api.whatsapp.com/send?phone=51921883459&text=Deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20servicios."
                class="">
                <!-- <img src="/images/boton_reserva.png" alt="WhatsApp Icon"
                  style="width:150px !important;heigth:250px !important"> -->
                <span class="btn btn-naranja d-none d-lg-inline-block rounded-pill"
                  style=" font-size: 23px !important;">Reservar cita</span>
              </a>
            </li>

            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
<style>
  .navbar-nav .nav-link {
    font-size: 25px !important;
  }


  .navbar-brand-logo {
    max-width: 350px !important;
    max-height: 200px !important;
  }


  .hs-mega-menu {
    position: absolute;
    right: 10%;
    /* Esto alineará el div flotante a la derecha */
    top: 70%;
    /* Asegúrate de que esté justo debajo del elemento que activa el dropdown */
    /* min-width: 1007%; */
    /* Puedes ajustar esto según el tamaño que quieras */
    display: none;
    /* Inicialmente, el menú está oculto */
    z-index: 1000;
    /* Asegúrate de que esté por encima de otros elementos */
    transition: opacity 0.3s ease-in-out;
  }

  .hs-has-mega-menu:hover .hs-mega-menu {
    display: block;
    /* Muestra el menú cuando el usuario pasa el mouse o hace clic */
  }
</style>

<main id="content" role="main">