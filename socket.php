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

			echo 'New connection: ' . $connection->resourceId;
		}

		public function onMessage(ConnectionInterface $from, $msg) {
			foreach( $this->clients as $client ):
				if( $from->resourceId == $client->resourceId ):
					continue;
				endif;
				$client->send( "Client $from->resourceId said $msg" );
			endforeach;
		}

		public function onClose(ConnectionInterface $connection) {
		}

		public function onError(ConnectionInterface $connection, \Exception $e) {
		}

	}
