<?php

	/**
	 * 
	 * Prints human-readable information
	 * 
	 * @param array | object $data
	 * @return string
	 * 
	 */
	function pd( array | object $data ) : void {
		echo '<pre>';
		print_r( $data );
		echo '</pre>';
	}
