<?php
if(isset($_POST['reg-sbm'])){

}
else{
    echo ('Вы зашли странными путями сюда');
    exit();
}
//define('ROOT', dirname(__FILE__)); не знает что такое рут. / проверить работу введения существующей почты.
include_once ("../../db.php");
include_once ("../lib.php");
$db = db::getConnect();

// берем значения из фомры
$mail   = trim(htmlspecialchars($_POST['email']));
$pass   = trim(htmlspecialchars($_POST['pass']));
$nick   = trim(htmlspecialchars($_POST['nick']));
$fio    = trim(htmlspecialchars($_POST['fio']));
$age    = trim(htmlspecialchars($_POST['age']));
$exp    = trim(htmlspecialchars($_POST['exp']));
$about  = trim(htmlspecialchars($_POST['about']));
$file   = $_FILES['file'];
$status = 0;

//echo ("$mail \n $pass \n $fio \n $age \n $exp \n $about \n");

// поиск на наличие идентичной почты

if(findMail($mail, $db)){
    echo ('Почта занята. Попробуйте другую.');
    exit();
}

// кешируем пароль
$pass = hidePass($pass);

if($file['error'] != 4) {
// проверяем файл, что эток артинка
if(secureAvatar($file))
{}
else{
    echo "Файл неверного формата";
    exit();
}


    $fileName = loadAvatar($file);
    if (!$fileName) {
        echo "Файл не был установлен по тех.причинам. Попробуйте позже.";
        exit();
    }
}

// перед этим необходимо закешировать пароли, создать имя картинки, сохранить ее.
// ввод данных в БД
if($db->exec("INSERT INTO `signin` (`id`, `email`, `password`, `nickname`, `fio`, `age`, `expirience`, `about`, `imgURL`, `status`) VALUES ('', '" . $mail . "', '" . $pass . "', '" . $nick . "', '" . $fio . "', $age, $exp, '" . $about . "', '" . $fileName . "', $status)"))
{
    echo "Успешно добавлено";
}
else{
    echo "Не могу добавить в БД";
    print_r($db->errorInfo());
    exit();
}

$pass = hidePass($pass);




?>