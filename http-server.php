<?php

use Swoole\Http\{Request, Response, Server};

$server = new Server('0.0.0.0', 8080);

// http://localhost:8080/
$server->on('request', function (Request $request, Response $response) {
    // var_dump($request->get);
    $response->header('Content-Type', 'text/html; charset=utf-8');
    $response->end(print_r($request->header, true));
});

$server->start();
