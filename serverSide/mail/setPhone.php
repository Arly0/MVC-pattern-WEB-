<?php
function findPhone($db){
    // try find phone in DB, (antispam) and if don`t find, add him
    $phone = htmlentities(strip_tags($_POST['offer_number']));
    $phone = md5($phone);

    $query = $db->prepare("SELECT * FROM `kfsfkIP` WHERE `phone` = $phone");
    $queryInsert = $db->prepare("INSERT INTO `kfsfkIP`(`phone`) VALUES ('$phone')");

    // екзекютаем и проверяем на наличие телефонов
    $query->execute();

    if($query->fetch(PDO::FETCH_NUM))
    {
        // пытаемся занести новый телефон в БД
        try{
            $queryInsert->execute();
        }
        catch (Exception $exception){
            echo "DB connection error: $exception";
            // нужно ли тут ретурнить 0 и заканчивать скрипт
        }

        return 1;
    }
    else
    {
        return 0;
//        echo "Мы обнаружили, что вы уже отправляли форму" . homePage();
    }
}
?>