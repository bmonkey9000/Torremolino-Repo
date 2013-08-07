<?php
define("PATH_CONTENT", 'content/');

class builder{
    function load_view($file){
        $initialView = file_get_contents(PATH_CONTENT.$file);
        $str_datos = file_get_contents(PATH_CONTENT."dictionary.json");
        $datos = json_decode($str_datos,true);
        $finalView = $initialView;
        foreach($datos['constantes'] as $clave=>$valor){
            $finalView = str_replace($clave, $valor, $finalView);
        }

        foreach($datos['contenido'] as $clave=>$valor){
            $finalView = str_replace($clave, $valor, $finalView);
        }
        echo $finalView;
    }
}
