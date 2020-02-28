<?php

return [
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
