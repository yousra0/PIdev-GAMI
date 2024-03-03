<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api' => [[['_route' => 'app_api', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/browse' => [[['_route' => 'app_browse', '_controller' => 'App\\Controller\\BrowseController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, null, null, false, false, null]],
        '/comment/listComment' => [
            [['_route' => 'listComment', '_controller' => 'App\\Controller\\CommentController::listComment'], null, null, null, false, false, null],
            [['_route' => 'list_comment', '_controller' => 'App\\Controller\\CommentController::listComment'], null, null, null, false, false, null],
        ],
        '/post/back' => [[['_route' => 'app_post_back', '_controller' => 'App\\Controller\\PostBackController::index'], null, null, null, false, false, null]],
        '/post/back/add' => [[['_route' => 'addpostback', '_controller' => 'App\\Controller\\PostBackController::addPost'], null, null, null, false, false, null]],
        '/post/back/listPost' => [[['_route' => 'listPostBack', '_controller' => 'App\\Controller\\PostBackController::listPost'], null, null, null, false, false, null]],
        '/post/back/charts' => [[['_route' => 'post_back_charts', '_controller' => 'App\\Controller\\PostBackController::charts'], null, null, null, false, false, null]],
        '/post/back/search' => [[['_route' => 'search_post', '_controller' => 'App\\Controller\\PostBackController::searchPost'], null, null, null, false, false, null]],
        '/post/add' => [[['_route' => 'addpost', '_controller' => 'App\\Controller\\PostController::addPost'], null, null, null, false, false, null]],
        '/post/listPost' => [[['_route' => 'listPost', '_controller' => 'App\\Controller\\PostController::listPost'], null, null, null, false, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/comment/add' => [[['_route' => 'add_comment', '_controller' => 'App\\Controller\\CommentController::addComment'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/edit/([^/]++)(*:25)'
                .'|/([^/]++)(?'
                    .'|(*:44)'
                    .'|/edit(*:56)'
                    .'|(*:63)'
                .')'
                .'|/c(?'
                    .'|omment(?'
                        .'|/(?'
                            .'|deleteComment/([^/]++)(?'
                                .'|(*:114)'
                            .')'
                            .'|editComment/([^/]++)(?'
                                .'|(*:146)'
                            .')'
                        .')'
                        .'|(*:156)'
                    .')'
                    .'|a(?'
                        .'|ptcha\\-handler(*:183)'
                        .'|lendar(*:197)'
                    .')'
                .')'
                .'|/details(*:215)'
                .'|/Admin(*:229)'
                .'|/main(*:242)'
                .'|/post(?'
                    .'|back/back/(?'
                        .'|deletePost/([^/]++)(*:290)'
                        .'|editPost/([^/]++)(*:315)'
                    .')'
                    .'|(*:324)'
                    .'|/(?'
                        .'|d(?'
                            .'|e(?'
                                .'|letePost/([^/]++)(*:361)'
                                .'|tails/([^/]++)(*:383)'
                            .')'
                            .'|islike/([^/]++)(*:407)'
                        .')'
                        .'|editPost/([^/]++)(*:433)'
                        .'|like/([^/]++)(*:454)'
                        .'|([^/]++)/comments(*:479)'
                    .')'
                .')'
                .'|/Profile(*:497)'
                .'|/s(?'
                    .'|treams(*:516)'
                    .'|imple\\-captcha\\-handler(*:547)'
                .')'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:592)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:628)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:659)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:698)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:739)'
                    .'|wdt/([^/]++)(*:759)'
                    .'|profiler(?'
                        .'|(*:778)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:816)'
                                .'|router(*:830)'
                                .'|exception(?'
                                    .'|(*:850)'
                                    .'|\\.css(*:863)'
                                .')'
                            .')'
                            .'|(*:873)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\ApiController::majEvent'], ['id'], null, null, false, true, null]],
        44 => [[['_route' => 'calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], null, null, false, true, null]],
        56 => [[['_route' => 'calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], null, null, false, false, null]],
        63 => [[['_route' => 'calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], null, null, false, true, null]],
        114 => [
            [['_route' => 'deleteComment', '_controller' => 'App\\Controller\\CommentController::deleteComment'], ['id'], null, null, false, true, null],
            [['_route' => 'delete_comment', '_controller' => 'App\\Controller\\CommentController::deleteComment'], ['id'], null, null, false, true, null],
        ],
        146 => [
            [['_route' => 'editComment', '_controller' => 'App\\Controller\\CommentController::editComment'], ['id'], null, null, false, true, null],
            [['_route' => 'edit_comment', '_controller' => 'App\\Controller\\CommentController::editComment'], ['id'], null, null, false, true, null],
        ],
        156 => [[['_route' => 'app_comment', '_controller' => 'App\\Controller\\CommentController::index'], [], null, null, false, false, null]],
        183 => [[['_route' => 'captcha_handler', '_controller' => 'Captcha\\Bundle\\CaptchaBundle\\Controller\\CaptchaHandlerController::indexAction'], [], ['GET' => 0], null, false, false, null]],
        197 => [[['_route' => 'calendar', '_controller' => 'App\\Controller\\CalendarController::index'], [], null, null, false, false, null]],
        215 => [[['_route' => 'app_details', '_controller' => 'App\\Controller\\DetailsController::index'], [], null, null, false, false, null]],
        229 => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], [], null, null, false, false, null]],
        242 => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], [], null, null, false, false, null]],
        290 => [[['_route' => 'deletePostBack', '_controller' => 'App\\Controller\\PostBackController::deletePost'], ['id'], null, null, false, true, null]],
        315 => [[['_route' => 'editPostBack', '_controller' => 'App\\Controller\\PostBackController::editPost'], ['id'], null, null, false, true, null]],
        324 => [[['_route' => 'app_post', '_controller' => 'App\\Controller\\PostController::index'], [], null, null, false, false, null]],
        361 => [[['_route' => 'deletePost', '_controller' => 'App\\Controller\\PostController::deletePost'], ['id'], null, null, false, true, null]],
        383 => [[['_route' => 'app_details_2', '_controller' => 'App\\Controller\\PostController::details'], ['id'], null, null, false, true, null]],
        407 => [[['_route' => 'dislike_post', '_controller' => 'App\\Controller\\PostController::dislikePost'], ['id'], null, null, false, true, null]],
        433 => [[['_route' => 'editPost', '_controller' => 'App\\Controller\\PostController::editPost'], ['id'], null, null, false, true, null]],
        454 => [[['_route' => 'like_post', '_controller' => 'App\\Controller\\PostController::likePost'], ['id'], null, null, false, true, null]],
        479 => [[['_route' => 'get_comments_by_post', '_controller' => 'App\\Controller\\CommentController::getCommentsByPost'], ['postId'], null, null, false, false, null]],
        497 => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], [], null, null, false, false, null]],
        516 => [[['_route' => 'app_streams', '_controller' => 'App\\Controller\\StreamsController::index'], [], null, null, false, false, null]],
        547 => [[['_route' => 'simple_captcha_handler', '_controller' => 'Captcha\\Bundle\\CaptchaBundle\\Controller\\SimpleCaptchaHandlerController::indexAction'], [], ['GET' => 0], null, false, false, null]],
        592 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        628 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        659 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        698 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        739 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        759 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        778 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        816 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        830 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        850 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        863 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        873 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
