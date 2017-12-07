<?php
class Main extends Core
{
    public function fetch()
    {
        $menu = new Menu();
        $category1 = new Categories();
        $categories = new Categories();
        $categories_catalog = $categories->getCategories(); 
       // print_r($categories_catalog);
        
        /***********************************/
        $uri = parse_url($_SERVER['REQUEST_URI']);
            // print_r($uri);
        foreach($uri as $val) {
               
             $str1 = str_replace("/", "", $val);
                var_dump($str1);
        }

           /* $product = $products->getProduct($str1);
                print_r($page);*/
            $category_class = $category1->getCategory($str1);

              $menuNav = $menu->getMenu();

        /***********************************/ 

        /*if(isset($_GET['id'])) {
           $product = $products->getProduct($_GET['id']);
           $category_class = $category1->getCategory($_GET['id']);

        } 
*/

        $menuNav = $menu->getMenu();
        print_r($menuNav);
        


        $array_vars = array(
            'name' => 'hello',
            'categories' => $categories_catalog ,
            'category1' => $category_class,
            'menunav' => $menuNav,
        );

        return $this->view->render('main.html',$array_vars);
    }
}