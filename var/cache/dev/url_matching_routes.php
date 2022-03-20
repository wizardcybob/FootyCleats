<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/cleat' => [[['_route' => 'app_cleat_index', '_controller' => 'App\\Controller\\CleatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cleat/new' => [[['_route' => 'app_cleat_new', '_controller' => 'App\\Controller\\CleatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginFormController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginFormController::logout'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier_index', '_controller' => 'App\\Controller\\PanierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/panier/new' => [[['_route' => 'app_panier_new', '_controller' => 'App\\Controller\\PanierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\StaticPages::home'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'compte', '_controller' => 'App\\Controller\\StaticPages::login'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/cleat/(?'
                    .'|([^/]++)(?'
                        .'|(*:28)'
                        .'|/edit(*:40)'
                        .'|(*:47)'
                    .')'
                    .'|add\\-cleat/([^/]++)/([^/]++)(*:83)'
                .')'
                .'|/panier/(?'
                    .'|([^/]++)(?'
                        .'|(*:113)'
                        .'|/edit(*:126)'
                        .'|(*:134)'
                    .')'
                    .'|delete\\-cleat/([^/]++)/([^/]++)(*:174)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:214)'
                    .'|wdt/([^/]++)(*:234)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:280)'
                            .'|router(*:294)'
                            .'|exception(?'
                                .'|(*:314)'
                                .'|\\.css(*:327)'
                            .')'
                        .')'
                        .'|(*:337)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_cleat_show', '_controller' => 'App\\Controller\\CleatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        40 => [[['_route' => 'app_cleat_edit', '_controller' => 'App\\Controller\\CleatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        47 => [[['_route' => 'app_cleat_delete', '_controller' => 'App\\Controller\\CleatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        83 => [[['_route' => 'panier_add_cleat', '_controller' => 'App\\Controller\\CleatController::add_cleat'], ['id1', 'id2'], null, null, false, true, null]],
        113 => [[['_route' => 'app_panier_show', '_controller' => 'App\\Controller\\PanierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        126 => [[['_route' => 'app_panier_edit', '_controller' => 'App\\Controller\\PanierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        134 => [[['_route' => 'app_panier_delete', '_controller' => 'App\\Controller\\PanierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        174 => [[['_route' => 'panier_delete_cleat', '_controller' => 'App\\Controller\\PanierController::delete_cleat'], ['id1', 'id2'], null, null, false, true, null]],
        214 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        234 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        280 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        294 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        314 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        327 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        337 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
