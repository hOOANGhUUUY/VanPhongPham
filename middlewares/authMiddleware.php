<?php
class AuthMiddleware {
    public static function checkAdmin() {
        var_dump($_SESSION);
        // if (!isset($_SESSION['id_user']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'ADM') {
        //     http_response_code(403);
        //     echo "403 - Bạn không có quyền truy cập vào trang admin.";
        //     exit();
        // }
    }
}
?>
