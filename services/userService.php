<?php
class UserService{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    
    public function loginUser($email, $password) {
        $user = $this->userModel->getUserByEmail($email);

        if ($user && $password == $user['password']) {
            return [
                'status' => 'Đăng nhập thành công',
                'id_user' => $user['id'],
                'user' => new UserModel($user),
                'role' => $user['id_user_roles']
            ];
        }else{
            echo '<script>
            alert("Sai mật khẩu");
            window.location.href = "/VanPhongPham-main/";
            </script>';

        }

        return ['status' => 'Đăng nhập thất bại'];
    }
    public function addUser($data){
        return $this->userModel->addUSer($data);
    }

}
?>