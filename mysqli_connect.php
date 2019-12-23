<?php
DEFINE('DB_USER', 'studentweb');
DEFINE('DB_PASSWORD', 'happy');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'test3');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR dies('Could not connect to MySQL: ' .
	mysqli_connect_error());
?>