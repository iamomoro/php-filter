<?php

// set database connection
$databaseHost = 'localhost';
$databaseName = 'revpanda';
$databaseUsername = 'root';
$databasePassword = '';

$cser  = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//to show error message
if (!$cser) {
    die('Could not Connect MySql Server:' .  mysqli_connect_error());
}

?>