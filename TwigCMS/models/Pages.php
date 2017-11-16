<?php
class Pages extends Database
{
   
    public function getPagesView($url)
    {
        if (empty($url))
        {
            return false;
        }
        else
        {
            $query = "SELECT id,title,description,url,visible FROM pages WHERE url = '".$url."' LIMIT 1";
            $this->query($query);
            return $this->result();
        }
    }
    

}

    