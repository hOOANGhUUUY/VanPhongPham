<?php
    class ProductController{
        private $productView;
        private $productService;
        public function __construct()
        {
            $this->productView = new ProductViewClient();
            // $this->productService = new ProductServiceClient();
        }

        public function detailView($id){
            echo $id;
            $this->productView->detailView();

        }
    }
?>