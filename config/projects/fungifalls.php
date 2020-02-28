<?php

return [
    'created_at' => '2015-07-14 00:00:00',
    'updated_at' => '2020-02-17 00:00:00',
    'view' => 'projects.fungifalls.home',
    'navigation' => [
        [
            'label' => 'About Fungi Falls',
            'url' => ['project.home', ['fungifalls']],
            'icon' => 'img/sidebar/icons.svg#home'
        ],
        [
            'label' => 'Play the Game',
            'url' => ['project.page', ['fungifalls', 'game']],
            'icon' => 'img/sidebar/icons.svg#design'
        ]
    ],
    'routes' => [
        'game' => [
            'view' => 'projects.fungifalls.game',
            'sidebar' => false
        ]
    ],
];
