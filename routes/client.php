<?php

use Hai\NsPsr4\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');