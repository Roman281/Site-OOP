<?php
class Delivery extends Core
{
    public function fetch()
    {
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
               // var_dump($str1);
             }
          
              $page = $pages->getPagesView($str1);
               // print_r($page);
       

        $array_vars = array(
            'name' => 'Доставка',
           'page' => $page ,
       );

        return $this->view->render('delivery.html',$array_vars);
        // print_r($array_vars);
    }
}