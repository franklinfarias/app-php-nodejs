<?php

namespace App\Controllers;

use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Monolog\Handler\StreamHandler;

class Controller
{
    public $settings;
    public $logger;

    public function __construct()
    {
        $this->settings = require __DIR__ . '/../../src/settings.php';
        $this->logger = new Logger($this->settings['settings']['logger']['name']);
        $this->logger->pushProcessor(new UidProcessor());
        $this->logger->pushHandler(
            new StreamHandler($this->settings['settings']['logger']['path'], 
            $this->settings['settings']['logger']['level'])
        );
    }
}