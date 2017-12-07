<?php
class Route
{
    public static function run()
    {
        $models_dir = 'models/';
        $controllers_dir = 'controllers/';

        $uri = parse_url($_SERVER['REQUEST_URI']);


        $uri_array = array(
            '/admin/' => 'MainAdmin',
            '/admin/products' => 'CatalogAdmin',
            '/admin/product' => 'ProductAdmin',
             '/admin/catalog' => 'CatalogAdmin',
            /*название ссылки*/'/admin/categories/' => 'CategoryAdmin',  //это название файла контроллера
            '/admin/categories' => 'CategoryAdmin',
            '/admin/categorylist' => 'CategoryListAdmin',
            '/admin/delivery' => 'DelivAdmin', 
            '/admin/pay' => 'PayAdmin',
            '/admin/contact' => 'ContactAdmin',
           /* '/admin/menu' => 'MenuAdmin',*/
            /*'/admin/catalog' => 'MenuAdmin',
            '/admin/delivery' => 'MenuAdmin'
         */
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