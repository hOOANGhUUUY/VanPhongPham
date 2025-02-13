<?php
class HomeController {
    private $homeView;

    public function __construct() {
        $this->homeView = new HomeView();
    }
    public function index() {
       $this->homeView->index();
    }
}
?>