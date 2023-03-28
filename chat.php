<?php

require './vendor/autoload.php';


use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Chat\ChatServer;

$app = IoServer::factory(
  new HttpServer(
      new WsServer(
          new ChatServer()
      )
  ),
  8085
);
$app->run();
