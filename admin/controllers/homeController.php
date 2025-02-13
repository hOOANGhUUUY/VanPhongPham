<?php
class HomeController {
    private $homeView;
    private $authService;
    public function __construct() {
        $this->homeView = new HomeView();
        $this->authService = new AuthService();
    }
    public function auth(){

        $result = $this->authService->check($_SESSION['role']);
        if($result == true){
            header('Location: /VanPhongPham-main/admin/quan-tri');
        }else{
            echo "Bạn không có quyền truy cập";
        }

        
    }
    public function index() {
       $this->homeView->index();
    }
}
?>