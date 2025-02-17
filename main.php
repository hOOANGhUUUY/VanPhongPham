<?php
require_once 'include.php';

// Tự động tải file route
$routes = require __DIR__ . '/routes.php';

// Lấy URI từ yêu cầu
$requestUri = str_replace('/VanPhongPham-main/', '', $_SERVER['REQUEST_URI']);
$uri = trim($requestUri, '/');

// Tìm route phù hợp
$routeFound = false;

foreach ($routes as $route => $action) {
    $routePattern = preg_replace('/:\w+/', '(\w+)', $route);
    
    // Kiểm tra nếu có match và khởi tạo $matches
    if (preg_match("#^$routePattern$#", $uri, $matches)) {
        $routeFound = true;

        // Kiểm tra và gọi các middleware
        if (isset($action['middlewares'])) {
            $middlewares = $action['middlewares'];
            foreach ($middlewares as $middleware) {
                $middlewareClass = $middleware['class'];
                $method = $middleware['method'];

                if (class_exists($middlewareClass) && method_exists($middlewareClass, $method)) {
                    // Gọi middleware
                    $middlewareClass::$method($_REQUEST, function($request) use ($action, $matches) {
                        // Nếu tất cả middleware xử lý xong, gọi controller
                        $controllerName = $action['controller'];
                        $methodName = $action['method'];

                        if (class_exists($controllerName) && method_exists($controllerName, $methodName)) {
                            $controller = new $controllerName();
                            call_user_func_array([$controller, $methodName], $matches);
                        } else {
                            http_response_code(500);
                            echo "Controller hoặc phương thức không tồn tại.";
                        }
                    });
                }
            }
        } else {
            // Nếu không có middleware, trực tiếp gọi controller
            $controllerName = $action['controller'];
            $methodName = $action['method'];

            if (class_exists($controllerName) && method_exists($controllerName, $methodName)) {
                $controller = new $controllerName();
                call_user_func_array([$controller, $methodName], $matches);
            } else {
                http_response_code(500);
                echo "Controller hoặc phương thức không tồn tại.";
            }
        }
        break;
    }
}

// Xử lý nếu không tìm thấy route
if (!$routeFound) {
    http_response_code(404);
    echo "404 - Không tìm thấy trang.";
}

?>