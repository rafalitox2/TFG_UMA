<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'app_lucky_number' => [['max'], ['_controller' => 'App\\Backend\\Infrastructure\\Controller\\LuckyController::number'], [], [['variable', '/', '[^/]++', 'max', true], ['text', '/api/lucky/number']], [], []],
];
