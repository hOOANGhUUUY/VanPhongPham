<?php
    class ProductService{
        private $productModel;
        private $categoryModel;
        public function __construct()
        {
            $this->productModel = new ProductModel();
            $this->categoryModel = new CategoryModel();
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

        public function deleteProduct($id){
            // print_r($data);
            return $this->productModel->delete($id);
        }

        function generateSlug($name) {
            $search = ['à', 'á', 'ạ', 'ả', 'ã', 'â', 'ầ', 'ấ', 'ậ', 'ẩ', 'ẫ', 'ă', 'ằ', 'ắ', 'ặ', 'ẳ', 'ẵ',
                       'è', 'é', 'ẹ', 'ẻ', 'ẽ', 'ê', 'ề', 'ế', 'ệ', 'ể', 'ễ',
                       'ì', 'í', 'ị', 'ỉ', 'ĩ',
                       'ò', 'ó', 'ọ', 'ỏ', 'õ', 'ô', 'ồ', 'ố', 'ộ', 'ổ', 'ỗ', 'ơ', 'ờ', 'ớ', 'ợ', 'ở', 'ỡ',
                       'ù', 'ú', 'ụ', 'ủ', 'ũ', 'ư', 'ừ', 'ứ', 'ự', 'ử', 'ữ',
                       'ỳ', 'ý', 'ỵ', 'ỷ', 'ỹ',
                       'đ'];
            
            $replace = ['a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a',
                        'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e',
                        'i', 'i', 'i', 'i', 'i',
                        'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o',
                        'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u',
                        'y', 'y', 'y', 'y', 'y',
                        'd'];
        
            // Thay thế dấu tiếng Việt
            $slug = str_replace($search, $replace, mb_strtolower(trim($name), 'UTF-8'));
        
            // Thay khoảng trắng bằng "-"
            $slug = preg_replace('/\s+/', '-', $slug);
        
            return $slug;
        }
        
        public function addProduct($data){
            
            // Kiểm tra xem có 'id' trong $data hay không

        
            // Tạo slug từ name và id
            $slug = $this->generateSlug($data['name']);
            
            // Thêm slug vào mảng data
            $data['slug'] = $slug;
        
            // Chèn sản phẩm vào database
            // print_r($data);
            $data['idNewProduct'] = $this->productModel->addProduct($data);
            $this->categoryModel->addCate($data);
        }
        
        
    }
?>