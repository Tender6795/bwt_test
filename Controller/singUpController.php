<?php
require_once "../Config.php";

$email=(isset($_POST["email"])) ? $_POST["email"] : "";
$password = (isset($_POST["password"])) ? $_POST["password"] : "";
session_start();
if ($email == "" || $password == "") {
    header("Location: ../View/singUpView.html ");
    exit();
}

$link = mysqli_connect($host,$usernameDb , $passwordDb, $dbName);
if ($link === false) {
    echo "Error connect to MySql({mysqli_errno_connect()}):{mysqli_errno_connect()}<br/>";
    exit();
}

$query="SELECT * FROM  ".$dbUser." WHERE `email` LIKE '".$email."' AND `password` LIKE '".$password."'";
$result = mysqli_query($link,$query);
$count=$result->num_rows;

for ($i=0;$i<$count;$i++){
    $row=$result->fetch_assoc();
    $_SESSION['id']=$row['id'];
}


header("Location: ../index.php ");
    exit();



