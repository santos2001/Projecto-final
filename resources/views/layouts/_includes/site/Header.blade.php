<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-menu="leftalign">

<head>
    <title>@yield('titulo') - ANPERE</title>

    <meta charset="UTF-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>

    {{-- Protecção contra clickJacking --}}
    {!! header('X-Frame-Options: SAMEORIGIN') !!}


    <meta name="robots" content="noindex, nofollow" />
    <meta name="title" content="ANPERE- ASSOCIAÇÃO NACIONAL DOS PROFISSIONAIS DO ESPECTRO RÁDIO ELECTRÓNICO" />
    <meta name="description" content="ANPERE- ASSOCIAÇÃO NACIONAL DOS PROFISSIONAIS DO ESPECTRO RÁDIO ELECTRÓNICO" />
    <meta name="keywords" content="ANPERE- ASSOCIAÇÃO NACIONAL DOS PROFISSIONAIS DO ESPECTRO RÁDIO ELECTRÓNICO" />
    <meta name="author" content="infosi.gov.ao" />

    <meta property="og:title" content="ANPERE- ASSOCIAÇÃO NACIONAL DOS PROFISSIONAIS DO ESPECTRO RÁDIO ELECTRÓNICO" />
    <meta property="og:site_name"
        content="ANPERE- ASSOCIAÇÃO NACIONAL DOS PROFISSIONAIS DO ESPECTRO RÁDIO ELECTRÓNICO" />
    <meta property="og:description"
        content="Portal da ANPERE- ASSOCIAÇÃO NACIONAL DOS PROFISSIONAIS DO ESPECTRO RÁDIO ELECTRÓNICO" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="/site/images/logo/colored-logo.png" />
    <meta property="og:url" content="http://fgi.ao" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="/site/images/logo/favicon.ico" />
    <!-- animate css -->
    <link rel="stylesheet" href="/site/css/plugins/animate.min.css" />
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="/site/css/plugins/fontawesome.min.css" />
    <!-- bootstrap min css -->
    <link rel="stylesheet" href="/site/css/vendor/bootstrap.min.css" />
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="/site/css/plugins/swiper.min.css" />
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="/site/css/vendor/magnific-popup.css" />
    <!-- metismenu scss -->
    <link rel="stylesheet" href="/site/css/vendor/metismenu.css" />
    <!-- nice select js -->
    <link rel="stylesheet" href="/site/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="/site/css/plugins/jquery-ui.css" />
    <!-- custom style css -->
    <link rel="stylesheet" href="/site/css/style.css" />



     <!-- Vendor CSS Files -->
  <link href="/site/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/site/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/site/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/site/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/site/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/site/assets/css/main.css" rel="stylesheet">


    {!! RecaptchaV3::initJs() !!}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EZ7CV8VKZ8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-QXMLK9CGZF');
    </script>
    @yield('CSS')
</head>






<body class="page">
