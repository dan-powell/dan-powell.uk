<?php

return [

    'items' => [
        '365' => [
            'name' => '365 2010',
            'thumb' => 'projects/365/thumb.jpg',
            'view' => 'projects.365.home',
            'created_at' => '2015-02-15 00:00:00',
            'updated_at' => '2015-02-15 00:00:00',
            'tags' => ['project'],
            'items' => [
                'index' => [
                    'view' => 'projects.365.index',
                ]
            ],
            'navigation' => [
                [
                    'label' => 'About 365',
                    'url' => ['project.home', ['365']],
                    'icon' => 'img/sidebar/icons.svg#home'
                ],
                [
                    'label' => 'Gallery of Work',
                    'url' => ['project.page', ['365','index']],
                    'icon' => 'img/sidebar/icons.svg#design'
                ]
            ]
        ],
        'fungifalls' => [
            'name' => 'Fungi Falls',
            'thumb' => 'projects/fungifalls/thumb.jpg',
            'prefix' => 'fungifalls',
            'view' => 'projects.fungifalls.home',
            'created_at' => '2015-07-14 00:00:00',
            'updated_at' => '2015-07-14 00:00:00',
            'tags' => ['project'],
            'items' => [],
            'navigation' => [
                [
                    'label' => 'About Fungi Falls',
                    'url' => ['project.home', ['fungifalls']],
                    'icon' => 'img/sidebar/icons.svg#home'
                ],
                [
                    'label' => 'Play the Game',
                    'url' => 'assets/index.html',
                    'icon' => 'img/sidebar/icons.svg#design'
                ]
            ]
        ],
    ],

    'tags' => [
        'project' => [
            'name' => 'Project',
            'thumb' => '',
        ]
    ]


];
