<?php

namespace MVC;


class App
{
    private static $instance;

    private array $container = [];

    public function singleton(\Closure $closure, string $name)
    {
        $value = $closure($this);
        $this->container[$name] = $value;
    }
    public function make(string $name)
    {
        if (isset($this->container[$name])) {
            return dump($this->container[$name]);
        } else {
            throw new \Exception('ça n\'existe pas ce service mon cher monsieur');
        }
    }
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    public function boot()
    {
        /* on remplira dans l'atelier suivant */
    }
}