<?php

namespace MVC;


class App {
private static $instance;

private array $container = [];

public function singleton(\Closure $closure,String $name){
   $value = $closure($this);
   $this->container[$name] = $value;
}
public function make(string $name){
    if(isset($this->container[$name])){
        return dump($this->container[$name]);
}}
public static function getInstance() {
    if (self::$instance === null) {
        self::$instance = new self();
    }

        return self::$instance;
}


public function boot() {
/* on remplira dans l'atelier suivant */
}
}