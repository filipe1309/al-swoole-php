<?php

use Swoole\Http\{Request, Response, Server};
use Swoole\Coroutine\Http\Client;

Co::set(['hook_flags' => SWOOLE_HOOK_ALL]);

$server = new Server('0.0.0.0', 8080);

// http://localhost:8080/
$server->on('request', function (Request $request, Response $response) {
    // var_dump($request->get);
    // $response->header('Content-Type', 'text/html; charset=utf-8');
    // $response->end(print_r($request->header, true));

    $channel = new chan(2);
    go(function () use ($channel) {
        $client = new Client('localhost', 8001);
        $client->get('/server.php');

        $content = $client->getBody();
        $channel->push($content);
    });

    go(function () use ($channel) {
        $content = file_get_contents('file.txt');
        $channel->push($content);
    });

    go(function () use ($channel, $response) {
        $firstResponse = $channel->pop();
        $secondResponse = $channel->pop();

        $response->end($firstResponse . $secondResponse);
    });
});

$server->start();
