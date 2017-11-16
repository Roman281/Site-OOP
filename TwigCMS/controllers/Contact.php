<?php
class Contact extends Core
{
    public function fetch()
    {
		$pay = new Contact();

        $array_vars = array(
            'name' => 'Контакты',
        );

        return $this->view->render('contact.html',$array_vars);
         print_r($array_vars);
    }
}