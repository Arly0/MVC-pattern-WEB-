<?php
session_start();
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
<style>
    input[type="number"] {
        -moz-appearance: textfield;
    }
    input[type="number"]:hover,
    input[type="number"]:focus {
        -moz-appearance: textfield;
    }
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    .reg{
        background-color: #0C0F1B;
    }
    .reg__title{
        color: #E43D4E;
        text-align: center;
        font-size: 24px;
        font-family: Oswald,sans-serif;
        text-transform: uppercase;
        padding: 50px 0 30px 0;
    }
    .reg__subtitle{
        color: #fff;
        text-align: center;
        font-size: 18px;
        font-family: Oswald,sans-serif;
        text-transform: uppercase;
        padding-bottom: 20px;
        padding-top: 20px;
    }
    .reg_fio-age,.reg_mail-pass{
        grid-template-columns: repeat(2, 1fr);
        display: grid;
        width: 80%;
        margin-left: 10%;
    }
    .reg_fio-age div{
        padding-bottom: 20px;
    }
    .reg_fio-age label{
        color: #fff;
        font-family: Oswald,sans-serif;
        font-size: 18px;
        width: 200px;
        line-height: 18px;
    }
    .reg_fio-age input{
        font-size: 14px;
        background-color: #000;
        border: none;
        color: #fff;
        padding: 10px 0 10px 20px;
    }
    .shorter{
        width: 100px !important;
        margin-left: 30px;
    }
    .reg__age,.reg__exp{
        width: 100px;
    }
    .reg_mail-pass{
        display: block;
    }
    .reg_mail-pass label{
        width: 200px;
        color: #fff;
        font-family: Oswald,sans-serif;
        font-size: 18px;
        width: 200px;
        line-height: 18px;
    }
    .reg_mail-pass input{
        font-size: 14px;
        background-color: #000;
        border: none;
        color: #fff;
        padding: 10px 0 10px 20px;
    }
    .reg_mail-pass div{
        margin-bottom: 20px;
    }
    .reg__about{
        width: 60%;
        margin-left: 20%;
        resize: none;
        background-color: #000;
        border: none;
        height: 100px;
        border-radius: 3px;
        color: #fff;
    }
    .select__avatar{
        color: #fff;
        background-color: #E43D4E;
        padding: 10px 30px;
        font-size: 18px;
        line-height: 26px;
        margin-left: 50%;
        transform: translate(-50%);
    }
    .select__avatar:hover{
        cursor: pointer;
    }
    .reg__select{
        margin-top: 30px;
        width: 100%;
    }
    .reg__file{
        display: none;
    }
    .reg__Sbm{
        font-size: 18px;
        line-height: 26px;
        background-color: #E43D4E;
        color: #fff;
        border: none;
        padding: 15px 40px;
        margin-top: 50px;
        margin-left: 50%;
        transform: translate(-50%);
        margin-bottom: 80px;
    }

</style>


<?php
require_once(ROOT . '/view/header.php');


?>


