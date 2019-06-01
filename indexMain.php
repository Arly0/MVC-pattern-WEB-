<!DOCTYPE html>
<html lang="en">
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


<section id="underheader" class="underheader karate-kick-img">
    <?php
    include_once ROOT . "/view/header.php";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="info">
                    <h1 class="info__title animated fadeInLeft">
                        Тут какой-то
                        <span class="info__title_redback">мотивирующий</span>, или не
                        совсем, текст.
                    </h1>
                    <div class="">
                        <hr class="left hr-pink">
                    </div>
                    <p class="info__text animated fadeInRight">
                        Lorem ipsum
                        dolor sit amet,
                        consectetuer
                        adipiscing elit..
                    </p>
                    <button class="info__send animated flipInX" id="info__send" href="#offer"><a href="#offer">Связь</a></button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="info-about-us" id="info-about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <h2 class="about__title hide-d">
                    О нашей <span class="info__title_redback">секции</span>
                </h2>
                <img src="src/img/all_stars.png" class="img-info" alt="Спортивное Каратэ">
                <!--<div class="info__gallery">-->
                <!--<div class="flexd">-->
                <!--<img class="info__gallery_img1" src="src/img/team_1.jpg" alt="KFSK спортивная секция">-->
                <!--<img class="info__gallery_img2" src="src/img/team_2.jpg" alt="KFSK спортивная секция">-->
                <!--</div>-->
                <!--<div class="flexd">-->
                <!--<img class="info__gallery_img3" src="src/img/team_3.jpg" alt="KFSK спортивная секция">-->
                <!--<img class="info__gallery_img4" src="src/img/team_4.jpg" alt="KFSK спортивная секция">-->
                <!--</div>-->
                <!--</div>-->
            </div>
            <div class="col-lg-5 wow animated zoomInRight about">
                <div class="mar_bot">
                    <h2 class="about__title hide-m">
                        О нашей <span class="info__title_redback">секции</span>
                    </h2>
                    <hr class="left hr-pink hr-marg">
                    <p class=" about__text">
                        Lorem ipsum dolor sit amet, consectetuer <a class="info__title_redback" href="https://www.instagram.com/kfsk_karate_team/?hl=en">Instagram</a> elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.
                    </p>
                    <p class="about__text_gray">
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr-section">
</section>
<section class="offer" id="offer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="offer__title">
                    Оставьте заявку на тренировку в спортивную секцию «KFSK»
                </h2>
                <hr class="hr-pink-long">
            </div>
        </div>
        <div class="row offer__content">
            <div class="col-lg-6">
                <iframe class="offer__video animated wow fadeInLeft" width="100%" height="315" src="https://www.youtube.com/embed/zCPw56fQzrQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>
                <!-- <img src="src/img/back.jpg" alt="" class="offer__img"> -->
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <form action="serverSide/sendMail.php" class="offer__form animated fadeInRight wow" method="POST">
                    <input required autocomplete="off" name="offer_name" type="text" class="offer__input offer-name" placeholder="Имя Фамилия" maxlength="35" pattern="[А-Яа-яЁё]*\s[А-Яа-яЁё]*"><br>
                    <input required autocomplete="off" id="offer_phone" name="offer_number" type="text" class="offer__input offer-number" placeholder="Номер"><br>
                    <input required autocomplete="off" name="offer_childName" type="text" class="offer__input offer-childName" placeholder="Имя ребёнка" maxlength="15" pattern="[А-Яа-яЁё]*"><br>
                    <input required autocomplete="off" name="offer_age" type="text" class="offer__input offer-age" placeholder="Возраст" maxlength="2"><br>
                    <input autocomplete="off" type="submit" name="offer_submit" class="offer__submit offer__submit-adapt" value="Отправить">
                </form>
            </div>
        </div>
    </div>
</section>

<section class="gallery" id="gallery">
    <hr class="hr-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="gallery__title">
                    галерея
                </h2>
                <div style="color: #fff;" class="gallery__container">


                    <div class="owl-carousel owl-theme">
                        <div class="item_car"><img  src="src/img/gall_1.jpg" alt="" class="item__img"></div>
                        <div class="item_car"><img src="src/img/gall_3.jpg" alt="" class="item__img"></div>
                        <div class="item_car"><img src="src/img/gall_5.jpg" alt="" class="item__img"></div>
                        <div class="item_car"><img src="src/img/gall_6.jpg" alt="" class="item__img"></div>
                        <div class="item_car"><img src="src/img/gall_7.jpg" alt="" class="item__img"></div>
                        <div class="item_car"><img src="src/img/gall_9.jpg" alt="" class="item__img"></div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<section class="sensei" id="sensei">
    <hr class="hr-hide">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="sensei__title">
                    Тренера
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
                <div class="about-sensei">
                    <img src="src/img/sensei_5.jpg" class="about-sensei__img" alt="Заслуженный тренер Украины по Каратэ">
                    <h3 class="about-sensei__name">
                        Сергей Карасев
                    </h3>
