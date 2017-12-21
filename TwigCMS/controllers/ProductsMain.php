<?php
class ProductsMain extends Core
{
    public function fetch()
    {

      

        $products = new Products();
        $products = $products->getProducts();
            //echo $categories_catalog;
        $categories = new Categories();
        $categories_catalog = $categories->getCategories();


        $array_vars = array(
            'name' => 'List products',
            'products' => $products ,
            'categories' => $categories_catalog ,
        );
        //print_r($array_vars);
        return $this->view->render('products.html',$array_vars);
    }
}