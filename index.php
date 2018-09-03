<?php

require 'config/path.php';
require 'config/database.php';
require 'libs/routing.php';
require 'libs/controller.php';
require 'libs/view.php';
require 'libs/model.php';
require 'libs/database.php';
require 'libs/session.php';

session::start();

$app = new routing();