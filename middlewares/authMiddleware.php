<?php
class AuthMiddleware
{
    public static function login($request, $next)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['login-email'];
            $password = $_POST['login-password'];
            $errors = []; 

            $errors['email'] = empty($email) ? 'Email không được để trống' : 
                               (!filter_var($email, FILTER_VALIDATE_EMAIL) ? 'Địa chỉ email không hợp lệ' : '');
            $errors['password'] = empty($password) ? 'Mật khẩu không được để trống' : 
                                  (strlen($password) <= 5 ? 'Mật khẩu phải có hơn 5 ký tự' : '');
            // print_r($errors['password']);
            if (!empty($errors['email']) || !empty($errors['password'])) {
                $_SESSION['errors'] = $errors; // Lưu lỗi vào session
                return $next($request); 
            }
        }

        return $next($request); 
    }
}