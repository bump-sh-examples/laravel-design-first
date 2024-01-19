<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Spec Source
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default spec source that should be used
    | by the framework.
    |
    */

    'default' => env('SPEC_SOURCE', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Sources
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many sources as you wish, and you
    | may even configure multiple source of the same type. Defaults have
    | been setup for each driver as an example of the required options.
    |
    */

    'sources' => [
        'local' => [
            'source' => 'local',
            'base_path' => './api/',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    | Configure path defaults, like prefixes.
    |
    */

    'path_prefix' => '',

    /*
    |--------------------------------------------------------------------------
    | Errors
    |--------------------------------------------------------------------------
    |
    | Suppress errors in tests and only show messages.
    |
    */

    'suppress_errors' => false,

    /*
    |--------------------------------------------------------------------------
    | Middleware Groups
    |--------------------------------------------------------------------------
    |
    | Specify the groups that spectator's middleware should be prepended to.
    |
    */

    'middleware_groups' => ['api'],
];
