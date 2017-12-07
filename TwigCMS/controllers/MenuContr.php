<?php
class MenuContr extends Core
{
    public function fetch()
    {

      
        

        $menu = new Menu();

        $menuNav = $menu->getMenu();
        //print_r($menuNav);
           
  

        $array_vars = array(
            'name' => 'Menu',
            'menunav' => $menuNav,
        );

        //print_r($array_vars);
        return $this->view->render('menu.html',$array_vars);
    }
}