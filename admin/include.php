<?php
session_start();
require_once 'models/connect.php';
require_once 'models/authModel.php';
require_once 'models/productModel.php';
require_once 'models/categoryModel.php';
require_once 'models/userModel.php';


require_once 'services/authService.php';
require_once 'services/productService.php';
require_once 'services/categoryService.php';
require_once 'services/userService.php';



require_once 'middlewares/authMiddleware.php';

require_once 'controllers/homeController.php';
require_once 'controllers/productController.php';
require_once 'controllers/userController.php';

require_once 'views/HomeView.php';
require_once 'views/ProductView.php';
require_once 'views/UserView.php';

?>