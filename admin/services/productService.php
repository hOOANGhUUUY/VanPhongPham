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

        public function getOneProduct($id){
            $data = $this->productModel->getOneProduct($id);
            return $data;
        }

        public function updateProduct($data){
            // print_r($data);
            return $this->productModel->update($data);
        }
    }
?>