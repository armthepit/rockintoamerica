<?php
	// Check to see if a session has been started. If not start one.
	if(!isset($_SESSION)) {
		session_start();
	}

	// Site domain name with http
	defined("SITE_URL")
		|| define("SITE_URL", "http://".$_SERVER['SERVER_NAME']);

	defined("SITE_URL")
		|| define("SITE_URL", "http://".$_SERVER['SERVER_NAME']);
?>