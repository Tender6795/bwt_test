<?php
session_start();
if($_SESSION["id"]==null ){
    header("Location: ../View/singUpView.html ");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Точка входа</title>
</head>
<body>
<form action="Controller/pagesController.php" method="post">
    <input type="hidden" value="<?=  $_SESSION['id'] ?>">
    <input type="submit" value="Погода" class="btn btn-success btn-send" name="button">
    <input type="submit" value="Форма обратной связи" class="btn btn-success btn-send" name="button">
    <input type="submit" value="Список фидбеков" class="btn btn-success btn-send" name="button">
    <input type="submit" value="Выход" class="btn btn-success btn-send" name="button">
</form>
</body>
</html>