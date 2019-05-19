<?php
include_once("../../db.php");
include_once ("../lib.php");

$db = db::getConnect();

$mail = trim(htmlspecialchars($_POST['forgot']));

// проверка на наличие
if(findMail($mail, $db)){
    echo "Письмо было отправлено на почту";
}
else{
    echo "Такой почты не существует.";
    exit();
}

// генерируем пароль
$newPass = generatePass();

$myMail = "example@gmail.com";
$theme  = "Восстановление пароля";
$mail = urldecode($mail);
    $message = "Сброс пароля для сайта <a href='kfsk.com.ua'>KFSFK.com.ua</a>.\r\n 
    Новый пароль для вашего аккаунта : " . $newPass . ".";

if(setPass($newPass, $mail, $db))
{
    if(mail($myMail, $theme, $message)){
        echo "Новый пароль был отправлен к вам на почту.";
    }
    else {
        echo "Сбой при отправке нового пароля на мыло";
    }
}
else{
    echo "Ошибка при обновлении пароля";
    exit();
}




?>