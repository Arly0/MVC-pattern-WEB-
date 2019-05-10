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

// проверяем файл, что эток артинка
if(secureAvatar($file))
{}
else{
    echo "Файл неверного формата";
    exit();
}

$fileName = loadAvatar($file);
if(!$fileName){
    echo "Файл не был установлен по тех.причинам. Попробуйте позже.";
    exit();
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


function secureAvatar($avatar)
{
        $name = $avatar["name"];
        $type = $avatar["type"];
        $size = $avatar["size"];
        $blacklist = array(".php3",".php",".phtml",".php4");

        // проверяем формат файла на совпадение с черным списком
        foreach ($blacklist as $item){
            if(preg_match("/$item\$/i", $name))
                return false;
        }

        // проверка на тип
        if(($type != "image/gif") && ($type != "image/png") && ($type != "image/jpg") && ($type != "image/jpeg"))
            return false;

        // проверка на размер
        if($size > 2 * 1024 * 1024)
            return false;

        return true;
}


function loadAvatar($avatar){
        $type = $avatar["type"];
        $uploadDir = "../../avatars/";

        // получаем расширение
        $name = md5(microtime()) . "." . substr($type, strlen("image/"));

        $uploadFile = $uploadDir . $name;

        // перемещаем файл в папку корня
        if(move_uploaded_file($avatar["tmp_name"], $uploadFile)){
//                setAvatar($id, $name); // нужна ли функция занесения? я занесу вместе с инсертом все
            return $name;
        }
        else{
            return false;
        }
}

?>