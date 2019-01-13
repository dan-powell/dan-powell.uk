<?php

return [
    // Primary Pages
    'primary' => [
        [
            'title' => 'About',
            'class' => 'Navigation-item-link--about',
            'route' => 'home',
            'slug' => null,
            'url' => null,
        ],
        [
            'title' => 'Portfolio',
            'class' => 'Navigation-item-link--portfolio',
            'route' => 'portfolio.index',
            'slug' => null,
            'url' => null,
        ],
        [
            'title' => 'Projects',
            'class' => 'Navigation-item-link--projects',
            'route' => 'projects.index',
            'slug' => null,
            'url' => null,
        ],
        [
            'title' => 'Skills',
            'class' => 'Navigation-item-link--skills',
            'route' => 'page',
            'slug' => 'skills',
            'url' => null,
        ],
        [
            'title' => 'Experience',
            'class' => 'Navigation-item-link--experience',
            'route' => 'page',
            'slug' => 'experience',
            'url' => null,
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
