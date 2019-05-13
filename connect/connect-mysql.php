<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', 'FFwachten123!');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'connect-mysql1');

$dbcon = mysqli_connect(DB_HOST,DB_USER, DB_PSWD, DB_NAME);

if (!$dbcon) {
    die('error connecting to database');
}
echo 'you have connected successfully';
