<?php

function getConnection(): PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "php_mysql_db";
    $username = "root";
    $password = "root";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}

?>
