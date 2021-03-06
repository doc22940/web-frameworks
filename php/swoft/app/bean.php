<?php

use Swoft\Http\Server\HttpServer;

return [
    'logger'         => [
        'flushRequest' => false,
        'enable'       => false,
        'json'         => false,
    ],
    'httpServer'     => [
        'class'   => HttpServer::class,
        'port'    => 3000,
        'on'      => [],
        /* @see HttpServer::$setting */
        'setting' => [
            'worker_num' => filter_var(shell_exec('nproc'), FILTER_VALIDATE_INT),
            // 'log_file'   => alias('@runtime/swoole.log'),
        ]
    ],
    'httpDispatcher' => [
        // Add global http middleware
        'middlewares' => [
            // Allow use @View tag
            // \Swoft\View\Middleware\ViewMiddleware::class,
        ],
    ],
];
