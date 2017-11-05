<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [
        'posts' => [
            'path' => '{date|Y}/{date|m}/{date|d}/{filename}',
            'formattedDate' => function ($page) {
                return date('j F Y', $page->date);
            },
        ],
    ],
    'navigation' => [
        'Blog' => '/',
        'GitHub' => 'https://github.com/nickywoolf',
        'Twitter' => 'https://twitter.com/woolfnicky',
    ],
];
