<?php
class DelivAdmin extends CoreAdmin
{
    public function fetch()
    {
        $menu = new Menu();
        $pages = new Pages();
           //  $page = $pages->getPagesView($url);
      /*
      if(isset($_GET['url'])) {
                  $page = $pages->getPagesView($_GET['url']);

      } */

    
            
        $uri = parse_url($_SERVER['REQUEST_URI']);
        $uri = explode('/', $uri['path']);
        $urival = array_pop($uri);
        $page = $pages->getPagesView($urival);
                 
        $menuNav = $menu->getMenu();

        $array_vars = array(
            'name' => 'DELIVERY',
            'prod' => 'список товара',
            'menunav' => $menuNav,
            'page' => $page ,
          	

        );

        return $this->view->render('deliv.html',$array_vars);
    }
}

/*https://www.youtube.com/watch?v=83TVI6GHeew
*/