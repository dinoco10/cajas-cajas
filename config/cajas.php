<?php

return [
    'features' => [
        'Experiencia' => 'Utilizamos la última tecnología para satisfacer las necesidades del exigente y creciente mercado argentino desde hace 45 años.',
        'Calidad' => 'Seriedad, versatilidad y transparencia, son cualidades que se mantienen constantes en nuestra trayectoria.',
        'Puntualidad' => 'Nuestros años en la industria de cartón corrugado avalan nuestro compromiso en los plazos de entrega.',
    ],

    'clients' => [
        ['name' => 'Ferrum', 'image' => 'clients/1.png'],
        ['name' => 'COLVEN', 'image' => 'clients/2.png',],
        ['name' => 'DHL International', 'image' => 'clients/3.png'],
        // ['name' => 'WASSINGTON', 'image' => 'clients/4.png'],
        ['name' => '3M', 'image' => 'clients/5.png'],
        ['name' => 'Matriplast', 'image' => 'clients/6.png'],
    ],

    'services' => [
        [
            'title' => 'Trabajos a Medida',
            'description' => 'Ofrecemos envases realizados a medida, adaptados para satisfacer sus necesidades, acompañado de un adecuado asesoramiento técnico.',
            'icon_position' => '-112px'
        ],
        [
            'title' => 'Impresión Flexológica - Troquelados',
            'description' => 'La impresión de las cajas se realiza con el sistema flexográfico de hasta 3 colores, garantizando una excelente terminación con maquinaria de última generación.',
            'icon_position' => '-172px'
        ],
        [
            'title' => 'Variedad de Calidades',
            'description' => 'Amplia variedad de calidades, desde 70 a 300 libras, en onda simple, doble, triple, en cartón Kraft o Blanco.',
            'icon_position' => '-232px'
        ]
    ],

    'products' => [
        ['image' => 'products/1.png', 'description' => 'Cajas para fruta, mercado local.'],
        // ['image' => 'products/2.png', 'description' => 'Cajas repuesteras.'],
        ['image' => 'products/3.png', 'description' => 'Cajas con impresiones especiales.'],
        ['image' => 'products/4.png', 'description' => 'Caja doble-triple para exportación.'],
        ['image' => 'products/5.png', 'description' => 'Caja con impresiones especiales.'],
        ['image' => 'products/6.png', 'description' => 'Casilleros para divisiones interiores.'],
        ['image' => 'products/7.png', 'description' => 'Cajas de archivo, varios modelos.'],
        ['image' => 'products/8.png', 'description' => 'Cajas “base y tapa” para alta compresión en estibas.'],
        ['image' => 'products/9.png', 'description' => 'Cajas reforzadas de alta resistencia.'],
        ['image' => 'products/10.png', 'description' => 'Cajas troqueladas de diseños especiales para cada producto.'],
        ['image' => 'products/11.png', 'description' => 'Cajas con papel blanco exterior.'],
        ['image' => 'products/12.png', 'description' => 'Cajas para elementos frágiles y/o delicados.'],
        ['image' => 'products/13.png', 'description' => 'Cajas estándar para regalaría.'],
        ['image' => 'products/14.png', 'description' => 'Cajas de exportación, mercado frutihortícola.'],
        ['image' => 'products/15.png', 'description' => 'Cajas para fruta, mercado local.'],
    ],

    'provinces' => [
        ['id' => 1, 'label' => 'Capital Federal'],
        ['id' => 2, 'label' => 'Buenos Aires'],
        ['id' => 3, 'label' => 'Catamarca'],
        ['id' => 4, 'label' => 'Chaco'],
        ['id' => 5, 'label' => 'Chubut'],
        ['id' => 6, 'label' => 'Córdoba'],
        ['id' => 7, 'label' => 'Corrientes'],
        ['id' => 8, 'label' => 'Entre Ríos'],
        ['id' => 9, 'label' => 'Formosa'],
        ['id' => 10, 'label' => 'Jujuy'],
        ['id' => 11, 'label' => 'La Pampa'],
        ['id' => 12, 'label' => 'La Rioja'],
        ['id' => 13, 'label' => 'Mendoza'],
        ['id' => 14, 'label' => 'Misiones'],
        ['id' => 15, 'label' => 'Neuquén'],
        ['id' => 16, 'label' => 'Río Negro'],
        ['id' => 17, 'label' => 'Salta'],
        ['id' => 18, 'label' => 'San Juan'],
        ['id' => 19, 'label' => 'San Luis'],
        ['id' => 20, 'label' => 'Santa Cruz'],
        ['id' => 21, 'label' => 'Santa Fe'],
        ['id' => 22, 'label' => 'Santiago del Estero'],
        ['id' => 23, 'label' => 'Tierra del Fuego'],
        ['id' => 24, 'label' => 'Tucumán'],
    ],

    'email' => [
        'to' => env('MAIL_TO_ADDRESS', 'cmasc@riocuartosa.com.ar'),
    ]
];
