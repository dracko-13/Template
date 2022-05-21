<?php

	require_once( '/https/socket.php' );
	require_once( '/https/vendor/autoload.php' );

	use Ratchet\Server\IoServer;
	use Ratchet\Http\HttpServer;
	use Ratchet\WebSocket\WsServer;

	$server = IoServer::factory(
		new HttpServer(
			new WsServer(
				new MySocket()
			)
		),
		8080
	);

	$server->run();
