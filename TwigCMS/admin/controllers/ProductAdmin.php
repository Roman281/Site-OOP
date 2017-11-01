<?php
class ProductAdmin extends CoreAdmin
{
    public function fetch()
    {
        $products = new Products();
        $request = new Request();
        $categories = new Categories();
        ////////////////////////////
        $product = new stdClass();

        if($request->method() == 'POST') {
            $product->name = $request->post('name');
            $product->description = $request->post('description');
            $product->image = $request->post('price');
            $product->image = $request->post('image');
            $product->visible = $request->post('visible','integer');
            /**********************************************/
            $categories->name = $request->post('name');
            $categories->description = $request->post('description');
            $categories->image = $request->post('part_id');
            $categories->image = $request->post('image');
            $categories->visible = $request->post('visible','integer');
            if(empty($request->post('url'))) {
                $product->url = CoreAdmin::translit($request->post('name'));
            } else {
                $product->url = $request->post('url');
            }
/**////////////////////
           if($request->post('name') && isset($products->id)) {
                $id = $products->updateProduct($request->post('id','integer'),$product);

            } else {
                //Добавление товара
                $id = $products->addProduct($product);
            }
/********************************************************/
if($request->post('name') && isset($categories->id)) {
               $id = $categories->updateCategories($request->post('id','integer'),$categories);

            } else {
                //Добавление категории товара
                $id = $categories->addCategories($categories);
            }

/**********************/

           /* if($request->post('id','integer')) {
               $id = $products->updateProduct($request->post('id','integer'),$product);

            } else {
                //Добавление товара
                $id = $products->addProduct($product);
            }
*/
            $product = $products->getProduct($id);
            $categories = $categories->getCategories($id);
        }

        $array_vars = array(
            'product' => $product,
            'categories' => $categories,
        );

        return $this->view->render('product.html',$array_vars);
    }
}