<?php

return [
    'created_at' => '2024-01-28 00:00:00',
    'updated_at' => '2024-01-28 00:00:00',
    'navigation' => [
        [
            'label' => 'Gallery of Work',
            'url' => ['project.home', ['ai52','home']],
            'icon' => 'img/sidebar/icons.svg#design'
        ]
    ],
    'view' => 'projects.ai52.home',
    'routes' => [
        'gallery' => [
            'view' => 'projects.ai52.gallery',
        ]
    ],
];
