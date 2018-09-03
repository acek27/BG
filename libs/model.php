<?php

class model {

    function __construct() {
        $this->db = new database();
    }

    function load($model) {
        $path = 'app/model/m_' . $model . '.php';
        if (file_exists($path)) {
            require_once($path);
            $modelName = 'm_' . $model;
            return new $modelName();
        } else {
            echo 'Kesalahan: m_' . $model . '.php tidak ditemukan';
        }
    }

}
