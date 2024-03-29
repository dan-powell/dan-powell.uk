<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'images' => [
            'driver' => 'local',
            'root' => storage_path('images'),
        ],

        'assets' => [
            'driver' => 'local',
            'root' => storage_path('assets'),
        ],

        'project_images' => [
            'driver' => 'local',
            'root' => storage_path('project_images'),
            'visibility' => 'public',
            'url' => env('APP_URL') . '/project_images'
        ],

        'project_assets' => [
            'driver' => 'local',
            'root' => storage_path('project_assets'),
        ],

        'image_cache' => [
            'driver' => 'local',
            'root' => storage_path('framework/images'),
        ],

    ],

    'links' => [
        public_path('project_images') => storage_path('project_images'),
    ]
];
