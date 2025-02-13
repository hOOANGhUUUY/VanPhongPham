<?php

// Danh sách các route
return [
    '' => [
        'controller' => 'HomeController',
        'method' => 'index'
    ],
    'about' => [
        'controller' => 'PageController',
        'method' => 'about'
    ],
    'contact' => [
        'controller' => 'PageController',
        'method' => 'contact'
    ],
    'login' => [
        'controller' => 'UserController',
        'method' => 'login'
    ],
    'logout' => [
        'controller' => 'UserController',
        'method' => 'logout'
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