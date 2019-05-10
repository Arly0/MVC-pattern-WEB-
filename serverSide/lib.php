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
        $query = $db->query("SELECT `nickname` FROM `signin` WHERE `id` = $id");
        $row = $query->fetch(PDO::FETCH_ASSOC);
        $nick = $row['nickname'];

        return $nick;
    }
?>