<?php

class Router{
    protected $routes = [];

    public function define($routes){
        $this->routes = $routes;
    }

    // this is no instance method, it is a static method
    // here
    public static function load($file){

        // create instance of router
        $router = new static;

        require $file;

        // because is static, it cannot access to object "this"
        //return $this;

        // have to use previous created instance
        return $router;
    }

    public function direct($uri){
        // redirecting
        if (array_key_exists($uri, $this->routes)){
            return $this -> routes[$uri];
        }
        throw new Exception('no route defined for this URI');
    }
}
