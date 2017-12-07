<?php
class Menu extends Database
{
   
    public function getMenu()
    {               
             $query = "SELECT id, name, url FROM menu";
            $this->query($query);
            //print_r($query);
            return $this->results();
        
    }
    

}

    