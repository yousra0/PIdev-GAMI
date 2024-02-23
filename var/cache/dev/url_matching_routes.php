<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/browse' => [[['_route' => 'app_browse', '_controller' => 'App\\Controller\\BrowseController::index'], null, null, null, false, false, null]],
        '/comment/listComment' => [
            [['_route' => 'listComment', '_controller' => 'App\\Controller\\CommentController::listComment'], null, null, null, false, false, null],
            [['_route' => 'list_comment', '_controller' => 'App\\Controller\\CommentController::listComment'], null, null, null, false, false, null],
        ],
        '/details' => [[['_route' => 'app_details', '_controller' => 'App\\Controller\\DetailsController::index'], null, null, null, false, false, null]],
        '/Admin' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/post/back' => [[['_route' => 'app_post_back', '_controller' => 'App\\Controller\\PostBackController::index'], null, null, null, false, false, null]],
        '/postback/back/add' => [[['_route' => 'addpostback', '_controller' => 'App\\Controller\\PostBackController::addPost'], null, null, null, false, false, null]],
        '/postback/back/listPost' => [[['_route' => 'listPostBack', '_controller' => 'App\\Controller\\PostBackController::listPost'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'app_post', '_controller' => 'App\\Controller\\PostController::index'], null, null, null, false, false, null]],
        '/post/add' => [[['_route' => 'addpost', '_controller' => 'App\\Controller\\PostController::addPost'], null, null, null, false, false, null]],
        '/post/listPost' => [[['_route' => 'listPost', '_controller' => 'App\\Controller\\PostController::listPost'], null, null, null, false, false, null]],
        '/Profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/streams' => [[['_route' => 'app_streams', '_controller' => 'App\\Controller\\StreamsController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/comment' => [[['_route' => 'app_comment', '_controller' => 'App\\Controller\\CommentController::index'], null, null, null, false, false, null]],
        '/comment/add' => [[['_route' => 'add_comment', '_controller' => 'App\\Controller\\CommentController::addComment'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/comment/(?'
                    .'|deleteComment/([^/]++)(?'
                        .'|(*:44)'
                    .')'
                    .'|editComment/([^/]++)(?'
                        .'|(*:75)'
                    .')'
                .')'
                .'|/post(?'
                    .'|back/back/(?'
                        .'|deletePost/([^/]++)(*:124)'
                        .'|editPost/([^/]++)(*:149)'
                    .')'
                    .'|/(?'
                        .'|d(?'
                            .'|eletePost/([^/]++)(*:184)'
                            .'|islike/([^/]++)(*:207)'
                        .')'
                        .'|editPost/([^/]++)(*:233)'
                        .'|like/([^/]++)(*:254)'
                        .'|([^/]++)/comments(*:279)'
                    .')'
                .')'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:325)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:361)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:392)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:431)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:472)'
                    .'|wdt/([^/]++)(*:492)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:538)'
                            .'|router(*:552)'
                            .'|exception(?'
                                .'|(*:572)'
                                .'|\\.css(*:585)'
                            .')'
                        .')'
                        .'|(*:595)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        44 => [
            [['_route' => 'deleteComment', '_controller' => 'App\\Controller\\CommentController::deleteComment'], ['id'], null, null, false, true, null],
            [['_route' => 'delete_comment', '_controller' => 'App\\Controller\\CommentController::deleteComment'], ['id'], null, null, false, true, null],
        ],
        75 => [
            [['_route' => 'editComment', '_controller' => 'App\\Controller\\CommentController::editComment'], ['id'], null, null, false, true, null],
            [['_route' => 'edit_comment', '_controller' => 'App\\Controller\\CommentController::editComment'], ['id'], null, null, false, true, null],
        ],
        124 => [[['_route' => 'deletePostBack', '_controller' => 'App\\Controller\\PostBackController::deletePost'], ['id'], null, null, false, true, null]],
        149 => [[['_route' => 'editPostBack', '_controller' => 'App\\Controller\\PostBackController::editPost'], ['id'], null, null, false, true, null]],
        184 => [[['_route' => 'deletePost', '_controller' => 'App\\Controller\\PostController::deletePost'], ['id'], null, null, false, true, null]],
        207 => [[['_route' => 'dislike_post', '_controller' => 'App\\Controller\\PostController::dislikePost'], ['id'], null, null, false, true, null]],
        233 => [[['_route' => 'editPost', '_controller' => 'App\\Controller\\PostController::editPost'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'like_post', '_controller' => 'App\\Controller\\PostController::likePost'], ['id'], null, null, false, true, null]],
        279 => [[['_route' => 'get_comments_by_post', '_controller' => 'App\\Controller\\CommentController::getCommentsByPost'], ['postId'], null, null, false, false, null]],
        325 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        361 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        392 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        431 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        472 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        492 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        538 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        552 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        572 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        585 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        595 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
