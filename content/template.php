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
        <link rel="stylesheet" type="text/css" href="{PATH_STYLES}reset.css" />
        <!--VENDOR STYLES-->

        <!--SITE STYLES-->
        <link rel="stylesheet/less" type="text/css" href="{PATH_STYLES}main.less" />
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
            <div id="logo" onclick="location.href='DEVhome'"></div>
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
                <li>Inicio</li>
                <li>Empresa</li>
            </ul>
        </div>

        <section id="slider" class="cycle-slideshow"
            data-cycle-fx="fade"
            data-cycle-timeout="4000"
            data-cycle-slides="> div"
            data-cycle-speed="2000"
            >
            <div class="slider" style="background-image: url('{PATH_IMG}slider1.jpg')">
                <div>
                    <h1><a></a>{SLIDER1-TITLE}</h1>
                </div>
            </div>
            <div class="slider" style="background-image: url('{PATH_IMG}slider1.jpg')">
                <div>
                    <h1><a></a>{SLIDER2-TITLE}</h1>
                </div>
            </div>
        </section>

        <section id="featured-links">
            <a href="#" class="featured-link vender"></a>
            <a href="#" class="featured-link newsletter"></a>
            <form>
                <input type="email" name="email" placeholder="email">
                <a href="#"></a>
            </form>
        </section>

        <section id="featured-projects">
            <a href="#"></a>

            <!--START PROJECT-->
            <a href="#" class="project one">
                <div>
                    <h1>Proyecto</h1>
                    <h1>{PROJECT1.TITLE}</h1>
                    <p>{PROJECT1.CONTENT}</p>
                </div>
            </a>
            <!--END PROJECT-->

            <!--START PROJECT-->
            <a href="#" class="project two">
                <div>
                    <h1>Proyecto</h1>
                    <h1>{PROJECT2.TITLE}</h1>
                    <p>{PROJECT2.CONTENT}</p>
                </div>
            </a>
            <!--END PROJECT-->

            <!--START PROJECT-->
            <a href="#" class="project three">
                <div>
                    <h1>Proyecto</h1>
                    <h1>{PROJECT3.TITLE}</h1>
                    <p>{PROJECT3.CONTENT}</p>
                </div>
            </a>
            <!--END PROJECT-->
        </section>

        <section id="featured-news">
            <a href="#" class="ad cycle-slideshow"
               data-cycle-fx="fade"
               data-cycle-timeout="1500"
               data-cycle-slides="> div"
            >
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </a>

            <a href="#" class="news-title"></a>

            <!--START NEWS-->
            <article>
                <h3>{ARTICLE1.DATE}</h3>
                <h1>{ARTICLE1.TITLE}</h1>
                <p>{ARTICLE1.CONTENT}</p>
                <a href="#">Ver Más</a>
            </article>
            <!--END NEWS-->

            <!--START NEWS-->
            <article>
                <h3>{ARTICLE2.DATE}</h3>
                <h1>{ARTICLE2.TITLE}</h1>
                <p>{ARTICLE2.CONTENT}</p>
                <a href="#">Ver Más</a>
            </article>
            <!--END NEWS-->
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
        <script src="{PATH_JS}vendor/jquery.cycle2.min.js"></script>
        <!--VENDOR SCRIPTS-->

        <!--SITE SCRIPTS-->
        <script src="{PATH_JS}main.js"></script>
        <!--SITE SCRIPTS-->

    </body>
</html>
