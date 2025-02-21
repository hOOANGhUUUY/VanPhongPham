<?php

// Danh sách các route
return [
    '' => [
        'controller' => 'HomeController',
        'method' => 'auth'
    ],
    'quan-tri' => [
        'controller' => 'HomeController',
        'method' => 'index'
    ],
    'san-pham' => [
        'controller' => 'ProductController',
        'method' => 'viewProduct'
    ],
    'san-pham/sua-san-pham/:id' => [
        'controller' => 'ProductController',
        'method' => 'viewEditProduct'
    ],
    'san-pham/xoa-san-pham/:id' => [
        'controller' => 'ProductController',
        'method' => 'delete'
    ],
    'san-pham/them-moi' => [
        'controller' => 'ProductController',
        'method' => 'viewAdd'
    ],
    'cap-nhat-san-pham/:id' => [
        'controller' => 'ProductController',
        'method' => 'dataFromEdit'
    ],
    'san-pham/them-moi/gui' => [
        'controller' => 'ProductController',
        'method' => 'dataFormAdd'
    ],
    'thanh-vien' => [
        'controller' => 'UserController',
        'method' => 'viewAllUser'
    ],
    'thanh-vien/sua-thanh-vien/:id' => [
        'controller' => 'UserController',
        'method' => 'viewEdit'
    ],
    'cap-nhat-thanh-vien/:id' => [
        'controller' => 'UserController',
        'method' => 'editUser'
    ],
    
    'login' => [
        'controller' => 'UserController',
        'method' => 'login'
    ],
    
];

// 'user/:id' => [
    //     'controller' => 'UserController',
    //     'method' => 'show'
    // ],
    // 'post/:id/edit' => [
    //     'controller' => 'PostController',
    //     'method' => 'edit'
    // ],