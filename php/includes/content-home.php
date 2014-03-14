<?php

require_once( ABSPATH.'config.php' );
	
	if ($site_live == False) {
		include 'notify-comingsoon.php';	
	} else {
		include 'pledge-form.php';
	}
	
?>