<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/categories' => [[['_route' => 'app_backend_infrastructure_classification_category_list', '_controller' => 'App\\Backend\\Infrastructure\\Controller\\Classification\\CategoryController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/consoles' => [[['_route' => 'app_backend_infrastructure_classification_console_list', '_controller' => 'App\\Backend\\Infrastructure\\Controller\\Classification\\ConsoleController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/items' => [[['_route' => 'app_backend_infrastructure_order_item_list', '_controller' => 'App\\Backend\\Infrastructure\\Controller\\Order\\ItemController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/orders' => [[['_route' => 'app_backend_infrastructure_order_order_list', '_controller' => 'App\\Backend\\Infrastructure\\Controller\\Order\\OrderController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/productos' => [[['_route' => 'app_backend_infrastructure_order_product_list', '_controller' => 'App\\Backend\\Infrastructure\\Controller\\Order\\ProductController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/rafa' => [[['_route' => 'app_backend_infrastructure_rafa_number', '_controller' => 'App\\Backend\\Infrastructure\\Controller\\RafaController::number'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|lucky/number/([^/]++)(*:71)'
                    .'|orders/([^/]++)(*:93)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        71 => [[['_route' => 'app_lucky_number', '_controller' => 'App\\Backend\\Infrastructure\\Controller\\LuckyController::number'], ['max'], null, null, false, true, null]],
        93 => [
            [['_route' => 'app_backend_infrastructure_order_order_show', '_controller' => 'App\\Backend\\Infrastructure\\Controller\\Order\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
