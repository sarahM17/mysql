<?php
$host = 'localhost';
$dbname = 'reunion_island';
$username = 'root';
$password = 'FFwachten123!';
try {
    $newpdo = new PDO("mysql1:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    echo "hallo";

} catch (PDOException $i) {
    die("Could not connect to the database $dbname :" . $i->getMessage());
}
?>
