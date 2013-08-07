<?php
include('builder/builder.php');
if(isset($_GET['page'])){
    $ruta = explode("/", $_GET['page']);
    $builder = new builder();

    switch($ruta[0]){
        case "":
            $builder->load_view('index.php');
            break;
        case "empresa"|"Empresa":
            $builder->load_view('empresa.php');
            break;
    }
}
