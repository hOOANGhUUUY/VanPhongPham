<?php
    class UserView {
        public function view($data = []) {
            $fileView = './views/user/allUser.php';
            require_once './views/layout/template.php';
        }

        public function viewEdit($data = []) {
            $fileView = './views/user/edit_user.php';
            $base_url = '../../';
            require_once './views/layout/template.php';
        }
    }
?>