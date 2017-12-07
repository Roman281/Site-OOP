<?php
class Catalogclass extends Core
{
    public function fetch()
    {
        $menu = new Menu();
        $products = new Products();
        $products = $products->getProducts();
            //echo $categories_catalog;
        $categories = new Categories();
        $categories_catalog = $categories->getCategories();
        $category1 = new Categories(); 
        $category2 = new Categories(); 

        /*if(isset($_GET['id'])) {
           
           $category_class = $category1->getCategory($_GET['id']);

        } */

         $uri = parse_url($_SERVER['REQUEST_URI']);
            // print_r($uri);
        foreach($uri as $val) {
               
             $str1 = str_replace("/", "", $val);
                print_r($str1);
        }

           /* $product = $products->getProduct($str1);
                print_r($page);*/
            $category_class = $category2->getCategoryUrl($str1);

        $menuNav = $menu->getMenu();

        $array_vars = array(
            'name' => 'List products',
            'products' => $products ,
            'categories' => $categories_catalog ,
            'category1' => $category_class,
            'menunav' => $menuNav,
        );
        //print_r($array_vars);
        return $this->view->render('catalogclass.html',$array_vars);
    }
}