<?php
class Cart extends Core
{
    public function fetch()
    {
        $menu = new Menu();
        $cartOrder = new CartMod();
        $cartPurchas = new CartMod();
        $products = new Products();
        $request = new Request();
       // $categories = new Categories();
        ////////////////////////////
        $product = new stdClass();
        $order = new stdClass();



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
        // print_r($cart);

        /*$product = $products->getProductUrl($url);
        $view =  $cartOrder->viewCart($product);*/

/***************************************************/
           
    //Добавление/обновление товара в файлменеджер
        if($_SERVER['REQUEST_METHOD'] === "POST" && $_POST['make_order']) {
           /* $order->id = $request->post('id');*/
            $order->name = $request->post('name');
            $order->last_name = $request->post('last_name');
            $order->email = $request->post('Email');
            $order->phone = $request->post('phone');
            $order->address = $request->post('address');
            $order->comment = $request->post('comment');
       
       /* $cart_products = array();
        $total_amount = 0;
        $total_price = 0;
       /* $cart = new stdClass();*/
     /*   if(isset($_COOKIE['cart'])) {
                $ids = unserialize($_COOKIE['cart']);
                foreach ($ids as $url=>$amount) {
                  $product = $products->getProductUrl($url);
                  $cart_products[$url] = $product;
                  $cart_products[$url]['amount'] = $amount;                
                  $total_price += $product['price']*$amount;
                  $total_amount += $amount;
                }
                $cart->items = $cart_products;
             //   print_r($cart);
            }
           // print_r($cart_products);
        $cart->total_price = $total_price;
        $cart->total_amount = $total_amount;*/
      


            if (!empty($_POST['name']) && !empty($_POST['last_name'])){
                if(!preg_match('/[а-яА-Яa-zA-Z]{2,10}/', $order->name)) {
                 echo 'не правильно ввели имя';
                }  
                elseif(!preg_match('/^[а-яА-Яa-zA-Z]+-?[а-яА-Яa-zA-Z0-9_]?+[^*]/',$order->last_name)) { 
                echo 'не правильно ввели фамилию';
             /*} 
             elseif(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,})$/ui',$order->email)) { 
                echo 'не правильно ввели email';*/
                } else 
                 $orders = $cartOrder->saveOrder($order);
                 $purchas = $cartPurchas->savePurchases($cart);
                 print_r($purchas);
                



              //setcookie('cart','',time()-(60*60*24*30),'/');
             // header("Location:".$_SERVER['REQUEST_URI']);
            }
      } elseif($_SERVER['REQUEST_METHOD'] === "POST" && $_POST['clean']){
         setcookie('cart','',time()-(60*60*24*30),'/');
      }
             
/******************************************************************/


        $menuNav = $menu->getMenu();
           

       

    /********************************************************/
        $array_vars = array(
            'product' => $product,
            'name' => 'CART',
            'cart' => $cart,
          /*  'cart1' => $cart_products,*/
            'menunav' => $menuNav,
            //'categories' => $categories,
        );

        return $this->view->render('cart.html',$array_vars);
    }
}