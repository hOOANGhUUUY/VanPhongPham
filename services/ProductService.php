<?php
    class ProductService{
        private $productModel;

        public function __construct()
        {
            $this->productModel = new ProductModel();
        }

        public function getProductSoldCount(){
            $data = $this->productModel->getProductSoldCount();
            $dataArr = [];
            foreach ($data as $row) {
                $dataArr[] = [
                    'id' => $row->getId(),
                    'name' => $row->getName(),
                    'image' => $row->getImage(),
                    'description' => $row->getDescription(),
                    'price' => $row->getPrice(),
                    'price_sale' => $row->getPriceSale(),
                    'product_type' => $row->getProductType(),
                    'slug' => $row->getSlug(),
                    'status' => $row->getStatus(),
                    'sold_count' => $row->getSoldCount()
                ];
            }
            return $dataArr;
        }

        public function getNewProduct() {
            return $this->productModel->getNewProduct();
        }
    }
?>