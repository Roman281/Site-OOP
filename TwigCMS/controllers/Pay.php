<?php
class Pay extends Core
{
    public function fetch()
    {
		$pay = new Pay();
		$pages = new Pages();

		$uri = parse_url($_SERVER['REQUEST_URI']);
            // print_r($uri);
     	foreach($uri as $val) {
               
             $str1 = str_replace("/", "", $val);
               // var_dump($str1);
     	}

              $page = $pages->getPagesView($str1);


        $array_vars = array(
            'name' => 'Оплата',
            'page' => $page ,
        );

        return $this->view->render('pay.html',$array_vars);
         print_r($array_vars);
    }
}