<?php
    class HomeView {
        public function index() {
            $fileView = 'views/home/index.php';
            $cssView = '';
            $jsView = '';
            require_once 'views/layout/template.php';
        }
    }
?>