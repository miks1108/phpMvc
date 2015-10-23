<?php

class Route {
    public static function start() {
        $controllerName = 'MainController';
        $actionName = 'indexAction';

        $rotes = explode('/', $_SERVER['REQUEST_URI']);

        if(!empty($rotes[1])) {
            $controllerName = $rotes[1] . 'Controller';
        }

        if(!empty($rotes[2])) {
            $actionName = strtolower($rotes[2]) . 'Action';
        }

        $controllerFilePath = 'controllers/' . $controllerName . '.php';

        if(file_exists($controllerFilePath)) {
            include $controllerFilePath;

            $controller = new $controllerName;

            if(method_exists($controller, $actionName)) {
                $controller->$actionName();
            }
        }
        else {
            header('Status: 404 Not Found');
            echo '<h1>404 Not Found</h1>';
        }

    }
}