<?php

namespace core;

class Router
{
    public function route()
    {
        $controllerName = $_GET['controller'] ?? 'home';
        $actionName = $_GET['action'] ?? 'index';

        $controllerClass = ucfirst($controllerName) . 'Controller';
        $controllerFile = "../app/controllers/$controllerClass.php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $fullClassName = "App\\Controllers\\$controllerClass";
            $controller = new $fullClassName();

            if (method_exists($controller, $actionName)) {
                $controller->$actionName();
            } else {
                echo "Action '$actionName' not found.";
            }
        } else {
            echo "Controller '$controllerClass' not found.";
        }
    }
}
