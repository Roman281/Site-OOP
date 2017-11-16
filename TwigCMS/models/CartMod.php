<?php
class CartMod extends Database
{
    
    
    /*print_r(unserialize($_COOKIE['cart']));*/
    //достаем товары из корзины
    public function getCart($products) {
        $cart_products = array();
        $total_amount = 0;
        $total_price = 0;
        $cart = new stdClass();
        if(isset($_COOKIE['cart'])) {
            $ids = unserialize($_COOKIE['cart']);
            foreach ($ids as $id=>$amount) {
                $cart_products[$id] = getProduct($products, $id);
                $cart_products[$id]->amount = $amount;
                $total_price += $cart_products[$id]->variant->price*$amount;
                $total_amount += $amount;
            }
            $cart->items = $cart_products;
        }
        $cart->total_price = $total_price;
        $cart->total_amount = $total_amount;
        return $cart;
    }
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
        if(isset($_POST['clean'])) {

        setcookie('cart','',time()-(60*60*24*30),'/');
        header("Location: ".$_SERVER['REQUEST_URI']);
        }
        
    }


  /***********************************************/


    public function getProducts()
    {

        $query = "SELECT id, name, description, price, image, url, visible FROM products";
        $this->query($query);
        return $this->results();
    }

    public function updateProduct($id, $product)
    {
        if(empty($id)) {
            return false;
        }
        foreach ($product as $column => $val) {
            $columns[] = $column."="."'".$val."'";
        }
        $colum_sql = implode(',',$columns);
        $query = "UPDATE products SET $colum_sql WHERE id=$id";
        $this->query($query);
        return $id;
    }

    /***********************************************/
   


}