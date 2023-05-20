<?php
require "./getConnection.php";

$connection = getConnection();

$username = $connection->quote("admin123");
$password = $connection->quote("admin121");
$sql = "SELECT * FROM admin WHERE username = $username AND password = $password";

echo $sql . PHP_EOL;

$statement = $connection->query($sql);
$success = false;
$find_user = null;
foreach ($statement as  $row) {
    $success = true;
    $find_user = $row['username'];
}

if ($success) {
    echo "Sukses Login: " . $find_user . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}

$connection = null;

?>
