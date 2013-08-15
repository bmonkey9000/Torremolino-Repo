<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Torremolino (Dev-site)</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!--VENDOR STYLES-->
        <link rel="stylesheet" type="text/css" href="{PATH_STYLES}vendor/normalize.min.css" />
        <link rel="stylesheet" type="text/css" href="{PATH_STYLES}vendor/jquery-ui/jquery.ui.slider.css" />
        <link rel="stylesheet" type="text/css" href="{PATH_STYLES}vendor/jquery-ui/jquery-ui.css" />
        <link rel="stylesheet" type="text/css" href="{PATH_STYLES}reset.css" />
        <!--VENDOR STYLES-->

        <!--SITE STYLES-->
        <link rel="stylesheet/less" type="text/css" href="{PATH_STYLES}main.less" />
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAK2FqfLfDL8sci-f9sZHSxiDoPmGnJlQw&sensor=false">
        </script>
        <script>
            function initialize()
            {
                var mapProp = {
                    center:new google.maps.LatLng(-12.108915402595255,-77.03268531379685),
                    zoom:16,
                    mapTypeId:google.maps.MapTypeId.ROADMAP
                };
                var map=new google.maps.Map(document.getElementById("googleMap")
                    ,mapProp);
                var stylesArray = [
                    {
                        stylers: [
                            {hue: '#a7c1ca'},
                            {saturation: '-60'},
                            {lightness: ''},
                        ]
                    },
                ]
                map.setOptions({styles: stylesArray});
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <!--SITE STYLES-->


        <!--VENDOR SCRIPTS-->
        <script src="{PATH_JS}vendor/less-1.4.1.min.js" type="text/javascript"></script>
        <script src="{PATH_JS}vendor/modernizr-2.6.2.min.js" type="text/javascript"></script>
        <!--VENDOR SCRIPTS-->

    </head>
    <body>

        <header>
            <nav id="upNav">
                <ul>
                    <li>
                        <a href="#"></a>
                    </li>
                </ul>
            </nav>
            <a id="logo" href="DEVhome"></a>
            <nav id="mainNav">
                <ul>
                    <li><a href="DEVempresa">EMPRESA</a></li>
                    <li><a href="DEVproceso">PROCESO</a></li>
                    <li><a href="DEVproyectos">PROYECTOS</a></li>
                    <li><a>NOTICIAS</a></li>
                    <li><a>VENDE&nbsp;TU&nbsp;TERRENO</a></li>
                    <li><a>CONTACTO</a></li>
                </ul>
            </nav>
            <aside>

                <form>
                    <input type="text" placeholder="buscar">
                </form>
            </aside>
        </header>

        <div class="router">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Proyectos</a></li>
                <li><a href="#">Entregados</a></li>
                <li><a href="#">Edificio Barcelona</a></li>
            </ul>
        </div>

        <section id="content">

            <section id="project-img">
                <img src="{PATH_IMG}img-proy1.png"/>
            </section>

            <section id="project-info">
                <div id="img-navigator">
                    <a class="prev">Anterior</a>
                    <a class="next">Siguiente</a>
                </div>

                <aside class="left">
                    <h2>Categoría:</h2>
                    <h2>_</h2>
                    <ul>
                        <li>{PROJECT.CATEGORY}</li>
                    </ul>
                </aside>

                <div class="center">
                    <h1>{PROJECT.TITLE}</h1>
                    <p>{PROJECT.CONTENT}</p>

                    <h4><span>Ubicación: </span>{PROJECT.LOCATION}</h4>
                    <h4><span>Año de Ejecución: </span>{PROJECT.YEAR}</h4>
                    <h4><span>Arquitecto: </span>{PROJECT.ARCHITECT}</h4>

                    <div class="facebook-container"></div>
                </div>

                <aside class="right">
                    <a href="" class="llamenos"></a>
                    <a href="" class="download">Brochure</a>
                    <a href="" class="download">Planos</a>
                </aside>

            </section>

            <section id="project-location">
                <div id="googleMap" style="width:940px;height:270px;"></div>
            </section>

        </section>

        <footer>
            <div>
                <h3>Torremolino ©2013</h3>
                <h4>Todos los derechos reservados</h4>
            </div>
            <div>
                <h3>Llámanos T. {CONTENT.PHONE}</h3>
                <h4>info@torremolino.com.pe</h4>
            </div>
            <div>
                <h3>Síguenos</h3>
                <h4>_</h4>
                <a href="#" class="facebook"></a>
                <a href="#" class="twitter"></a>
                <a href="#" class="linkedin"></a>
            </div>
            <div>
                <h4 class="gray">Developed by Newcircus</h4>
                <h4>_</h4>
            </div>
        </footer>


        <!--VENDOR SCRIPTS-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script src="{PATH_JS}vendor/jquery.cycle2.min.js"></script>
        <script src="{PATH_JS}vendor/jquery.ui.slider.js"></script>
        <script src="{PATH_JS}vendor/jquery.carouFredSel-6.2.1.js"></script>

        <script>

            $(function() {
                $( "#slider" ).slider({
                    min: 1996,
                    max: 2016,
                    value: 1996,
                    slide: function( event, ui ) {
                        $( "#year" ).html( ui.value );
                        if(ui.value==2000){
                            $("#proy").trigger("slideTo", [2,{
                                duration    : 500
                            }]);
                        }
                        if(ui.value==2004){
                            $("#proy").trigger("slideTo", [3,{
                                duration    : 500
                            }]);
                        }
                        if(ui.value==2010){
                            $("#proy").trigger("slideTo", [4,{
                                duration    : 500
                            }]);
                        }
                    }
                });
                $( "#year" ).html( $( "#slider" ).slider( "value" ) );
            });

        </script>
        <!--VENDOR SCRIPTS-->

        <!--SITE SCRIPTS-->
        <script src="{PATH_JS}main.js"></script>
        <!--SITE SCRIPTS-->



    </body>
</html>
