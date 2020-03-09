<?php

return [
    'created_at' => '2020-02-28 00:00:00',
    'updated_at' => '2020-02-17 00:00:00',
    'view' => 'projects.pico8.home',
    'navigation' => [
        [
            'label' => 'Pico 8 Games',
            'url' => ['project.home', ['borkanoid']],
            'icon' => 'img/sidebar/icons.svg#home',
            'items' => [
                [
                    'label' => 'Borkanoid',
                    'url' => ['project.page', ['pico8', 'borkanoid']],
                    'icon' => 'img/sidebar/icons.svg#design'
                ]
            ]
        ],
        // [
        //     'label' => 'About Pico 8',
        //     'url' => ['project.page', ['pico8', 'about']],
        //     'icon' => 'img/sidebar/icons.svg#home'
        // ],

    ],
    'routes' => [
        // 'about' => [
        //     'view' => 'projects.pico8.about',
        //     'sidebar' => true
        // ],
        'borkanoid' => [
            'view' => 'projects.pico8.borkanoid',
            'sidebar' => true
        ],
        'play-borkanoid' => [
            'view' => 'projects.pico8.borkanoid',
            'sidebar' => true
        ]
    ],
    'carts' => [
        'borkanoid' => [
            'name' => 'BORKANOID',
            'subtitle' => 'A doggo and it\'s bouncy ball. In space.',
            'description' => '<p>Inspired by Arkanoid, with a few extra twists.</p>',
            'version' => 'beta 0.4.2',
            'updated_at' => null,
            'cart' => 'assets/borkanoid.p8.png',
            'play' => 'play-borkanoid',
            // 'about' => 'borkanoid',
            'previews' => [
                [
                    'formats' => [
                        [
                            'file' => 'assets/borkanoid_preview1.webm',
                            'mime' => 'video/webm',
                            'codecs' => 'vp9,vorbis'
                        ],
                        [
                            'file' => 'assets/borkanoid_preview1.mp4',
                            'mime' => 'video/mp4',
                            'codecs' => null
                        ],
                        // [
                        //     'file' => 'assets/borkanoid_preview1.ogv',
                        //     'mime' => 'video/ogg',
                        //     'codecs' => null
                        // ],
                    ]
                ],
                [
                    'formats' => [
                        [
                            'file' => 'assets/borkanoid_preview2.webm',
                            'mime' => 'video/webm',
                            'codecs' => 'vp9,vorbis'
                        ],
                        [
                            'file' => 'assets/borkanoid_preview2.mp4',
                            'mime' => 'video/mp4',
                            'codecs' => null
                        ],
                        [
                            'file' => 'assets/borkanoid_preview2.ogv',
                            'mime' => 'video/ogg',
                            'codecs' => null
                        ],
                    ]
                ]
            ]
        ],
    ]
];
