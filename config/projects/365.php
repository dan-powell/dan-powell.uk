<?php

return [
    'created_at' => '2011-01-01 00:00:00',
    'updated_at' => '2020-02-17 00:00:00',
    'navigation' => [
        [
            'label' => 'About 365',
            'url' => ['project.home', ['365']],
            'icon' => 'img/sidebar/icons.svg#home'
        ],
        [
            'label' => 'Gallery of Work',
            'url' => ['project.page', ['365','gallery']],
            'icon' => 'img/sidebar/icons.svg#design'
        ]
    ],
    'view' => 'projects.365.home',
    'routes' => [
        'gallery' => [
            'view' => 'projects.365.gallery',
        ]
    ],
    'videos' => [
        '2-9',
        '2-10',
        '5-7',
        '5-8',
        '5-9',
        '5-29',
        '5-31',
        '6-3',
        '6-5',
        '7-3',
        '7-28',
        '9-1'
    ]
];
