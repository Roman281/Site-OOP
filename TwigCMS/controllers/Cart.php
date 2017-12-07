<?php
class Cart extends Core
{
    public function fetch()
    {
        $menu = new Menu();
        $cart = new CartMod();
        $products = new Products();
        $request = new Request();
       // $categories = new Categories();
        ////////////////////////////
        $product = new stdClass();

        /*if($request->method() == 'POST') {
            $product->id = $request->post('idid');*/
               /*Добавляем товар в корзину*/
               /* if(isset($_POST['amount']) && isset($_POST['idid'])) {
                    $product_cart = $products->addProductCart ($_POST['idid'], $_POST['amount']);*/
                   // print_r($product_cart);
        /*        }
        }        */
               /* print_r($product_cart);*/

               if(isset($_POST['clear'])) {
                 $clean=$cart->clean();
               }
    /******************************************************************/
           

                /*Достать товар из корзины*/
            //$cart_products = new stdClass();
            $total_amount = 0;
            $total_price = 0;
            $cart = new stdClass();
        if(isset($_COOKIE['cart'])) {
            $ids = unserialize($_COOKIE['cart']);
           //print_r($ids);


/***************************************************/
        foreach ($ids as $id=>$amount) {
                $cart_products->id = $id;
            
                $cart_products->amount = $amount;
                $cart_products->product = $products->getProduct($id);
                $cart_products->product['amount'] = $amount;
                        
                $price= $cart_products->product['price'];
               
                $cart_products->price = $price;
                $total_price += $price*$amount;
                //print_r($total_price);
                $total_amount += $amount;
               //print_r($cart_products);
            
            }
           // $cart->items = $cart_products;
            //print_r($cart);
           
        }
        //print_r($cart_products);
        $cart->items = $cart_products;
        $cart->total_price = $total_price;
        $cart->total_amount = $total_amount;
       print_r($cart);
              // var_dump($product);
               /* $getCart = $cart->getCart($product, $id);
               print_r($getCart);*/
             
/******************************************************************/


        $menuNav = $menu->getMenu();
           
    /********************************************************/
       


/*       if(isset($_POST['clear'])) {
            $clean = $cart->clean();
         }
*/     /********************************************************/
        $array_vars = array(
            'product' => $product,
            'name' => 'CART',
            'cart' => $cart,
            'cart1' => $cart_products,
            'menunav' => $menuNav,
            //'categories' => $categories,
        );

        return $this->view->render('cart.html',$array_vars);
    }
}