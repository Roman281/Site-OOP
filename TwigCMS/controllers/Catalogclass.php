<?php
class Catalogclass extends Core
{
     public function fetch()
    {
        $menu = new Menu();
        $products = new Products();
       
            //echo $categories_catalog;
        $categories = new Categories();
        $category1 = new Categories(); 
        $categoriesUrl = new Categories();

       // $products = $products->getProducts();

        $categories_catalog = $categories->getCategories();
         //print_r($categories_catalog);

        $uri = parse_url($_SERVER['REQUEST_URI']);
        $uri = explode('/', $uri['path']);
          // print_r($uri);   
       
        
        $urival = array_pop($uri);
               // print_r($urival);
        $categoryUrl = $categoriesUrl->getCategoryUrl($urival);
        $product = $products->getProductUrl($urival);

        $menuNav = $menu->getMenu();

  
       
        $array_vars = array(
            'name' => 'List products',
            'products' => $products ,
            'categories' => $categories_catalog ,
           'categoryurl' => $categoryUrl,
           'product' => $product,
            'menunav' => $menuNav,
        );
        //print_r($array_vars);
        return $this->view->render('catalog.html',$array_vars);
    }
}