<section class="reg" id="reg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="reg__title">регистрация</h2>

                <h3 class="reg__subtitle">Общая информация</h3>
                <form action="serverSide/reg/sendForm.php" method="post" enctype="multipart/form-data">
                    <div class="d-grid reg_fio-age">
                        <div>
                        <label>Псевдоним</label>
                        <input placeholder="Введите псевдоним" type="text" maxlength="15" minlength="3" class="reg__nick" name="nick">
                        </div>
                        <div>
                        <label class="shorter">Возраст</label>
                        <input maxlength="2" minlength="1" type="number" name="age" required class="reg__age">
                        </div>

                        <div>
                        <label>Фамилия Имя Отчество</label>
                        <input type="text" name="fio" required placeholder="Введите ваше ФИО *" class="reg__fio">
                        </div>
                        <div>
                        <label class="shorter">Опыт</label>
                        <input maxlength="2" minlength="1" type="number" name="exp" required class="reg__exp">
                        </div>
                    </div>

                    <h3 class="reg__subtitle">Безопасность</h3>

                <div class="reg_mail-pass">
                    <div class="d-flex">
                    <label>Электронный ящик</label>
                    <input type="text" required name="email" placeholder="Введите ваш Email *" class="reg__mail">
                    </div>
                    <div class="d-flex">
                    <label>Пароль</label>
                    <input type="password" required name="pass" placeholder="Введите ваш пароль *" class="reg__pass">
                    </div>
                    <div class="d-flex">
                    <label>Повторите пароль</label>
                    <input type="password" required name="pass2" placeholder="Повторите ваш пароль *" class="reg__pass-repeat">
                    </div>
                </div>

                    <h3 class="reg__subtitle">О себе</h3>
                <textarea name="about" id="about" placeholder="Введите коротко информацию о Вас" class="reg__about" type="text">

                </textarea>
                    <div class="reg__select">
                        <label for="selAvatar" class="select__avatar">Выберите аватарку</label>
                        <input id="selAvatar" type="file" name="file" class="reg__file">
                       </div>


                    <input disabled type="submit" name="reg-sbm" value="Зарегестрироваться" class="reg__Sbm">

                </form>
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
        var k = 0;
        // проверка паролей на корректность
        let password = $('.reg__pass');
        let passwordRepeat = $('.reg__pass-repeat');
        let passCheck, passConfirm;
        let reg = /[.*&#@!№;%:"'+?^${}()|[\]\\]/g;      // /[A-Z0-9]{3,30}/;


        password.focusout(function () {

            if (password.val() == "") {
                console.log('is empty');
            }

            else {
                passCheck = password.val();

                if (passCheck.match(reg)) {
                    password.css({"border-color": "red"});
                    console.log('Странные символы');
                }
                else {
                    password.css({"border-color": "#0CC41B"});
                    k++;  // 1
                    checkBtn(k);
                }

                passwordRepeat.focusout(function () {
                    if (passwordRepeat.val() == "") {

                    }
                    else {
                        passConfirm = passwordRepeat.val();
                        if (passCheck == passConfirm) {
                            passwordRepeat.css({"border-color": "#0CC41B"});
                            k++;    // 2
                            checkBtn(k);
                        }
                        else {
                            passwordRepeat.css({"border-color": "red"});
                            console.log('Пароли не совпадают');
                        }
                    }
                });
            }
        });

        // проверка верификации почты реглярным выражением - 1 действие
        $('.reg__mail').focusout(function () {

            let reg = /^[0-9a-z-\.]+\@[0-9a-z-]{2,}\.[a-z]{2,}$/i,
            mail = $('.reg__mail').val(),
            result = mail.match(reg);

            if(!result){
                $('.reg__mail').css({"border-color": "red"});
            }
            else{
                // айакс запрос на проверку наличия почты
                $.ajax({
                    url: 'http://localhost/sindo_kab/serverSide/ajax/ajaxMail.php',
                    type: 'POST',
                    data: {
                        email: mail
                    },
                    // dataType: 'json',
                    success: function (data) {
                        data = parseInt(data);
                        if(data){
                            $('.reg__mail').css({"border-color": "#0CC41B"});
                            k++;   // 3
                            checkBtn(k);
                        }
                        else{
                            $('.reg__mail').css({"border-color": "red"});
                            k--; // 1
                            checkBtn(k);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert(xhr.responseText + '|\n' + status + '|\n' +error); // сделать понятную ошибку
                    }

                });


            }
        });

        // проверка по возрасту
        $('.reg__age').focusout(function () {

            let maxAge = 80,
            minAge = 3;

           if($(this).val() == "")
           {}
           else
           {
               let age = $(this).val();
               if((age >= maxAge) || (age <= minAge))
               {
                   $(this).css({"border-color": "red"});
               }
               else{
                   $(this).css({"border-color": "#0CC41B"});
                   k++;   // 4
                   checkBtn(k);
               }
           }
        });

function checkBtn(k) {
    if (k == 4) {
        $('.reg__Sbm').removeAttr('disabled');
    }
}
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

