<?php

require "./getConnection.php";

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO admin (username, password)
    VALUES('admin123', 'admin123');

SQL;

$connection->exec($sql);


$connection = null;

?>
