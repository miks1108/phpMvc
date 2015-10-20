<?php

class Controller {
    protected function view($viewName) {
        if(file_exists('views/' . $viewName . '.php')) {
            include 'views/layout/header.php';
            include 'views/' . $viewName . '.php';
            include 'views/layout/footer.php';
        }
    }
}