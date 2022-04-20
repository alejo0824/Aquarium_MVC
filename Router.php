<?php

namespace MVC;

class Router{
    public array $saveRoutesGet =[];
    public array $saveRoutesPost =[];

    public function get ($url, $function){
        $this->saveRoutesGet[$url] = $function;
    }

    public function post ($url, $function){
        $this->saveRoutesPost[$url] = $function;
    }

    public function verifyRoutes(){
        echo ("Hello World , this is a test");
    }
}