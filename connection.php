<?php

$host = "localhost";
$port = 3306;
$database = "php_mysql_db";
$username = "root";
$password = "root";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses Terkoneksi" . PHP_EOL;

    // menutup koneksi
    $connection = null;

} catch (PDOException $exception) {
    echo "Error terkoneksi ke database " . $exception->getMessage() . PHP_EOL;
}

?>
