<?php
class Main extends Core
{
    public function fetch()
    {

    	 $categories = new Categories();
        $categories_catalog = $categories->getCategories(); 
       // print_r($categories_catalog);
        
        $category1 = new Categories(); 

        if(isset($_GET['id'])) {
           $product = $products->getProduct($_GET['id']);
           $category_class = $category1->getCategory($_GET['id']);

        } 

        


        $array_vars = array(
            'name' => 'hello',
            'categories' => $categories_catalog ,
            'category1' => $category_class,
        );

        return $this->view->render('main.html',$array_vars);
    }
}