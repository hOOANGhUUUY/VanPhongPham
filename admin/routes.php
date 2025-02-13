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