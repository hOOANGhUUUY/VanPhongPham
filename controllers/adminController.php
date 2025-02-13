<?php
class AdminController {
    public function __construct() {
        AuthMiddleware::checkAdmin();
    }
    public function index() {
        echo "Chào mừng đến với trang admin";
    }
}
?>