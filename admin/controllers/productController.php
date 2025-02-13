<?php
    class ProductController   {
        private $productView;
        private $productService;
        function __construct() {
            $this->productView = new ProductView();
            $this->productService = new ProductService();
        }
        public function viewProduct() {
            $dataProduct = $this->productService->getAllProduct();
            $this->productView->view([
                'dataProduct' => $dataProduct
            ]);
        }
    }
?>