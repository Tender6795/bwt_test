<?php
session_start();
if($_SESSION['id']==null){
    header("Location: ../View/singUpView.html ");
    exit();
}
$button = (isset($_POST["button"])) ? $_POST["button"] : "";

if($button=="Погода"){
    header("Location: weatherController.php ");  //Пока что не работает
    exit();
}
else if($button=="Форма обратной связи"){
    header("Location: ../View/callbackFormView.php ");
    exit();
}
else if($button=="Список фидбеков"){
    header("Location: allCallbackController.php ");  //Пока что не работает
    exit();

}
else if($button=="Выход"){
    $_SESSION['id']=null;
    header("Location: ../View/singUpView.html ");
    exit();
}