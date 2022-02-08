<?php

	if(!(empty($message)) && $message !== '(null)'):
		echo nl2br(esc($message));
	else:
		echo '404';
	endif;
