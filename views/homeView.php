<?php
class HomeView{
    function index($data = []){
        $viewFile = './views/home/index.php';
        $cssFile = 'index.css';
        $jsFile = 'index.js';
        extract($data);
        require_once './views/layout/template.php';
    }
}
?>