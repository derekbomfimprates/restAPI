<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/courses' => [
            [['_route' => 'course_index', '_controller' => 'App\\Controller\\CourseController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'course_create', '_controller' => 'App\\Controller\\CourseController::create'], null, ['POST' => 0], null, true, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/courses/([^/]++)(?'
                    .'|(*:27)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:63)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [
            [['_route' => 'course_show', '_controller' => 'App\\Controller\\CourseController::show'], ['courseId'], ['GET' => 0], null, false, true, null],
            [['_route' => 'course_update', '_controller' => 'App\\Controller\\CourseController::update'], ['courseId'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'course_delete', '_controller' => 'App\\Controller\\CourseController::delete'], ['courseId'], ['DELETE' => 0], null, false, true, null],
        ],
        63 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
