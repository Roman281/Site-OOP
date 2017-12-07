<?php
class CartMod extends Database
{
    
    //Добавление/обновление товара в корзине
    public function addProductCart () {
       
            $cart = array();
            $product_id = trim(strip_tags($_POST['idid']));
            $amount = trim(strip_tags($_POST['amount']));
                if(isset($_COOKIE['cart'])) {
                    $cart = unserialize($_COOKIE['cart']);
                }
            $cart[$product_id] = $amount;

            setcookie('cart',serialize($cart),time()+(3600*24*30),'/');
            $path = 'product&id='.$_POST['idid'];
          //  setcookie('cart','',time()-(60*60*24*30),'/');
          //  header("Location: ".$_SERVER['REQUEST_URI']);
        
        return $cart;
    }


  /*  print_r(unserialize($_COOKIE['cart']));*/
   //достаем товары из корзины
  /*  public function getCart($product, $id) {
            $cart_products = array();
            $total_amount = 0;
            $total_price = 0;
            $cart = new stdClass();
        if(isset($_COOKIE['cart'])) {
            $ids = unserialize($_COOKIE['cart']);*/
           //print_r($ids);


/***************************************************/
        /*foreach ($ids as $id=>$amount) {
                $cart_products[$id] = $product;
                $cart_products[$id]->amount = $amount;
                $total_price += $cart_products[$id]->price*$amount;
                $total_amount += $amount;*/
                //print_r($cart_products);
          /*  }
            $cart->items = $cart_products;
            //print_r($cart);
        }
        $cart->total_price = $total_price;
        $cart->total_amount = $total_amount;
        return $cart;
    }*/
/****************************************************/
            /*foreach ($ids as $id=>$amount) {
                
                $cart_products[$id] = $amount;

                foreach ($product as $key => $value) {
                    if($id == $cart_products[$id]) {
                    $getProduct[$price] = $value;
                    }
                }*/
                /*$cart_products[$id] = $getProduct;
              print_r($cart_products);*/
               // $cart_products[$id]->amount = $amount;
               /* $total_price += $value*$amount;
                $total_amount += $amount;
            }
            print_r($cart_products);
            echo "total_amount = ".$total_amount;
            echo "total_price = ".$total_price;
            $cart->items = $cart_products;
            
        $cart->total_price = $total_price;

        $cart->total_amount = $total_amount;

        return $cart;
    }*/

/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
 /*if(isset($_POST['id1'])) {
        $cart2 = array();
        $product_id = trim(strip_tags($_POST['id1']));
    
            if(isset($_COOKIE['wishlist'])) {
                $cart2 = unserialize($_COOKIE['wishlist']);
            }
        $cart2[$product_id] = $product_id;

        setcookie('wishlist',serialize($cart2),time()+(3600*24*30),'/');
        $path = '?r=product&id='.$_POST['id1'];
       //setcookie('wishlist','',time()-(60*60*24*30),'/');
        header("Location: ".$_SERVER['REQUEST_URI']);
    }

   function getWish($products) {
        $cart_products2 = array();
        $cart2 = new stdClass();
        if(isset($_COOKIE['wishlist'])) {
            $ids2 = unserialize($_COOKIE['wishlist']);
            foreach ($ids2 as $id=>$amount) {
                $cart_products2[$id] = getProduct($products, $id);
            }
            $cart2->items = $cart_products2;
            //print_r($cart2);
        }
        return $cart2;
    }*/
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
     /*Очистить корзину*/
    public function  clean() {
        setcookie('cart','',time()-(60*60*24*30),'/');
        //header("Location: ".$_SERVER['REQUEST_URI']);
        
    }


  /***********************************************/


   

    /***********************************************/
   


}