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

        public function dataFromEdit($id){
            
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $productId = $id;
                $productName = $_POST['productName'];
                $category = $_POST['category'];
                $productDescription = $_POST['productDescription'];
                $productPrice = $_POST['productPrice'];
                $salePrice = $_POST['salePrice'];
                $status = $_POST['status'];
                
                // Kiểm tra xem tệp đã được tải lên thành công hay chưa
                if(isset($_FILES['productImage']) && $_FILES['productImage']['name'] == 0){
                    $productImage = $_FILES['productImage']['name'];
                } else {
                    $productImage = $_POST['productImage_old'];
                    
                }
                $data = [
                    'id' => $productId,
                    'name' => $productName,
                    'image' => $productImage,
                    'description' => $productDescription,
                    'price' => $productPrice,
                    'price_sale' => $salePrice,
                    'status' => $status,
                    'category' => $category,

                ];
                $this->productService->updateProduct($data);
                $this->categoryService->updateCateProduct($data);
            }
        }

        
    }
?>