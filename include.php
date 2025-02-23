<?php
session_start();
require_once 'models/Connect.php';
require_once 'models/ProductModel.php';
require_once 'models/categoryModel.php';
require_once 'models/bannerModel.php';
require_once 'models/userModel.php';

require_once 'services/ProductService.php';
require_once 'services/categoryService.php';
require_once 'services/bannerService.php';
require_once 'services/userService.php';

require_once 'middlewares/authMiddleware.php';

require_once 'controllers/HomeController.php';
require_once 'controllers/userController.php';
require_once 'controllers/adminController.php';
require_once 'controllers/productController.php';


require_once 'views/homeView.php';
require_once 'views/UserView.php';
require_once 'views/ProductViewClient.php';


?>