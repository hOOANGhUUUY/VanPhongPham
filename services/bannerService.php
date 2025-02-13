<?php
 class bannerService{
    private $bannerModel;

    public function __construct()
    {
        $this->bannerModel = new bannerModel();
    }

    public function getBanner($type = 'banner-top2-left'){
        // $data = $this->bannerModel->getBanner();
        $data = $this->bannerModel->getBanner($type);
        $dataArr = []; 
        foreach ($data as $row) {
            $dataArr[] = [
                'id' => $row->getId(),
                'title' => $row->getTitle(),
                'image' => $row->getImage(),
                'description' => $row->getDescription(),
                'status' => $row->getStatus(),
                'banner_type' => $row->getBannerType()
            ];
        }
        return $dataArr;
    }
 }
?>