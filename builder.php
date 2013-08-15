<?php
define("PATH_CONTENT", 'content/');

function router($file){
    $str_datos = file_get_contents(PATH_CONTENT."dictionary.json");
    $datos = json_decode($str_datos,true);
    echo '
        <div class="router">
            <ul><li><a href="/DEV">Inicio</a></li>';
    foreach($datos['rutas'][0][$file] as $clave=>$valor){
        echo '<li><a href="'.$valor.'">'.$clave.'</a></li>';
    }
    echo '
            </ul>
        </div>
        ';
}

function plainHTML($file){
    $initialView = file_get_contents(PATH_CONTENT.$file);

    $str_datos = file_get_contents(PATH_CONTENT."dictionary.json");
    $datos = json_decode($str_datos,true);
    foreach($datos['constantes'] as $clave=>$valor){
        $finalView = str_replace($clave, $valor, $initialView);
    }
    foreach($datos['contenido'] as $clave=>$valor){
        $finalView = str_replace($clave, $valor, $finalView);
    }

    echo $finalView;
}

function decodejson($file){
    $initialView = file_get_contents(PATH_CONTENT.$file);
    $str_datos = file_get_contents(PATH_CONTENT."dictionary.json");
    $datos = json_decode($str_datos,true);
    $finalView = $initialView;
    foreach($datos["constantes"] as $clave=>$valor){
        $finalView = str_replace($clave, $valor, $finalView);
    }
    foreach($datos['contenido'] as $clave=>$valor){
        $finalView = str_replace($clave, $valor, $finalView);
    }
    echo $finalView;
}

class builder{
    public $templatekind;

    function load_view($file){
        switch($this->templatekind){
            case 'default':
                decodejson($file);
                break;
            case 'basic':
                decodejson('template/up.html');
                router($file);
                include('builder/'.$file.'.php');
                decodejson('template/down.html');
                break;
            case 'projects':
                decodejson('template/up-project.html');
                router($file);
                include('builder/'.$file.'.php');
                decodejson('template/down-project.html');
                break;
            case 'proyecto-viewer':
                decodejson('template/up-proyecto-viewer.html');
                router($file);
                include('builder/'.$file.'.php');
                decodejson('template/down.html');
                break;
        }
    }
}