<!--                    <ul class="icnos d-flex">-->
<!--                        <li class="icons__social">-->
<!--                            <a class="twitter" href="https://twitter.com/Arly010">-->
<!--                                <i class="fa fa-twitter fa-2x"></i>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="icons__social">-->
<!--                            <a class="facebook" href="https://soundcloud.com/arly0">-->
<!--                                <i class="fa fa-facebook-f fa-2x"></i>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="icons__social">-->
<!--                            <a class="instagarm" href="https://www.instagram.com/arly0_/?hl=en">-->
<!--                                <i class="fa fa-instagram fa-2x"></i>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
                </div>
            </div>
            <div class="col-lg-4">
                <p class="sensei-text">
                    dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                </p>
            </div>
            <div class="col-lg-1 sensei__next">
                <button class="sensei__awesome d-flex">
                    <i class="fa arrow fa-chevron-circle-right fa-3x"></i>
                </button>
            </div>
        </div>
    </div>
</section>
<section class="map" id="map">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 style="padding-bottom: 10px" class="map__title hide-d">
                    Места проведения занятий
                </h2>
                <!--  <iframe class="map__googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98819.44693030512!2d33.35262630835887!3d47.93892308927157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40db20ae40d9086d%3A0xecf758fcfe690fdc!2sSchool+number+26!5e0!3m2!1sen!2sua!4v1545744777072" width="100%" height="375" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                <div class="map__googlemap" id="map__googlemap">  </div>
            </div>
            <div class="col-lg-6">
                <h2 class="map__title hide-m">
                    Места проведения занятий
                </h2>
                <hr class="left hr-pink hr-marg">
                <div class="map__center-div">
                    <a class="map__adresses" href="https://www.google.com/maps/place/Спеціалізована+школа+№107/@47.9384022,33.398609,14z/data=!4m5!3m4!1s0x40db2079fcb815f9:0x2fd4b0ee8b2eb895!8m2!3d47.9384018!4d33.4161185">
                        Улица Катериновская 11 (Школа № 107)
                    </a>
                    <br>
                    <a class="map__adresses" href="https://www.google.com/maps/place/Kryvorizka+Tsentralno-Miska+Gymnasium/@47.8991144,33.3184701,14z/data=!4m8!1m2!2m1!1z0KPQu9C40YbQsCDQn9C10YDRiNC-0YLRgNCw0LLQvdC10LLQsCAxNiAo0JPQuNC80L3QsNC30LjRjyk!3m4!1s0x40dad8b01e78f29d:0x401c891924b7a1af!8m2!3d47.8992776!4d33.3359903">
                        Улица Першотравнева 16 (Гимназия)
                    </a>
                    <br>
                    <a class="map__adresses" href="https://www.google.com/maps/place/School+number+26/@47.9163782,33.3491931,11z/data=!4m5!3m4!1s0x40db20ae40d9086d:0xecf758fcfe690fdc!8m2!3d47.9028576!4d33.3769305">
                        Улица Якира 7А (Школа № 26)
                    </a>
                    <br>
                    <a class="map__adresses" href="https://www.google.com/maps/place/School+%23126/@48.0012748,33.4722305,14z/data=!4m5!3m4!1s0x40dae1d7d1f61fcb:0xc21ae877ee930bef!8m2!3d48.0012744!4d33.48974">
                        Улица Николаевское Шосе 18 (Школа № 126)
                    </a>
                </div>
                <br>
                <br>
                <br>
                <p class="map__text">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                </p>
            </div>
        </div>
    </div>
</section>
<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="footer__sindo">
                    Криворожская федерация спорта карате KFSK
                </h3>
                <div class="right-div">
                    <a class="footer__twitter" href="https://twitter.com/Arly010">
                        <i class="fa-2x fab fa-twitter"></i>
                    </a>
                    <a class="footer__twitter" href="https://github.com/Arly0">
                        <i class="fa-2x fab fa-github"></i>
                    </a>
                    <h3 class="footer__webmaster">
                        Вебмастер: Горбунов Назар
                    </h3>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="modal2" class="modal2">
    <div class="modal2__overlay">
        <div class="modal2__body">
            <div class="close"><a href="#" class="modal2__close"></a></div>
            <h4 class="modal2__title">
                Введите данные
            </h4>
            <hr class="hr-pink">
            <form class="modal2__form" id="modal2__form" action="serverSide/main.php" method="post">
                <input class="modal2__input-email offer__input" type="email" placeholder="Введите почту" autocomplete="off" name="email">
                <input class="modal2__input-password offer__input" type="password" placeholder="Введите пароль" autocomplete="off" name="password">
                <input autocomplete="off" type="submit" name="modal_submit" class="offer__submit modal2__btn" value="Отправить">
                <br>
                <div class="checkbox">
                    <input type="checkbox" name="remember" class=" modal2__checkbox" value="Set"><span class="modal2__remember">Запомнить меня(1 неделя)</span>
                </div>
            </form>
            <div class="modal2__regpass-div">
                <a href="#" class="modal2__regpass">
                    Забыли пароль?
                </a>
            </div>
        </div>
    </div>
</div>


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
<script src="src/js/wow.min.js"></script>
<script>new WOW().init();</script>
<script src="src/js/initMap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSgK4DoVtEqshdj0kPfdWvDFmqk2Epyvs&callback=initMap" type="text/javascript">
</script>
</body>
</html>