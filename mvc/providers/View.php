<?php 
namespace App\Providers;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;


class View{

    //Static syntax View::render;

    static public function render($template, $data = []){
        $loader = new FilesystemLoader('views');
        $twig = new Environment($loader);
        $twig->addGlobal('asset', ASSET);
        $twig->addGlobal('base', BASE);
        
        echo $twig->render($template.'.php', $data);
    }

    //Static syntax View::redirect;

    static public function redirect($url){
        header('location:' . BASE . '/' . $url);
    }
}








?>