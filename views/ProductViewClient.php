<?php
class ProductViewClient{


    function detailView($data = []){
        $viewFile = './views/products/detailView.php';
        $cssFile = 'detail.css';
        $jsFile = 'detail.js';
        $base_url = '../';
        require_once './views/layout/template.php';
    }
}
?>