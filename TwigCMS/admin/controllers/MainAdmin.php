<?php
class MainAdmin extends CoreAdmin
{
    public function fetch()
    {


        $array_vars = array(
            'name' => 'ADMIN',
            'name1' => 'Здорово!'

        );

        return $this->view->render('main.html',$array_vars);
    }
}