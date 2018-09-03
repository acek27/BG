<?php

class view {

    private $path;

    function __construct() {
    }

    public function display($view, $controller = '') {
        if ($controller != '') {
            $path = 'app/view/' . $controller . '/v_' . $view . '.php';
            if (file_exists($path)) {
                require_once 'app/view/v_header.php';
                require_once($path);
                require_once 'app/view/v_footer.php';
            } else {
                echo 'Kesalahan: v_' . $view . '.php tidak ditemukan';
            }
        } else {
            $path = 'app/view/v_' . $view . '.php';
            if (file_exists($path)) {
                require_once 'app/view/v_header.php';
                require_once($path);
                require_once 'app/view/v_footer.php';
            } else {
                echo 'Kesalahan: v_' . $view . '.php tidak ditemukan';
            }
        }
    }

}
