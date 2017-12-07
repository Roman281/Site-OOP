<?php
class CatalogAdmin extends CoreAdmin
{
    public function fetch()
    {

        $menu = new Menu();
        $products = new Products();
        $products_catalog = $products->getProducts();

        $categories = new Categories();
        $categories_catalog = $categories->getCategories();

        $menuNav = $menu->getMenu();



        $array_vars = array(
            'name' => 'Products',
            'products' => $products_catalog,
            'namePrice' => 'Цена товара:',
            'discriptionProduct' => 'Описание товара',
            //'categories' => $categories_catalog ,
            'menunav' => $menuNav,
        );

        return $this->view->render('catalog.html',$array_vars);
    }
}