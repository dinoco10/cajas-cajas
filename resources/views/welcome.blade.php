<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
        <title>Cajas de Cartón Corrugado - Packaging y Embalaje</title>
        <meta name="description" content="Diseñamos el Embalaje Correcto para tus Productos. Fabricación a Medida y Requerimiento. Onda Simple, Doble Triple, Blanco y Kraft - Alta Calidad y Reventamiento - Troqueladas.">
        <meta name="author" content="Cajas Más Cajas">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> --}}
        @livewireStyles
        {{-- stylesheet goes here --}}

        <title>Cajas Mas Cajas</title>
        <style>
            .grayscale { filter: grayscale(1); }
            .grayscale:hover { filter: grayscale(0); }
        </style>

        @if (app()->isProduction())
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-44137015-1"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-44137015-1');
            </script>
        @endif
    </head>
    <body class="antialiased">
        {{ $slot }}
    </body>
</html>
