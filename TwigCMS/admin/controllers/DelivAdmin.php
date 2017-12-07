<?php
class DelivAdmin extends CoreAdmin
{
    public function fetch()
    {
        $menu = new Menu();
    	 //$categories = new Delivery();
            //$categories_catalog = $categories->getDelivery();
        $menuNav = $menu->getMenu();

        $array_vars = array(
            'name' => 'DELIVERY',
            'prod' => 'список товара',
            'menunav' => $menuNav,
          	

        );

        return $this->view->render('deliv.html',$array_vars);
    }
}

/*https://www.youtube.com/watch?v=83TVI6GHeew
*/