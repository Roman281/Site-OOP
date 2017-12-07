<?php
class PayAdmin extends CoreAdmin
{
    public function fetch()
    {  
       
        $pages = new Pages();
        $menu = new Menu();
    	
        $uri = parse_url($_SERVER['REQUEST_URI']);
            // print_r($uri);
        foreach($uri as $val) {
               
             $str1 = str_replace("/", "", $val);
              // var_dump($str1);
        }

              $page = $pages->getPagesView($str1);

        $menuNav = $menu->getMenu();

        $array_vars = array(
            'name' => 'Оплата',
            'page' => $page ,
           /* 'prod' => 'список товара',*/
            'menunav' => $menuNav,
          	

        );

        return $this->view->render('payadmin.html',$array_vars);
    }
}

/*https://www.youtube.com/watch?v=83TVI6GHeew
*/