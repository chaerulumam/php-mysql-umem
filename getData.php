<?php
require_once __DIR__ . './getConnection.php';

$connection = getConnection();

$sql = "SELECT * FROM customers";
$result = $connection->query($sql);

foreach ($result as $row) {
    var_dump($row);
}

$connection = null;


?>
