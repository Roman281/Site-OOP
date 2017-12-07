<?php
class Order extends Database
{
     if(isset($_POST['clean2'])) {
        
    setcookie('wishlist','',time()-(60*60*24*30),'/');
    header("Location: ".$_SERVER['REQUEST_URI']);
    }
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
    //Добавление/обновление товара в файлменеджер
if($_SERVER['REQUEST_METHOD'] === "POST" && $_POST['make_order'] && !empty($_POST['name']) && !empty($_POST['last_name']) && !empty($_POST['email'])) {
            $DATA = clear($_POST);
            $total_amount = 0;
            $total_price = 0;
            $cart = new stdClass();
            if(isset($_COOKIE['cart'])) {
            $ids = unserialize($_COOKIE['cart']);
            print_r($ids);


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
    /*user data*/

        
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$comment = $_POST['comment'];

/*if (!empty($_POST['name']) && !empty($_POST['last_name']) && !empty($_POST['email'])){*/
    if(!preg_match('/[а-яА-Яa-zA-Z]{2,10}/', $name)) {
     echo 'не правильно ввели имя';
    }  
        elseif(!preg_match('/^[а-яА-Яa-zA-Z]+-?[а-яА-Яa-zA-Z0-9_]?+[^*]/',$last_name)) { 
        echo 'не правильно ввели фамилию';
     } 
     elseif(!preg_match('/^[+](\([0-9]{3})[0-9]{10})$/ui',$last_name)) { 
        echo 'не правильно ввели email';
        } 
     elseif(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,})$/ui',$phone)) { 
        echo 'не правильно ввели phone';
     } else  

    $put_txt = '';
    $put_txt .= "========= Заказ № ".rand(1,1000)."========="."\n";
    $put_txt .= 'Имя:'.$DATA['name']."\n";
    $put_txt .= 'Фамилия:'.$DATA['last_name']."\n";
    $put_txt .= 'Email:'.$DATA['email']."\n";
    $put_txt .= 'Телефон:'.$DATA['phone']."\n";
    $put_txt .= 'Адрес доставки:'.$DATA['address']."\n";
    $put_txt .= 'Комментарий:'.$DATA['comment']."\n";
    $put_txt .= 'Список товаров:'."\n";
    $i = 1;
    foreach ($cart->items as $item) {
        $put_txt .= $i++ ." ".$item->name. "- ". $item->amount . " шт ". $item->amount*$item->variant->price . " грн"."\n";
    

    file_put_contents('orders.txt', $put_txt, FILE_APPEND | LOCK_EX);

    setcookie('cart','',time()-(60*60*24*30),'/');
    header("Location:".$_SERVER['REQUEST_URI']);
    }
} else header("Location:".$_SERVER['REQUEST_URI']); 
        echo "правильно заполните поля";

function clear($data) {
    if(is_array($data)) {
        $output = array();
        foreach ($data as $key => $val) {
            $output[$key] = trim(strip_tags($val));
            print_r($output[$key]);
        }
        return $output;
    }
    return false;
}


  /***********************************************/


   

    /***********************************************/
   


}