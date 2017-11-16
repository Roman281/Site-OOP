<?php
class ProductMain extends Core
{
    public function fetch()
    {

      
        $cart = new CartMod();
        $products = new Products();
         //  $product = $product->getProduct($id);
            //echo $categories_catalog;
         $categories = new Categories();
        $categories_catalog = $categories->getCategories();    

        if(isset($_GET['id'])) {
           $product = $products->getProduct($_GET['id']);

        } 



        $array_vars = array(
            /*ссылка*/'name' => 'Product', /*значение ссылки*/
           'product' => $product,
            'namePrice' => 'Цена товара:',
            'discriptionProduct' => 'Описание товара',
            'categories' => $categories_catalog ,
           

        );
        
        return $this->view->render('product.html',$array_vars);
    }
}