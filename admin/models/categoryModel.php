<?php
    class CategoryModel extends Connect{
        private $id;
        private $name;
        private $status;

        public function __construct($data = []){
            parent::__construct();

            $this->id = $data['id'] ?? null;
            $this->name = $data['name'] ?? null;
            $this->status = $data['status'] ?? null;
        }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }

        public function getStatus(){
            return $this->status;
        }
        public function setStatus($status){
            $this->status = $status;
        }

        // truy vấn ở đây 

        public function getAllCate()
        {
            $sql = "SELECT 
                    c.id AS category_id, 
                    c.Name AS category_name, 
                    c.status AS category_status,
                    o.id AS overall_id,
                    o.Name AS overall_name,
                    s.id AS specific_id,
                    s.Name AS specific_name
                    FROM categorys c
                    LEFT JOIN cate_overall_field cof ON c.id = cof.id_cate
                    LEFT JOIN overall_field o ON cof.id_overall = o.id
                    LEFT JOIN overall_specific os ON o.id = os.id_overall
                    LEFT JOIN specific_genre s ON os.id_specific = s.id
                    WHERE c.status = 1;
                ";
            $result = $this->getAll($sql);
            return $result;
        }
    }
?>