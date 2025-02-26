<?php 
use Bramus\Router\Router;
use App\Controllers\PageController;
use App\Controllers\CategoryController;
use App\Controllers\ProductController;
use App\Controllers\OrderController;
$router = new Router();
$page = new PageController();
$product = new ProductController();
$category = new CategoryController();
$order = new OrderController();
$router->get("/",function() use ($page){
$page->home();
});
$router->get('/contact',function() use ($page){
    $page->contact();
});
$router->get("/dashboard",function() use ($page){
    $page->dashboard();
});


$router->get("/products/{id}",function($id) use ($page){
    $page->category($id);
    });

$router->mount("/product",function() use ($router,$product){
    // echo "hhee";
    $router->get("/",function() use ($product){
        $product->listProduct();
    });
    $router->get("/add",function () use ($product){
        $product->addProduct();
    });
    $router->post("/add",function () use ($product){
        $product->addProduct();
    });
    $router->get("/update/{id}",function ($id) use ($product){
        $product->updateProduct($id);
    });
    $router->post("/update/{id}",function ($id) use ($product){
        $product->updateProduct($id);
    });
    $router->get('/delete/{id}',function($id) use ($product){
        $product->deleteProduct($id);
    });
    $router->get("/undo/{id}",function ($id) use ($product){
        $product->undoProduct($id);
    });
});
$router->mount('/category',function() use ($router,$category){
    $router->get("/",function() use ($category){
        $category->listCategory();
    });
    $router->get("/add",function() use ($category){
        $category->addCategory();
    });
    $router->post("/add",function() use ($category){
        $category->addCategory();
    });
    $router->get("/update/{id}",function ($id) use ($category){
        $category->updateCategory($id);
    });
    $router->post("/update/{id}",function ($id) use ($category){
        $category->updateCategory($id);
    });
    $router->get('/delete/{id}',function($id) use ($category){
        $category->deleteCategory($id);
    });
    $router->get("/undo/{id}",function ($id) use ($category){
        $category->undoCategory($id);
    });
});
$router->mount('/order',function() use ($router,$order){
    $router->get("/",function() use ($order){
        $order->listOrder();
    });
    $router->get("/{id}",function($id) use ($order){
        $order->detailOrder($id);
    });
});

// Viết route
$router->run();
?>