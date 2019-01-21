<?php
session_start();
if($_SESSION['id']==null){
    header("Location: ../View/singUpView.html ");
    exit();
}
$message = (isset($_POST["message"])) ? $_POST["message"] : "";
if($message==null){
    header("Location: ../View/callbackFormView.html ");
    exit();
}
require_once "../Config.php";

$link = mysqli_connect($host,$usernameDb , $passwordDb, $dbName);
if ($link === false) {
    echo "Error connect to MySql({mysqli_errno_connect()}):{mysqli_errno_connect()}<br/>";
    exit();
}

$query="INSERT INTO ".$dbComments."     VALUES ( Null ,'".$message."','".$_SESSION['id']."'); ";
if(mysqli_query($link,$query))
{
    echo "Insertet";
}
else
{
    echo "Error add to base";
}
