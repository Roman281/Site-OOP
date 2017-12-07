<?php
class Pay extends Core
{
    public function fetch()
    {
		
    $pay = new Pay();
		$pages = new Pages();
    $menu = new Menu();

		$uri = parse_url($_SERVER['REQUEST_URI']);
            // print_r($uri);
     	foreach($uri as $val) {
               
             $str1 = str_replace("/", "", $val);
              // var_dump($str1);
     	}

              $page = $pages->getPagesView($str1);
             // print_r($page);
              $menuNav = $menu->getMenu();

        $array_vars = array(
            'name' => 'Оплата',
            'page' => $page ,
            'menunav' => $menuNav,
        );

        return $this->view->render('pay.html',$array_vars);
         //print_r($array_vars);
    }
}