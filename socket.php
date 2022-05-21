<?php

	$socket = socket_create(AF_INET, SOCK_STREAM, 0);

	socket_bind($socket, '192.168.0.30', '8080');

	socket_listen($socket, 3);

	$spawn = socket_accept($socket);

	$input = socket_read($spawn, 1024);

	$response = json_decode($input);

	switch($response->action):

		case '1':
			socket_write($spawn, json_encode(['response' => 'Ok']));
		break;

		default;
			socket_write($spawn, json_encode(['response' => 'Fail']));
		break;

	endswitch;

	socket_close($spawn);

	socket_close($socket);

