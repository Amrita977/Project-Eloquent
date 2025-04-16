 <!-- Favicon -->
 <link rel="shortcut icon" href="images/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- LOADING FONTS AND ICONS -->
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="css/rs6.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="css/simplebar.min.css">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="css/animations.min.css">
    <!-- Magnefic Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!--  Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!--  Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());



?>

 <!--jquery js-->
 <script src="js/jquery.min.js"></script>
    <!--bootstrap js-->
    <script src="js/bootstrap.min.js"></script>
    <!--owl-carousal-->
    <script src="js/owl.carousel.min.js"></script>
    <!--progress-bar js-->
    <script src="js/progressbar.js"></script>
    <!--isotope js-->
    <script src="js/isotope.pkgd.min.js"></script>
    <!--countTo js-->
    <script src="js/jquery.countTo.min.js"></script>
    <!--Maginfic-Popup js-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Animation JS -->
    <script src="js/wow.min.js"></script>
    <!-- Simplebar js -->
    <script src="js/simplebar.min.js"></script>
    <!-- Slick Slider js -->
    <script src="js/slick.js"></script>
    <!-- Rev-Slider -->
    <script src="js/rbtools.min.js"></script>
    <script src="js/rs6.min.js"></script>
    <script src="js/rev-custom.js"></script>
    <!--custom js-->
    <script src="js/custom.js"></script>
