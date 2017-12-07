<?php
class MainAdmin extends CoreAdmin
{
    public function fetch()
    {
    	$menu = new Menu();

    	$menuNav = $menu->getMenu();

        $array_vars = array(
            'name' => 'ADMIN',
            'prod' => 'список товара',
            'menunav' => $menuNav,
          	

        );

        return $this->view->render('main.html',$array_vars);
    }
}