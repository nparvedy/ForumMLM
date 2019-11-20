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
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\IndexController::connexion'], null, null, null, false, false, null]],
        '/reset' => [[['_route' => 'reset', '_controller' => 'App\\Controller\\IndexController::reset'], null, null, null, false, false, null]],
        '/confirm' => [[['_route' => 'confirm', '_controller' => 'App\\Controller\\IndexController::confirm'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'deconnection', '_controller' => 'App\\Controller\\IndexController::logout'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\SearchController::search'], null, null, null, false, false, null]],
        '/searchResult' => [[['_route' => 'recup', '_controller' => 'App\\Controller\\SearchController::searchAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\SiteController::admin'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SiteController::logout'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin_login', '_controller' => 'App\\Controller\\SiteController::login'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\SiteController::users'], null, null, null, false, false, null]],
        '/admin/articles' => [[['_route' => 'articles', '_controller' => 'App\\Controller\\SiteController::articles'], null, null, null, false, false, null]],
        '/admin/sections' => [[['_route' => 'sections', '_controller' => 'App\\Controller\\SiteController::sections'], null, null, null, false, false, null]],
        '/admin/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\SiteController::profil'], null, null, null, false, false, null]],
        '/admin/addSectionA' => [[['_route' => 'addSectionA', '_controller' => 'App\\Controller\\SiteController::addSectionA'], null, null, null, false, false, null]],
        '/admin/addSubsectionA' => [[['_route' => 'addSubsectionA', '_controller' => 'App\\Controller\\SiteController::addSubsectionA'], null, null, null, false, false, null]],
        '/admin/addUserA' => [[['_route' => 'addUserA', '_controller' => 'App\\Controller\\SiteController::addUserA'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/subsection/([^/]++)(?'
                    .'|(*:192)'
                    .'|/article/(?'
                        .'|new(*:215)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:242)'
                                .'|comment/(?'
                                    .'|new(*:264)'
                                    .'|([^/]++)/edit(*:285)'
                                .')'
                            .')'
                            .'|(*:295)'
                        .')'
                    .')'
                .')'
                .'|/profil/([^/]++)(*:322)'
                .'|/admin/(?'
                    .'|show(?'
                        .'|User/([^/]++)(*:360)'
                        .'|Article/([^/]++)(*:384)'
                    .')'
                    .'|delete(?'
                        .'|CA/([^/]++)/([^/]++)(*:422)'
                        .'|ArticleA/([^/]++)(*:447)'
                        .'|UserA/([^/]++)(*:469)'
                        .'|S(?'
                            .'|ectionA/([^/]++)(*:497)'
                            .'|ubsectionA/([^/]++)(*:524)'
                        .')'
                    .')'
                    .'|editS(?'
                        .'|ectionA/([^/]++)(*:558)'
                        .'|ubsectionA/([^/]++)(*:585)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'test', '_controller' => 'App\\Controller\\ArticleController::article'], ['id_subsection'], null, null, false, true, null]],
        215 => [[['_route' => 'forum_create', '_controller' => 'App\\Controller\\ArticleController::form'], ['id_subsection'], null, null, false, false, null]],
        242 => [[['_route' => 'forum_edit', '_controller' => 'App\\Controller\\ArticleController::form'], ['id_subsection', 'id'], null, null, false, false, null]],
        264 => [[['_route' => 'comment_create', '_controller' => 'App\\Controller\\ArticleController::comment'], ['id_subsection', 'id_article'], null, null, false, false, null]],
        285 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\ArticleController::comment'], ['id_subsection', 'id_article', 'id'], null, null, false, false, null]],
        295 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id_subsection', 'id_article'], null, null, false, true, null]],
        322 => [[['_route' => 'profil_show', '_controller' => 'App\\Controller\\ProfilController::showprofil'], ['id'], null, null, false, true, null]],
        360 => [[['_route' => 'showUser', '_controller' => 'App\\Controller\\SiteController::showUser'], ['id'], null, null, false, true, null]],
        384 => [[['_route' => 'showArticle', '_controller' => 'App\\Controller\\SiteController::showArticle'], ['id'], null, null, false, true, null]],
        422 => [[['_route' => 'deleteCA', '_controller' => 'App\\Controller\\SiteController::deleteCA'], ['id', 'idC'], null, null, false, true, null]],
        447 => [[['_route' => 'deleteArticleA', '_controller' => 'App\\Controller\\SiteController::deleteArticleA'], ['id'], null, null, false, true, null]],
        469 => [[['_route' => 'deleteUserA', '_controller' => 'App\\Controller\\SiteController::deleteUserA'], ['id'], null, null, false, true, null]],
        497 => [[['_route' => 'deleteSectionA', '_controller' => 'App\\Controller\\SiteController::deleteSectionA'], ['id'], null, null, false, true, null]],
        524 => [[['_route' => 'deleteSubsectionA', '_controller' => 'App\\Controller\\SiteController::deleteSubsectionA'], ['id'], null, null, false, true, null]],
        558 => [[['_route' => 'editSectionA', '_controller' => 'App\\Controller\\SiteController::editSectionA'], ['id'], null, null, false, true, null]],
        585 => [
            [['_route' => 'editSubsectionA', '_controller' => 'App\\Controller\\SiteController::editSubsectionA'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
