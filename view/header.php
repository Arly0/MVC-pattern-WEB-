<?php
// test delete cookie



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
        padding-bottom: 20px !important;
        width: 100%;
        color: #E43D4E;
        text-align: center;
        font-size: 24px;
        font-family: Oswald,sans-serif;
        text-transform: uppercase;
        padding-bottom: 50px;
    }

    /*форма*/
    .form{
        width: 70%;
        height: auto;
    }
    .modal__login, .modal__password{
        width: 100%;
        padding: 10px 0 10px 20px;
        font-size: 18px;
        font-family: Oswald,sans-serif;
        text-transform: uppercase;
    }
    .modal__remember-text{
        color: gray;
    }
</style>

        <div class="modal-back modal-hide">
            <div class="modal">
                <h2 class="modal__title">
                    Вход в систему
                </h2>
            <form method="post" class="form" action="serverSide/reg/sign.php">
                <input type="text" required name="login" placeholder="Введите ваш логин" class="modal__login">
                <input type="password" required name="password" placeholder="Введите ваш пароль"  class="modal__password">

<!--text-->
                <div class="d-flex">
                    <p class="modal__remember-text">Запомнить меня</p>
                    <input type="checkbox" name="remember"  class="modal__remember">
                </div>
                <input type="submit" class="modal__sbm" name="sbm">
<!--text-->
            </form>
                <form action="serverSide/mail/passForget.php" method="post" class="form">
                    <div class="d-flex">
                        <a href="#" class="modal__remember-text">Забыли пароль?</a>
                        <input type="text" name="forgot" class="modal__forgot">
                        <button type="submit" class="modal__forgor-btn" name="forgot-btn">Забыл все таки :с</button>
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