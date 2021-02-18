<!DOCTYPE html>
<html lang="es">

<head>

    <!-- ícono -->
    <link rel="shortcut icon" href="../img/logoc.png">

    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Título -->
    <title>@yield('title')</title>

    <!-- web page styles -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- carrousel style -->
    <link rel="stylesheet" href="../css/carrusel.css">

    <!-- Frameworks y librerías -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" href="../node_modules/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../node_modules/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    @yield('src')

</head>

<body>

    <!-- principal container -->
    <div class="container-fluid">

        @yield('content')

        <?php
        require_once '../config/database.php';

        $a = DB::table('users')->where('user', 'Petox03')->first();

        echo "<p>".$a->name." ".$a->lastname."</p>"

        ?>

    </div>
    <!-- /principal container -->

    <!-- Footer -->
    <footer class="p-4 footer-page">
        <div class="row">
            <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
                <section>
                    <a href="../"><img src="../img/logo.jpg" alt="" width="200px" height="200px"></a>
                </section>
            </div>
            <div class="col-12 col-md-6 | mt-3 mt-md-0 | d-flex align-items-center text-center">
                <h2 class="bg-txt">TE INVITAMOS A VISITARNOS O CONTACTARNOS Y JUNTOS RECORDAREMOS LA BELLEZA DE LA VIDA</h2>
            </div>
            <div class="col-12 col-md-3 | mt-3 mt-md-0 | d-flex flex-column align-items-center">
                <section class="d-flex flex-row align-items-center">
                    <a href="https://www.facebook.com/clinicaorchideum" target="_blank"><img src="../img/icons/facebook.png" alt="" width="65px" height="65px"></a><a class="foot-link" href="https://www.facebook.com/clinicaorchideum" target="_blank"><h4 class="p-3 bg-txt">Orchideum</h4></a>
                </section>
                <section class="d-flex flex-row align-items-center | mt-3">
                    <a href="https://api.whatsapp.com/send/?phone=5214641080617&text&app_absent=0" target="_blank"><img src="../img/icons/whats.png" alt="" width="65px" height="65px"></a><a class="foot-link" href="https://api.whatsapp.com/send/?phone=5214641080617&text&app_absent=0" target="_blank"><h4 class="p-3 bg-txt">Orchideum</h4></a>
                </section>
                <section class="d-flex flex-row align-items-center | mt-3">
                    <a href="#"><img src="../img/icons/youtube.png" alt="" width="65px" height="65px"></a><a class="foot-link" href="#"><h4 class="p-3 bg-txt">Orchideum</h4></a>
                </section>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

    <!-- scripts -->
    <script src="../js/jquery-3.4.1.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="../node_modules/wow.js/dist/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="../node_modules/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="../js/carrusel.js"></script>

</body>

</html>