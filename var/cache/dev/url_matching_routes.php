<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/homepage' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::homepage'], null, null, null, false, false, null]],
        '/product_dispo' => [[['_route' => 'Product_dispo', '_controller' => 'App\\Controller\\DefaultController::test'], null, null, null, false, false, null]],
        '/mouvement/entrer/sortie' => [[['_route' => 'mouvement', '_controller' => 'App\\Controller\\DefaultController::new'], null, null, null, false, false, null]],
        '/impression/produit_disponible' => [[['_route' => 'impression_produit_disponible', '_controller' => 'App\\Controller\\DefaultController::disponible'], null, null, null, true, false, null]],
        '/compte-rendu' => [[['_route' => 'history', '_controller' => 'App\\Controller\\HistoriqueController::history'], null, null, null, false, false, null]],
        '/compte-rendu-sortie' => [[['_route' => 'history_out', '_controller' => 'App\\Controller\\HistoriqueController::out'], null, null, null, false, false, null]],
        '/compte-rendu-produits-integrée' => [[['_route' => 'integreted', '_controller' => 'App\\Controller\\HistoriqueController::integreted'], null, null, null, false, false, null]],
        '/compte-rendu-entrer' => [[['_route' => 'history_enter', '_controller' => 'App\\Controller\\HistoriqueController::enter'], null, null, null, false, false, null]],
        '/impression_product' => [[['_route' => 'impression_product', '_controller' => 'App\\Controller\\MouvementController::impressionProd'], null, null, null, false, false, null]],
        '/mouvement/controller/crud' => [[['_route' => 'mouvement_controller_crud_index', '_controller' => 'App\\Controller\\MouvementCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/etat-de-stock-par-année' => [[['_route' => 'periode_annuel', '_controller' => 'App\\Controller\\PeriodeController::annuel'], null, null, null, false, false, null]],
        '/inscription-sur-cavp' => [[['_route' => 'page_inscription', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/route/json(?:/([^/]++))?(*:193)'
                .'|/etat\\-de\\-stock(?'
                    .'|s(?:/([^/]++))?(*:235)'
                    .'|_menseul(?:/([^/]++))?(*:265)'
                .')'
                .'|/impression_(?'
                    .'|select/([^/]++)(*:304)'
                    .'|product_mensuel(?:/([^/]++))?(*:341)'
                .')'
                .'|/mouvement/controller/crud/(?'
                    .'|new(?:/([^/]++))?(*:397)'
                    .'|([^/]++)(?'
                        .'|(*:416)'
                        .'|/edit(*:429)'
                        .'|(*:437)'
                    .')'
                .')'
                .'|/ordre\\-de\\-sortie(?:/([^/]++)(?:/([^/]++))?)?(*:493)'
                .'|/bordereaux\\-envoi/([^/]++)/([^/]++)/([^/]++)(*:546)'
                .'|/json/api/([^/]++)(*:572)'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:615)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:646)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:682)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        193 => [[['_route' => 'json', 'product' => '', '_controller' => 'App\\Controller\\DefaultController::public'], ['product'], null, null, false, true, null]],
        235 => [[['_route' => 'etat_de_stock', 'mois' => '', '_controller' => 'App\\Controller\\EtatController::index'], ['mois'], null, null, false, true, null]],
        265 => [[['_route' => 'periode_mensuel', 'mois' => '', '_controller' => 'App\\Controller\\PeriodeController::mensuel'], ['mois'], null, null, false, true, null]],
        304 => [[['_route' => 'impression_select', '_controller' => 'App\\Controller\\MouvementController::impressionPdf'], ['id'], null, null, false, true, null]],
        341 => [[['_route' => 'impression_mensuel', 'mois' => '', '_controller' => 'App\\Controller\\MouvementController::impressionProdMensuel'], ['mois'], null, null, false, true, null]],
        397 => [[['_route' => 'mouvement_controller_crud_new', 'cat' => ' ', '_controller' => 'App\\Controller\\MouvementCrudController::new'], ['cat'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        416 => [[['_route' => 'mouvement_controller_crud_show', '_controller' => 'App\\Controller\\MouvementCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        429 => [[['_route' => 'mouvement_controller_crud_edit', '_controller' => 'App\\Controller\\MouvementCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        437 => [[['_route' => 'mouvement_controller_crud_delete', '_controller' => 'App\\Controller\\MouvementCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        493 => [[['_route' => 'order_out', 'types' => '', 'numero' => '', '_controller' => 'App\\Controller\\OrderController::index'], ['types', 'numero'], null, null, false, true, null]],
        546 => [[['_route' => 'bordereau', '_controller' => 'App\\Controller\\OrderController::getSlips'], ['type', 'numero', 'bureau'], null, null, false, true, null]],
        572 => [[['_route' => 'json2', '_controller' => 'App\\Controller\\OrderController::test'], ['types'], null, null, false, true, null]],
        615 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        646 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        682 => [
            [['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
