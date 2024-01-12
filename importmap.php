<?php

return [
    'app' => [
        'path' => './assets/app.js',
        'entrypoint' => true,
    ],
    'container' => [
        'path' => './assets/styles/components/container.css',
        'entrypoint' => true,
        'type' => 'css',
    ],
    'change-color-hover' => [
        'path' => './assets/styles/pages/change-color-hover.css',
        'entrypoint' => true,
        'type' => 'css',
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    '@hotwired/turbo' => [
        'version' => '7.3.0',
    ],
    'jquery' => [
        'version' => '3.7.1',
    ],
];
