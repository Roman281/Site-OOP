<?php
class Products extends Database
{
    /*public function __construct()
    {
        parent::__construct();
    }*/

    public function addProduct($product)
    {
        if(empty($product)) {
            return false;
        }
        foreach ($product as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }
       // print_r($columns);
        //print_r($values);
        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO products ($colum_sql) VALUES ($val_sql)";
        // echo $query;
        $this->query($query);
        return $this->resId();

    }

    public function addIdCateg($product)
    {
        if(empty($product)) {
            return false;
        }
        foreach ($product as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }
        //print_r($values);
       // print_r($columns);
        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO product_categories ($colum_sql) VALUES ($val_sql)";

       /* $query = "INSERT INTO product_categories(id, part_id) VALUES (NULL ,$product->part_id)";*/

    /*    $query = "INSERT INTO product_categories (id, category_id) VALUES (NULL ,$product->part_id)";*/
         //echo $query;
        $this->query($query);
        return $this->resId();
    }

    public function getIdCateg()
    {

        $query = "SELECT id, category_id FROM product_categories";
        $this->query($query);
        return $this->results();
    }

    public function getProduct($id)
    {
        if(empty($id)) {
            return false;
        }
        $query = "SELECT id, name, description, price, image, url, visible FROM products WHERE id = $id LIMIT 1";
        $this->query($query);
        return $this->result();
    }
    public function getProductUrl($url)
    {
        if(empty($url)) {
            return false;
        }
        $query = "SELECT id, name, description, price, image, url, visible FROM products WHERE url = '".$url."' LIMIT 1";
        $this->query($query);
        return $this->result();
    }
    public function getProducts()
    {

        $query = "SELECT id, name, description, price, image, url, visible FROM products";
        $this->query($query);
        return $this->results();
    }

    public function updateProduct($id, $product)
    {
        if(empty($id)) {
            return false;
        }
        foreach ($product as $column => $val) {
            $columns[] = $column."="."'".$val."'";
        }
        $colum_sql = implode(',',$columns);
        $query = "UPDATE products SET $colum_sql WHERE id=$id";
        $this->query($query);
        return $id;
    }

    /***********************************************/
     //Добавление/обновление товара в корзине

/***********************************************/

}