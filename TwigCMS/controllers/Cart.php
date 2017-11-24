<?php
class Cart extends Core
{
    public function fetch()
    {
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

    /******************************************************************/
           

                /*Достать товар из корзины*/
            
                 $product = $products->getProduct($id);
                // var_dump($product);
                $getCart = $cart->getCart($product, $id);
               var_dump($getCart);
            
/******************************************************************/



        /*if(isset($_COOKIE['cart'])) {*/
            /*$cart_products = array();*/
        /*$cart_products = array();

        $total_amount = 0;
        $total_price = 0;
        $cart = new stdClass();
    
        $ids = unserialize($_COOKIE['cart']);
            foreach ($ids as $id=>$amount) {
            
          
            $cart_products[$id] = $amount;*/
            /*$cart_products[$amount] = $products->getProduct($id);*/
            //$cart_products[$id] = $getProduct['price'];
           // $cart_products[$id] = $products->getProduct($id);
            //$price = $getProduct['price'];
            //$cart_products[$id] = $price;
            /*if( $getProduct = $products->getProduct($id)) {*/
               // echo $getProduct['price']."<br>";
              /*  $total_price += $getProduct['price']*$amount;

            }*/
           
            //$cart_products[$id]->amount = $amount;
                //$total_price += $cart_products['price']*$amount;
                /*$total_amount += $amount;
*/

            /*$total_price += $getProduct['price']*$amount;
            $total_amount += $amount;*/
            /*}*/
           /* print_r($cart_products);
           echo "total_amount = ".$total_amount;
        echo "total_price = ".$total_price;*/
              // print_r($getProduct );
              // $product = $products->getProduct($id);
               //print_r($product);
           /* $getCart = getCart($product, $getProduct);*/
           // print_r($getCart);
        
           /* } */
           
    /********************************************************/
       


/*       if(isset($_POST['clear'])) {
            $clean = $cart->clean();
         }
*/     /********************************************************/
        $array_vars = array(
            'product' => $product,
            'name' => 'CART',
            'cart' => $getCart,
            //'categories' => $categories,
        );

        return $this->view->render('cart.html',$array_vars);
    }
}