<?php
class UserModel extends Connect{
    private $id;
    private $name;
    private $image;
    private $phone;
    private $email;
    private $address;
    private $password;
    private $role;
    private $created_at;
    private $updated_at;
    private $description;
    private $birthday;
    private $status;
    private $remember_token;
    private $email_verified;
    private $google_id;
    private $id_user_roles;
 
    public function __construct($data = []){
        parent::__construct();
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->image = $data['image'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->password = $data['password'] ?? null;
        $this->role = $data['role'] ?? null;
        $this->created_at = $data['created_at'] ?? null;
        $this->updated_at = $data['updated_at'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->birthday = $data['birthday'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->remember_token = $data['remember_token'] ?? null;
        $this->email_verified = $data['email_verified'] ?? null;
        $this->google_id = $data['google_id'] ?? null;
        $this->id_user_roles = $data['id_user_roles'] ?? null;

    }  
    
    public function getId(){return $this->id;}
    public function getName(){return $this->name;}
    public function getImage(){return $this->image;}
    public function getPhone(){return $this->phone;}
    public function getEmail(){return $this->email;}
    public function getAddress(){return $this->address;}
    public function getPassword(){return $this->password;}
    public function getRole(){return $this->role;}
    public function getCreatedAt(){return $this->created_at;}
    public function getUpdatedAt(){return $this->updated_at;}
    public function getDescription(){return $this->description;}
    public function getBirthday(){return $this->birthday;}
    public function getStatus(){return $this->status;}
    public function getRememberToken(){return $this->remember_token;}
    public function getEmailVerified(){return $this->email_verified;}
    public function getGoogleId(){return $this->google_id;}
    public function getIdUserRoles(){return $this->id_user_roles;}

    public function setId($id){$this->id = $id;}
    public function setName($name){$this->name = $name;}
    public function setImage($image){$this->image = $image;}
    public function setPhone($phone){$this->phone = $phone;}
    public function setEmail($email){$this->email = $email;}
    public function setAddress($address){$this->address = $address;}
    public function setPassword($password){$this->password = $password;}
    public function setRole($role){$this->role = $role;}
    public function setCreatedAt($created_at){$this->created_at = $created_at;}
    public function setUpdatedAt($updated_at){$this->updated_at = $updated_at;}
    public function setDescription($description){$this->description = $description;}
    public function setBirthday($birthday){$this->birthday = $birthday;}
    public function setStatus($status){$this->status = $status;}
    public function setRememberToken($remember_token){$this->remember_token = $remember_token;}
    public function setEmailVerified($email_verified){$this->email_verified = $email_verified;}
    public function setGoogleId($google_id){$this->google_id = $google_id;}
    public function setIdUserRoles($id_user_roles){$this->id_user_roles = $id_user_roles;}


    public function getAllUser(){
        $sql = "SELECT * FROM users";
        $dataUser = $this->getAll($sql);
        
        $users = [];
        foreach ($dataUser as $row){
            $users[] = new UserModel($row);
        }
        return $users;
    }
    public function getOneUser($id){
        $sql = "SELECT * FROM users WHERE id = ?";
        $dataUser = $this->getOne($sql,[$id]);
        return $dataUser ? new UserModel($dataUser) : null;
    }
    public function getRoleName() {
        $sql = "SELECT acronym FROM user_roles WHERE id = ?";
        $param = [$this->id_user_roles];
        $data = $this->getOne($sql, $param);
        return $data ? $data['acronym'] : null;
    }
    public function isAdmin() {
        return $this->getRoleName() === 'ADM';
    }


    public function checkUserRole($acronym){
        $sql = "SELECT * FROM user_roles WHERE acronym = ?";
        return $this->getOne($sql,[$acronym]);
    }
    public function updateUser($data){
        $sql = "UPDATE users SET name = ?, image = ?, phone =?, email=?, status=? ,id_user_roles=? WHERE id = ?";
        $param = [$data['name'], $data['image'], $data['phone'], $data['email'], $data['status'], $data['id_user_roles'], $data['id']];
        return $this->execute($sql, $param);
    }


    public function deleteUser($id){
        $sql ="DELETE FROM users WHERE id = ?";
        return $this->execute($sql,[$id]);
    }
}
?>  