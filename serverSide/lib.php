<?php

        // поиск почты в бд
    function findMail($mail, $db){
        $select = $db->prepare("SELECT * FROM `signin` where `email` = :mail");
            // настроить параметры
        $select->bindValue(':mail', $mail, PDO::PARAM_STR);
        $select->execute();
        $result = $select->fetchColumn();
            // проверка на наличие такой почты
        if($result){
            return true;
        }
        else{
            return false;
        }
    }


        // проверка на совпадение пароля с почтой
    function checkPass($mail, $db, $pass){
        $select = $db->prepare("SELECT `password` FROM `signin` where `email` = :mail");

        // как сравнить пароль с параметров с паролем с БД

        $select->bindValue(':mail', $mail, PDO::PARAM_STR);
        $select->execute();
        // получаем пароль
        $data = $select->fetch(PDO::FETCH_ASSOC);
        // декодирование пароля

        if(password_verify($pass, $data['password'])){
            return true;
        }
        else{
            return false;
        }
    }


        // кеширование пароля
    function hidePass($password){
        $password = password_hash($password, PASSWORD_DEFAULT);

        return $password;
    }

        // получение id
    function takeID($mail, $db){
        $select = $db->prepare("SELECT `id` FROM `signin` where `email` = :mail");

        $select->bindValue(':mail', $mail, PDO::PARAM_STR);
        $select->execute();

        $data = $select->fetch(PDO::FETCH_ASSOC);

        // тут мб проверка на инт или что-то такое

        return $data['id'];
    }


        // отображение либо ник либо кнопки ***********************************
    function showNick($id, $db){
//        $query = $db->query("SELECT `nickname` FROM `signin` WHERE `id` = $id");
//        $row = $query->fetch(PDO::FETCH_ASSOC);
//        $nick = $row['nickname'];
        $query = "SELECT `nickname` FROM `signin` WHERE `id` = $id";
        $result = mysqli_query($db, $query);
        $nick = mysqli_fetch_assoc($result);

        return $nick;
    }


        // работа с изображением
    function secureAvatar($avatar){
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

        // проверка на разрешение
        if(!$data = getimagesize($avatar))
            return false;
        if($data[0] < 200 || $data[1] < 200)
            return false;

        return true;
    }

        // загрузить аватарку
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

        // устанавливаем куку
    function setMyCookie(){
        // set cookie
        $ip = setIP();

        $cookie = md5($ip);
        $cookieLife = time() + 60;
        setcookie("kfskSetIP", $cookie, $cookieLife);
    }

        // устанавливаем ip
    function setIP(){
        // get ip
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = @$_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
        elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
        else $ip = $remote;

        return $ip;
    }

        // генерация нового пароля
    function generatePass(){
        $chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";

        $max = 12;
        $min = 6;

        $size = strlen($chars) - 1;

        $pass = null;
        $passLen = rand($min, $max);

        while ($passLen--){
            $pass .= $chars[rand(0, $size)];
        }

        return $pass;
    }


        // внесение нового пароля в бд
    function setPass($pass, $mail, $db){
        $query = "UPDATE `signin` SET 'password' = :pass WHERE `email` = :mail";

        $stmt = $db->prepare($query);
        $stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
        $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
        if($stmt->execute()){
//            echo "Изменение пароля прошло успешно ... ссылочка";
            return true;
        }
        else{
//            echo "Сбой при смене пароля";
            return false;
        }
    }
?>