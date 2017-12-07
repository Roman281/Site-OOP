<?php
class Catalog extends Core
{
    public function fetch()
    {
        $menu = new Menu();
        $products = new Products();
            $products = $products->getProducts();
            //echo $categories_catalog;
        $categories = new Categories();
        $category1 = new Categories(); 
        $categoriesUrl = new Categories();

         $categories_catalog = $categories->getCategories();

         $categoryUrl = $categoriesUrl->getCategoryUrl($url);
      /*  if(isset($_GET['id'])) {
           
           $category_class = $categories->getCategory($_GET['id']);

        } */
    /*    $uri = parse_url($_SERVER['REQUEST_URI']);
            // print_r($uri);
        foreach($uri as $val) {
               
             $str1 = str_replace("/", "", $val);
                var_dump($str1);
        }*/

           /* $product = $products->getProduct($str1);
                print_r($page);*/
      /*      $category_class = $category1->getCategory($str1);   */
        
        $menuNav = $menu->getMenu();

  
       
        $array_vars = array(
            'name' => 'List products',
            'products' => $products ,
            'categories' => $categories_catalog ,
            'categoryurl' => $categoryUrl,
            'menunav' => $menuNav,
        );
        //print_r($array_vars);
        return $this->view->render('products.html',$array_vars);
    }
}