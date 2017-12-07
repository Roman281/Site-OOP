<?php
class ProductAdmin extends CoreAdmin
{
    public function fetch()
    {
        $menu = new Menu();
        $products = new Products();
        $request = new Request();
        $categories = new Categories();
        ////////////////////////////
        $product = new stdClass();


        if($request->method() == 'POST') {
            $product->id = $request->post('id');
            $product->name = $request->post('name');
            $product->description = $request->post('description');
            $product->price = $request->post('price');
            $product->image = $request->post('image');
            $product->visible = $request->post('visible');
            $product->category_id = $request->post('category_id','integer');
            /**********************************************/
           
            if(empty($request->post('url'))) {
                $product->url = CoreAdmin::translit($request->post('name'));
            } else {
                $product->url = $request->post('url');
            }
/**////////////////////
           if($request->post('id', 'integer')) {
                $id = $products->updateProduct($request->post('id','integer'),$product);

            } else {
                //Добавление товара
                $id = $products->addProduct($product);

               // $idC = $products->addIdCateg($product);
            }
/********************************************************/
/*if($request->post('name') && isset($categories->id)) {
               $id = $categories->updateCategories($request->post('id','integer'),$categories);

            } else {
                //Добавление категории товара
                $id = $categories->addCategories($categories);
            }*/

/**********************/
          /*if(empty($request->post('category_id'))) {
                $product->category_id = $categories->getCategoryId($id);;
            } else {
                $product->category_id = $request->post('category_id');
            }*/

            /*получаем из бызы занесенный id*/ 
            $product = $products->getProduct($id);
         

            
        }
        $selectCategory = $categories->getCategories();
            //print_r($selectCategory);
        $menuNav = $menu->getMenu();

        $array_vars = array(
            'product' => $product,
            'category' => $selectCategory,
            'menunav' => $menuNav,
        );

        return $this->view->render('product.html',$array_vars);
    }
}