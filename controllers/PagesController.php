<?php

namespace Controllers;

use MVC\Router;

class PagesController{
    public static function home(Router $router){
        
        $title = 'home';
        $text = ' This is a test';
        $homePage = TRUE;
        $router->render('pages/home',[
            'title' => $title,
            'homePage' => $homePage,
            'text' => $text
        ]);
    }

    public static function aboutUs(Router $router){
        $title = 'about us';
        $text = ' This is a test aboutUs';
        $homePage = false;
        $router->render('pages/home',[
            'title' => $title,
            'homePage' => $homePage,
            'text' => $text
        ]);
    }

    public static function services(){
        echo'Hi my King We greet you from services';
    }

    public static function contact(){
        echo'Hi my King We greet you from contact';
    }

    public static function blog(){
        echo'Hi my King We greet you from blog';
    }

    public static function blogger(){
        echo'Hi my King We greet you from blogger';
    }

    public static function notFound(){
       require __DIR__ . '/../views/error404.php';
    }
}