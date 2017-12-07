<?php
class ProductMain extends Core
{
    public function fetch()
    {

        $menu = new Menu();
        $CartMod = new CartMod ();
        $products = new Products();
          /* $product = $products->getProduct($id);*/
            //echo $categories_catalog;
        $categories = new Categories();
        $categories_catalog = $categories->getCategories();    
        /*Вывод това одного*/
       /* if(isset($_GET['id'])) {
           $product = $products->getProduct($_GET['id']);
           //print_r($product);
        } 
*/
        $uri = parse_url($_SERVER['REQUEST_URI']);
            print_r($uri);

        $uri = implode('/', $uri);
           // print_r($uri);
        $uri = explode('/', $uri);
           // print_r($uri);
            /* foreach($uri as $val) {
                  //echo $val1= preg_replace('///', '', $val);
                   $str1 = str_replace("/", "", $val);
                 print_r($str1);
               }*/
            /* $uri[path] = substr($str1,0,strlen($str1)-1);
            // echo $uri;*/
        $product = $products->getProductUrl($uri[2]);
        print_r($product);
    /********************************************************/
   
    //Добавление/обновление товара в корзине
    if(isset($_POST['amount']) && isset($_POST['idid'])) {
        $addProductCart = $CartMod->addProductCart();
    }

   /* if(isset($_POST['amount']) && isset($_POST['idid'])) {
        $cart = array();
        $product_id = trim(strip_tags($_POST['idid']));
        $amount = trim(strip_tags($_POST['amount']));
            if(isset($_COOKIE['cart'])) {
                $cart = unserialize($_COOKIE['cart']);
            }
        $cart[$product_id] = $amount;

        setcookie('cart',serialize($cart),time()+(3600*24*30),'/');
        $path = '?r=product&id='.$_POST['idid'];
      //  setcookie('cart','',time()-(60*60*24*30),'/');
        header("Location: ".$_SERVER['REQUEST_URI']);
    }*/
    /*print_r(unserialize($_COOKIE['cart']));*/
    //достаем товары из корзины
        
    $menuNav = $menu->getMenu();
          

   
        $array_vars = array(
            /*ссылка*/'name' => 'Product', /*значение ссылки*/
            //'product' => $product,
            'namePrice' => 'Цена товара:',
            'discriptionProduct' => 'Описание товара',
            'categories' => $categories_catalog ,
            'addcart' => $addProductCart,
            'product' => $product,
            'menunav' => $menuNav,
           

        );
        
        return $this->view->render('product.html',$array_vars);
    }
}