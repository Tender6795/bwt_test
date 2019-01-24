<?php
session_start();
if ($_SESSION["id"] == null) {
    header("Location: ../View/singUpView.html ");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Точка входа</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://bootstraptema.ru/snippets/form/2017/recaptcha/custom.css' rel='stylesheet' type='text/css'>
    <script src='https://www.google.com/recaptcha/api.js?render=6Ld_vYoUAAAAAK3I-dxAw0HdWtIp7JuFaD7WSv6h'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://bootstraptema.ru/snippets/form/2017/recaptcha/validator.js"></script>
    <script src="http://bootstraptema.ru/snippets/form/2017/recaptcha/contact.js"></script>
    <style>
        body{
            top:20px;
            left:30px;
            position: absolute;
        }
    </style>
</head>
<body>
<form action="Controller/pagesController.php" method="post">
    <input type="hidden" value="<?= $_SESSION["id"] ?>">
    <input type="submit" value="Погода" class="btn btn-success btn-send" name="button">
    <input type="submit" value="Форма обратной связи" class="btn btn-success btn-send" name="button">
    <input type="submit" value="Список фидбеков" class="btn btn-success btn-send" name="button">
    <input type="submit" value="Выход" class="btn btn-success btn-send" name="button">
</form>
<div class="jumbotron">
    <h1>Добро пожаловать на сайт</h1>
</div>
</body>
</html>