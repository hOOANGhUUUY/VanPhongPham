<?php
class UserView{
    function userInfo($data = []){
        $viewFile = './views/user/userInfo.php';
        $cssFile = 'user.css';
        $jsFile = 'index.js';
        $base_url = '../../';
        require_once './views/layout/template.php';
    }
}
?>