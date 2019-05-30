<?php

require_once "../vendor/autoload.php";

use App\Controllers\HomeController;

// Load defaults configuration
$settings = require __DIR__ . '/../src/settings.php';

$home = new HomeController();

echo $home->index();
