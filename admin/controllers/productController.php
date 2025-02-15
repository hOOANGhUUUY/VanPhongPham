<?php
class ProductController
{
    private $productView;
    private $productService;
    private $categoryService;
    function __construct()
    {
        $this->productView = new ProductView();
        $this->productService = new ProductService();
        $this->categoryService = new CategoryService;
    }
    public function viewProduct()
    {
        $dataProduct = $this->productService->getAllProduct();
        $this->productView->view([
            'dataProduct' => $dataProduct

        ]);
    }
    public function viewEditProduct($id)
    {
        $dataCateOfProduct = $this->productService->getOneProduct($id);

        $dataCate = $this->categoryService->grCate();
        $this->productView->viewEdit([
            'dataCate' => $dataCate,
            'dataCateAndProduct' => $dataCateOfProduct
        ]);
    }

    public function dataFromEdit($id)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productId = $id;
            $productName = $_POST['productName'];
            $category = $_POST['category'];
            $productDescription = $_POST['productDescription'];
            $productPrice = $_POST['productPrice'];
            $salePrice = $_POST['salePrice'];
            $status = $_POST['status'];
            $productImage = $_FILES['productImage']['name'];
            $productImageOld = $_POST['productImage_old'];

            // Kiểm tra xem tệp đã được tải lên thành công hay chưa
            if ($productImage == '') {
                $productImage = $productImageOld;
            } else {
                $fileSaveimage = '../public/images/' . $_FILES['productImage']['name'];
                move_uploaded_file($_FILES['productImage']['tmp_name'], $fileSaveimage);
                $file_old = '../public/images/' . $productImageOld;
                unlink($file_old);
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
  
            header('Location: /VanPhongPham-main/admin/san-pham');
            
            echo '<script>
            alert("Sửa sản phẩm thành công");
            </script>';
        }
    }

    public function delete($id)
    {
        $this->productService->deleteProduct($id);

        
            echo "<script>
                    alert(Xóa thành công');
                </script>";
                header('Location: /VanPhongPham-main/admin/san-pham');
                exit();
    }

    public function viewAdd()
    {
        $dataCate = $this->categoryService->grCate();

        $this->productView->viewAdd([
            'dataCate' => $dataCate,
        ]);
    }
    public function dataFormAdd()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productName = $_POST['productName'];
            $category = $_POST['category'];
            $productDescription = $_POST['productDescription'];
            $productPrice = $_POST['productPrice'];
            $salePrice = $_POST['salePrice'];
            $status = $_POST['status'];
            $productImage = $_FILES['productImage']['name'];
            // Kiểm tra xem tệp đã được tải lên thành công hay chưa
            // if(isset($_FILES['productImage']) && $_FILES['productImage']['name'] == 0){
            //     $productImage = $_FILES['productImage']['name'];
            // }

            $data = [
                'name' => $productName,
                'image' => $productImage,
                'description' => $productDescription,
                'price' => $productPrice,
                'price_sale' => $salePrice,
                'status' => (int)$status,
                'category' => $category,

            ];
            $fileSaveImage = '../public/images/' . $productImage;
            if (move_uploaded_file($_FILES['productImage']['tmp_name'], $fileSaveImage)) {
                $this->productService->addProduct($data);
                header('Location: /VanPhongPham-main/admin/san-pham');
                exit();
                echo '<script>
                    alert("Thêm bài viết thành công");
                    
                    </script>';
                    
            } else {
                echo 'Up false';
            }
            // $this->productService->addProduct($data);

        }
    }
}
