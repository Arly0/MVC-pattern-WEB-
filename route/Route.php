<?php
class Route
{
    private $routes;

    // include array with all routes
    public function __construct()
    {
        // получает список подключенных роутов
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include_once($routesPath);
    }

    //получает ЮРЛ страницы
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI']))
            return trim(trim($_SERVER['REQUEST_URI'], '/'), '/');
    }


    // генерирует нужный контроллер и акшион в зависимости от ЮРЛ
    public function run()
    {
        $uri = $this->getURI(); // берет ЮРЛ


        // поиск ЮРЛ в роутах
        foreach ($this->routes as $uriPattern => $path)
        {
            if(preg_match("~$uriPattern~", "$uri"))
            {

                // находит полный путь(юрл)
                $fullRoute = preg_replace("~$uriPattern~", $path, $uri);

//                echo ($fullRoute); // проверка

                // path is news/index2. this cline give only news
                // разделяет адрес на несколько частей. для контроллера, акшиона и параметров
                $segments = explode('/', $fullRoute);

                $contollerName = ucfirst(array_shift($segments)).'Controller'; // генерирует имя контрллера

                $actionName = 'action'. ucfirst(array_shift($segments)); // генерирует акшион

                $parametrs = $segments; // генерирует массив из параметров
                // проверка корректности всех имен
//                echo ($contollerName . 'name of controller');
//                echo ("<br>" . $actionName . 'name of action');

//                echo ("<br>");
//                echo "<pre>";
//                print_r($parametrs);



                // подключаем файл с именем контроллера
                $controllerpath = ROOT .'/controller/' . $contollerName . '.php';

                // проверяем на существование
                if(file_exists($controllerpath))
                {
                    include_once($controllerpath);
                }


                // создает экзмепляр метода в нужном контроллере
                $controllerMethod = new $contollerName;
                // передает в метод параметры
                $result = $controllerMethod->$actionName($parametrs);
                // проверка на запуск
                if($result != null)
                {
                    break;
                }
            }
        }
    }
}