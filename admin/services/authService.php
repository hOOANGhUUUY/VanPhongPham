<?php
 class AuthService{
    private $authModel;

    function __construct() {
        $this->authModel = new AuthModel();
    }

    public  function check($id){
        return $this->authModel->checkAdmin($id);
    }

 }
?>