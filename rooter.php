<?php
include('builder.php');
if(isset($_GET['page'])){
    $ruta = explode("/", $_GET['page']);
    $builder = new builder();

    switch($ruta[0]){
        case "":
            $builder->templatekind="basic";
            $builder->load_view('home');
            break;
        case "proyectos":
            $builder->templatekind="projects";
            $builder->load_view('proyectos');
            break;
        case "proyecto-viewer":
            $builder->templatekind="proyecto-viewer";
            $builder->load_view("proyecto-viewer");
            break;
        default:
            $builder->templatekind="basic";
            $builder->load_view($ruta[0]);
    }
}
