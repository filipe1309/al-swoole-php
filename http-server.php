<?php

use Swoole\Http\Server;

$server = new Server('0.0.0.0', 8080);

$server->on('request', function ($request, $response) {
    $response->end("<h1>Hello Swoole!</h1>");
});

$server->start();
