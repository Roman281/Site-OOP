<?php
class Pages extends Core
{
    public function fetch()
    {

      

        $pages = new Pages();
           // $page = $pages->getPagesView($url);
            //echo $categories_catalog;
             $uri = parse_url($_SERVER['REQUEST_URI']);
            // print_r($uri);
             foreach($uri as $val) {
                  //echo $val1= preg_replace('///', '', $val);
                   $str1 = str_replace("/", "", $val);
                // print_r($str1);
               }
            /* $uri[path] = substr($str1,0,strlen($str1)-1);
            // echo $uri;*/
             $page = $pages->getPagesView($str1);
             //print_r($page);

        $array_vars = array(
            'name' => 'Page',
           // 'page' => $page ,
            'pages' => $page ,

        );
        //print_r($array_vars);
        return $this->view->render('pages.html',$array_vars);
    }
}