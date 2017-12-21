<?php
class CartMod extends Database
{
    
    //Добавление/обновление товара в корзине
    public function addProductCart () {
       
            $cart = array();
            $product_url = trim(strip_tags($_POST['idid']));
            $amount = trim(strip_tags($_POST['amount']));
                if(isset($_COOKIE['cart'])) {
                    $cart = unserialize($_COOKIE['cart']);
                }
            $cart[$product_url] = $amount;

            setcookie('cart',serialize($cart),time()+(3600*24*30),'/');
            /*$path = 'product&id='.$_POST['idid'];*/
          //  setcookie('cart','',time()-(60*60*24*30),'/');
          //  header("Location: ".$_SERVER['REQUEST_URI']);
        
        return $cart;
    }
    //достаем товары из корзины
    function getCart($product) {
        $cart_products = new stdClass();
            $total_amount = 0;
            $total_price = 0;
            $cart = new stdClass();
        if(isset($_COOKIE['cart'])) {
            $ids = unserialize($_COOKIE['cart']);
           print_r($ids);


/***************************************************/
        foreach ($ids as $url=>$amount) {
                $cart_products->url = $url;
            
                $cart_products->amount = $amount;
                /*$cart_products->product = $products->getProductUrl($url);*/
                    $cart_products->product=$product;
                $cart_products->product['amount'] = $amount;
                        
                $price= $cart_products->product['price'];
               print_r($cart_products);
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
        //return $cart;
    }
    /*public function viewCart($product) {
        if(isset($_COOKIE['cart'])) {
                $ids = unserialize($_COOKIE['cart']);
                foreach ($ids as $url=>$amount) {
                   // $product = $products->getProductUrl($url);
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
        return $cart;
    }*/
    
    /*Запись данных заказчика в базу в базу*/
    public function saveOrder($order)
    {
        if(empty($order)) {
            return false;
        }

        foreach ($order as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO orders ($colum_sql) VALUES ($val_sql)";
        $this->query($query);
        return $this->resId();
    }
    /*Запись заказа в базу*/
    public function savePurchases($purchas)
    {
        if(empty($purchas)) {
            return false;
        }

        foreach ($purchas as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO purchases ($colum_sql) VALUES ($val_sql)";
        $this->query($query);
        return $this->resId();
    }

  
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
     /*Очистить корзину*/
    public function  clean() {
        setcookie('cart','',time()-(60*60*24*30),'/');
        //header("Location: ".$_SERVER['REQUEST_URI']);
        
    }


  /***********************************************/


   

    /***********************************************/
   


}