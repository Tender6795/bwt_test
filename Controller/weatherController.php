<?php
session_start();
if($_SESSION['id']==null){
    header("Location: ../View/singUpView.html ");
    exit();
}
function Parse($p1, $p2, $p3)   //p1-адресс сайта,p2-первый уникальный элемент, p3-второй уникальный элемент
{
    $num1 = strpos($p1, $p2);

    if ($num1 === false) {
        return 0;
    }

    $num2 = substr($p1, $num1);
    return  substr($num2, 0,strpos( $num2,$p3));
}


$String = file_get_contents("https://www.gismeteo.ua/weather-zaporizhia-5093/");
//$String1 = '<div class="temp">';
//$String2 = '</div>';
//$strTmp=$String1;
// $strTmp.= Parse($String,$String1,$String2).$String2;
$String1 = '<div class="wsection wdata">';
$String2 = '<div class="section bottom">';
$strTmp=$String1;
$strTmp.= Parse($String,$String1,$String2);

echo $strTmp;
//echo $String;