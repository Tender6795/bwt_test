
//<form action="Controller/pagesController.php" method="post">
/*    <input type="hidden" value="<?=  $_SESSION["id"] ?>">*/
//    <input type="submit" value="Погода" class="btn btn-success btn-send" name="button">
//    <input type="submit" value="Форма обратной связи" class="btn btn-success btn-send" name="button">
//    <input type="submit" value="Список фидбеков" class="btn btn-success btn-send" name="button">
//    <input type="submit" value="Выход" class="btn btn-success btn-send" name="button">
//</form>



$str="<form action='pagesController.php' method='post'>";
$str.="<input type='hidden' value='".$_SESSION["id"]."'>";
$str.="<input type=\"submit\" value=\"Погода\" class=\"btn btn-success btn-send\" name=\"button\">";
$str.="<input type=\"submit\" value=\"Форма обратной связи\" class=\"btn btn-success btn-send\" name=\"button\">";
$str.="<input type=\"submit\" value=\"Список фидбеков\" class=\"btn btn-success btn-send\" name=\"button\">";
$str.="<input type=\"submit\" value=\"Выход\" class=\"btn btn-success btn-send\" name=\"button\">";
$str.="</form>";
echo $str;