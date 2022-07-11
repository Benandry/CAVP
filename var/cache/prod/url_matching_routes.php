<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/homepage' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::homepage'], null, null, null, false, false, null]],
        '/product_dispo' => [[['_route' => 'Product_dispo', '_controller' => 'App\\Controller\\DefaultController::test'], null, null, null, false, false, null]],
        '/etat-de-stocks' => [[['_route' => 'etat_de_stock', '_controller' => 'App\\Controller\\EtatController::index'], null, null, null, false, false, null]],
        '/mouvement/controller/crud' => [[['_route' => 'mouvement_controller_crud_index', '_controller' => 'App\\Controller\\MouvementCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/etat-de-stock-par-année' => [[['_route' => 'periode_annuel', '_controller' => 'App\\Controller\\PeriodeController::annuel'], null, null, null, false, false, null]],
        '/inscription-sur-cavp' => [[['_route' => 'page_inscription', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/route/json(?:/([^/]++))?(*:32)'
                .'|/impres(?'
                    .'|sion(?'
                        .'|/(?'
                            .'|produit_disponible/([^/]++)/([^/]++)(*:96)'
                            .'|situation/([^/]++)/([^/]++)(*:130)'
                        .')'
                        .'|_(?'
                            .'|select/([^/]++)/([^/]++)/([^/]++)(*:176)'
                            .'|product(?'
                                .'|/([^/]++)/([^/]++)(*:212)'
                                .'|_mensuel(?:/([^/]++))?(*:242)'
                            .')'
                        .')'
                    .')'
                    .'|ion/ordre_de_sortie/re(?'
                        .'|caputilation/([^/]++)/([^/]++)(*:308)'
                        .'|partition/([^/]++)/([^/]++)(*:343)'
                    .')'
                .')'
                .'|/compte\\-rendu(?:/([^/]++))?(*:381)'
                .'|/mouvement/controller/crud/(?'
                    .'|new(?:/([^/]++))?(*:436)'
                    .'|([^/]++)(?'
                        .'|(*:455)'
                        .'|/edit(*:468)'
                        .'|(*:476)'
                    .')'
                .')'
                .'|/ordre\\-de\\-sortie(?:/([^/]++)(?:/([^/]++))?)?(*:532)'
                .'|/bordereaux\\-envoi/([^/]++)/([^/]++)/([^/]++)(*:585)'
                .'|/json/api/([^/]++)(*:611)'
                .'|/etat\\-de\\-stock_menseul(?:/([^/]++))?(*:657)'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:700)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:731)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:767)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'json', 'product' => '', '_controller' => 'App\\Controller\\DefaultController::public'], ['product'], null, null, false, true, null]],
        96 => [[['_route' => 'impression_produit_disponible', '_controller' => 'App\\Controller\\DefaultController::disponible'], ['mois', 'annee'], null, null, false, true, null]],
        130 => [[['_route' => 'situation', '_controller' => 'App\\Controller\\DefaultController::new'], ['mois', 'annee'], null, null, false, true, null]],
        176 => [[['_route' => 'impression_select', '_controller' => 'App\\Controller\\MouvementController::impressionPdf'], ['id', 'mois', 'annee'], null, null, false, true, null]],
        212 => [[['_route' => 'impression_product', '_controller' => 'App\\Controller\\MouvementController::impressionProd'], ['mois', 'annee'], null, null, false, true, null]],
        242 => [[['_route' => 'impression_mensuel', 'mois' => '', '_controller' => 'App\\Controller\\MouvementController::impressionProdMensuel'], ['mois'], null, null, false, true, null]],
        308 => [[['_route' => 'ordre_de_sortie_recaputilation', '_controller' => 'App\\Controller\\OrderController::orderOutRecap'], ['types', 'numero'], null, null, false, true, null]],
        343 => [[['_route' => 'ordre_de_sortie_repartition', '_controller' => 'App\\Controller\\OrderController::orderOutRepart'], ['types', 'numero'], null, null, false, true, null]],
        381 => [[['_route' => 'history', 'description' => '', '_controller' => 'App\\Controller\\HistoriqueController::history'], ['description'], null, null, false, true, null]],
        436 => [[['_route' => 'mouvement_controller_crud_new', 'cat' => ' ', '_controller' => 'App\\Controller\\MouvementCrudController::new'], ['cat'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        455 => [[['_route' => 'mouvement_controller_crud_show', '_controller' => 'App\\Controller\\MouvementCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        468 => [[['_route' => 'mouvement_controller_crud_edit', '_controller' => 'App\\Controller\\MouvementCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        476 => [[['_route' => 'mouvement_controller_crud_delete', '_controller' => 'App\\Controller\\MouvementCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        532 => [[['_route' => 'order_out', 'types' => '', 'numero' => '', '_controller' => 'App\\Controller\\OrderController::index'], ['types', 'numero'], null, null, false, true, null]],
        585 => [[['_route' => 'bordereau', '_controller' => 'App\\Controller\\OrderController::getSlips'], ['type', 'numero', 'bureau'], null, null, false, true, null]],
        611 => [[['_route' => 'json2', '_controller' => 'App\\Controller\\OrderController::test'], ['types'], null, null, false, true, null]],
        657 => [[['_route' => 'periode_mensuel', 'mois' => '', '_controller' => 'App\\Controller\\PeriodeController::mensuel'], ['mois'], null, null, false, true, null]],
        700 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        731 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        767 => [
            [['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
