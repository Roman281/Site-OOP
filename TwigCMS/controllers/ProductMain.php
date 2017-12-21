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
        $uri = parse_url($_SERVER['REQUEST_URI']);
            //print_r($uri);
        $uri = explode('/', $uri['path']);
           // print_r($uri);
        $urival = array_pop($uri);
            //print_r($urival);
        $product = $products->getProductUrl($urival);
       //print_r($product);
    /********************************************************/
   
    //Добавление/обновление товара в корзину
    if(isset($_POST['amount']) && isset($_POST['idid'])) {
        $addProductCart = $CartMod->addProductCart();
         //print_r($addProductCart);
    }


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