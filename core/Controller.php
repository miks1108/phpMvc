<?php

class Controller {
    protected function view($viewName, $layout = 'main') {
        $filePath = 'views/' . $viewName . '.php';

        if(file_exists($filePath)) {
            $layoutPath = 'views/layout/' . $layout . '.php';
            if(file_exists($layoutPath)) {
                include $layoutPath;
            }
            else {
                // TODO: execute layout not found error
            }
        }
        else {
            // TODO: execute view not found error
        }
    }
}