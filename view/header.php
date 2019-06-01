<?php
// test delete cookie
//unset($_COOKIE["kfsk_cookie"]);



// проблема: второй раз конектитсься невозможно к ПДО. Но переменную БД он потерял. Варианты: создать новое подключение mysqli. глубже разобраться как подключится 2 раз, либо хз
include_once (ROOT . '/serverSide/DBconnection.php');
//$db = db::getConnect(); // нужно подумать как и где передать / словить параметры pdo / с вьюхи подключаюсь к бд. я долбаеб
include_once (ROOT . '/serverSide/lib.php');
function findcookie($db)
{
    $id = false;
    $id = $_COOKIE['kfsk_cookie'];

    if(!$id){
        $id = $_SESSION['id'];
    }
    // check on cookie login account
    if ($id) {
        // $db = db::getConnect();

        $nick = showNick($id, $db)
        // find element in html and enter code

        ?>

        <script>
            $(document).ready(function () {
                $('.account').append(
                    "<a style=\"margin-top: 40%; color: #fff\" href=\"http://localhost/sindo_kab/account/<?=$id?>\">\n" +
                    "                        <i style=\"\" class=\"fas fa-user-ninja fa-2x\"></i>\n" +
                    "                            <?= $nick['nickname'] ?>\n" +
                    "                        </a>"
                )
            });
        </script>


        <?php
        // give account
    } else {
// view registration button
        ?>
        <script>
            $(document).ready(function () {
                $('.account').append(
                    "<button class='btn'>   Войти  </button>"
                )
            });
        </script>
        <?php
    }}
?>

<?php
findcookie($connection);
?>

<!--ОБЯЗАТЕЛЬНО В ПРОД ПЕРЕНЕСТИ СТИЛИ-->
<style>
    .modal-hide{
        display: none;
    }
    .modal-back{
        position: fixed;
        background: rgba(0, 0, 0, 0.7);
        width: 100%;
        height: 100vh;
        z-index: 100;
    }
    
    .modal{
        display: block;
        position: fixed;
        width: 40%;
        height: 70vh;
        margin: 15vh 30%;
        background-color: #13182B;
        border-radius: 20px;
    }

    .modal__title{
        margin-top: 30px;
        width: 100%;
        color: #E43D4E;
        text-align: center;
        font-size: 24px;
        font-family: Oswald,sans-serif;
        text-transform: uppercase;
        padding-bottom: 30px;
    }

    /*форма*/
    .form{
        width: 50%;
        height: auto;
        margin-left: 25%;
    }
    .modal__login, .modal__password{
        width: 100%;
        padding: 10px 0 10px 20px;
        font-size: 18px;
        font-family: Oswald,sans-serif;
        text-transform: uppercase;
        background-color: #000;
        color:#fff;
        border: none;
        border-radius: 3px;
        margin-top: 10px;
    }
    .modal__remember-text{
        color: gray;
    }
    .modal__sbm{
        background-color: #E43D4E;
        border: none;
        color: #fff;
        width: 40%;
        margin-left: 30%;
        padding: 7px 0 7px 0;
        margin-top: 30px;

    }
    .modal__sbm:hover{
        cursor: pointer;
    }
    .modal__remember{
        margin-top: 20px;
        width: max-content;
        margin-left: 50%;
        transform: translateX(-50%);
        justify-content: center;
    }
    .modal__remember__input{
        height: 100%;
        margin-top: 8px;
        margin-left: 10px;
    }
    .modal__remember-link{
        color:#E43D4E;
        width: 100%;
        
    }
    .modal__remember-link:hover{
        color: grey;
        text-decoration: none;
    }
    .modal__pass-forgot{
        width: 100%;
        text-align: center;
    }

</style>

        <div class="modal-back modal-hide">
            <div class="modal">
                <h2 class="modal__title">
                    Вход в систему
                </h2>
            <form id="form" method="post" class="form" action="serverSide/reg/sign.php">
                <input type="text" required name="login" placeholder="Введите ваш логин" class="modal__login">
                <input type="password" required name="password" placeholder="Введите ваш пароль"  class="modal__password">


                <input type="submit" class="modal__sbm" value="Войти" name="sbm">
