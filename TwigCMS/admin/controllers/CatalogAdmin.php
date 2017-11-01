<?php
class CatalogAdmin extends CoreAdmin
{
    public function fetch()
    {

        $products = new Products();
        $products_catalog = $products->getProducts();

        $categories = new Categories();
        $categories_catalog = $categories->getCategories();


        $array_vars = array(
            'name' => 'Products',
            'products' => $products_catalog,
            'categories' => $categories_catalog ,
        );

        return $this->view->render('catalog.html',$array_vars);
    }
}