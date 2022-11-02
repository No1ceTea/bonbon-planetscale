<?php 
$hostname = $_ENV['HOST'];
$dbName = $_ENV['DATABASE'];
$port = $_ENV['PORT'];

$mysqli = mysqli_init();
$mysqli->real_connect($hostname, '', '', $dbName, $port);

if ($mysqli->connect_error) {
  echo 'not connected to the database';
} else {
  echo 'connected to the database';
}
