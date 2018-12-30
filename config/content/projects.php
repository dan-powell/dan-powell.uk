<?php

return [

    'domain' => env('APP_DOMAIN', 'dan-powell.uk'),

    'items' => [
        'three-six-five' => [
            'name' => '365 2010',
            'thumb' => '',
            'prefix' => '365',
            'view' => 'projects.pages.threesixfive',
            'items' => [],
            'created_at' => '',
            'updated_at' => '',
            'tags' => ['project']
        ],
        'fungi-falls' => [
            'name' => 'Fungi Falls',
            'thumb' => '',
            'prefix' => 'fungifalls',
            'view' => 'projects.pages.fungifalls',
            'items' => [],
            'created_at' => '',
            'updated_at' => '',
            'tags' => ['project']
        ],
    ],

    'tags' => [
        'project' => [
            'name' => 'Project',
            'thumb' => '',
        ]
    ]


];
