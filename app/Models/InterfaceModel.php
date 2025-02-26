<?php
    namespace App\Models;
    interface InterfaceModel{
        public function getAll();
        public function getOne($options);
        public function post($options);
        public function put($options);
        public function delete($options);
        public function undo($options);
        
    }
?>