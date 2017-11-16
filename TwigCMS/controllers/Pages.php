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
             $uri[path] = substr($uri,0,strlen($uri)-1);
             echo $uri;
             $page = $pages->getPages($uri[path]);
             print_r($page);

        $array_vars = array(
            'name' => 'Page',
           // 'page' => $page ,
            'pages' => $page ,

        );
        //print_r($array_vars);
        return $this->view->render('pages.html',$array_vars);
    }
}