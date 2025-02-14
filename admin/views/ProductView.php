<?php
    class ProductView {
        public function view($data = []) {
            $fileView = './views/products/allProduct.php';
            require_once './views/layout/template.php';
        }

        public function viewEdit($data= []){
            $fileView = './views/products/edit_product.php';
            $base_url = '../../';
            require_once './views/layout/template.php';
        }
    }
?>