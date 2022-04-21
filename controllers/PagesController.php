<?php

namespace Controllers;

class PagesController{
    public static function home(){
        echo'Hi my King We greet you from Home';
    }

    public static function aboutUs(){
        echo'Hi my King We greet you from aboutUs';
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
        echo'Sorry my King This Page not Exist : error 404';
    }
}