<?php

namespace MVC;
use Controllers\PagesController;

class Router{
    public array $routesGet =[];
    public array $routesPost =[];

    public function get ($url, $function){
        $this->routesGet[$url] = $function;
    }

    public function post ($url, $function){
        $this->routesPost[$url] = $function;
    }

    public function verifyRoutes(){        
        $actualRoute = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET'){
            $function = $this->routesGet[$actualRoute] ?? NULL;
        } else{
            $function = $this->routesPost[$actualRoute] ?? NULL;
        }
        
        if ($function){
            call_user_func($function, $this);            
        } else {
            call_user_func([PagesController::class,'notFound']);
        }        
    }

    public function render($view, $data = []){
        foreach($data as $key => $value){
            $$key = $value;
        }
        ob_start();
        include __DIR__ . "/views/$view.php";

        $content = ob_get_clean();

        include __DIR__ ."/views/layout.php";
    }
}