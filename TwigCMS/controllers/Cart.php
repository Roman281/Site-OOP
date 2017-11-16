<?php
class Cart extends Core
{
    public function fetch()
    {
        $cart = new CartMod();
        $request = new Request();
       // $categories = new Categories();
        ////////////////////////////
        $product = new stdClass();


    if($request->method() == 'POST') {
            $cart->amount = $request->post('amount');
            $cart->rom = $request->post('rom');
            $cart->idid = $request->post('idid');
            $cart->bay = $request->post('bay');

            /**********************************************/
           
            //Добавление/обновление товара в корзине
    if(isset($_POST['amount']) && isset($_POST['idid'])) {
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
    }
/********************************************************/

    }

        $array_vars = array(
            'product' => $product,
            'name' => 'CART'
            //'categories' => $categories,
        );

        return $this->view->render('cart.html',$array_vars);
    }
}