<?php

require "./getConnection.php";

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers (id, name, email)
    VALUES('C002', 'Chaerul', 'chaerul@gmail.com');

SQL;

$connection->exec($sql);


$connection = null;

?>
