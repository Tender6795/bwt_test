<?php
require_once "../Config.php";

$link = mysqli_connect($host, $usernameDb, $passwordDb, $dbName);
if ($link === false) {
    echo "Error connect to MySql({mysqli_errno_connect()}):{mysqli_errno_connect()}<br/>";
    exit();
}

$query = "SELECT message,firstname,lastname FROM  " . $dbComments . " m INNER JOIN " . $dbUser . " d ON m.userId = d.id";
$result = mysqli_query($link, $query);
$count = $result->num_rows;
for ($i = 0; $i < $count; $i++) {
    $row = $result->fetch_assoc();


    echo $row['firstname'] . " " . $row['lastname'] . "<br>";
    echo $row['message'] . "<br><br>";


}