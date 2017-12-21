<?php
class Categories extends Database
{
   
    public function addCategories($categories)
    {
        if(empty($categories)) {
            return false;
        }
        foreach ($categories as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO categories ($colum_sql) VALUES ($val_sql)";
       // echo $query;
        $this->query($query);
        return $this->resId();
    }

    public function getCategories()
    {
        
        $query = "SELECT category_id, name, visible, description, image, category_url FROM categories";
       
        //echo $query;
        $this->query($query);
        return $this->results();
    }
    public function getCategoryId($id)
    {
        
        $query = "SELECT category_id, name, visible, description, image, category_url FROM categories
        WHERE id = $id LIMIT 1";

       
        //echo $query;
        $this->query($query);
        return $this->results();
    }

    public function getCategory($id)
    {
        
        
       $query = "SELECT p.id, p.name, p.description, p.price, p.image, p.url, pc.product_id
        FROM products p
        INNER JOIN product_categories pc ON p.id = pc.product_id
        WHERE pc.category_id =  '".$id."' ";
        //echo $query;
        $this->query($query);
        return $this->results();
    }
    /*public function getCategoryClass()        
       $query =  "SELECT pc.product_id FROM product_categories pc WHERE pc.category_id = '".$id."'";
       
        $this->query($query);
        return $this->results();
    }*/

    public function getCategoryUrl($url)
    {
        
        
       $query = "  SELECT p.id, p.name, p.description, p.price, p.image, p.url,c.category_url  
            FROM products p
            INNER JOIN categories c ON p.category_id=c.category_id
            WHERE c.category_url =  '".$url."' ";
        
        $this->query($query);
        return $this->results();
    }
    
    public function updateCategories($id, $categories)
    {
        if(empty($id)) {
            return false;
        }
        foreach ($categories as $column => $val) {
            $columns[] = $column."="."'".$val."'";
        }
        $colum_sql = implode(',',$columns);
        $query = "UPDATE categories SET $colum_sql WHERE id=$id";
        $this->query($query);
        return $id;
    }



/***************************************************************************/
/*Построение дерева категорий*/
    public function makeTree($categories,$parent_id=0) {
        $results=array();
        if ($categories) {
            foreach ($categories as $key => $category) {
                if ($category->parent_id==$parent_id) {
                    if ($category->id!=$parent_id) {
                        $subcategories = makeTree($categories,$category->id);
                        if(!empty($subcategories))
                            $category->subcategories = $subcategories ;
                    }
                    $results[]=$category;
                    unset($category);
                }
            }
        }
        return $results;
    }

    /*Вывод дерева категорий*/
    public function viewCategories($categories) {
        if($categories) { // проверка лишней не бывает
            echo "<ul>";
            foreach ($categories as $category) {
                if($category->visible) { //важная проверка, которая позволит выводит только включенные категории на сайте
                    echo
                    "<li>
                        <a href='?r=categories&id=".$category->id."'>$category->name</a>
                    </li>";
                    if(isset($category->subcategories)) {
                        // проверяем есть ли подкатегории и вызываем заново функцию для вывода
                        viewCategories($category->subcategories); // передаем в функцию уже массив обьектов покатегорий
                    }
                }
            }
            echo "</ul>";
        }
    }


    /***************************************************************************/

}