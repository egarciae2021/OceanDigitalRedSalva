<?php
$menuItems = array(
  // 'Especialidades' => array(
  // 	'__enlace__' => '/especialidades',
  // 	'Cardiología' => '/especialidades/cardiologia',
  // 	'Dermatología' => '/especialidades/dermatologia',
  // 	'Endocrinología' => '/especialidades/endocrinologia',
  // 	'Gastroenterología' => '/especialidades/gastroenterologia',
  // 	'Ginecología y obstetricia' => '/especialidades/ginecologia',
  // 	'Inmunizaciones pediatricas' => '/especialidades/Inmunizaciones-pediatricas',
  // 	'Medicina Física y Rehabiitación' => '/especialidades/medicina-fisica-rehabilitacion',
  // 	'Medicina General' => '/especialidades/medicina-general',
  // 	'Medicina Interna' => '/especialidades/medicina-interna',
  // 	'Neumología' => '/especialidades/neumologia',
  // 	'Neurología' => '/especialidades/neurologia',
  //   'Nutrición' => '/especialidades/nutricion',
  // 	'Oftalmología' => '/especialidades/oftalmologia',
  // 	'Oncologìa' => '/especialidades/oncologia',
  // 	'Otorrinolaringología' => '/especialidades/otorrinolaringologia',
  // 	'Pediatría' => '/especialidades/pediatria',
  // 	'Psicología' => '/especialidades/psicologia',
  // 	'Reumatología' => '/especialidades/reumatologia',
  // 	'Terapia del lenguaje' => '/especialidades/terapida-del-lenguaje',
  // 	'Traumatologìa' => '/especialidades/traumatologia',
  // 	'Urología' => '/especialidades/urologia', 
  // ),
  'Especialidades' => '/especialidades',
  'Staff médico' => '/staff-medico',
  'Servicios' => '/servicios_detalle',
  // 'Servicios' => array(
  // 	'__enlace__' => '/servicios',
  // 	'Consultas externa' => '/servicios/consultas-externas',
  // 	'Farmacia' => '/servicios/farmacia',
  // 	'Laboratorio clínico' => '/servicios/laboratorio-clinico',
  // 	'Centro de vacunación' => '/servicios/centro-de-vacunacion',
  // 	'Centro de Imágen' => '/servicios/imagenes',
  // 	'Tópico Red Salva' => '/servicios/topico',
  // 	'Laboratorio patológico' => '/servicios/laboratorio-patologico'
  // ),
  // 'Paquetes' => array(
  // 	'__enlace__' => '/servicios',
  // 	'Centro obstétrico' => '/servicios/centro-obstetrico',
  // 	'Centro quirúrgico' => '/servicios/centro-quirurgico',
  // 	'Consultas externa' => '/servicios/consultas-externas',
  // 	'Centro de vacunación' => '/servicios/centro-de-vacunacion',
  // 	'Emergencia' => '/servicios/emergencia',
  // 	'Farmacia' => '/servicios/farmacia',
  // 	'Hospitalización' => '/servicios/hospitalizacion',
  // 	'Imágenes' => '/servicios/imagenes',
  // 	'Laboratorio clínico' => '/servicios/laboratorio-clinico',
  // 	'Laboratorio patológico' => '/servicios/laboratorio-patologico',
  // 	'UCI neonatal' => '/servicios/uci-neonatal',
  // 	'Tamizaje neonatal' => '/servicios/tamizaje-neonatal',
  // 	'Visita guiada' => '/servicios/visita-guiada'
  // ),
  'Blog' => '/blogs'
);


