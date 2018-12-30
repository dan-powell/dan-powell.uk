<?php

return [
    // Primary Pages
    'primary' => [
        [
            'title' => 'About',
            'class' => 'Navigation-item-link--about',
            'route' => 'home',
            'url' => null,
        ],
        [
            'title' => 'Portfolio',
            'class' => 'Navigation-item-link--portfolio',
            'route' => 'portfolio.index',
            'url' => null,
        ],
        [
            'title' => 'Skills',
            'class' => 'Navigation-item-link--skills',
            'route' => 'page.skills',
            'url' => null,
        ],
        [
            'title' => 'Experience',
            'class' => 'Navigation-item-link--experience',
            'route' => 'page.experience',
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
            'route' => 'page.privacy',
            'url' => null,
        ],
        [
            'title' => 'Sitemap',
            'route' => 'sitemap',
            'url' => null,
        ],
    ]
];
