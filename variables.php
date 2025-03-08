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
  'Inicio' => '/',
  'Especialidades' => '/especialidades',
  'Staff médico' => '/staff-medico',
  'Servicios' => '/servicios_detalle',
  'Promociones' => '/promociones',
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
    "link":"",
    "paquetes": [
      {
        "imagen":"",
        "nombre": "Paquete 1",
        "precio": 70,
        "servicios": [
          "CONSULTA MÉDICA",
          "LAVADO DE OIDO"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 120,
        "servicios": [
          "CONSULTA MÉDICA",
          "AUDIOMETRÍA"
        ]
      },
      {
        "nombre": "Paquete 3",
        "precio": 121,
        "servicios": [
          "CONSULTA MÉDICA",
          "TIMPANOMETRÍA"
        ]
      },
      {
        "nombre": "Paquete 4",
        "precio": 120,
        "servicios": [
          "CONSULTA MÉDICA",
          "LARINGOSCOPÍA"
        ]
      },
      {
        "nombre": "Paquete 5",
        "precio": 150,
        "servicios": [
          "CONSULTA MÉDICA",
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
          "CONSULTA MÉDICA",
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
          "CONSULTA MÉDICA",
          "ELECTROENCEFALOGRAMA CONVENCIONAL"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 260,
        "servicios": [
          "CONSULTA MÉDICA",
          "ELECTROENCEFALOGRAMA PROLONGADO"
        ]
      },
      {
        "nombre": "Paquete 3",
        "precio": 300,
        "servicios": [
          "CONSULTA MÉDICA",
          "ELECTROENCEFALOGRAMA DE 1 HORA"
        ]
      },
      {
        "nombre": "Paquete 4",
        "precio": 200,
        "servicios": [
          "CONSULTA MÉDICA",
          "ELECTROENCEFALOGRAMA DE 2 MIEMBROS"
        ]
      },
      {
        "nombre": "Paquete 5",
        "precio": 300,
        "servicios": [
          "CONSULTA MÉDICA",
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
        "imagen":"images/paquetes/gineco_paquete_integral.png",
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
      "imagen":"images/paquetes/gineco_paquete_basico.png",
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
        "imagen":"images/paquetes/gineco_paquete_preventivo.png",
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
          "CONSULTA MÉDICA"
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
          "CONSULTA MÉDICA"
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
          "CONSULTA MÉDICA",
          "EXAMEN DE ORINA",
          "CREATININA + PSA"
        ]
      },
      {
        "nombre": "Paquete 2 Adulto Varón 40 años",
        "precio": 75,
        "servicios": [
          "CONSULTA MÉDICA",
          "TESTOSTERONA TOTAL",
          "PSA LIBRE",
          "PSA TOTAL"
        ]
      },
      {
        "nombre": "Paquete Integral Adulto",
        "precio": 115,
        "servicios": [
          "CONSULTA MÉDICA",
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
          "CONSULTA MÉDICA",
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
          "CONSULTA MÉDICA",
          "MEDIDA DE VISTA",
          "FONDO DE OJO"
        ]
      },
      {
        "nombre": "Paquete Escolar",
        "precio": 100,
        "servicios": [
          "CONSULTA MÉDICA",
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
        "imagen":"images/paquetes/pediatria_nino_sano.png",
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
      }
    ]
  },
  {
    "especialidad": "Gastroenterologia",
    "paquetes": [
      {
        "nombre": "Paquete 1",
        "precio": 0,
        "servicios": [
          "CONSULTA MÉDICA",
          "TEST DE ALIENTO"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 0,
        "servicios": [
          "CONSULTA MÉDICA",
          "ENDOSCOPIA"
        ]
      },
      {
        "nombre": "Paquete 3",
        "precio": 0,
        "servicios": [
          "CONSULTA MÉDICA",
          "COLONOCOPIA"
        ]
      },
      {
        "nombre": "Paquete 4",
        "precio": 0,
        "servicios": [
          "CONSULTA MÉDICA",
          "SIGMOIDOSCOPIA"
        ]
      },
      {
        "nombre": "Paquete 5",
        "precio": 110,
        "servicios": [
          "CONSULTA MÉDICA",
          "ECOGRAFIA ABDOMEN"
        ]
      }
    ]
  },
  {
    "especialidad": "Endocrinología",
    "paquetes": [
      {
        "imagen":"images/paquetes/endocrino_paquete_basico.png",
        "nombre": "Paquete Básico",
        "precio": 100,
        "servicios": [
          "ECOGRAFIA ABDOMINAL",
          "CONSULTA MÉDICA"
        ]
      },
      {
        "imagen":"images/paquetes/endocrino_paquete_completo.png",
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
    ]
  },
  {
    "especialidad": "Reumatología",
    "paquetes": [
      {
        "nombre": "Paquete 1",
        "precio": 100,
        "servicios": [
          "CONSULTA MÉDICA",
          "DENSITOMETRIA"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 80,
        "servicios": [
          "CONSULTA MÉDICA",
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
          "CONSULTA MÉDICA",
          "LIMPIEZA FACIAL"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 100,
        "servicios": [
          "CONSULTA MÉDICA",
          "PEELING QUIMICO"
        ]
      },
      {
        "nombre": "Paquete 3",
        "precio": 100,
        "servicios": [
          "CONSULTA MÉDICA",
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
          "CONSULTA MÉDICA",
          "TERAPIA FISICA X 6 SESIONES"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 420,
        "servicios": [
          "CONSULTA MÉDICA",
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
          "4 CONSULTAS MÉDICAS"
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
          "CONSULTA MÉDICA"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 120,
        "servicios": [
          "ESPIROMETRIA CON BRONCODILATADOR",
          "CONSULTA MÉDICA"
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
          "CONSULTA MÉDICA",
          "RAYOS X DE TORAX"
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
  },
  {
    "especialidad": "Cardiología",
    "paquetes": [
      {
        "nombre": "Paquete 1",
        "precio": 150,
        "servicios": [
          "ESTUDIO DE HOLTER",
          "CONSULTA MÉDICA"
        ]
      },
      {
        "nombre": "Paquete 2",
        "precio": 80,
        "servicios": [
          "ELECTROCARDIOGRAMA",
          "CONSULTA MÉDICA"
        ]
      },
      {
        "nombre": "Paquete 3",
        "precio": 120,
        "servicios": [
          "ECOCARDIOGRAMA DOPPLER",
          "CONSULTA MÉDICA"
        ]
      },
      {
        "nombre": "Paquete 4",
        "precio": 90,
        "servicios": [
          "CONSULTA MÉDICA",
          "ELECTROCARDIOGRAMA",
          "COLESTEROL",
          "TRIGLICERIDOS"
        ]
      }
    ]
  } 
]
';

$jsonData = json_decode($jsonData, true);

foreach ($jsonData as &$especialidad) {
  foreach ($especialidad['paquetes'] as &$paquete) {
    foreach ($paquete['servicios'] as &$servicio) {
      $servicio = mb_convert_case(mb_strtolower($servicio, 'UTF-8'), MB_CASE_TITLE, 'UTF-8');
    }
  }
}

$jsonData = json_encode($jsonData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);


$especialidades = json_decode($jsonData, true);

?>

<?php

$procedimientos_cardiologia = [
  [
    "nombre" => "Riesgo Quirúrgico",
    "contenido" => "El riesgo quirúrgico es la posibilidad de complicaciones durante o después de la cirugía. Evaluamos su salud para minimizar estos riesgos y asegurar una cirugía segura."
  ],
  [
    "nombre" => "Prueba de Esfuerzo",
    "contenido" => "La prueba de esfuerzo mide cómo responde su corazón al ejercicio, ayudándonos a detectar posibles problemas cardíacos. Durante la prueba, se monitorizan su ritmo cardíaco y otros signos mientras realiza ejercicio físico."
  ],
  [
    "nombre" => "Estudio de Mapa 24 horas",
    "contenido" => "El estudio de mapa (24 horas) consiste en llevar un monitor portátil que registra su ritmo cardíaco durante todo un día. Esto nos ayuda a detectar irregularidades o problemas cardíacos que puedan ocurrir en su actividad diaria."
  ],
  [
    "nombre" => "Estudio de Holter 24 horas",
    "contenido" => "El estudio de Holter (24 horas) es un monitoreo continuo de su ritmo cardíaco durante un día completo, utilizando un pequeño dispositivo que se coloca en su pecho. Esto nos permite detectar irregularidades cardíacas mientras realiza sus actividades cotidianas."
  ],
  [
    "nombre" => "Electrocardiograma",
    "contenido" => "El electrocardiograma (ECG) es un examen rápido y no invasivo que mide la actividad eléctrica de su corazón. Nos ayuda a detectar problemas como arritmias, infartos o alteraciones en el ritmo cardíaco."
  ],
  [
    "nombre" => "Ecocardiograma Doppler",
    "contenido" => "El ecocardiograma Doppler es un examen no invasivo que utiliza ondas sonoras para observar cómo fluye la sangre a través de su corazón. Nos ayuda a detectar problemas en las válvulas o el flujo sanguíneo."
  ],
  [
    "nombre" => "Eco Doppler Venoso MMII",
    "contenido" => "El Eco Doppler venoso de miembros inferiores es un examen no invasivo que utiliza ultrasonido para evaluar el flujo sanguíneo en las venas de sus piernas. Nos ayuda a detectar problemas como varices o trombosis."
  ],
  [
    "nombre" => "Eco Doppler Arterial MMII",
    "contenido" => "El Eco Doppler arterial de miembros inferiores es un examen no invasivo que utiliza ultrasonido para evaluar el flujo sanguíneo en las arterias de sus piernas. Nos ayuda a detectar problemas como obstrucciones o insuficiencia arterial."
  ],
  [
    "nombre" => "Eco Doppler Carotideo y Vertebral",
    "contenido" => "El Eco Doppler carotideo y vertebral es un examen no invasivo que usa ultrasonido para evaluar el flujo sanguíneo en las arterias del cuello y la cabeza. Nos ayuda a detectar posibles obstrucciones o problemas en el suministro de sangre al cerebro."
  ]
];

// Convertir a JSON (opcional)
$json_procedimientos_cardiologia = json_encode($procedimientos_cardiologia);

?>

<?php
$procedimientos_dermatologia = [
  [
    "nombre" => "Extracción de lunares o verrugas",
    "contenido" => "Remoción de lesiones cutáneas por razones estéticas o médicas, utilizando bisturí, láser o crioterapia."
  ],
  [
    "nombre" => "Biopsias de piel",
    "contenido" => "Obtención de una muestra de piel para analizar y diagnosticar enfermedades dermatológicas, incluyendo cáncer de piel."
  ],
  [
    "nombre" => "Cirugía de Mohs",
    "contenido" => "Técnica quirúrgica de precisión para eliminar cáncer de piel, minimizando el daño a los tejidos sanos."
  ],
  [
    "nombre" => "Fototerapia",
    "contenido" => "Tratamiento con luz ultravioleta (UV) para enfermedades como psoriasis, vitiligo y dermatitis atópica."
  ],
  [
    "nombre" => "Peeling químico",
    "contenido" => "Aplicación de sustancias químicas en la piel para exfoliar y mejorar manchas, arrugas o acné."
  ],
  [
    "nombre" => "Cirugía láser",
    "contenido" => "Uso de tecnología láser para tratar cicatrices, lesiones vasculares, manchas o arrugas."
  ],
  [
    "nombre" => "Depilación láser",
    "contenido" => "Eliminación prolongada del vello mediante luz láser que destruye el folículo piloso."
  ],
  [
    "nombre" => "Crioterapia",
    "contenido" => "Aplicación de frío extremo (nitrógeno líquido) para eliminar verrugas, queratosis y otras lesiones cutáneas."
  ],
  [
    "nombre" => "Infiltraciones",
    "contenido" => "Aplicación de medicamentos (como corticoides) en la piel para tratar inflamaciones, cicatrices o alopecia."
  ],
  [
    "nombre" => "Eliminación de tatuajes",
    "contenido" => "Uso de láser para fragmentar los pigmentos del tatuaje y eliminarlos progresivamente."
  ],
  [
    "nombre" => "Dermoabrasión",
    "contenido" => "Técnica de exfoliación profunda con un dispositivo rotatorio para mejorar cicatrices, arrugas y textura de la piel."
  ],
  [
    "nombre" => "Onicectomía",
    "contenido" => "Remoción parcial o total de una uña afectada por infecciones, hongos o encarnamiento severo."
  ]
];

// Convertir a JSON
$json_procedimientos = json_encode($procedimientos_dermatologia, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

?>

<?php
$procedimientos_endocrinologia = [
  [
    "nombre" => "Bioimpedancia x 1 sesión",
    "contenido" => "En construcción"
  ],
  [
    "nombre" => "Bioimpedancia x 3 sesiones",
    "contenido" => "En construcción"
  ]
];


// Convertir a JSON (opcional)
$json_procedimientos = json_encode($procedimientos_endocrinologia);

?>







