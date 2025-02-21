<?php
class UserService {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function getAllUser() {
        $dataUser = $this->userModel->getAllUser();
        foreach ($dataUser as &$user) { 
            $statusText = ($user->getStatus() === 1) ? 'Hoạt động' : 'Ngưng hoạt động';
            $user->setStatus($statusText);

            // $roleText = $user->getRoleName();
            $roleText = ($user->getRoleName() === 'ADM') ?'Quản trị':'Người dùng';
            
            
            $user->setRole($roleText);
        }

        return $dataUser; 
    }
    public function getOneUser($id){
        $dataUser = $this->userModel->getOneUser($id);
        return $dataUser; 
    }

    
    public function updateUser($data){
        $dataUser_roles = $this->userModel->checkUserRole($data['role']);
        $data['id_user_roles'] = $dataUser_roles['id'];
        return $this->userModel->updateUser($data);
    }

    public function deleteUser($id){
        return $this->userModel->deleteUser($id);
    }
}
?>
