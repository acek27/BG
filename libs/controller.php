<?php

class controller {

    protected $view;
    protected $model;

    function __construct() {
        $this->view = new view();
        $this->model = new model();
    }

}