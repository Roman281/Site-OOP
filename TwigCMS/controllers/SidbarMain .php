<?php
class Main extends Core
{
    public function fetch()
    {


        $array_vars = array(
            'name' => 'hello',
        );

        return $this->view->render('sidebar.html',$array_vars);
    }
}