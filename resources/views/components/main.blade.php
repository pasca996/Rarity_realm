<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rarity Realm - Scopri i tesori del passato!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    {{-- owlcarousel --}}
    <link rel="stylesheet" href="owlcarousel\assets\owl.carousel.css">
    <link rel="stylesheet" href="owlcarousel\assets\owl.theme.default.css">
    <link rel="stylesheet" href="owlcarousel\assets\owl.theme.green.css">
    <!-- Font Awesome -->
    <link rel="icon" type="image/png" sizes="192x192"  href="/img/logo/icona_192x192.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
    rel="stylesheet"
    />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />

    {{ $slot }}

    <x-footer />

    <!-- Back to Top -->
    <a href="#" class="btn btn-success back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
    ></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="easing/easing.min.js"></script>
    {{-- owlcarousel --}}
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <!-- Contact Javascript File -->
    {{-- <script src="mail/jqBootstrapValidation.min.js"></script> --}}
</body>

</html>
