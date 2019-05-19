<?php

class Account
{
    public static function getAccount($id)
    {
        $id = intval($id[0]);

        if($id)
        {
            $db = db::getConnect();

        $accountInfo = array();

        //select info
        $query = $db->query("SELECT * FROM `signin` WHERE `id` = $id");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $accountInfo = $query->fetch();
        // добавление стандартной аватарки, если не была установлена кастомная
        if($accountInfo['imgURL'] == '')
            $accountInfo['imgURL'] = 'avatar-default.png';
        //struct info
//        $i = 0;
//        while($row = $query->fetch()){
//            $accountInfo[$i]['id'] = $row['id'];
//            $accountInfo[$i]['email'] = $row['email'];
//            $accountInfo[$i]['password'] = $row['password'];
//            $accountInfo[$i]['nickname'] = $row['nickname'];
//            $i++;
//        }

        return $accountInfo;
        }
    }

//    public static function getNickName($id){
//        $db = db::getConnect();
//
//        $query = $db->query("SELECT `nickname` FROM `signin` WHERE `id` = $id");
//        $row = $query->fetch(PDO::FETCH_ASSOC);
//        $nick = $row['nickname'];
//
//        return $nick;
//    }
}