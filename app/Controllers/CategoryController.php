<?php
    namespace App\Controllers;
    use App\Models\CategoryModel;
    use App\Controllers\Controller;
    class CategoryController extends Controller{
        private $category;
        public function __construct()
        {
            $this->category = new CategoryModel();
        }
        public function listCategory(){
            $categories = $this->category->getAll();
            return $this->views("admin.category.listCategory",compact('categories'));
            // require_once __DIR__ . "/../../resources/views/admin/category/listCategory.php";
            // require_once __DIR__. "/../../resources/views/user/category.php";
        }
        public function addCategory(){
            if (isset($_POST['btn_addCategory'])){
                $options = [];
                foreach ($_POST as  $key=>$value) {
                    if ($key !== "btn_addCategory"){
                        $options[] = $value;
                    }
                }
                if ($this->category->post($options)){
                    header("Location: /category/");
                } else {
                    echo 'Lỗi';
                }

            } else {
                return $this->views('admin.category.addCategory');
                // require_once __DIR__ .  "/../../resources/views/admin/category/addCategory.php";
            }
        }
        public function updateCategory($id){
            if (isset($_POST['btn_updateCategory'])){
                $options = [];
                foreach ($_POST as  $key=>$value) {
                    if ($key !== "btn_updateCategory"){
                        $options[] = $value;
                    }
                }
                $options[] = $id;
                if ($this->category->put($options)){
                    header("Location: /category/");
                } else {
                    echo 'Lỗi';
                }

            } else {
                $category = $this->category->getOne([$id]);
                return $this->views('admin.category.updateCategory',compact('category'));
                // require_once __DIR__ .  "/../../resources/views/admin/category/updateCategory.php";
            }
        }
        public function deleteCategory($id){
            if ($this->category->delete([$id])){
                header("Location: /category/");
            } else {
                echo "Lỗi";
            }
        }
        public function undoCategory($id){
            if ($this->category->undo([$id])){
                header("Location: /category/");
            } else {
                echo "Lỗi";
            }
        }

    }
?>