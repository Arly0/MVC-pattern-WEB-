$(function () {
    let arrSens = [
            ["src/img/sensei_5.jpg", "Сергей Карасев", "https://twitter.com/Arly010", "https://www.instagram.com/arly0_/?hl=en\,", "https://soundcloud.com/arly0", " dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor."],

            ["src/img/sensei_2.jpg", "Дмитрий Лысый", "https://twitter.com/SeniorJun", "https://www.instagram.com/sergi_karasev/?hl=en", "https://soundcloud.com/chimchar13", " dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem."],

            ["src/img/sensei_1.jpg", "Андрей Панасюк", "https://twitter.com/SeniorJun", "https://www.instagram.com/sergi_karasev/?hl=en", "https://soundcloud.com/chimchar13", " dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem."],

            ["src/img/sensei_3.jpg", "Алексей ...", "https://twitter.com/SeniorJun", "https://www.instagram.com/sergi_karasev/?hl=en", "https://soundcloud.com/chimchar13", " dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem."],

            ["src/img/sensei_4.jpg", "Сергей Лысый", "https://twitter.com/SeniorJun", "https://www.instagram.com/sergi_karasev/?hl=en", "https://soundcloud.com/chimchar13", " dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem."]
        ],
        i = 0;
    $('.sensei__awesome').click(function () {
        i++;
        if (i == arrSens.length)
            i = 0;
        $('.about-sensei__img').animate({opacity: '0'}, 500, function () {
            $(this).attr("src", arrSens[i][0]);
            $(this).animate({opacity: '1'}, 500);
        });
        $('.about-sensei__name').animate({opacity: '0'}, 500, function () {
            $(this).text(arrSens[i][1]);
            $(this).animate({opacity: '1'}, 500);
            $('.sensei-name').animate({opacity: '0'}, 500, function () {
                $(this).html(arrSens[i][1]);
                $(this).animate({opacity: '1'}, 500);
            });
            // $('.twitter').attr("href", arrSens[i][2]);
            // $('.facebook').attr("href", arrSens[i][4]);
            // $('.instagarm').attr("href", arrSens[i][3]);
            $('.sensei-text').animate({opacity: '0'}, 500, function () {
                $(this).text(arrSens[i][5]);
                $(this).animate({opacity: '1'}, 500);
            });
        });
    });
});