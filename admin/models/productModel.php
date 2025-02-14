<?php
class ProductModel extends Connect
{
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
    private $created_at;

    // biến danh mục
    private $specific_id;
    private $specific_name;
    private $overall_id;
    private $overall_name;
    private $category_id;
    private $category_name;

    public function __construct($data = [])
    {
        parent::__construct();
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->image = $data['image'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->price = $data['price'] ?? null;
        $this->price_sale = $data['price_sale'] ?? null;
        $this->product_type = $data['product_type'] ?? null;
        $this->slug = $data['slug'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->sold_count = $data['sold_count'] ?? null;
        $this->created_at = $data['created_at'] ?? null;

        // danh mục
        $this->specific_id = $data['specific_id'] ?? null;
        $this->specific_name = $data['specific_name'] ?? null;
        $this->overall_id = $data['overall_id'] ?? null;
        $this->overall_name = $data['overall_name'] ?? null;
        $this->category_id = $data['category_id'] ?? null;
        $this->category_name = $data['category_name'] ?? null;



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
    public function getCreatedAt(){return $this->created_at;}
    
    public function setId($id){$this->id = $id;}
    public function setName($name){$this->name = $name;}
    public function setImage($image){$this->image = $image;}
    public function setDescription($description){ $this->description = $description;}
    public function setPrice($price){$this->price = $price;}
    public function setPriceSale($price_sale){$this->price_sale = $price_sale;}
    public function setProductType($product_type){$this->product_type = $product_type;}
    public function setSlug($slug){$this->slug = $slug;}
    public function setStatus($status){$this->status = $status;}
    public function setSoldCount($sold_count){$this->sold_count = $sold_count;}
    public function setCreatedAt($created_at){$this->created_at = $created_at;}


    // get danh mục
    public function getSpecificId(){return $this->specific_id;}
    public function getSpecificName(){return $this->specific_name;}
    public function getOverallId(){return $this->overall_id;}
    public function getOverallName(){return $this->overall_name;}
    public function getCategoryId(){return $this->category_id;}
    public function getCategoryName(){return $this->category_name;}

    // set danh mục
    public function setSpecificId($specific_id){$this->specific_id = $specific_id;}
    public function setSpecificName($specific_name){$this->specific_name = $specific_name;}
    public function setOverallId($overall_id){$this->overall_id = $overall_id;}
    public function setOverallName($overall_name){$this->overall_name = $overall_name;}
    public function setCategoryId($category_id){$this->category_id = $category_id;}
    public function setCategoryName($category_name){$this->category_name = $category_name;}







    public function getAllProduct(){
        $sql = "SELECT * FROM products ORDER BY created_at DESC";
        $data = $this->getAll($sql);
        $products = [];
        foreach ($data as $row) {
            $products[] = new ProductModel($row);
        }
        return $products;
    }

    public function getOneProduct($id)
{
        $sql = "SELECT 
                    p.id AS product_id, 
                    p.name AS product_name,
                    p.image,
                    p.description,
                    p.price,
                    p.price_sale,
                    p.product_type,
                    p.slug,
                    p.status,

                    sg.id AS specific_id, 
                    sg.Name AS specific_name,
                    ofl.id AS overall_id, 
                    ofl.Name AS overall_name, 
                    c.id AS category_id, 
                    c.Name AS category_name
                    FROM products p
                    LEFT JOIN specific_products sp ON p.id = sp.id_product
                    LEFT JOIN specific_genre sg ON sp.id_specific = sg.id
                    LEFT JOIN overall_specific os ON sg.id = os.id_specific
                    LEFT JOIN overall_field ofl ON os.id_overall = ofl.id
                    LEFT JOIN cate_overall_field cof ON ofl.id = cof.id_overall
                    LEFT JOIN categorys c ON cof.id_cate = c.id
                    WHERE p.id = ?;
                ";
            $param = [$id];
             return $this->getOne($sql,$param);

            // $products = [];
            // foreach($data as $row){
            //     $products[] = new ProductModel($row);
            // }
            // return $products;
    }

    public function update($data){
        // var_dump($data);
        $sql = "UPDATE products SET name = ?, image = ?, description=?, price=?, price_sale=?, status=? WHERE id = ?";
        $param = [$data['name'],$data['image'],$data['description'],$data['price'],$data['price_sale'],$data['status'],$data['id'],];
        return $this->execute($sql,$param);
    }
}
