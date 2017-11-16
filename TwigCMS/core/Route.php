<?php
class Route
{
    public static function run()
    {
        $models_dir = 'models/';
        $controllers_dir = 'controllers/';

        $uri = parse_url($_SERVER['REQUEST_URI']);


        $uri_array = array(
            '/' => 'Main',
          /*название ссылки*/  '/catalog' => 'Catalog', //это название файла контроллера
            '/delivery' => 'Delivery',
            '/pay' => 'Pay',
            '/contact' => 'Contact',
            '/listcategories' => 'CategoryList',
            '/products' => 'ProductsMain',
            '/product' => 'ProductMain',
            '/pages' => 'Pages',
            '/cart' => 'Cart',
            
        );

        if($uri['path']) {

            if(file_exists($controllers_dir.$uri_array[$uri['path']] . '.php')) {
                require $controllers_dir.$uri_array[$uri['path']] . '.php'; //controllers/Main.php
                $controller = new $uri_array[$uri['path']](); // new Main();

                if(method_exists($controller,'fetch')) {
                    print $controller->fetch();
                } else {
                    Route::error404();
                }
            } else {
                Route::error404();
            }

        }
    }

    public static function error404()
    {
        //здесь будет 404
    }
}