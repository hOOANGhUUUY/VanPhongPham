<?php
class bannerModel extends Connect
{
    private $id;
    private $title;
    private $image;
    private $description;
    private $status;
    private $banner_type;


    public function __construct($data = [])
    {
        parent::__construct();
        $this->id = $data['id'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->image = $data['image'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->banner_type = $data['banner_type'] ?? null;
    }

    public function getId(){return $this->id;}
    public function setId($id){$this->id = $id;}
    public function getTitle(){return $this->title;}
    public function setTitle($title){$this->title = $title;}
    public function getImage(){return $this->image;}
    public function setImage($image){$this->image = $image;}
    public function getDescription(){return $this->description;}
    public function setDescription($description){$this->description = $description;}
    public function getStatus(){return $this->status;}
    public function setStatus($status){$this->status = $status;}
    public function getBannerType(){return $this->banner_type;}
    public function setBannerType($banner_type){$this->banner_type = $banner_type;}



    public function getBanner($bannerType) {
        $sql = "SELECT id, title, image, description, status, banner_type FROM banner WHERE status = 1 AND banner_type = ?";
        $data = $this->getAll($sql, [$bannerType]);
    
        $banners = [];
        foreach ($data as $row) {
            $banners[] = new bannerModel($row);
        }
        return $banners;
    }
    

}
