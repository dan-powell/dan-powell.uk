<?php

return [

    'key' => env('GLIDE_KEY', ''), // Security key
    'validate' => true, // Validate image request with using key

    'route' => 'image', // Route prefix
    'storage' => 'images', // Storage disk

    'quality' => '90', // Default quality

    'presets' => [
        'sm' => [
            'w' => 200,
            'h' => null,
        ],
        'md' => [
            'w' => 600,
            'h' => null,
        ],
        'md_3x2' => [
            'w' => 600,
            'h' => 400,
            'fit' => 'crop'
        ]
    ]

];
