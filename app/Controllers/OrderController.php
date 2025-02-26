<?php
    namespace App\Controllers;
    use App\Models\OrderModel;
    use App\Controllers\Controller;

    class OrderController extends Controller{
        private $order;
        public function __construct()
        {
            $this->order = new OrderModel();
        }
        public function listOrder(){
            $orders = $this->order->getAll();
            return $this->views('admin.order.listOrder',compact('orders'));
        }
        public function detailOrder($id){
            $order = $this->order->getOne([$id]);
            return $this->views('admin.order.detailOrder',compact('order'));
        }
    }
?>