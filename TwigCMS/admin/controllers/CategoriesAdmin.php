<?php
class CategoriesAdmin extends CoreAdmin
{
    public function fetch()
    {
        $menu = new Menu();
        $category = new Categories();
        $request = new Request();
        $categories = new Categories();
        
        ////////////////////////////
       // $category = new stdClass();


        if($request->method() == 'POST') {
            
            $category->name = $request->post('name');
            $category->description = $request->post('description');
            $category->part_id = $request->post('part_id', 'integer');
            $category->image = $request->post('image');
            $category->visible = $request->post('visible','integer');
            if(empty($request->post('url'))) {
                $category->url = CoreAdmin::translit($request->post('name'));
            } else {
                $category->url = $request->post('url');
            }
/**////////////////////
           /*if($request->post('name') && isset($products->id)) {
                $id = $products->updateProduct($request->post('id','integer'),$product);

            } else {
                //Добавление товара
                $id = $products->addProduct($product);
            }*/
/********************************************************/
            if($request->post('name') && isset($category->id)) {
               $id = $category->updateCategories($request->post('id','integer'),$category);

            } else {
                //Добавление категории товара
                $id = $category->addCategories($category);
            }

/**********************/

           /* if($request->post('id','integer')) {
               $id = $products->updateProduct($request->post('id','integer'),$product);

            } else {
                //Добавление товара
                $id = $products->addProduct($product);
            }
*/             
            /*получаем из бызы занесенный id*/ 
            //$product = $products->getProduct($id);
            $categories = $category->getCategories($id);
        }

        $categories_catalog = $categories->getCategories();
        $menuNav = $menu->getMenu();

        $array_vars = array(
            //'product' => $product,
            'category' => $category,
            'categories' => $categories_catalog ,
            'menunav' => $menuNav,
        );
       // print_r($array_vars);

        return $this->view->render('categories.html',$array_vars);
    }
}