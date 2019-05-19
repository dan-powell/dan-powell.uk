<?php

return [
    // Primary Pages
    'main' => [
        [
            'label' => 'Home',
            'icon' => 'img/sidebar/navigation.svg#home',
            'url' => 'https://github.com/dan-powell',
        ],
        [
            'label' => 'Portfolio',
            'description' => 'My work',
            'icon' => 'img/sidebar/navigation.svg#design',
            'url' => ['portfolio.index'],
            // 'items' => [
            //     [
            //         'label' => 'Portfolio',
            //         // 'icon' => 'img/sidebar/navigation.svg#design',
            //         'url' => ['portfolio.index'],
            //     ]
            // ],
        ],
        [
            'label' => 'Projects',
            'icon' => 'img/sidebar/navigation.svg#projects',
            'url' => ['projects.index'],
        ],
        [
            'label' => 'Experience',
            'icon' => 'img/sidebar/navigation.svg#education',
            'url' => ['page', 'experience'],
        ],
        [
            'label' => 'Skills',
            'icon' => 'img/sidebar/navigation.svg#work',
            'url' => ['page', 'skills'],
        ],
    ],
    'secondary' => [
        [
            'title' => 'Github',
            'class' => 'NavSocial-link--github',
            'route' => null,
            'url' => 'https://github.com/dan-powell',
        ],
        [
            'title' => 'LinkedIn',
            'class' => 'NavSocial-link--linkedIn',
            'route' => null,
            'url' => 'http://uk.linkedin.com/in/danpowelldesign',
        ],
    ],
    'tertiary' => [
        [
            'title' => 'Privacy',
            'route' => 'page',
            'slug' => 'privacy',
            'url' => null,
        ],
        [
            'title' => 'Sitemap',
            'route' => 'sitemap',
            'slug' => null,
            'url' => null,
        ],
    ]
];