$jsonData = '[
  {
    "especialidad": "Otorrinolaringología",
    "paquetes": [
      {
        "nombre": "Paquete 1",
        "precio": 70,
        "servicios": [
          "CONSULTA",
          "LAVADO DE OIDO"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 120,
        "servicios": [
          "CONSULTA",
          "AUDIOMETRÍA"
        ]
      },
      {
        "nombre": "Paquete 3",
        "precio": 121,
        "servicios": [
          "CONSULTA",
          "TIMPANOMETRÍA"
        ]
      },
      {
        "nombre": "Paquete 4",
        "precio": 120,
        "servicios": [
          "CONSULTA",
          "LARINGOSCOPÍA"
        ]
      },
      {
        "nombre": "Paquete 5",
        "precio": 150,
        "servicios": [
          "CONSULTA",
          "LEVANTAMIENTO DE OBSERVACIONES"
        ]
      }
    ]
  },
  {
    "especialidad": "Traumatología",
    "paquetes": [
      {
        "nombre": "Paquete 1",
        "precio": 70,
        "servicios": [
          "CONSULTA",
          "RAYOS X"
        ]
      }
    ]
  },
  {
    "especialidad": "Neurología",
    "paquetes": [
      {
        "nombre": "Paquete 1",
        "precio": 220,
        "servicios": [
          "CONSULTA",
          "ELECTROENCEFALOGRAMA CONVENCIONAL"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 260,
        "servicios": [
          "CONSULTA",
          "ELECTROENCEFALOGRAMA PROLONGADO"
        ]
      },
      {
        "nombre": "Paquete 3",
        "precio": 300,
        "servicios": [
          "CONSULTA",
          "ELECTROENCEFALOGRAMA DE 1 HORA"
        ]
      },
      {
        "nombre": "Paquete 4",
        "precio": 200,
        "servicios": [
          "CONSULTA",
          "ELECTROENCEFALOGRAMA DE 2 MIEMBROS"
        ]
      },
      {
        "nombre": "Paquete 5",
        "precio": 300,
        "servicios": [
          "CONSULTA",
          "ELECTROENCEFALOGRAMA DE 4 MIEMBROS"
        ]
      },
      {
        "nombre": "Paquete 6",
        "precio": 100,
        "servicios": [
          "2 CONSULTAS"
        ]
      }
    ]
  },
  {
    "especialidad": "Ginecologia",
    "paquetes": [
      {
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
        "nombre": "Paquete Preventivo",
        "precio": 90,
        "servicios": [
          "CONSULTA GINECOLÓGICA",
          "PAPANICOLAOU",
          "ECOGRAFÍA TRANSVAGINAL"
        ]
      }
    ]
  },
  {
    "especialidad": "Medicina General",
    "paquetes": [
      {
        "nombre": "Paquete Adulto Varón",
        "precio": 80,
        "servicios": [
          "HEMOGRAMA",
          "EXAMEN DE ORINA",
          "GLUCOSA",
          "TGO (transaminasa glutámico-oxalacética)",
          "PSA",
          "CONSULTA"
        ]
      },
      {
        "nombre": "Paquete Preventivo",
        "precio": 100,
        "servicios": [
          "HEMOGRAMA",
          "EXAMEN DE ORINA",
          "GLUCOSA",
          "TGO (transaminasa glutámico-oxalacética)",
          "RAYOS X DE TORAX",
          "CONSULTA"
        ]
      }
    ]
  },
  {
    "especialidad": "Urología",
    "paquetes": [
      {
        "nombre": "Paquete 1 Adulto Varón 40 años",
        "precio": 75,
        "servicios": [
          "CONSULTA",
          "EXAMEN DE ORINA",
          "CREATININA + PSA"
        ]
      },
      {
        "nombre": "Paquete 2 Adulto Varón 40 años",
        "precio": 75,
        "servicios": [
          "CONSULTA",
          "TESTOSTERONA TOTAL",
          "PSA LIBRE",
          "PSA TOTAL"
        ]
      },
      {
        "nombre": "Paquete Integral Adulto",
        "precio": 115,
        "servicios": [
          "CONSULTA",
          "PSA TOTAL",
          "ECOGRAFIA URINARIA"
        ]
      }
    ]
  },
  {
    "especialidad": "Oftalmología",
    "paquetes": [
      {
        "nombre": "Paquete Preventivo",
        "precio": 100,
        "servicios": [
          "CONSULTA",
          "MEDIDA DE VISTA",
          "FONDO DE OJO",
          "TONOMETRIA",
          "DESCARTE DE ENFERMEDADES"
        ]
      },
      {
        "nombre": "Paquete Oftalmológico",
        "precio": 70,
        "servicios": [
          "CONSULTA",
          "MEDIDA DE VISTA",
          "FONDO DE OJO"
        ]
      },
      {
        "nombre": "Paquete Escolar",
        "precio": 100,
        "servicios": [
          "CONSULTA",
          "MEDIDA DE VISTA",
          "REFRACCION CICLOPEJICA",
          "FONDO DE OJO",
          "DESCARTE DE ENFERMEDADES"
        ]
      }
    ]
  },
  {
    "especialidad": "Pediatría",
    "paquetes": [
      {
        "nombre": "Paquete  Niño Sano",
        "precio": 90,
        "servicios": [
          "HEMOGRAMA",
          "GRUPO SANGUINEO Y FACTOR",
          "PARASITOLOGICO",
          "TEST DE GRAHAM",
          "EXAMEN DE ORINA COMPLETA",
          "CONSULTA"
        ]
      }
    ]
  },
  {
    "especialidad": "gastroenterologia",
    "paquetes": [
      {
        "nombre": "Paquete 1",
        "precio": 0,
        "servicios": [
          "CONSULTA",
          "TEST DE ALIENTO"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 0,
        "servicios": [
          "CONSULTA",
          "ENDOSCOPIA"
        ]
      },
      {
        "nombre": "Paquete 3",
        "precio": 0,
        "servicios": [
          "CONSULTA",
          "COLONOCOPIA"
        ]
      },
      {
        "nombre": "Paquete 4",
        "precio": 0,
        "servicios": [
          "CONSULTA",
          "SIGMOIDOSCOPIA"
        ]
      },
      {
        "nombre": "Paquete 5",
        "precio": 110,
        "servicios": [
          "CONSULTA",
          "ECOGRAFIA ABDOMEN"
        ]
      }
    ]
  },
  {
    "especialidad": "Endocrinología",
    "paquetes": [
      {
        "nombre": "Paquete Básico",
        "precio": 100,
        "servicios": [
          "ECOGRAFIA ABDOMINAL",
          "CONSULTA"
        ]
      },
      {
        "nombre": "Paquete Completo",
        "precio": 120,
        "servicios": [
          "ECOGRAFIA ABDOMINAL",
          "TRIGLICERIDOS",
          "COLESTEROL",
          "HDL",
          "VLDL",
          "GLUCOSA",
          "CONSULTA"
        ]
      }
    ]
  },
  {
    "especialidad": "Reumatología",
    "paquetes": [
      {
        "nombre": "Paquete 1",
        "precio": 100,
        "servicios": [
          "CONSULTA",
          "DENSITOMETRIA"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 80,
        "servicios": [
          "CONSULTA",
          "ÁCIDO URICO",
          "HEMOGRAMA",
          "PCR",
          "VELOCIDAD DE ERITRO SEDIMENTACIÓN"
        ]
      }
    ]
  },
  {
    "especialidad": "Dermatología",
    "paquetes": [
      {
        "nombre": "Paquete 1",
        "precio": 100,
        "servicios": [
          "CONSULTA",
          "LIMPIEZA FACIAL"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 100,
        "servicios": [
          "CONSULTA",
          "PEELING QUIMICO"
        ]
      },
      {
        "nombre": "Paquete 3",
        "precio": 100,
        "servicios": [
          "CONSULTA",
          "CRIOTERAPIA"
        ]
      }
    ]
  },
  {
    "especialidad": "Medicina Fìsica",
    "paquetes": [
      {
        "nombre": "Paquete 1",
        "precio": 250,
        "servicios": [
          "CONSULTA",
          "TERAPIA FISICA X 6 SESIONES"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 420,
        "servicios": [
          "CONSULTA",
          "TERAPIA FISICA X 10 SESIONES"
        ]
      }
    ]
  },
  {
    "especialidad": "Psicología",
    "paquetes": [
      {
        "nombre": "Paquete Integral",
        "precio": 0,
        "servicios": [
          "EVALUACION PSICOLOGICA X4",
          "INFORME PSICOLOGICO"
        ]
      },
      {
        "nombre": "Paquete Pareja",
        "precio": 0,
        "servicios": [
          "4 CONSULTAS"
        ]
      },
      {
        "nombre": "Evaluación escolar",
        "precio": 0,
        "servicios": [
          "EVALUACION PSICOLOGICA X3",
          "SESION DE EXPLICACION DE RESULTADOS",
          "INFORME PSICOLOGICO"
        ]
      }
    ]
  },
  {
    "especialidad": "Neumología",
    "paquetes": [
      {
        "nombre": "Paquete 1",
        "precio": 100,
        "servicios": [
          "ESPIROMETRIA",
          "CONSULTA"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 120,
        "servicios": [
          "ESPIROMETRIA CON BRONCODILATADOR",
          "CONSULTA"
        ]
      },
      {
        "nombre": "Paquete 3",
        "precio": 180,
        "servicios": [
          "LEVANTAMIENTO DE OBSERVACIONES",
          "ESPIROMETRIA"
        ]
      },
      {
        "nombre": "Paquete 4",
        "precio": 90,
        "servicios": [
          "CONSULTA",
          "RAYOS X DE TORAX"
        ]
      }
    ]
  },
  {
    "especialidad": "Cardiología",
    "paquetes": [
      {
        "nombre": "Paquete 1",
        "precio": 150,
        "servicios": [
          "ESTUDIO DE HOLTER",
          "CONSULTA"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 80,
        "servicios": [
          "ELECTROCARDIOGRAMA",
          "CONSULTA"
        ]
      },
      {
        "nombre": "Paquete 3",
        "precio": 120,
        "servicios": [
          "ECOCARDIOGRAMA DOPPLER",
          "CONSULTA"
        ]
      },
      {
        "nombre": "Paquete 4",
        "precio": 90,
        "servicios": [
          "CONSULTA",
          "ELECTROCARDIOGRAMA",
          "COLESTEROL",
          "TRIGLICERIDOS"
        ]
      }
    ]
  },
  {
    "especialidad": "Nutricion",
    "paquetes": [
      {
        "nombre": "Paquete 1",
        "precio": 120,
        "servicios": [
          "4 CONSULTAS",
          "2 EV. CORPORAL"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 100,
        "servicios": [
          "4 CONSULTAS",
          "1 EV. CORPORAL"
        ]
      }
    ]
  }
]
';

$especialidades = json_decode($jsonData, true);

?>

<header id="header"
  class="navbar navbar-expand-lg navbar-end navbar-shadow navbar-light bg-white navbar-absolute-top navbar-show-hide"
  data-hs-header-options='{
  "fixMoment": 0,
  "fixEffect": "slide"
}' style="height:10% !important">
  <div class="container">
    <nav class="js-mega-menu navbar-nav-wrap">
      <a class="navbar-brand" href="/" aria-label="Red Salva" style="margin-top:-10px !important">
        <img class="navbar-brand-logo" src="/images/logo2.png" alt="Red Salva">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-default">
          <i class="fa fa-bars"></i>
        </span>
        <span class="navbar-toggler-toggled">
          <i class="fa fa-close"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="navbar-absolute-top-scroller">
          <ul class="navbar-nav nav-pills w-100 justify-content-center">
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
                <span class="btn btn-naranja d-none d-lg-inline-block rounded-pill" style=" font-size: 23px !important;">Reservar cita</span>
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
    width: 200px !important;
    /* Ajusta el ancho según lo necesario */
    height: auto !important;
    /* Mantiene la proporción */
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