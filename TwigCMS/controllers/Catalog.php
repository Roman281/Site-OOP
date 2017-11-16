<?php
class Catalog extends Core
{
    public function fetch()
    {

        $products = new Products();
            $products = $products->getProducts();
            //echo $categories_catalog;
        $categories = new Categories();
        $categories_catalog = $categories->getCategories();
        $category1 = new Categories(); 

        if(isset($_GET['id'])) {
           
           $category_class = $category1->getCategory($_GET['id']);

        } 


        $array_vars = array(
            'name' => 'List products',
            'products' => $products ,
            'categories' => $categories_catalog ,
            'category1' => $category_class,
        );
        //print_r($array_vars);
        return $this->view->render('products.html',$array_vars);
    }
}