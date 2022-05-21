<?php

	class Client {

		const IP   = '192.168.0.30';
		const PORT = '8080';

		private $socket = NULL;

		public function __construct() {
			set_time_limit(0);
			$this->socket = socket_create(AF_INET, SOCK_STREAM, 0);
			socket_connect($this->socket, self::IP, self::PORT);
		}

		public function sendMessage() {
			$data = [
				'action' => '1',
				'data'   => [0, 1, 2]
			];
		
			socket_write($this->socket, json_encode($data));
		
			$response = socket_read($this->socket, 1024);
		
			echo $response;

			unset($data);
			socket_close($this->socket);
		}

	}

	$client = new Client();
	$client->sendMessage();
