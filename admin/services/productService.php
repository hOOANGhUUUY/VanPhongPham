<?php
    class ProductService{
        private $productModel;

        public function __construct()
        {
            $this->productModel = new ProductModel();
        }

        public function getAllProduct(){
            return $this->productModel->getAllProduct();
        }


    }
?>