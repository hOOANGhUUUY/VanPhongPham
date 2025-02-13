<?php
    class ProductModel extends Connect {
        private $id;
        private $name;
        private $image;
        private $description;
        private $price;
        private $price_sale;
        private $product_type;
        private $slug;
        private $status;
        private $sold_count;

        public function __construct($data = []){
            parent::__construct();
            $this->id = $data['id'] ?? null;
            $this->name = $data['name'] ?? null;
            $this->image = $data['image']?? null;
            $this->description = $data['description']?? null;
            $this->price = $data['price']?? null;
            $this->price_sale = $data['price_sale']?? null;
            $this->product_type = $data['product_type']?? null;
            $this->slug = $data['slug']?? null;
            $this->status = $data['status']?? null;
            $this->sold_count = $data['sold_count']?? null;
        }

        public function getId(){return $this->id;}
        public function getName(){return $this->name;}
        public function getImage(){return $this->image;}
        public function getDescription(){return $this->description;}
        public function getPrice(){return $this->price;}
        public function getPriceSale(){return $this->price_sale;}
        public function getProductType(){return $this->product_type;}
        public function getSlug(){return $this->slug;}
        public function getStatus(){return $this->status;}
        public function getSoldCount(){return $this->sold_count;}


        public function setId($id){$this->id = $id;}
        public function setName($name){$this->name = $name;}
        public function setImage($image){$this->image = $image;}
        public function setDescription($description){$this->description = $description;}
        public function setPrice($price){$this->price = $price;}
        public function setPriceSale($price_sale){$this->price_sale = $price_sale;}
        public function setProductType($product_type){$this->product_type = $product_type;}
        public function setSlug($slug){$this->slug = $slug;}
        public function setStatus($status){$this->status = $status;}
        public function setSoldCount($sold_count){$this->sold_count = $sold_count;}


        public function getAllProduct(){
            $sql = "SELECT * FROM products ORDER BY created_at DESC";
            return $this->getAll($sql);

        }   

    }
?>