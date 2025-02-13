<?php
session_start();
require_once 'models/connect.php';
require_once 'models/authModel.php';
require_once 'models/productModel.php';

require_once 'services/authService.php';
require_once 'services/productService.php';


require_once 'middlewares/authMiddleware.php';

require_once 'controllers/homeController.php';
require_once 'controllers/productController.php';

require_once 'views/HomeView.php';
require_once 'views/ProductView.php';
?>