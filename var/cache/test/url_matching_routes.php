<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/demo' => [[['_route' => 'demo_index', '_controller' => 'App\\Controller\\DemoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/demo/new' => [[['_route' => 'demo_new', '_controller' => 'App\\Controller\\DemoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/demo/([^/]++)(?'
                    .'|(*:24)'
                    .'|/edit(*:36)'
                    .'|(*:43)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'demo_show', '_controller' => 'App\\Controller\\DemoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        36 => [[['_route' => 'demo_edit', '_controller' => 'App\\Controller\\DemoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        43 => [
            [['_route' => 'demo_delete', '_controller' => 'App\\Controller\\DemoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
