<?php
class Route
{
    public static function run()
    {
        $models_dir = 'models/';
        $controllers_dir = 'controllers/';

        $uri = parse_url($_SERVER['REQUEST_URI']);
       /* $uri = implode('/', $uri);
           // print_r($uri);
        $uri = explode('/', $uri);
           // print_r($uri);*/



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
            '/catalogclass' => 'Catalogclass',
            '/catalogclass' => 'Catalog',
            '/menu' => 'MenuContr',
           /* '/product/elektroobogrevatel' => 'ProductMain',*/
            /*'/product/$uri[2]' => 'ProductMain',*/
            
        );

        if($uri['path']) {
    /*    $uri = implode('/', $uri);
        $uri = explode('/', $uri);
            if ($uri[2] == '') {
                $controller_name = '/';
            } else {
                $controller_name = '/' . $uri[2];
            }*/

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