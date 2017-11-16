<?php
class Main extends Core
{
    public function fetch()
    {


        $array_vars = array(
            'name' => 'hellojhgfjhfg',
        );

        return $this->view->render('main1.html',$array_vars);
    }
}