<?php
    namespace App\Controllers;
    use App\Models\PageModel;
    use App\Models\ProductModel;
    use App\Controllers\Controller;
    class PageController extends Controller{
        private $product;
        public function __construct()
        {
            $this->product = new ProductModel();
        }

        public function home(){
            $products = $this->product->getAll();
            return $this->views("user.page.home",compact('products'));
            // require_once __DIR__ . "/../../resources/views/user/page/home.php";
        }
        public function category($id){
            $products = $this->product->getAllProductByCategoryId([$id]);
            return $this->views("user.page.home",compact('products'));
            // require_once __DIR__ . "/../../resources/views/user/page/home.php";
        }
        public function contact(){
            return $this->views('user.page.contact');
            // require_once __DIR__ . "/../../resources/views/user/page/contact.php";
        }
        public function dashboard(){
            return $this->views('admin.page.dashboard');
            // require_once __DIR__ . "/../../resources/views/admin/page/dashboard.php";
        }
    }
?>