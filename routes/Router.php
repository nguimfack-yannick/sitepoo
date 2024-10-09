<?php

namespace Router;


class Router{

    public $url;
    public $routes = [];
   

    public function __construct($url)
    {
        $this->url = $url;
    }
    public function get(string $path, string $action)
    {
      $this->routes['GET'][] = new Route($path, $action);
    }
    public function run(){

        foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
            if($route->matches($this->url)){
                return $route->execute();                
            }
        }
      throw new  \Exception("La page demander est introuvable");
    }

   
}