<?php

include_once ROOT . '/model/Account.php';

class AccountController
{
    public function actionIndex($id)
    {
        // общий вид
        $accountInfo = array();
        $accountInfo = Account::getAccount($id);
//        print_r($accountInfo);
        require_once(ROOT . '/view/account/index.php');



        return true;
    }

   /* public function actionView()
    {
        // страничка конкретного юзера
//        $accountInfo = array();
//        $accountInfo = Account::getAccount(1);
        // print information about acccount
//        echo "<pre>";
//        print_r($accountInfo['nickname']);
//        echo "</pre>";
    }*/
}