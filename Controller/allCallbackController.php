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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма обратной связи</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://bootstraptema.ru/snippets/form/2017/recaptcha/custom.css' rel='stylesheet' type='text/css'>
    <script src='https://www.google.com/recaptcha/api.js?render=6Ld_vYoUAAAAAK3I-dxAw0HdWtIp7JuFaD7WSv6h'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://bootstraptema.ru/snippets/form/2017/recaptcha/validator.js"></script>
    <script src="http://bootstraptema.ru/snippets/form/2017/recaptcha/contact.js"></script>
</head>
<body>
<form action="../Controller/pagesController.php" method="post">
    <input type="hidden" value="<?= $_SESSION["id"] ?>">
    <input type="submit" value="Погода" class="btn btn-success btn-send" name="button">
    <input type="submit" value="Форма обратной связи" class="btn btn-success btn-send" name="button">
    <input type="submit" value="Список фидбеков" class="btn btn-success btn-send" name="button">
    <input type="submit" value="Выход" class="btn btn-success btn-send" name="button">
    <style>
        body {
            top: 20px;
            left: 30px;
            position: absolute;
        }

    </style>
</form>
<form action="../Controller/callbackController.php" method="post">

    <?php
    //$count=0;
    for ($i = 0;
    $i < $count;
    $i++) {
        $row = $result->fetch_assoc();


        if ($i % 2 == 0) {

            echo "<p class=\"alert alert-info\">" . $row['firstname'] . " " . $row['lastname'] . "<br>";
            echo $row['message'] . "</p><br>";
        } else {
            echo "<p class=\"alert alert-success\">" . $row['firstname'] . " " . $row['lastname'] . "<br>";
            echo $row['message'] . "</p><br>";
        }
    }
    ?>


</form>
</body>
</html>
