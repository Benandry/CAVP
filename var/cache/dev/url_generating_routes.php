<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\DefaultController::homepage'], [], [['text', '/homepage']], [], [], []],
    'test' => [[], ['_controller' => 'App\\Controller\\DefaultController::test'], [], [['text', '/test']], [], [], []],
    'app_question_show' => [['slug'], ['_controller' => 'App\\Controller\\DefaultController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/questions']], [], [], []],
    'etat_de_stock' => [['mois'], ['mois' => '', '_controller' => 'App\\Controller\\EtatController::index'], [], [['variable', '/', '[^/]++', 'mois', true], ['text', '/etat-de-stocks']], [], [], []],
    'history' => [[], ['_controller' => 'App\\Controller\\HistoriqueController::history'], [], [['text', '/compte-rendu']], [], [], []],
    'history_out' => [[], ['_controller' => 'App\\Controller\\HistoriqueController::out'], [], [['text', '/compte-rendu-sortie']], [], [], []],
    'integreted' => [[], ['_controller' => 'App\\Controller\\HistoriqueController::integreted'], [], [['text', '/compte-rendu-produits-integrée']], [], [], []],
    'history_enter' => [[], ['_controller' => 'App\\Controller\\HistoriqueController::enter'], [], [['text', '/compte-rendu-entrer']], [], [], []],
    'impression_select' => [['id'], ['_controller' => 'App\\Controller\\MouvementController::impressionPdf'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/impression_select']], [], [], []],
    'impression_product' => [[], ['_controller' => 'App\\Controller\\MouvementController::impressionProd'], [], [['text', '/impression_product']], [], [], []],
    'impression_mensuel' => [['mois'], ['mois' => '', '_controller' => 'App\\Controller\\MouvementController::impressionProdMensuel'], [], [['variable', '/', '[^/]++', 'mois', true], ['text', '/impression_product_mensuel']], [], [], []],
    'order_out' => [[], ['_controller' => 'App\\Controller\\OrderController::index'], [], [['text', '/ordre-de-sortie']], [], [], []],
    'periode_mensuel' => [['mois'], ['mois' => '', '_controller' => 'App\\Controller\\PeriodeController::mensuel'], [], [['variable', '/', '[^/]++', 'mois', true], ['text', '/etat-de-stock_menseul']], [], [], []],
    'periode_annuel' => [[], ['_controller' => 'App\\Controller\\PeriodeController::annuel'], [], [['text', '/etat-de-stock-par-année']], [], [], []],
    'page_inscription' => [[], ['_controller' => 'App\\Controller\\RegisterController::index'], [], [['text', '/inscription-sur-cavp']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
