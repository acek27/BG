<?php

class routing {

    function __construct() {

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if (empty($url[0])) {
            require 'app/controller/home.php';
            $controller = new home();
            $controller->index();
            return false;
        }

        $file = 'app/controller/' . $url[0] . '.php';

        if (file_exists($file)) {
            require $file;
        } else {
            require 'app/controller/error.php';
            $error = new error();
            return false;
        }

        $controller = new $url[0]();

        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            } else {
                echo "error";
            }
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
            } else {
                $controller->index();
            }
        }
    }

}
