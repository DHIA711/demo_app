<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'demo_index' => [[], ['_controller' => 'App\\Controller\\DemoController::index'], [], [['text', '/demo/']], [], []],
    'demo_new' => [[], ['_controller' => 'App\\Controller\\DemoController::new'], [], [['text', '/demo/new']], [], []],
    'demo_show' => [['id'], ['_controller' => 'App\\Controller\\DemoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/demo']], [], []],
    'demo_edit' => [['id'], ['_controller' => 'App\\Controller\\DemoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/demo']], [], []],
    'demo_delete' => [['id'], ['_controller' => 'App\\Controller\\DemoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/demo']], [], []],
];
