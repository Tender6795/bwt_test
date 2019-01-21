<?php
require_once "../Config.php";
require_once  "../Model/UserModel.php";
$user= new UserModel();
$user->firstname= (isset($_POST["firstname"])) ? $_POST["firstname"] : "";
$user->lastname = (isset($_POST["lastname"])) ? $_POST["lastname"] : "";
$user->email = (isset($_POST["email"])) ? $_POST["email"] : "";
$user->password = (isset($_POST["password"])) ? $_POST["password"] : "";
$user->gender = (isset($_POST["gender"])) ? $_POST["gender"] : "";
$user->date = (isset($_POST["date"])) ? $_POST["date"] : "";

if ($user->firstname == "" || $user->lastname == "" || $user->email == "" || $user->password == "") {
    header("Location: ../View/registrationView.html ");
    exit();
} else {


//echo $host+" ";
//echo $username+" ";
//echo $password+" ";
//echo $dbName+" ";

    $link = mysqli_connect($host,$usernameDb , $passwordDb, $dbName);
    if ($link === false) {
        echo "Error connect to MySql({mysqli_errno_connect()}):{mysqli_errno_connect()}<br/>";
        exit();
    }

    //echo  '<pre>'.print_r($user, 1)."</pre>";

    //$query="INSERT INTO `users`  (`id`,`firstname`, `lastname`,`email`,`password`, `date`, `gender`)  VALUES ( Null ,'".$user->firstname."','".$user->lastname."','".$user->email."','".$user->password."','".$user->date."', '".$user->gender."'); ";
    $query="INSERT INTO ".$dbUser."     VALUES ( Null ,'".$user->firstname."','".$user->lastname."','".$user->email."','".$user->password."','".$user->date."', '".$user->gender."'); ";

    //  echo $query;
    if(mysqli_query($link,$query))
    {
        header("Location: ../index.php ");
        exit();
    }
    else
    {
        echo "Error add to base";
    }


    //echo $user.$gender;

}



