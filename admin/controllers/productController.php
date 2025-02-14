<?php
    class ProductController   {
        private $productView;
        private $productService;
        private $categoryService;
        function __construct() {
            $this->productView = new ProductView();
            $this->productService = new ProductService();
            $this->categoryService = new CategoryService;
        }
        public function viewProduct() {
            $dataProduct = $this->productService->getAllProduct();
            $this->productView->view([
                'dataProduct' => $dataProduct
                
            ]);
        }
        public function viewEditProduct($id){
            $dataCateOfProduct = $this->productService->getOneProduct($id);
            
            $dataCate = $this->categoryService->grCate();          
            $this->productView->viewEdit([
                'dataCate' => $dataCate,
                'dataCateAndProduct' =>$dataCateOfProduct
            ]);
        }
    }
?>