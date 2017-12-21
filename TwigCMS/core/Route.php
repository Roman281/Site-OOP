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
            //'/listcategories' => 'CategoryList',
            //'/products' => 'ProductsMain',
            '/product' => 'ProductMain',
            '/pages' => 'Pages',
            '/cart' => 'Cart',
            '/catalogclass' => 'Catalogclass',
           // '/catalogclass' => 'Catalog',
            '/menu' => 'MenuContr',
            //'/product/elektroobogrevatel' => 'ProductMain',
            /*'/product/$uri[2]' => 'ProductMain',*/
            
        );

        if($uri['path']) {
    /*    $uri = implode('/', $uri);*/

        $uri = explode('/', $uri['path']);
           // print_r($uri);
            
            $uri[1];    
            $key = key($uri);

                     
            if ($uri[1]== '') {
                $urikey = '/';
               }else{ 
           /* } elseif($i=0; $i<count($uri); $i++){*/
                $urikey = '/' . $uri[1];
                //print_r($urikey);
             /* }*/
            }
            
             

            if(file_exists($controllers_dir.$uri_array[$urikey] . '.php')) {
                require $controllers_dir.$uri_array[$urikey] . '.php'; //controllers/Main.php
                $controller = new $uri_array[$urikey](); // new Main();

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