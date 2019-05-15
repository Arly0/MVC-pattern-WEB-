<?php
session_start();
//unset($_COOKIE["kfsk_cookie"]);
//setcookie("kfsk_cookie", '', time() - 3600, '/');
?>
<!DOCTYPE html>
<html lang="en">
<base href="http://localhost/sindo_kab/">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Криворожская Федерация Спортивного Каратэ | KFSK Кривой Рог</title>
    <meta name="description" content="Тренировки по каратэ Кривой Рог. Заслуженные тренера Украины. Федерация, стремительно набирающая популярнсоть в Кривом Рогу. Соревнования по всей Украине">
    <!--додумать дескрипшн-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500|Ubuntu:400,500&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="src/css/animate.min.css">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>



<?php
require_once(ROOT . '/view/header.php');


?>
<style>
    .account-sec{
        padding: 50px 0 100px 0;
        background-color: #0C0F1B;
    }
    .account__img-block{
        width: 100%;
        height: 300px;
        background-color: #000;
        background-image: url("avatars/<?=$accountInfo['imgURL']?>");
        background-size: auto 100%;
        background-position: center left 60%;
    }
    .account__info-container{

    }
    .account__title{
        color: #E43D4E;
        text-align: center;
        font-size: 24px;
        font-family: Oswald,sans-serif;
        text-transform: uppercase;
        padding-bottom: 30px;
    }
    .account__fio,.account__data{
        color: #fff;
        font-size: 18px;
        /*font-family: Ubuntu,sans-serif;*/
    }
    .account__fio{
        width: 30%;
    }
    .account__data{
        width: 70%;
        text-align: right;
    }
    .account-flex{
        justify-content: space-between;
        padding-top: 15px;
    }
</style>
<section class="account-sec" id="account-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="account__title">
                    Кабинет
                </h2>
            </div>
            <div class="col-lg-3">
                <div class="account__img-block">
<!--                    <img src="" alt="" class="account__avatar">-->
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="account__info-container">
                    <div class="d-flex account-flex">
                    <p class="account__fio">
                        ФИО спортсмена:
                    </p>
                        <p class="account__data fio">
                            <?= $accountInfo['fio'] ?>
                        </p>
                    </div>

                    <div class="d-flex account-flex">
                        <p class="account__fio">
                            Возраст:
                        </p>
                        <p class="account__data age">
                            <?= $accountInfo['age'] ?>
                        </p>
                    </div>
                    <div class="d-flex account-flex">
                        <p class="account__fio">
                            Пояс:
                        </p>
                        <p class="account__data exp">
                            <?= $accountInfo['expirience'] ?>
                        </p>
                    </div>
                    <div class="d-flex account-flex">
                        <p class="account__fio">
                            Немного о себе:
                        </p>
                        <p class="account__data about">
                            <?= $accountInfo['about'] ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once (ROOT . "/view/footer.php");

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            items: 1,
            margin: 50,
            loop: true,
            nav: true,
            navText: [
                '<i class="car-arrow fa-3x fas fa-angle-left"></i>',
                '<i class="car-arrow fa-3x fas fa-angle-right"></i>'
            ],
            dots: true,
        });
    });
</script>
<script src="src/js/burgerShow.js"></script>
<script src="src/js/jquery.maskedinput.min.js"></script>
<script src="src/js/mask.js"></script>
<script src="src/js/menuAdaptive.js"></script>
<script src="src/js/senseiSwap.js"></script>
<script src="src/js/slowjakor.js"></script>
<script src="src/js/wow.js"></script>
<script>new WOW().init();</script>
<script src="src/js/initMap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=%key%&callback=initMap" type="text/javascript">
</script>
</body>
</html>
