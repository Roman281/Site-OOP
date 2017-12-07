<?php
class CategoryListAdmin extends CoreAdmin
{
    public function fetch()
    {

        $menu = new Menu();

        $categories = new Categories();
            $categories_catalog = $categories->getCategories();
            //echo $categories_catalog;

        $menuNav = $menu->getMenu();

        $array_vars = array(
            'name' => 'List categories',
            'categories' => $categories_catalog ,
            'menunav' => $menuNav,
        );
        //print_r($array_vars);
        return $this->view->render('listcategories.html',$array_vars);
    }
}