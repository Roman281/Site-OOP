<?php
class CategoryList extends Core
{
    public function fetch()
    {

      

        $categories = new Categories();
            $categories_catalog = $categories->getCategories();
            //echo $categories_catalog;


        $array_vars = array(
            'name' => 'List categories',
            'categories' => $categories_catalog ,
        );
        //print_r($array_vars);
        return $this->view->render('listcategories.html',$array_vars);
    }
}