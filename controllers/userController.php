<?php
class UserController
{
    private $userService;
    private $homeView;
    private $homeController;
    public function __construct()
    {

        $this->userService = new UserService();
        $this->homeView = new HomeView;
        $this->homeController = new HomeController;
    }
    public  function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['login-email'];
            $password = $_POST['login-password'];

            $data = $this->userService->loginUser($email, $password);
            if (isset($data['user'])) {
                $_SESSION['id_user'] = $data['user']->getId();
                $_SESSION['name_user'] = $data['user']->getName();
                $_SESSION['role'] = $data['user']->getIdUserRoles();

                // $_SESSION['role'] = $data['role'];
                if ($data['user']->isAdmin()) {
                    header('Location: /VanPhongPham-main' . ($data['user']->isAdmin() ? '/admin/' : ''));
                    exit();
                } else {
                    $homeData = $this->homeController->getData();
                    $homeData['user'] = $data['user'];
                    $this->homeView->index($homeData);

                    echo "<script>alert('Đăng nhập thành công');</script>";
                }
                exit();
            } else {
                echo "<script>alert('Đăng nhập thất bại! Vui lòng kiểm tra lại.');</script>";
            }
        }
    }
    public function logout()
    {

        session_destroy();
        header("Location: /VanPhongPham-main/");
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['register-name'];
            $email = $_POST['register-email'];
            $phone = $_POST['register-phone'];
            $pass = $_POST['register-password'];
            $re_pass = $_POST['register-password-repeat'];
            if (is_int($phone)) {
                echo '<script>
                alert("Số điện thoại phải là số");
                window.location.href = "/VanPhongPham-main/";
                </script>';
            }
            if ($pass !== $re_pass) {
                echo '<script>
                alert("Mật khẩu và xác nhận mật khẩu không khớp");
                window.location.href = "/VanPhongPham-main/";
                </script>';
            }

            $data = [
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'password' => $pass,
            ];
            if ($this->userService->addUser($data)) {
                $data = $this->userService->loginUser($data['email'], $data['password']);
                if (isset($data['user'])) {
                    $_SESSION['id_user'] = $data['user']->getId();
                    $_SESSION['name_user'] = $data['user']->getName();
                    $_SESSION['role'] = $data['user']->getIdUserRoles();
    
                    // $_SESSION['role'] = $data['role'];
                    if ($data['user']->isAdmin()) {
                        header('Location: /VanPhongPham-main' . ($data['user']->isAdmin() ? '/admin/' : ''));
                        exit();
                    } else {
                        $homeData = $this->homeController->getData();
                        $homeData['user'] = $data['user'];
                        $this->homeView->index($homeData);
    
                        echo "<script>alert('Đăng ký thành công');</script>";
                    }
                    exit();
                } else {
                    echo "<script>alert('Đăng ký thất bại! Vui lòng kiểm tra lại.');</script>";
                }
            } else {
                echo '<script>
                alert("Đăng ký thất bại");
                </script>';
            }
        }
    }
}
