<?php

	require_once( '/https/vendor/autoload.php' );

	use Ratchet\MessageComponentInterface;
	use Ratchet\ConnectionInterface;

	class MySocket implements MessageComponentInterface {

		public function __construct() {
			$this->clients = new \SplObjectStorage;
		}

		public function onOpen(ConnectionInterface $connection) {
			$this->clients->attach($connection);

			error_log('New connection: ' . $connection->resourceId . "\n", 3, '/https/logger/connections.log');
		}

		public function onMessage(ConnectionInterface $from, $message) {
			foreach( $this->clients as $client ):
				if( $from->resourceId == $client->resourceId ):
					continue;
				endif;
				$client->send($message);
				error_log(print_r($message, true), 3, '/https/logger/messages.log');
			endforeach;
		}

		public function onClose(ConnectionInterface $connection) {
		}

		public function onError(ConnectionInterface $connection, \Exception $e) {
		}

	}
