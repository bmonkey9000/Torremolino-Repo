<?php


$initialSlider = file_get_contents(PATH_CONTENT.'partials/slider.html');
$initialProjects = file_get_contents(PATH_CONTENT.'partials/home-project.html');
$initialNews = file_get_contents(PATH_CONTENT.'partials/home-news.html');

$str_datos = file_get_contents(PATH_CONTENT."dictionary.json");
$datos = json_decode($str_datos,true);
foreach($datos['constantes'] as $clave=>$valor){
    $finalSlider = str_replace($clave, $valor, $initialSlider);
}
?>
<section id="slider" class="cycle-slideshow"
         data-cycle-fx="fade"
         data-cycle-timeout="4000"
         data-cycle-slides="> div"
         data-cycle-speed="2000"
    >
<?php
foreach($datos['sliders'] as $slider){
    $contenido = str_replace("{imagen}", $slider["slider"]["{imagen}"], $finalSlider);
    $contenido = str_replace("{titulo}", $slider["slider"]["{titulo}"], $contenido);
    echo $contenido;
}
?>
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
    <a href="DEVproyectos"></a>
    <?php
    $limit=1;
    foreach($datos['projects'] as $project){
        if($limit<=3){
            $contenido = str_replace("{contenido}", $project["project"]["{contenido}"], $initialProjects);
            $contenido = str_replace("{titulo}", $project["project"]["{titulo}"], $contenido);
            $contenido = str_replace("{class}", $project["project"]["{class}"], $contenido);
            echo $contenido;
        }
        $limit++;
    }
    ?>
</section>

<section id="featured-news">
    <a href="DEVproceso" class="ad cycle-slideshow"
       data-cycle-fx="fade"
       data-cycle-timeout="1500"
       data-cycle-slides="> div"
        >
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
    </a>

    <a href="#" class="news-title"></a>

    <?php
    $limit=1;
    foreach($datos['news'] as $item){
        if($limit<=2){
            $contenido = str_replace("{ID}", $item["article"]["{ID}"], $initialNews);
            $contenido = str_replace("{titulo}", $item["article"]["{titulo}"], $contenido);
            $contenido = str_replace("{content}", $item["article"]["{content}"], $contenido);
            $contenido = str_replace("{date}", $item["article"]["{date}"], $contenido);
            echo $contenido;
        }
        $limit++;
    }
    ?>

</section>