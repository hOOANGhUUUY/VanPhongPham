<?php

class HomeController {
    private $homeView;
    private $productServices;
    private $categoryServices;
    private $bannerServices;
    

    function __construct() {
        $this->homeView = new HomeView();
        $this->productServices = new ProductService();
        $this->categoryServices = new CategoryService();
        $this->bannerServices = new bannerService();
    }
    public function index() {
        $dataCate = $this->categoryServices->grCate();
        $dataBanner = $this->bannerServices->getBanner();
        $dataProductSoldCount = $this->productServices->getProductSoldCount();
        $dataNewProduct = $this->productServices->getNewProduct();

        $this->homeView->index([
            'dataCate' => $dataCate,
            'dataBanner' => $dataBanner,
            'dataProductSoldCount' => $dataProductSoldCount,
            'dataNewProduct' => $dataNewProduct
        ]);
    }
    public function getData() {
        $dataCate = $this->categoryServices->grCate();
        $dataBanner = $this->bannerServices->getBanner();
        $dataProductSoldCount = $this->productServices->getProductSoldCount();
        $dataNewProduct = $this->productServices->getNewProduct();

        return [
            'dataCate' => $dataCate,
            'dataBanner' => $dataBanner, 
            'dataProductSoldCount' => $dataProductSoldCount,
            'dataNewProduct' => $dataNewProduct
        ];
    }
}


