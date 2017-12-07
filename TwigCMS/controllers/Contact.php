<?php
class Contact extends Core
{
    public function fetch()
    {	
    	$menu = new Menu();
		$contact = new Contact();
		$menuNav = $menu->getMenu();


        $array_vars = array(
            'name' => 'Контакты',
            'menunav' => $menuNav,
        );

        return $this->view->render('contact.html',$array_vars);
         print_r($array_vars);
    }
}