<!--text-->
                <div class="d-flex modal__remember">
                    <p class="modal__remember-text">Запомнить меня</p>
                    <input type="checkbox" name="remember"  class="modal__remember__input">
                </div>

<!--text-->
            </form>
                <form action="serverSide/mail/passForget.php" method="post" class="form">
                    <div class="d-flex modal__pass-forgot">
                        <a href="#" class="modal__remember-link">Забыли пароль?</a>
<!--                        <input type="text" name="forgot" class="modal__forgot">-->
<!--                        <button type="submit" class="modal__forgor-btn" name="forgot-btn">Забыл все таки :с</button>-->
                    </div>
                </form>
    </div>
<!--</form>-->
            </div>
        </div>

<script>
    $(document).ready(function(){
       $('.btn').click(function () {
          $('.modal-back').removeClass('modal-hide');

       });
        $(document).mouseup(function (e) {
            var container = $(".modal");
            if (container.has(e.target).length === 0){
                $('.modal-back').addClass('modal-hide');
            }
        });


        // отправка айакса для проверки формы
        $('#form').submit(function (event) {
            // event.preventDefault();
            let mail = $('.modal__login').val();
            let pass = $('.modal__password').val();
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
                        $('.modal__password').css({"color": "#fff"});
                        $.ajax({
                           url: 'http://localhost/sindo_kab/serverSide/ajax/ajaxPass.php',
                           type: 'POST',
                            data:{
                               email: mail,
                                pass: pass
                            },
                            success: function (data) {
                                data = parseInt(data);
                                if(data){
                                    $('.modal__password').css({"color": "#fff"});
                                }
                                else{
                                    $('.modal__password').css({"color": "red"});
                                    event.preventDefault();
                                }
                            },
                            error: function(xhr, status, error) {
                                alert(xhr.responseText + '|\n' + status + '|\n' +error); // сделать понятную ошибку
                                event.preventDefault();
                           }
                        });


                        $('#form').submit();

                    }
                    else{
                        console.log('false');
                        $('.modal__login').css({"color": "red"});
                        event.preventDefault();
                    }
                },
                error: function(xhr, status, error) {
                    alert(xhr.responseText + '|\n' + status + '|\n' +error); // сделать понятную ошибку
                    event.preventDefault();
                }

            });
            // alter('cencel send');
            // event.preventDefault();
        });
    });
</script>

        <header id ="header" class="header">
            <div class="container">
                <div class="row animated fadeInDownBig">
                    <div class="col-lg-2">
                        <a href="#"><img class="img-logo" src="src/img/logo_karate_1.png" alt="Логотип Криворожской Федерации Спортивного Каратэ."></a>
                        <input type="checkbox" id="toggle" class="toggle">
                        <label class="label" for="toggle"><i class="fa fa-bars"></i></label>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-5 animated fadeInDownBig menu-hide">
                        <nav>
                            <hr class="hr-hide">
                            <ul class="menu d-flex">
                                <li class="menu__item">
                                    <a class="menu__new" href="#info-about-us">
                                        Новичкам
                                    </a>
                                </li>
                                <li class="menu__item">
                                    <a href="#sensei">
                                        Тренера
                                    </a>
                                </li>
                                <li class="menu__item">
                                    <a href="#map">
                                        Контакты
                                    </a>
                                </li>

                                <!-- php вход в личный кабинет-->
                                <li class="menu__item kabinet showMob">
                                    <!--
                                                                            <a href="#map">-->
                                    <!--                                        Регистрация-->
                                    <!--                                    </a>-->




                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-1 showDesk"></div>
                    <div style="padding-top: 45px;" class="col-lg-2 account showDesk">
                        <!--                    if cookie is not find
                                                    <button class="btn">-->
                        <!--                            Войти-->
                        <!--                        </button>-->

                        <!--                        <a style="margin-top: 40%; color: #fff; " href="#">-->
                        <!--                        <i style="" class="fas fa-user-ninja fa-2x"></i>-->
                        <!--                            Arly0-->
                        <!--                        </a>-->
                    </div>
                </div>
            </div>
        </header>
<?php

?>