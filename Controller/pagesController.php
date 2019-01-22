<?php
session_start();
if($_SESSION['id']==null){
    header("Location: ../View/singUpView.html ");
    exit();
}
$button = (isset($_POST["button"])) ? $_POST["button"] : "";

if($button=="Погода"){
    header("Location: ../Controller/weatherController.php ");  //Пока что не работает
    exit();
}
else if($button=="Форма обратной связи"){
    header("Location: ../View/callbackFormView.html ");
    exit();
}
else if($button=="Список фидбеков"){
    header("Location: ../Controller/allCallbackController.php ");  //Пока что не работает
    exit();

}
else if($button=="Выход"){
    $_SESSION['id']=null;
    header("Location: ../index.php ");
    exit();
}