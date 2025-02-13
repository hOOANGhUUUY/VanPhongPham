<?php
    class AuthMiddleware {
        public static function checkAdmin() {
            if(!isset($_SESSION['role'])){
                return header('Location: /VanPhongPham-main/');
            }else{
                echo "HAHa";
            }
        }
    }
?>