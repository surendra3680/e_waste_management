<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="images/x-icon" />

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
        body {
            background-color: white !important;
            font-family: "Asap", sans-serif;
            color: #989898;
            margin: 10px;
            font-size: 16px;
        }

        #demo {
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .green {
            background-color: #6fb936;
        }

        .thumb {
            margin-bottom: 30px;
        }

        .page-top {
            margin-top: 85px;
        }

        img.zoom {
            width: 100%;
            height: 200px;
            border-radius: 5px;
            object-fit: cover;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
        }

        .transition {
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -o-transform: scale(1.2);
            transform: scale(1.2);
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-title {
            color: #000;
        }

        .modal-footer {
            display: none;
        }
    </style>
</head>

<body>
@include('partial.header')




<!-- Page Content -->
<div class="container page-top">



    <div class="row">


        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
           <img src="g_img/01.jpg" class="zoom img-fluid " alt="">


        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
         <img src="g_img/02.jpg" class="zoom img-fluid" alt="">

        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <img src="g_img/03.jpg" class="zoom img-fluid " alt="">

        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
           <img src="g_img/04.jpg" class="zoom img-fluid " alt="">

        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <img src="g_img/05.jpg" class="zoom img-fluid " alt="">

        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
           <img src="g_img/06.jpg" class="zoom img-fluid " alt="">

        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
           <img src="g_img/07.jpg" class="zoom img-fluid " alt="">

        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
           <img src="g_img/08.jpg" class="zoom img-fluid " alt="">

        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <img src="g_img/09.jpg" class="zoom img-fluid " alt="">

        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <img src="g_img/10.jpg" class="zoom img-fluid " alt="">

        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <img src="g_img/11.jpg" class="zoom img-fluid " alt="">

        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <img src="g_img/12.jpg" class="zoom img-fluid " alt="">

        </div>

    </div>
</div>
@include('partial.footer')
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
</script>
<!--========= JS Here =========-->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/counterup.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.scrollUp.min.js"></script>
<script src="assets/js/lightcase.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/sticky-header.js"></script>
<script src="assets/js/waypoint.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIJ_QKHN-bi6_1C9f5eYE3pZs1zhQIo5o"></script>
<script src="assets/js/main.js"></script>

</body>

</html>
