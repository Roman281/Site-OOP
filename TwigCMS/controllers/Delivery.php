<?php
class Delivery extends Core
{
    public function fetch()
    {
  		$menu = new Menu();
      $deliv = new Delivery();
  		$pages = new Pages();
           //  $page = $pages->getPagesView($url);
      /*
      if(isset($_GET['url'])) {
                  $page = $pages->getPagesView($_GET['url']);

      } */

      $uri = parse_url($_SERVER['REQUEST_URI']);
              // print_r($uri);
               foreach($uri as $val) {
                  //echo $val1= preg_replace('///', '', $val);
                   $str1 = str_replace("/", "", $val);
                 //print_r($str1);
               }
            
                $page = $pages->getPagesView($str1);
                 // print_r($page);
     
      $menuNav = $menu->getMenu();
      //print_r($menuNav);
        $array_vars = array(
            'name' => 'Доставка',
            'page' => $page ,
            'menunav' => $menuNav,
        );

        return $this->view->render('delivery.html',$array_vars);
        // print_r($array_vars);
    }
}