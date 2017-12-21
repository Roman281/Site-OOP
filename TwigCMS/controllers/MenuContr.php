<?php
class MenuContr extends Core
{
    public function fetch()
    {

      
        

        $menu = new Menu();
        $products = new Products();
        $product = new stdClass();
  

         /*Достать товар из корзины*/
        $cart_products = array();
        $total_amount = 0;
        $total_price = 0;
        $cart = new stdClass();
              
        if(isset($_COOKIE['cart'])) {
            $ids = unserialize($_COOKIE['cart']);
            foreach ($ids as $url=>$amount) {
                $product = $products->getProductUrl($url);
                $cart_products[$url] = $product;

                $cart_products[$url]['amount'] = $amount;
                
                $total_price += $product['price']*$amount;
                $total_amount += $amount;
              // print_r($cart_products);
               // print_r($product);
            }
            $cart->items = $cart_products;
         //   print_r($cart);
        }
       // print_r($cart_products);
        $cart->total_price = $total_price;
        $cart->total_amount = $total_amount;

        $menuNav = $menu->getMenu();
        //print_r($menuNav);
           
  

        $array_vars = array(
            'name' => 'Menu',
            'cart' => $cart,
            'menunav' => $menuNav,
        );

        //print_r($array_vars);
        return $this->view->render('menu.html',$array_vars);
    }
}