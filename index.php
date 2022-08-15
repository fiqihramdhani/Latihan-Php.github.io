<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'http:/localhost:8080/Project/';
	} else {
		$uri = 'http://localhost:8080/';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'http://localhost:8080/Project/');
	exit;
?>

