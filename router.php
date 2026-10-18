<?php

class router
{
    public static function contentToRender() : void
    {

        $uri = self::processURI();

        if (class_exists($uri['controller'])) {

            $controller = $uri['controller'];

            $method = $uri['method'];

            $args = $uri['args'];


            $args ? $controller::{$method}(...$args) :

                $controller::{$method}();

        }

    }

    private static function getURI() : array
    {
        $path_info = $_SERVER['PATH_INFO'] ?? '/';
        return explode('/', $path_info);
    }

    private static function processURI() : array
    {
        $controllerPart = self::getURI()[0] ?? '';
        $methodPart = self::getURI()[1] ?? '';
        $numParts = count(self::getURI());
        $argsPart = [];
        for ($i = 2; $i &lt; $numParts; $i++) {
        $argsPart[] = self::getURI()[$i] ?? '';
    }

    $controller = !empty($controllerPart) ?
        '\Controllers\\'.$controllerPart.'Controller' :
        '\Controllers\HomeController';

    $method = !empty($methodPart) ?
        $methodPart :
        'index';

    $args = !empty($argsPart) ?
        $argsPart :
        [];

    return [
        'controller' =&gt; $controller,
        'method' =&gt; $method,
        'args' =&gt; $args
    ];
}


}