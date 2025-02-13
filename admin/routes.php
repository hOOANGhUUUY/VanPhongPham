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
    
];

// 'user/:id' => [
    //     'controller' => 'UserController',
    //     'method' => 'show'
    // ],
    // 'post/:id/edit' => [
    //     'controller' => 'PostController',
    //     'method' => 'edit'
    // ],