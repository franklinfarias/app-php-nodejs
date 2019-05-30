<?php

namespace App\Controllers;

use FKS\Channels\NodeJS;

class HomeController extends Controller
{
    public $channel;

    public function __construct()
    {
        parent::__construct();
        $this->channel = new NodeJS();
    }

    public function index()
    {
        if (!$this->post())
            return 'Error';
        return 'Index with Node.js';
    }

    public function post()
    {
        // generate message json
        $buffer = json_encode(
            [
                'key' => md5('my_key'),
                'message' => 'Create new post'
            ]
        );
        $this->logger->info('generate json',[$buffer]);
        return $this->channel->send($buffer);
    }
}