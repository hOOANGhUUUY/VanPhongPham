<?php
    class UserController{
       private $userService;
       private $homeView;
       private $homeController;
       public function __construct(){
        
            $this->userService = new UserService();
            $this->homeView = new HomeView;
            $this->homeController = new HomeController;
       }
        public function login(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $email = $_POST['login-email'];
                $password = $_POST['login-password'];
                
                $data = $this->userService->loginUser($email, $password);
                if(isset($data['user'])){
                    $_SESSION['id_user'] = $data['user']->getId();
                    $_SESSION['name_user'] = $data['user']->getName();

                    // $_SESSION['role'] = $data['role'];
                    if($data['user']->isAdmin()){
                        header('Location: admin/');
                    }else{
                        $homeData = $this->homeController->getData();
                        $homeData['user'] = $data['user'];
                        $this->homeView->index($homeData);

                        echo "<script>alert('Đăng nhập thành công');</script>";
                    }
                    exit();
                }else {
                    echo "<script>alert('Đăng nhập thất bại! Vui lòng kiểm tra lại.');</script>";
                }
            }
        }
        public function logout() {
            
            session_destroy();
            header("Location: /VPP/");
            exit();
        }
    }
?>