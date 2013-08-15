<?php
$initialNews = file_get_contents(PATH_CONTENT.'partials/article.html');
$str_datos = file_get_contents(PATH_CONTENT."dictionary.json");
$datos = json_decode($str_datos,true);
foreach($datos['constantes'] as $clave=>$valor){
    $finalNews = str_replace($clave, $valor, $initialNews);
}
?>
<section id="content">
    <header class="content-header">
        <h2>Categorías</h2>
        <ul>
            <li class="active">Todos</li>
            <li>Arquitectura</li>
            <li>Departamentos</li>
            <li>Edificios</li>
            <li>Oficinas</li>
            <li>Casas</li>
        </ul>
        <a href="#" class="date-selector">Por Fecha</a>
    </header>
    <div class="tags-selector">
        <h2 class="tags">Tags</h2>
        <ul class="tagsS">
            <li>Arquitectura</li>
            <li>Inmobiliaria</li>
            <li>Bienal</li>
            <li>Interior</li>
            <li>Diseño</li>
        </ul>
    </div>

    <section class="blog">
        <?php
        foreach($datos['news'] as $item){
            $contenido = str_replace("{ID}", $item["article"]["{ID}"], $finalNews);
            $contenido = str_replace("{titulo}", $item["article"]["{titulo}"], $contenido);
            $contenido = str_replace("{content}", $item["article"]["{content}"], $contenido);
            $contenido = str_replace("{date}", $item["article"]["{date}"], $contenido);
            $contenido = str_replace("{img}", $item["article"]["{img}"], $contenido);
            $itags = 0;
            $icategorias = 0;
            $tags = "";
            $categorias = "";

            foreach($item['article']['{tags}'] as $tag){
                if($itags==0){
                    $tags = "<li>".$tag."</li>";
                }else{
                    $tags = $tags."<li>".$tag."</li>";
                }
                $itags++;
            }

            foreach($item['article']['{category}'] as $category){
                if($icategorias==0){
                    $categorias = $category;
                }else{
                    $categorias = $categorias.", ".$category;
                }
                $icategorias++;
            }

            $contenido = str_replace("{tags}", $tags, $contenido);
            $contenido = str_replace("{category}", $categorias, $contenido);
            echo $contenido;
        }
        ?>
    </section>
</section>