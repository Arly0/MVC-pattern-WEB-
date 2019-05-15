<?php
if(isset($_POST['sbm'])){

}
else{
    echo 'whoops';
    exit();
}

    include_once ("../../db.php");
    include_once ("../lib.php");
    $db = db::getConnect();

    $mail = trim(htmlspecialchars($_POST['login']));
    $pass = trim(htmlspecialchars($_POST['password']));
    $remember = $_POST['remember'];

// смотрим на существование почты
if(findMail($mail, $db)){

}
else{
        echo ('Данная почта не зарегестрирована');
        exit();
}

// проверка соответстсвия пароля
if(checkPass($mail, $db, $pass)){

}
else{
        echo 'wrong pass';
        exit();
}

// нужно получить id пользователя
    $id = takeID($mail, $db);

if(isset($remember)){
    // тут создаются куки файлы
        $name = "kfsk_cookie";
        $timer = time() + 3600;
    // create cookie

        try{
            setcookie($name, $id, $timer, '/');
        }
        catch (Exception $e){
            print_r('error: ' . $e);
            exit();
        }
}
else{
    // тут сессия
        session_start();
        $_SESSION['id'] = $id;
}
//echo $_SERVER['DOCUMENT_ROOT'];
//exit();
//  в проекте заменить localhost на $_SERVER['DOCUMENT_ROOT'];
header("Location:http://localhost/sindo_kab/account/" . $id);

?>