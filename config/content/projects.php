<?php

return [

    'items' => [
        '365' => [
            'name' => '365 2010',
            'thumb' => 'projects/365/thumb.jpg',
            'view' => 'projects.pages.threesixfive',
            'created_at' => '2015-02-15 00:00:00',
            'updated_at' => '2015-02-15 00:00:00',
            'tags' => ['project'],
            'items' => [
                'index' => [
                    'view' => 'projects.pages.threesixfiveindex',
                ]
            ],
            'navigation' => [
                [
                    'route' => 'projects.show',
                    'slug' => '365'
                ],
                [
                    'route' => '365.projects.page',
                    'slug' => 'index'
                ]
            ]
        ],
        'fungifalls' => [
            'name' => 'Fungi Falls',
            'thumb' => 'projects/fungifalls/thumb.jpg',
            'prefix' => 'fungifalls',
            'view' => 'projects.pages.fungifalls',
            'items' => [],
            'created_at' => '2015-07-14 00:00:00',
            'updated_at' => '2015-07-14 00:00:00',
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
