<?php
class PayAdmin extends CoreAdmin
{
    public function fetch()
    {  
       
        $pages = new Pages();
        $menu = new Menu();
    	
        $uri = parse_url($_SERVER['REQUEST_URI']);
        $uri = explode('/', $uri['path']);
        $urival = array_pop($uri);
        $page = $pages->getPagesView($urival);

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