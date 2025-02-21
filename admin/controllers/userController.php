<?php
class UserController
{
    private $userService;
    private $userView;
    // private $homeController;
    public function __construct()
    {

        $this->userService = new UserService();
        $this->userView = new UserView();
        // $this->homeController = new HomeController;
    }

    public function viewAllUser(){
        $dataUser = $this->userService->getAllUser();
        $this->userView->view([
            'dataUser' => $dataUser
        ]);
    }
    public function viewEdit($id){
        
        // $this->userView->vi  ewEdit();

        $data = $this->userService->getOneUser($id);
        $this->userView->viewEdit([
            'dataOneUser' => $data
        ]);
        
    }

    public function editUser($id){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $img = $_FILES['userImage']['name'];
            $img_old = $_POST['userImage_old'];
            $name = $_POST['userName'];
            $email = $_POST['userEmail'];
            $phone =$_POST['userPhone'];
            $status =$_POST['userStatus'];
            $role = $_POST['userRole'];
            echo   $img_old . $name .$email .$phone .$status .$role ;
            echo $status;
            if($img == ''){
                $img = $img_old;
            }else{
                $fileImg = '../public/images/' . $_FILES['userImage']['name'];
                move_uploaded_file($_FILES['userImage']['tmp_name'],$fileImg);
                $file_old = '../public/images/' . $img_old;
                unlink($file_old);
            }
            $data = [
                'id' => $id,
                'image' => $img,
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'status' => $status,
                'role' => $role
            ];
            $this->userService->updateUser($data);
            echo '<script>
            alert("Sửa người dùng thành công");
            window.location.href = "/VanPhongPham-main/admin/thanh-vien";
            </script>';
        }
    }

}
