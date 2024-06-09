<?php

return [
    'route' => [
        'user' => \App\Http\Middleware\UserMiddleware::class,
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        'student' => \App\Http\Middleware\StudentMiddleware::class,
    ],
];
