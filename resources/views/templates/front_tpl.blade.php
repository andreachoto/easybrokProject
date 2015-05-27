<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <title>easybrok</title>
        <meta name="description" content="Gestion de polizas de seguros">
        <meta name="viewport" content="width=device-width">
        <!-- 
        Circle Template 
        http://www.templatemo.com/preview/templatemo_410_circle 
        -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- templatemo 410 circle -->
    </head>
    <body>
        <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="bg-overlay"></div>
        <div class="container-fluid">
            <div class="row">
                <!--menu caja principal superior -->
                <div class="col-md-4 col-sm-12">
                    <div class="sidebar-menu">
                        <div class="logo-wrapper">
                            <h1 class="logo">
                                <a href="#"><img src="images/logo.png" alt="Logotipo">
                                    <span>Citytech</span></a>
                            </h1>
                        </div> <!-- /.logo-wrapper -->
                        <div class="menu-wrapper">
                            <ul class="menu">
                                <li><a class="homebutton" href="inicio">Inicio</a></li>
                                <li><a href="clientes">Clientes</a></li>
                                <li><a href="#">Produccion</a></li>
                                <li><a href="#">Cartera</a></li>
                                <li><a href="#" onclick="templatemo_map();">Contactenos</a></li>
                            </ul> <!-- /.menu -->
                            <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                        </div> <!-- /.menu-wrapper -->
                    </div> <!-- /.sidebar-menu -->
                </div> 
                <!-- /.col-md-4  fin menu caja-->
                <!-- Contenedor de la pagina para contenido principal-->
                <div class="col-md-8 col-sm-12">
                    <div id="menu-container">
                        <!-- Contenido de la pagina -->
                        @yield('content')
                    </div> <!-- /#menu-container -->
                </div> 
                <!-- /.col-md-8 fin de contenedor -->
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
        <!-- Contenido de pie de pagina -->
        <div class="container-fluid">   
            <div class="row">
                <div class="col-md-12 footer">
                    <p id="footer-text">Copyright &copy; 2015 <a href="#">Citytech</a></p>
                </div><!-- /.footer --> 
            </div>
        </div> 
        <!-- /.container-fluid pie de pagina-->

        <script src="js/vendor/jquery-1.10.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="js/jquery.easing-1.3.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript">
                                    jQuery(function ($) {

                                        $.supersized({
                                            // Functionality
                                            //slide_interval: 3000, // Length between transitions
                                            //transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                                            // transition_speed: 700, // Speed of transition

                                            // Components                           
                                            //slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                                            slides: [// Slideshow Images
                                                {
                                                    image: 'images/bg.jpg'
                                                }
                                            ]

                                        });
                                    });

        </script>
        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <!-- Google Map Init-->
        <script type="text/javascript">
                                    function templatemo_map() {
                                        $('.google-map').gmap3({
                                            marker: {
                                                address: '16.8496189,96.1288854'
                                            },
                                            map: {
                                                options: {
                                                    zoom: 15,
                                                    scrollwheel: false,
                                                    streetViewControl: true
                                                }
                                            }
                                        });
                                    }
        </script>
    </body>
</html>